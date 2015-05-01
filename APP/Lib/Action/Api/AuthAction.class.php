<?php
class AuthAction extends BaseApiAction{
	
	private  function isonline($val){
		
			import("ORG.Util.Date");
			$dt=new Date(time());
			$left=$dt->dateDiff($val,'s');//默认7天试用期
			return $left;

	}
	
	private $token;
	private $mac;
	private $ip;
	private $gw_id;
	public function index(){
		
		if (!empty ($_REQUEST['mac'])){
			$this->mac=$_REQUEST['mac'];
		}
		if (!empty ($_REQUEST['ip'])){
			$this->ip=$_REQUEST['ip'];
			
		}
		if (!empty ($_REQUEST['gw_id'])){
			$this->gw_id=$_REQUEST['gw_id'];
			
		}
		
		
		if (!empty ($_REQUEST['token'])){
			$tk=$_REQUEST['token'];
			$db=new Model();
			$authdb=D('Authlist');
			$where['token']=$tk;
			$rs=$authdb->where($where)->field()->find();
			if($rs){
				//update time
				if(empty($rs['over_time'])||$rs['over_time']==""){
					//no limit
					$this->token=$tk;
					echo ("Auth: 1\n");
	                echo ("Messages: Allow Access\n");
	                $data['mac']=$this->mac;
					$data['login_ip']=$this->ip;
					$data['pingcount']=$rs['pingcount']+1;
					$data['last_time']=time();//
					$data['update_time']=time();//
					$authdb->where($where)->save($data);
				}else{
					//limit
					$lf=$rs['over_time']-time();
					if($lf<0){
						 //log::write('超时了');
						 echo ("Auth: 0\n");
		                 echo ("Messages: No Access\n");
		                 exit;
					}else{
						$this->token=$tk;
						echo ("Auth: 1\n");
		                echo ("Messages: Allow Access\n");
		                $data['mac']=$this->mac;
						$data['login_ip']=$this->ip;
						$data['pingcount']=$rs['pingcount']+1;
						$data['last_time']=time();//
						$data['update_time']=time();//
						$authdb->where($where)->save($data);
					}
				}
			}else{
				 echo ("Auth: 0\n");
		         echo ("Messages: No Access\n");
		         exit;
			}
			/*
			$tk=$_REQUEST['token'];
			$db=D('Member');
			$where['token']=$tk;
			$user=$db->where($where)->find();
			
			
			if($user==false){
				//不存在，不允许上网
				
				 echo ("Auth: 0\n");
                 echo ("Messages: No Access\n");
			}else{
				//存在,更新信息

				//log::write(($user['online_time']-time())."秒时间戳");
				if($user['online_time']!=""){
					$lf=$user['online_time']-time();
					if($lf<0){
						 //log::write('超时了');
						 echo ("Auth: 0\n");
		                 echo ("Messages: No Access\n");
		                 exit;
					}else{
					
						echo ("Auth: 1\n");
		                echo ("Messages: Allow Access\n");
		                $data['mac']=$this->mac;
						$data['login_ip']=$this->ip;
						$data['login_count']=$user['login_count']+1;
						$data['login_time']=time();
						$db->where($where)->save($data);
						exit;
					}
				}else{
					//log::write('不限制');
					$this->token=$tk;
					echo ("Auth: 1\n");
	                echo ("Messages: Allow Access\n");
	                $data['mac']=$this->mac;
					$data['login_ip']=$this->ip;
					$data['login_count']=$user['login_count']+1;
					$data['login_time']=time();
					$db->where($where)->save($data);
				}
				
				
			}
			*/
		}else{
			 echo ("Auth: 0\n");
                 echo ("Messages: No Access\n");
		}
	}
	
	
	public function export(){
	
	$gw_id=$_GET['gw_id'];
	
	//var_dump($gw_id);exit;
	$sql = "SELECT shopid FROM `wifi_routemap` where gw_id='$gw_id'";
	//var_dump($sql);exit;	
	$db=D('Routemap');
	$info=$db->query($sql);
	//var_dump($info);exit;
	if($info!=false){
		$shopid= intval($info[0]['shopid']);
		$dbshop=D('shop');
		$sql= "SELECT authmode FROM `wifi_shop` WHERE id=$shopid";
		$data =$dbshop->query($sql);
		$authmode = $data[0]['authmode'];
		
		$wxid=echojsonkey(showauthdata('3',$authmode),'user');
		
		$sql="select `routename`,`encrypt`,`gw_password`,`channel`,`wwsite`,`wifi_acc`,`wifi_pass`,`nwsite`,`route_ip`,`route_mask`,`route_gateway`,`rzaite_yubai`,`rzaite_yuhei`,`mac_bai`,`mac_hei` from
		`wifi_routesite` where gw_id='$gw_id' ";
		//var_dump($sql);exit;
		$site=D('routesite');
		$data1 = $site->query($sql);
		$routename = $data1[0]['routename'];
		$encrypt = $data1[0]['encrypt'];
		$gw_password = $data1[0]['gw_password'];
		$channel = $data1[0]['channel'];
		$wwsite = $data1[0]['wwsite'];
		$wifi_acc = $data1[0]['wifi_acc'];
		$wifi_pass = $data1[0]['wifi_pass'];
		$nwsite = $data1[0]['nwsite'];
		$route_ip = $data1[0]['route_ip'];
		$route_mask = $data1[0]['route_mask'];
		$route_gateway = $data1[0]['route_gateway'];
		$rzaite_yubai = $data1[0]['rzaite_yubai'];
		$rzaite_yuhei = $data1[0]['rzaite_yuhei'];
		$mac_bai = $data1[0]['mac_bai'];
		$mac_hei = $data1[0]['mac_hei'];
		
		
		//var_dump($data1[0]['routename']);exit;
		//var_dump($wxid);exit;
		
		header("Content-type:text/xml");
		echo "<?xml version='1.0' encoding='UTF-8'?>
		<sitemap>
			<wxid>$wxid</wxid>
			<wifisz>
			<mc>$routename</mc>
			<sfjm>$encrypt</sfjm>
			<mm>$gw_password </mm>
			<xd>$channel</xd>
		</wifisz>
		<wwsz>
			<swfs>$wwsite</swfs>
			<wwzh>$wifi_acc </wwzh>
			<wwmm>$wifi_pass </wwmm>
		</wwsz>
		<nwsz>
			<jrfs>$nwsite</jrfs>
			<ip>$route_ip</ip>
			<zwym>$route_mask</zwym>
			<wg>$route_gateway</wg>
		</nwsz>
		<bmd>
			$rzaite_yubai
		</bmd>
		<hmd>
			$rzaite_yuhei
		</hmd>
		<mrzmacdz>
			$mac_bai
		</mrzmacdz>
		<hmdmacdz>
			$mac_hei
		</hmdmacdz>
		</sitemap>
		";
		exit;
			
	}else{
		echo '你访问的页面不存在';
	}
	
	
	}
}