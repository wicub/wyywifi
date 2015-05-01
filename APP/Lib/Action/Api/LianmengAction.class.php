<?php

	header("access-control-allow-origin:*");
class LianmengAction extends BaseApiAction{
	public function index(){
		//echo $this->GetDistance(39.871091,116.390713,39.870361,116.392487);die;
		$shopid = I("shopid");
		$dbshop = M("shop");
		$shop = $dbshop->where('id='.$shopid)->find();
		$lng = $shop['lng'];
		$lat = $shop['lat'];
		$_SESSION['shop']=$shop;
		$lng1 = $lng-0.038555;
		$lng2 = $lng+0.038555;
		$lat1 = $lat-0.013870;
		$lat2 = $lat+0.013870;
		
		$where['lng'] = array(array('gt',$lng1),array('lt',$lng2));
		$where['lat'] = array(array('gt',$lat1),array('lt',$lat2));
		
		
		import('ORG.Util.Page');// 导入分页类
		$count      = $dbshop->where($where)->count();// 查询满足要求的总记录数
		$Page       = new Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('theme','%totalRow% %header% %upPage% %downPage% %first% %prePage% %linkPage% %nextPage% %end%');
		$Page->setConfig('header','家店铺');
		//$Page->setConfig('prev','<font color="red">上一页</font>');
		//$Page->setConfig('next','<font color="red">下一页</font>');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		
		
		$shops = $dbshop->limit($Page->firstRow.','.$Page->listRows)->where($where)->select();
		$cha1 = new Model();
		$shops = $cha1->query("select *,(2 * 6378.137* ASIN(SQRT(POW(SIN(3.1415926535898*(".$lat."-lat)/360),2)+COS(3.1415926535898*".$lat."/180)* COS(lat * 3.1415926535898/180)*POW(SIN(3.1415926535898*(".$lng."-lng)/360),2))))*1000 as juli from `wifi_shop`  
 where lng>".$lng1." and lng <".$lng2." and lat>".$lat1." and lat <".$lat2." order by juli asc limit ".$Page->firstRow.",".$Page->listRows);

		//dump($cha1->getlastsql());
		$dbwap = M('wap');
		foreach($shops as $key=>$vo){
			$shops[$key]['trade']=$this->fen($vo['trade']);
			$shops[$key]['juli']=$this->GetDistance($lat,$lng,$vo['lat'],$vo['lng']);
			$shops[$key]['tel']=$dbwap->where('uid='.$vo['id'])->getField('tel');
		}
		
		//获取所在地所有区县
		$dbyhm = M('china');
		$qu = $dbyhm->where('name="'.$shop['area'].'"')->find();
		$qus = $dbyhm->where('Pid="'.$qu['Pid'].'"')->select();
		$_SESSION['qus'] = $qus;
		//dump($_SESSION);die;
		$this->assign('shops',$shops);
		$this->assign('shop',$shop);
		$this->display();
	}
	public function querytype(){
		$lat = $_SESSION['shop']['lat'];
		$lng = $_SESSION['shop']['lng'];
		$type = $_GET['type'];
		$type =mb_convert_encoding($type, "utf-8", "gbk"); 
		$dbshop = M('shop'); 
		$map['trade'] = array('like','%'.$type.'%');
		$map['province'] = $_SESSION['shop']['province'];
		$map['city'] = $_SESSION['shop']['city'];
		
		import('ORG.Util.Page');// 导入分页类
		$count      = $dbshop->where($map)->count();// 查询满足要求的总记录数
		$Page       = new Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('theme','%totalRow% %header% %upPage% %downPage% %first% %prePage% %linkPage% %nextPage% %end%');
		$Page->setConfig('header','家店铺');
		//$Page->setConfig('prev','<font color="red">上一页</font>');
		//$Page->setConfig('next','<font color="red">下一页</font>');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		
		
		//$shops = $dbshop->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
		$cha1 = new Model();
		$shops = $cha1->query("select *,(2 * 6378.137* ASIN(SQRT(POW(SIN(3.1415926535898*(".$lat."-lat)/360),2)+COS(3.1415926535898*".$lat."/180)* COS(lat * 3.1415926535898/180)*POW(SIN(3.1415926535898*(".$lng."-lng)/360),2))))*1000 as juli from `wifi_shop`  
 where trade like '%".$type."%' and province = '".$_SESSION['shop']['province']."' and city = '".$_SESSION['shop']['city']."' order by juli asc limit ".$Page->firstRow.",".$Page->listRows);
		
		$dbwap = M('wap');
		foreach($shops as $key=>$vo){
			$shops[$key]['trade']=$this->fen($vo['trade']);
			$shops[$key]['juli']=$this->GetDistance($lat,$lng,$vo['lat'],$vo['lng']);
			$shops[$key]['tel']=$dbwap->where('uid='.$vo['id'])->getField('tel');
		}
		$this->assign('shops',$shops);
		$this->display('index');
		//dump($dbshop->getlastsql());
	}
	public function querydiqu(){
		$lat = $_SESSION['shop']['lat'];
		$lng = $_SESSION['shop']['lng'];
		$type = $_GET['diqu'];
		$type =mb_convert_encoding($type, "utf-8", "gbk"); 
		$dbshop = M('shop'); 
		$map['area'] = array('like','%'.$type.'%');
		$map['province'] = $_SESSION['shop']['province'];
		$map['city'] = $_SESSION['shop']['city'];
		
		
		import('ORG.Util.Page');// 导入分页类
		$count      = $dbshop->where($map)->count();// 查询满足要求的总记录数
		$Page       = new Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('theme','%totalRow% %header% %upPage% %downPage% %first% %prePage% %linkPage% %nextPage% %end%');
		$Page->setConfig('header','家店铺');
		//$Page->setConfig('prev','<font color="red">上一页</font>');
		//$Page->setConfig('next','<font color="red">下一页</font>');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		
		
		//$shops = $dbshop->limit($Page->firstRow.','.$Page->listRows)->where($map)->select();
		$cha1 = new Model();
		$shops = $cha1->query("select *,(2 * 6378.137* ASIN(SQRT(POW(SIN(3.1415926535898*(".$lat."-lat)/360),2)+COS(3.1415926535898*".$lat."/180)* COS(lat * 3.1415926535898/180)*POW(SIN(3.1415926535898*(".$lng."-lng)/360),2))))*1000 as juli from `wifi_shop`  
 where area like '%".$type."%' and province = '".$_SESSION['shop']['province']."' and city = '".$_SESSION['shop']['city']."' order by juli asc limit ".$Page->firstRow.",".$Page->listRows);
		
		$dbwap = M('wap');
		foreach($shops as $key=>$vo){
			$shops[$key]['trade']=$this->fen($vo['trade']);
			$shops[$key]['juli']=$this->GetDistance($lat,$lng,$vo['lat'],$vo['lng']);
			$shops[$key]['tel']=$dbwap->where('uid='.$vo['id'])->getField('tel');
		}
		$this->assign('shops',$shops);
		$this->display('index');
		//dump($_SESSION);
	}
	public function xiaofei(){
		$lat = $_SESSION['shop']['lat'];
		$lng = $_SESSION['shop']['lng'];
		$type = $_GET['xiaofei'];
		$type =mb_convert_encoding($type, "utf-8", "gbk"); 
		$dbshop = M('shop'); 
		$map['shoplevel'] = array('like','%'.$type.'%');
		$map['province'] = $_SESSION['shop']['province'];
		$map['city'] = $_SESSION['shop']['city'];
		
		
		import('ORG.Util.Page');// 导入分页类
		$count      = $dbshop->where($map)->count();// 查询满足要求的总记录数
		$Page       = new Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('theme','%totalRow% %header% %upPage% %downPage% %first% %prePage% %linkPage% %nextPage% %end%');
		$Page->setConfig('header','家店铺');
		//$Page->setConfig('prev','<font color="red">上一页</font>');
		//$Page->setConfig('next','<font color="red">下一页</font>');
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		
		
		
		//$shops = $dbshop->limit($Page->firstRow.','.$Page->listRows)->where($map)->select();
		$cha1 = new Model();
		$shops = $cha1->query("select *,(2 * 6378.137* ASIN(SQRT(POW(SIN(3.1415926535898*(".$lat."-lat)/360),2)+COS(3.1415926535898*".$lat."/180)* COS(lat * 3.1415926535898/180)*POW(SIN(3.1415926535898*(".$lng."-lng)/360),2))))*1000 as juli from `wifi_shop`  
 where shoplevel like '%".$type."%' and province = '".$_SESSION['shop']['province']."' and city = '".$_SESSION['shop']['city']."' order by juli asc limit ".$Page->firstRow.",".$Page->listRows);
		
		$dbwap = M('wap');
		foreach($shops as $key=>$vo){
			$shops[$key]['trade']=$this->fen($vo['trade']);
			$shops[$key]['juli']=$this->GetDistance($lat,$lng,$vo['lat'],$vo['lng']);
			$shops[$key]['tel']=$dbwap->where('uid='.$vo['id'])->getField('tel');
		}
		$this->assign('shops',$shops);
		$this->display('index');
	}
    
	public function fen($str){
		if(strlen($str)>1){
			$arr = array('##'=>',');
			return strtr(substr($str,1,strlen($str)-2),$arr);
		}else{
			return "";
		}
		
	}
	
	//=============================================================
	function GetDistance($lat1, $lng1, $lat2, $lng2){ 
		define('PI',3.1415926535898);
		define('EARTH_RADIUS',6378.137);
		$radLat1 = $lat1 * (PI / 180);
		$radLat2 = $lat2 * (PI / 180);
	   
		$a = $radLat1 - $radLat2; 
		$b = ($lng1 * (PI / 180)) - ($lng2 * (PI / 180)); 
	   
		$s = 2 * asin(sqrt(pow(sin($a/2),2) + cos($radLat1)*cos($radLat2)*pow(sin($b/2),2))); 
		$s = $s * EARTH_RADIUS; 
		$s = round($s * 10000) / 10000; 
		return $s*1000; 
	}
	//==============================================================
	
	public function getadv(){
		$data['advurl']="http://union.click.jd.com/jdc?e=&p=AyIEZRhbEwQQAV0aUyUBEgFTGV0dAhc3EUQDS10iXhBeGh4cDEwNUwtDRkxcDQQAQB1AWQkrXxZnVHgcTx12eRF0NFBTEAFlWk9bDRkOIgZlGFgUBhIOUR9ZJTJ0emVaNRYLGwJU&t=W1dCFBBFC0lKTwVNH0tZShgOTkRHXE4%3D";
		$data['advimg']="http://wyywifi.com/wyywifi/jdgg.jpg";
		//$data['tongji']="<script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id='cnzz_stat_icon_30091830'%3E%3C/span%3E%3Cscript src='\" + cnzz_protocol + \"w.cnzz.com/c.php%3Fid%3D30091830' type='text/javascript'%3E%3C/script%3E\"));</script>";
		//$data['tongji']="<script>alert('error');</script>";
		$this->ajaxReturn($data,'JSON');
	}
}