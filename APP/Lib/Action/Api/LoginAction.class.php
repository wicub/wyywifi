<?php
class LoginAction extends BaseApiAction{
	private $gw_address = null;
	private $gw_port = null;
	private $gw_id = null;
	private $mac = null;
	private $url = null;
	private $logout = null;

	
	public function index(){
	
		if (isset($_REQUEST["gw_address"])) {
		    $this->gw_address = $_REQUEST['gw_address'];
		    cookie('gw_address',$_REQUEST['gw_address']);
		}

		if (isset($_REQUEST["gw_port"])) {
		    $this->gw_port = $_REQUEST['gw_port'];
		    cookie('gw_port', $_REQUEST['gw_port']);
		}
		
		if (isset($_REQUEST["gw_id"])) {
		    $this->gw_id = $_REQUEST['gw_id'];
		    cookie('gw_id', $_REQUEST['gw_id']);
		}
		if (isset($_REQUEST["url"])) {
		    $this->url = $_REQUEST['url'];
		    cookie('gw_url', $_REQUEST['url']);
		    
		}
		
		if (isset($_REQUEST["mac"])) {
		    cookie('mac', $_REQUEST['mac']);
		    $mac = $_REQUEST['mac'];
		}
		$nowdate=getNowDate();//当前日期

		     // Log::write(		    $_SERVER['SERVER_PROTOCOL'] );
		
		if(!empty($this->gw_id)){
			//寻找网关ID
			$sql="select a.*,b.shopname,b.authmode,b.maxcount,b.linkflag,b.sh,b.eh,b.pid,b.countflag,b.countmax,b.tpl_path from ".C('DB_PREFIX')."routemap a left join ".C('DB_PREFIX')."shop b on a.shopid=b.id ";
			$sql.=" where a.gw_id='".$this->gw_id."' limit 1";
			$db=D('Routemap');
			$addb=D('Ad');
			//$info=$db->where($where)->find();
			$info=$db->query($sql);
			if($info!=false){
				//宗龙龙
				$zsid = $info[0]['shopid'];
				$zdbshop = M('shop');
				$zshop = $zdbshop->field('islm,islm2,id')->where("id=".$zsid)->find();
				
				if($zshop['islm2']==1){//$zshop['islm']==1 && 
					$this->assign('islm','1');
				}else{
					$this->assign('islm','0');
				}
				$this->assign("shopid",$zshop['id']);
				//宗龙龙end
				
				$tplkey=$info[0]['tpl_path'];
				
				$show=1;
				$max=$info[0]['maxcount'];
				$limit=$info[0]['linkflag'];
				if($limit==0){
					$where['shopid']=$info[0]['shopid'];
					$count=D('member')->where($where)->count();
					if($count>$max){
						$show=0;
					}
				}
				cookie('shopid', $info[0]['shopid']);
				
				$authmode=$info[0]['authmode'];
				$where['uid']=$info[0]['shopid'];
				$where['ad_pos']=0;
				
				$ad=$addb->where($where)->field('id,ad_thumb,mode,advurl')->limit(5)->select();
				$ids="";
				foreach ($ad as $k=>$v){
					$ids.=$v['id'].",";
				}
				
				
				$this->assign('ad',$ad);
				//dump($ad);
				$this->assign('adid',$ids);
				$this->assign('show',$show);
				$hour=(int)date("H");
				/*判断是否在允许上网时段*/
				if(!empty($info[0]['sh'])&&!empty($info[0]['eh'])&&$info[0]['sh']!=""&&$info[0]['eh']!=""){
					$sh=(int)$info[0]['sh'];
					$eh=(int)$info[0]['eh'];
					$auth['opensh']=$sh;
					$auth['openeh']=$eh;
					$auth['openflag']=true;//设置时段
					if($hour>=$sh&&$hour<=$eh){
						$auth['open']=true;
						
					}else{
						$auth['open']=false;
						
					}
					
				}else{
					$auth['open']=true;
					$auth['openflag']=false;//未设置
					
				}
				if($authmode==null||$authmode==""){
					$auth['reg']=1;
					
				}else{
					
				$tmp=explode('#', $authmode);
				foreach($tmp as $v){
					if($v!='#'&&$v!=''){
						$arr[]=$v;
					}
				}
				foreach($arr as $v){
					$temp=explode('=', $v);
					if(count($temp)>1&&$temp[0]=='4'){
						$auth['wechashare']=1;
					}else{
						if($v=='0'){
							$auth['reg']=1;
						}
						if($v=='1'){
							$auth['phone']=1;
						}
						if($v=='2'){
							$auth['allow']=1;
						}
						if($v=='3'){
							$auth['wx']=1;
						}
						
					}
				}

					
				}
				
				/*判断是否启用认证限制*/
				if($info[0]['countflag']>0){
					$maxcount=$info[0]['countmax'];
					$authdb=D('Authlist');
					$countwhere['mac']=$mac;
					$countwhere['shopid']=$info[0]['shopid'];
					$countwhere['add_date']=$nowdate;
					$auth_count=$authdb->where($countwhere)->count();
					//dump($authdb->getLastSql());
					if(($maxcount-$auth_count)<=0){
						//echo "超过啦";
						
		
						$auth['overmax']=1;
						
						
					}else{
						$auth['overmax']=0;
					}
				}else{
					$auth['overmax']=0;
				}
				
				
				$this->assign("authmode",$auth);
				$this->assign("shopinfo",$info);
				
				if(empty($tplkey)||$tplkey==""||strtolower($tplkey)=="default"){
										$this->display('index$wifiadv6');
				}else{

					$this->display('index$'.$tplkey);
				}
				

			}else{
				//echo '参数不正确111';
				//echo '参数不正确22';
				
				$this->display('binding');
			}
		}else{
			//没有网关ID
			echo '参数不正确2';
		}
		
	}
	
	/**
	author    :  charles
	date      :  2015/04/20
	function  :  dologin
	**/
	
	public function dologin(){
	
	if(IS_POST){
		//var_dump($_POST);exit;
		$user = isset($_POST['user']) ? strval($_POST['user']) : '';
	        $pass = isset($_POST['password']) ? strval($_POST['password']) : '';
			$gw_id = $_POST['gw_id'];
	        $userM = M('Shop');
	        $pass=md5($pass);
	         	 
	        $uid = $userM->where("account = '{$user}' AND password = '{$pass}'")->field('id,account')->find();
		
		if($uid)
		{
		  $db= D('Routemap');
		  $routesite= M('Routesite');
		  $where['gw_id'] =	$gw_id;
		  
		   $result =$db
				->where($where)
				->field('id')
				->find();
		  
		 // var_dump($result);exit;
		  
		  if($result==true){
		
			$this->error('此路由已经存在');
			exit;
		 }		
		  
		  $sitedata['shopid'] = $uid['id'];
		  $sitedata['gw_id'] = $gw_id;
		  $sitedata['routename'] = '易联wifi';
		  $sitedata['encrypt'] = 0;
		  $sitedata['channel'] = 0;
		  $sitedata['wwsite'] = 1;  //外网设置1为DHCP
		  $sitedata['nwsite'] = 1;  //内网设置1为DHCP
		  $sitedata['rzaite_yubai'] = 'apple.com,captive.apple.com,minorshort.weixin.qq.com';  //域名白名单
		  $sitedata['route_ip'] = '192.168.10.1';  //路由IProute_ip
		  $sitedata['route_mask'] = '255.0.0.0';  //子网掩码mask
		  $sitedata['route_gateway'] = '0.0.0.0';  //默认网关gateway
		 
		  $data['shopid'] = $uid['id'];
		  $data['gw_id'] = $_POST['gw_id'];
		  
		 
		 //var_dump($sitedata['gw_id']);exit;
		   if($db->create()){
		  // var_dump($db->getlastsql());exit;
        		if($cid = $db->add($data)){
					$sitedata['routemap_id'] = $cid;		
					if($routesite->add($sitedata)){
						
						$this->success('添加成功',U("login/index"));
					  }
	        		}else{
	        			$this->error("操作失败");
	        		}
			}else{
			
				$this->error($db->getError());
			}
		    
		   
		   
		}else{
	        	$data['error']=1;
	    		$data['msg']="帐号信息不正确";
	    		return $this->ajaxReturn($data);
	           
	        }
    	}else{
		
    		$data['error']=1;
    		$data['msg']="服务器忙，请稍候再试";
    		return $this->ajaxReturn($data);
    	}
	}
	
	public function gongjiaoindex(){
	
		if (isset($_REQUEST["gw_address"])) {
		    $this->gw_address = $_REQUEST['gw_address'];
		    cookie('gw_address',$_REQUEST['gw_address']);
		}

		if (isset($_REQUEST["gw_port"])) {
		    $this->gw_port = $_REQUEST['gw_port'];
		    cookie('gw_port', $_REQUEST['gw_port']);
		}
		
		if (isset($_REQUEST["gw_id"])) {
		    $this->gw_id = $_REQUEST['gw_id'];
		    cookie('gw_id', $_REQUEST['gw_id']);
		}
		if (isset($_REQUEST["url"])) {
		    $this->url = $_REQUEST['url'];
		    cookie('gw_url', $_REQUEST['url']);
		    
		}
		
		if (isset($_REQUEST["mac"])) {
		    cookie('mac', $_REQUEST['mac']);
		    $mac = $_REQUEST['mac'];
		}
		$nowdate=getNowDate();//当前日期

		     // Log::write(		    $_SERVER['SERVER_PROTOCOL'] );
		
		if(!empty($this->gw_id)){
			//寻找网关ID
			$sql="select a.*,b.shopname,b.authmode,b.maxcount,b.linkflag,b.sh,b.eh,b.pid,b.countflag,b.countmax,b.tpl_path from ".C('DB_PREFIX')."routemap a left join ".C('DB_PREFIX')."shop b on a.shopid=b.id ";
			$sql.=" where a.gw_id='".$this->gw_id."' limit 1";
			$db=D('Routemap');
			$addb=D('Ad');
			//$info=$db->where($where)->find();
			$info=$db->query($sql);
			if($info!=false){
				//宗龙龙
				$zsid = $info[0]['shopid'];
				$zdbshop = M('shop');
				$zshop = $zdbshop->field('islm,islm2,id')->where("id=".$zsid)->find();
				
				if($zshop['islm2']==1){//$zshop['islm']==1 && 
					$this->assign('islm','1');
				}else{
					$this->assign('islm','0');
				}
				$this->assign("shopid",$zshop['id']);
				//宗龙龙end
				
				$tplkey=$info[0]['tpl_path'];
				
				$show=1;
				$max=$info[0]['maxcount'];
				$limit=$info[0]['linkflag'];
				if($limit==0){
					$where['shopid']=$info[0]['shopid'];
					$count=D('member')->where($where)->count();
					if($count>$max){
						$show=0;
					}
				}
				cookie('shopid', $info[0]['shopid']);
				
				$authmode=$info[0]['authmode'];
				$where['uid']=$info[0]['shopid'];
				$where['ad_pos']=0;
				
				$ad=$addb->where($where)->field('id,ad_thumb,mode,advurl')->limit(5)->select();
				$ids="";
				foreach ($ad as $k=>$v){
					$ids.=$v['id'].",";
				}
				
				
				$this->assign('ad',$ad);
				//dump($ad);
				$this->assign('adid',$ids);
				$this->assign('show',$show);
				$hour=(int)date("H");
				/*判断是否在允许上网时段*/
				if(!empty($info[0]['sh'])&&!empty($info[0]['eh'])&&$info[0]['sh']!=""&&$info[0]['eh']!=""){
					$sh=(int)$info[0]['sh'];
					$eh=(int)$info[0]['eh'];
					$auth['opensh']=$sh;
					$auth['openeh']=$eh;
					$auth['openflag']=true;//设置时段
					if($hour>=$sh&&$hour<=$eh){
						$auth['open']=true;
						
					}else{
						$auth['open']=false;
						
					}
					
				}else{
					$auth['open']=true;
					$auth['openflag']=false;//未设置
					
				}
				if($authmode==null||$authmode==""){
					$auth['reg']=1;
					
				}else{
					
				$tmp=explode('#', $authmode);
				foreach($tmp as $v){
					if($v!='#'&&$v!=''){
						$arr[]=$v;
					}
				}
				foreach($arr as $v){
					$temp=explode('=', $v);
					if(count($temp)>1&&$temp[0]=='3'){
						$auth['wx']=1;
					}else{
						if($v=='0'){
							$auth['reg']=1;
						}
						if($v=='1'){
							$auth['phone']=1;
						}
						if($v=='2'){
							$auth['allow']=1;
						}
					}
				}

					
				}
				
				/*判断是否启用认证限制*/
				if($info[0]['countflag']>0){
					$maxcount=$info[0]['countmax'];
					$authdb=D('Authlist');
					$countwhere['mac']=$mac;
					$countwhere['shopid']=$info[0]['shopid'];
					$countwhere['add_date']=$nowdate;
					$auth_count=$authdb->where($countwhere)->count();
					//dump($authdb->getLastSql());
					if(($maxcount-$auth_count)<=0){
						//echo "超过啦";
						
		
						$auth['overmax']=1;
						
						
					}else{
						$auth['overmax']=0;
					}
				}else{
					$auth['overmax']=0;
				}
				
				
				$this->assign("authmode",$auth);
				
				$this->assign("shopinfo",$info);
				
				if(empty($tplkey)||$tplkey==""||strtolower($tplkey)=="default"){
										$this->display('gongjiaologin/index');
				}else{

					$this->display('gongjiaologin/index');
				}
				

			}else{
				echo '参数不正确';
			}
		}else{
			//没有网关ID
			echo '参数不正确';
		}
		
	}
	public  function countad(){
		$gid=cookie('gw_id');
		$sid=cookie('shopid');
		if(empty($gid)||empty($sid)){
			
			exit;
		}
		
		$ids=I('post.ids');
		
		$idarr=explode(',', $ids);
		/*统计展示*/
				///////////////////////////
				$tr=new Model();
				$time=time();
				$tr->startTrans();
				$arrdata['showup']=1;
				$arrdata['hit']=0;
				$arrdata['shopid']=$sid;
				$arrdata['add_time']=$time;
				$arrdata['add_date']=getNowDate();
				$arrdata['mode']=1;
				foreach($idarr as $v){
					if($v!=""){
						$arrdata['aid']=$v;
						$tr->table(C('DB_PREFIX')."adcount")->add($arrdata);
					}
				}
				$tr->commit();
				///////////////////////////
	}
	
	public function apple(){
		//log::write("签到");
		echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN"><HTML><HEAD><TITLE>Success</TITLE></HEAD><BODY>Success</BODY></HTML>';
	}
}