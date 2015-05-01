<?php

class IndexAction extends BaseWeiyunAction {
    public function index(){
	
	//var_dump($Theme['P']['root']);
    	$this->display('index');
    }
	
	 public function culture(){
	
	//var_dump($Theme['P']['root']);
    	$this->display('culture');
    }
    
    public function introduce(){
	
	//var_dump($Theme['P']['root']);
    	$this->display('introduce');
    }
	
     public function business(){
	
	//var_dump($Theme['P']['root']);
    	$this->display('business');
    }
    
	
	 public function contact (){
	
	//var_dump($Theme['P']['root']);
    	$this->display('contact');
    }
	

	
	
}