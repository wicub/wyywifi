<?php
class WifisetAction extends BaseAction{
    
    public function __construct() {
        parent::__construct();
        header("Content-type:text/html;charset=utf-8");
    }
		//  创建XML单项
	
	 private function isLogin()
		{
			if(!session('uid'))
			{
				$this->redirect('index/index/log');
			}    
		}
		
	public function base(){
    	 $this->isLogin();
        
        $uid = session('uid');
        $info = D('Shop')
                ->where("id = {$uid}")
                ->field('shopname,province,city,area,address,shopgroup,shoplevel,trade,linker,phone,lng,lat,islm,islm2,zhekou')
                ->find();
               
        include CONF_PATH.'enum/enum.php';//$enumdata
        $this->assign('enumdata',$enumdata);
        $this->assign('info',$info);
        $this->assign('a','info');
        $this->display();      
    }	
	
	public function renzheng(){
    	 $this->isLogin();
        
        $uid = session('uid');
        $info = D('Shop')
                ->where("id = {$uid}")
                ->field('shopname,province,city,area,address,shopgroup,shoplevel,trade,linker,phone,lng,lat,islm,islm2,zhekou')
                ->find();
               
        include CONF_PATH.'enum/enum.php';//$enumdata
        $this->assign('enumdata',$enumdata);
        $this->assign('info',$info);
        $this->assign('a','info');
        $this->display();      
    }	
	
	public function neiwang(){
    	 $this->isLogin();
        
        $uid = session('uid');
        $info = D('Shop')
                ->where("id = {$uid}")
                ->field('shopname,province,city,area,address,shopgroup,shoplevel,trade,linker,phone,lng,lat,islm,islm2,zhekou')
                ->find();
               
        include CONF_PATH.'enum/enum.php';//$enumdata
        $this->assign('enumdata',$enumdata);
        $this->assign('info',$info);
        $this->assign('a','info');
        $this->display();      
    }	
	
	public function waiwang(){
    	 $this->isLogin();
        
        $uid = session('uid');
        $info = D('Shop')
                ->where("id = {$uid}")
                ->field('shopname,province,city,area,address,shopgroup,shoplevel,trade,linker,phone,lng,lat,islm,islm2,zhekou')
                ->find();
               
        include CONF_PATH.'enum/enum.php';//$enumdata
        $this->assign('enumdata',$enumdata);
        $this->assign('info',$info);
        $this->assign('a','info');
        $this->display();      
    }	
	/*public function base()
    {	
		
		echo "1";
		
    }*/
	
	
	
}	