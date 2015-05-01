<?php
class AuthloginAction extends BaseApiAction{
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
		$nowdate=getNowDate();//��ǰ����

		     // Log::write(		    $_SERVER['SERVER_PROTOCOL'] );
		
		if(!empty($this->gw_id)){
			//Ѱ������ID
			$sql="select a.*,b.shopname,b.authmode,b.maxcount,b.linkflag,b.sh,b.eh,b.pid,b.countflag,b.countmax,b.tpl_path from ".C('DB_PREFIX')."routemap a left join ".C('DB_PREFIX')."shop b on a.shopid=b.id ";
			$sql.=" where a.gw_id='".$this->gw_id."' limit 1";
			$db=D('Routemap');
			$addb=D('Ad');
			//$info=$db->where($where)->find();
			$info=$db->query($sql);
			if($info!=false){
				//������
				$zsid = $info[0]['shopid'];
				$zdbshop = M('shop');
				$zshop = $zdbshop->field('islm,islm2,id')->where("id=".$zsid)->find();
				
				if($zshop['islm2']==1){//$zshop['islm']==1 && 
					$this->assign('islm','1');
				}else{
					$this->assign('islm','0');
				}
				$this->assign("shopid",$zshop['id']);
				//������end
				
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
				/*�ж��Ƿ�����������ʱ��*/
				if(!empty($info[0]['sh'])&&!empty($info[0]['eh'])&&$info[0]['sh']!=""&&$info[0]['eh']!=""){
					$sh=(int)$info[0]['sh'];
					$eh=(int)$info[0]['eh'];
					$auth['opensh']=$sh;
					$auth['openeh']=$eh;
					$auth['openflag']=true;//����ʱ��
					if($hour>=$sh&&$hour<=$eh){
						$auth['open']=true;
						
					}else{
						$auth['open']=false;
						
					}
					
				}else{
					$auth['open']=true;
					$auth['openflag']=false;//δ����
					
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
						if($v=='4'){
							$auth['wechashare']=1;
						}
					}
				}

					
				}
				
				/*�ж��Ƿ�������֤����*/
				if($info[0]['countflag']>0){
					$maxcount=$info[0]['countmax'];
					$authdb=D('Authlist');
					$countwhere['mac']=$mac;
					$countwhere['shopid']=$info[0]['shopid'];
					$countwhere['add_date']=$nowdate;
					$auth_count=$authdb->where($countwhere)->count();
					//dump($authdb->getLastSql());
					if(($maxcount-$auth_count)<=0){
						//echo "������";
						
		
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
										$this->display();
				}else{

					$this->display('index$'.$tplkey);
				}
				

			}else{
				echo '��������ȷ';
			}
		}else{
			//û������ID
			echo '��������ȷ';
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
		$nowdate=getNowDate();//��ǰ����

		     // Log::write(		    $_SERVER['SERVER_PROTOCOL'] );
		
		if(!empty($this->gw_id)){
			//Ѱ������ID
			$sql="select a.*,b.shopname,b.authmode,b.maxcount,b.linkflag,b.sh,b.eh,b.pid,b.countflag,b.countmax,b.tpl_path from ".C('DB_PREFIX')."routemap a left join ".C('DB_PREFIX')."shop b on a.shopid=b.id ";
			$sql.=" where a.gw_id='".$this->gw_id."' limit 1";
			$db=D('Routemap');
			$addb=D('Ad');
			//$info=$db->where($where)->find();
			$info=$db->query($sql);
			if($info!=false){
				//������
				$zsid = $info[0]['shopid'];
				$zdbshop = M('shop');
				$zshop = $zdbshop->field('islm,islm2,id')->where("id=".$zsid)->find();
				
				if($zshop['islm2']==1){//$zshop['islm']==1 && 
					$this->assign('islm','1');
				}else{
					$this->assign('islm','0');
				}
				$this->assign("shopid",$zshop['id']);
				//������end
				
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
				/*�ж��Ƿ�����������ʱ��*/
				if(!empty($info[0]['sh'])&&!empty($info[0]['eh'])&&$info[0]['sh']!=""&&$info[0]['eh']!=""){
					$sh=(int)$info[0]['sh'];
					$eh=(int)$info[0]['eh'];
					$auth['opensh']=$sh;
					$auth['openeh']=$eh;
					$auth['openflag']=true;//����ʱ��
					if($hour>=$sh&&$hour<=$eh){
						$auth['open']=true;
						
					}else{
						$auth['open']=false;
						
					}
					
				}else{
					$auth['open']=true;
					$auth['openflag']=false;//δ����
					
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
				
				/*�ж��Ƿ�������֤����*/
				if($info[0]['countflag']>0){
					$maxcount=$info[0]['countmax'];
					$authdb=D('Authlist');
					$countwhere['mac']=$mac;
					$countwhere['shopid']=$info[0]['shopid'];
					$countwhere['add_date']=$nowdate;
					$auth_count=$authdb->where($countwhere)->count();
					//dump($authdb->getLastSql());
					if(($maxcount-$auth_count)<=0){
						//echo "������";
						
		
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
				echo '��������ȷ';
			}
		}else{
			//û������ID
			echo '��������ȷ';
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
		/*ͳ��չʾ*/
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
		//log::write("ǩ��");
		echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN"><HTML><HEAD><TITLE>Success</TITLE></HEAD><BODY>Success</BODY></HTML>';
	}
}