<?php
return array(
	//'配置项'=>'配置值'
	'APP_AUTOLOAD_PATH'     =>'ORG',
	'OUTPUT_ENCODE'         =>  true, 			//页面压缩输出
		/*Cookie配置*/
	'COOKIE_PATH'           => '/',     		// Cookie路径
	'COOKIE_PREFIX'         => '',      		// Cookie前缀 避免冲突
	/*定义模版标签*/
	'TMPL_L_DELIM'   		=>'<#',			//模板引擎普通标签开始标记
	'TMPL_R_DELIM'		=>'#>',			//模板引擎普通标签结束标记
	'LOAD_EXT_CONFIG' 	=> 'db,cache,site,log,safe,upload,route,adv',
	'APP_GROUP_LIST'        => 'Index,Api,Agent,Wifiadmin,Admin,Weiyun',      // 首页,接口页面，后台，客户，代理商
	//'DEFAULT_GROUP'         => 'Index',  // 默认分组
	'DEFAULT_GROUP'         => 'Weiyun',  // 默认分组
	'DEFAULT_THEME'=>'default',
	'TMPL_FILE_DEPR'=>'_',
'SMSURL'=>'http://115.239.252.188:820/sms.asmx?WSDL',
	'WAP_List'=>5,
	'URL_CASE_INSENSITIVE'  => true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
	'SHOW_PAGE_TRACE' =>true, //开启页面Trace
	/**
	author : charles
	date   : 2015/4/14
	**/
	/**
	'DATA_CACHE_TYPE' => 'Memcache', 
	'MEMCACHE_HOST'   => 'tcp://127.0.0.1:11211',  
	'DATA_CACHE_TIME' => '3600',
	**/
);
?>