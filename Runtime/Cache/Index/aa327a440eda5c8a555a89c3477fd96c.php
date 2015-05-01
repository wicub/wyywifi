<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><title><?php echo C('sitename');?>--会员中心</title><meta name="keywords" content="<?php echo C('keyword');?>"/><meta name="description" content="<?php echo C('content');?>"/><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap.min.css" /> --><link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap-responsive.min.css" /><!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-style.css" />  --><!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-media.css" /> --><link href="<?php echo ($Theme['P']['root']); ?>/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" /><link href="<?php echo ($Theme['P']['root']); ?>/font/googlefont.css" rel="stylesheet" /><!-- 添加后的插件 --><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/cloud-admin.css" ><link rel="stylesheet" type="text/css"  href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/themes/default.css" id="skin-switcher" ><link rel="stylesheet" type="text/css"  href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/responsive.css" ><!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]--><link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/font-awesome.min.css" ><!-- ANIMATE css3--><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/animatecss/animate.min.css" /><!-- DATE RANGE PICKER日期插件 --><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/bootstrap-daterangepicker/daterangepicker-bs3.css" /><!-- TODO --><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/jquery-todo/css/styles.css" /><!-- FULL CALENDAR 日期插件--><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/fullcalendar/fullcalendar.min.css" /><!-- FULL CALENDAR 通知插件--><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/gritter/css/jquery.gritter.css" /><style>.sidebar-menu > ul > li > a .arrow.open::before {
    content: "";
    display: inline;
    float: right;
    font-family: FontAwesome;
    font-size: 16px;
    font-weight: 300;
    height: auto;
    margin-right: 5px;
    margin-top: 1px;
    text-shadow: none;
}
.sidebar-menu > ul > li > a.open {
  background: #313131;
}
.sidebar-menu > ul > li > a .arrow.open:before {
  float: right;
  margin-top: 1px;
  margin-right: 5px;
  display: inline;
  font-family: FontAwesome;
  height: auto;
  font-size: 16px;
  content: "\f0d7";
  font-weight: 300;
  text-shadow: none;
}

.sidebar-menu > ul > li.has-sub.open > a, .sidebar-menu > ul > li > a:hover, .sidebar-menu > ul > li:hover > a {
    background: none repeat scroll 0 0 #ffffff;
}
.sidebar-menu > ul > li.has-sub.open > ul > li.has-sub-sub.open > a {
    background: none repeat scroll 0 0 #ffffff;
}
</style><link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/datepicker.css" /></head><body><!--Header-part--><header class="navbar clearfix" id="header"><div class="container"><!-- <div id="headera"><h1><a href="#"></a></h1></div> --><!--close-Header-part--><!--top-Header-menu--><div class="navbar-brand"><!-- COMPANY LOGO --><a href="index.html"><img src="<?php echo ($Theme['P']['root']); ?>/weiyun/Web/images/yilian_LOGO.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120"></a><!-- /COMPANY LOGO --><!-- TEAM STATUS FOR MOBILE --><div class="visible-xs"><a href="#" class="team-status-toggle switcher btn dropdown-toggle"><i class="fa fa-users"></i></a></div><!-- /TEAM STATUS FOR MOBILE --><!-- SIDEBAR COLLAPSE --><div id="sidebar-collapse" class="sidebar-collapse btn"><i class="fa fa-bars" 
							data-icon1="fa fa-bars" 
							data-icon2="fa fa-bars" ></i></div><!-- /SIDEBAR COLLAPSE --></div><!-- <div id="user-nav" class="navbar navbar-inverse"> --><ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left"><li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user fa fa-cog"></i><span class="text name">欢迎光临</span><i class="fa fa-angle-down"></i><!-- <b class="caret"> --></b></a><ul class="dropdown-menu skins"><li><a data-skin="default" href="<?php echo U('User/account');?>" ><!-- <i class="icon-user"></i> --> 修改密码</a></li><li class="divider"></li><li><a data-skin="night" href="<?php echo U('User/logout');?>"><!-- <i class="icon-key"></i> -->退出</a></li></ul></li><li class="dropdown"><a title="" href="<?php echo U('User/logout');?>"  data-toggle="tooltip" class="team-status-toggle dropdown-toggle tip-bottom"><i class="icon icon-share-alt a fa-users"></i><span class="text name">退出</span><i class="fa fa-angle-down"></i></a></li></ul><!-- </div> --></div></header><!--close-top-Header-menu--><!--sidebar-menu--><section id="page"><div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><div class="sidebar-menu nav-collapse"><ul><li class="<?php if(($a == 'index')): ?>active"<?php endif; ?>" ><a href="<?php echo U('User/index');?>"><i class=" fa fa-tachometer fa-fw"></i><span class="menu-text">首页
		</span><span class="selected"></span></a></li><li class="<?php if(($a == 'info')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/info');?>"><i class=" fa fa-user fa-fw"></i><span>商户信息</span></a></li><!-- <li class="has-sub submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" ><a href="#" id="urpt"><i class="icon icon-user"></i><span class="menu-text">设置修改</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('Wifiset/base');?>"><span class="sub-menu-text">基本信息</span></a></li><li><a href="<?php echo U('Wifiset/renzheng');?>"><span class="sub-menu-text">认证信息</span></a></li><li><a href="<?php echo U('Wifiset/neiwang');?>"><span class="sub-menu-text">内网信息</span></a></li><li><a href="<?php echo U('Wifiset/waiwang');?>"><span class="sub-menu-text">外网信息</span></a></li></ul></li>--><!--  <li class="<?php if(($a == 'lianmeng')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/lianmengset');?>"><i class=" fa fa-globe fa-fw"></i><span>联盟设置</span></a></li> --><li class="<?php if(($a == 'application')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/application');?>"><i class=" fa fa-cogs fa-fw"></i><span>应用设置</span></a></li><li class="<?php if(($a == 'routemap')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/routemap');?>"><i class=" fa fa-group fa-fw"></i><span>路由管理</span></a></li><li class="<?php if(($a == 'authtplset')): ?>active"<?php endif; ?>"><a href="<?php echo U('Authset/tplset');?>"><i class="fa fa-th fa-fw"></i><span>认证页面</span></a></li><li class="has-sub submenu <?php if(($a == 'adv')): ?>active"<?php endif; ?>"><a href="#" id="adv"><i class="fa fa-cloud fa-fw""></i><span class="menu-text">广告管理</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('User/adv');?>"><span class="sub-menu-text">广告管理</span></a></li><li><a href="<?php echo U('User/advrpt');?>"><span class="sub-menu-text">广告统计</span></a></li><li><a href="<?php echo U('User/actrpt');?>"><span class="sub-menu-text">活动发布</span></a></li></ul></li><!-- <li class="has-sub submenu <?php if(($a == 'web3g')): ?>active"<?php endif; ?>"><a href="#" id="web3g"><i class=" fa fa-th-large fa-fw"></i><span class="menu-text">手机网站</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('index/web/index');?>"><span class="sub-menu-text">网站设置</span></a></li><li><a href="<?php echo U('web/catelog');?>"><span class="sub-menu-text">网站分类</span></a></li><li><a href="<?php echo U('web/arts');?>"><span class="sub-menu-text">文章管理</span></a></li><li><a href="<?php echo U('web/tempset');?>"><span class="sub-menu-text">模板管理</span></a></li><li><a target="_blank" href="http://www.wyywifi.com/index.php/api/wap/index/sid/<?php echo (session('uid')); ?>.html"><span class="sub-menu-text">网站预览</span></a></li></ul></li> --><li class="<?php if(($a == 'comment')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/comment');?>"><i class="fa fa-comment fa-fw"></i><span>客户留言</span></a></li><li class="has-sub submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" ><a href="#" id="urpt"><i class="fa fa-user fa-fw"></i><span class="menu-text">用户统计</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('User/userchart');?>"><span class="sub-menu-text">统计报表</span></a></li><li><a href="<?php echo U('User/report');?>"><span class="sub-menu-text">用户列表</span></a></li></ul></li><li class="<?php if(($a == 'online')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/rpt');?>"><i class="fa fa-signal fa-fw"></i><span>上网统计</span></a></li><li class="has-sub submenu <?php if(($a == 'advfun')): ?>active"<?php endif; ?>" ><a href="#" id="sale"><i class="fa fa-phone fa-fw"></i><span class="menu-text">营销管理</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('index/Adv/phonelist');?>"><span class="sub-menu-text">手机号码管理</span></a></li><!--  <li><a href="<?php echo U('adv/set');?>"><span class="sub-menu-text">短信帐号管理</span></a></li><li><a href="<?php echo U('adv/sms');?>"><span class="sub-menu-text">短信群发</span></a></li><li><a href="<?php echo U('adv/smslist');?>"><span class="sub-menu-text">短信发送列表</span></a></li> --></ul></li></ul></div></div><!--sidebar-menu--><div id="main-content"><!--main-container-part--><div class="container"><div class="row"><div id="content" class="col-lg-12"><!--	  <div id="content-header"><div id="breadcrumb"><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a><a href="#" class="current">上网统计</a></div><h1>用户统计</h1> --><div id="content-header" class="page-header"><ul class="breadcrumb"><li><!-- <i class="fa fa-home"></i> --><div id="breadcrumb"><i class="icon-home fa fa-home"></i><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom">首页</a></div></li><li>用户统计</li></ul><!-- <div id="breadcrumb"><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a></div> --><!-- /BREADCRUMBS --><div class="clearfix"><h3 class="content-title pull-left">统计列表</h3></div><div class="description">&nbsp;</div></div><div class="col-md-12"><div class="row"><div class="alert alert-block col-md-8 hide" id="msgbox"><h4 class="alert-heading">提示信息</h4><div id="alertmsg"></div></div><div class="controls controls-row col-md-8"><input type="hidden" name="btnkey" id="btnkey" value="today" sdate="" edate=""><label class="control-label col-md-1">开始日期</label><input type="text" id="sdate" value="<?php echo date("Y-m-01") ?>" data-date-format="yyyy-mm-dd" class="span2 datepicker" readonly="readonly"><label class="control-label col-md-1">结束日期</label><input type="text" id="edate" value="<?php echo date("Y-m-d") ?>" data-date-format="yyyy-mm-dd" class="span2 datepicker" readonly="readonly"><a class="btn btn-success col-md-1" id="query">查询</a>&nbsp;
    	  <a href="javascript:void(0);" onclick="downjump();" class="btn btn-primary col-md-1">导出</a></div><div class="col-md-10"><div class="panel-body"><a class="btn btn-info" id="today">今日数据统计</a>&nbsp;
            	 <a class="btn btn-info" id="yestoday">昨日统计</a>&nbsp;
            	<a class="btn btn-info" id="week">最近七天</a>&nbsp;
            	<a class="btn btn-info" id="month">本月统计</a></div></div></div><div class="row"><div class="col-md-12"><div class="box border primary"><div class="box-title"><span class="icon"><i class="icon-th"></i></span><h5>统计图表</h5></div><div class="box-body big"><div id="placeholder" style="width:1300px;height:300px" ></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="box border primary"><div class="box-title"><span class="icon"><i class="icon-th"></i></span><h5>统计列表</h5></div><div class="box-body big"><table class="table table-bordered table-striped"><thead><tr><th>统计日期</th><th>总人数</th><th>用户注册</th><th>手机注册</th></tr></thead><tbody id="gridbox"></tbody></table></div></div></div></div></div></div></div></div></div><!--Footer-part--><!-- <div class="row-fluid" style="padding: 10px;text-align: center;"><div id="footer" class="span12 col-md-12"> 2014 <a href="http://www.wyywifi.com/">wyywifi.com</a></div></div> --></section><!--end-Footer-part--><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/script.js"></script><script>/*-----------------------------------------------------------------------------------*/
	/*	Sidebar
	/*-----------------------------------------------------------------------------------*/
	var handleSidebar = function () {
	jQuery('.sidebar-menu .has-sub > a').click(function () {
            var last = jQuery('.has-sub.open', $('.sidebar-menu'));
            last.removeClass("open");
            jQuery('.arrow', last).removeClass("open");
            jQuery('.sub', last).slideUp(200);
            
			var thisElement = $(this);
			var slideOffeset = -200;
            var slideSpeed = 200;
			
            var sub = jQuery(this).next();
            if (sub.is(":visible")) {
                jQuery('.arrow', jQuery(this)).removeClass("open");
                jQuery(this).parent().removeClass("open");
				sub.slideUp(slideSpeed, function () {
					if ($('#sidebar').hasClass('sidebar-fixed') == false) {
						App.scrollTo(thisElement, slideOffeset);
					}
					handleSidebarAndContentHeight();
                });
            } else {
                jQuery('.arrow', jQuery(this)).addClass("open");
                jQuery(this).parent().addClass("open");
                sub.slideDown(slideSpeed, function () {
					if ($('#sidebar').hasClass('sidebar-fixed') == false) {
						App.scrollTo(thisElement, slideOffeset);
					}
					handleSidebarAndContentHeight();
                });
            }
        });
		
	// Handle sub-sub menus
	jQuery('.sidebar-menu .has-sub .sub .has-sub-sub > a').click(function () {
            var last = jQuery('.has-sub-sub.open', $('.sidebar-menu'));
            last.removeClass("open");
            jQuery('.arrow', last).removeClass("open");
            jQuery('.sub', last).slideUp(200);
                
            var sub = jQuery(this).next();
            if (sub.is(":visible")) {
                jQuery('.arrow', jQuery(this)).removeClass("open");
                jQuery(this).parent().removeClass("open");
                sub.slideUp(200);
            } else {
                jQuery('.arrow', jQuery(this)).addClass("open");
                jQuery(this).parent().addClass("open");
                sub.slideDown(200);
            }
        });
	}
</script><div style="display: none"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script></div><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script><script src="<?php echo ($Theme['P']['js']); ?>/flot/jquery.flot.js"></script><!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/flot/excanvas.min.js"></script><![endif]--><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap.min.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap-datepicker.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/matrix.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/common.js"></script><script>$(document).ready(function(){
	$('#urpt').trigger('click');
});
function downjump(){
	var para="&mode="+$('#btnkey').val();
	para+="&sdate="+$('#btnkey').attr('sdate');
	para+="&edate="+$('#btnkey').attr('edate');
	location.href="index.php?g=index&m=user&a=downchart"+para;

}
var daylist=[];
for(var i=1;i<=31;i++){
	if(i<10){
		daylist.push(["0"+i,i+"号"]);
	}else{
		daylist.push([i,i+"号"]);
	}
}
var hourlist=[];
for(var i=0;i<=24;i++){
	if(i<10){
		hourlist.push(["0"+i,i+"点"]);
	}else{
		hourlist.push([i,i+"点"]);
	}
}


var lines;

$(function () {
	
	var stack = 0, bars = true, lines = false, steps = false;
	
	    
	 $('.datepicker').datepicker();
  	  $("#today").bind("click",function(){
		  $.ajax({
			  url: '<?php echo U('user/getuserchart');?>',
		        type: "get",
				data:{
					'mode':'today',
					
					},
				dataType:'json',
				error:function(){
						AlertTips("服务器忙，请稍候再试",2000);
						},
				success:function(data){
							$('#btnkey').val('today');
							data=eval(data);
						var bt_total=[];
						var bt_reg=[];
						var bt_phone=[];
						
						for(var vo in data){
							bt_total.push([data[vo].t,data[vo].totalcount]);
							bt_reg.push([data[vo].t,data[vo].regcount]);
							bt_phone.push([data[vo].t,data[vo].phonecount]);
				
						}
						var dataset=[{label:"注册总人数",data:bt_total},{label:"帐号注册",data:bt_reg},{label:"手机注册",data:bt_phone}]
						 $.plot($("#placeholder"), dataset, {grid: { hoverable: true, clickable: true, borderColor:'#000',borderWidth:1},xaxis:{ticks:hourlist},series:{lines:{fill:true, show: true}, points:
						    { show: true,
						    	  }}});
						rendertable(data);
						
				}
			  });
  	  	  });

  	 $("#yestoday").bind("click",function(){
		  $.ajax({
			  url: '<?php echo U('user/getuserchart');?>',
		        type: "get",
				data:{
					'mode':'yestoday',
					
					},
				dataType:'json',
				error:function(){
						AlertTips("服务器忙，请稍候再试",2000);
						},
				success:function(data){
							$('#btnkey').val('yestoday');
						data=eval(data);
						var bt_total=[];
						var bt_reg=[];
						var bt_phone=[];
						data=eval(data);
						for(var vo in data){
							bt_total.push([data[vo].t,data[vo].totalcount]);
							bt_reg.push([data[vo].t,data[vo].regcount]);
							bt_phone.push([data[vo].t,data[vo].phonecount]);
				
						}
						var dataset=[{label:"注册总人数",data:bt_total},{label:"帐号注册",data:bt_reg},{label:"手机注册",data:bt_phone}]
						 $.plot($("#placeholder"), dataset, {grid: { hoverable: true, clickable: true, borderColor:'#000',borderWidth:1},xaxis:{ticks:hourlist},series:{lines:{fill:true, show: true}, points:
						    { show: true,
						    	  }}});
						 rendertable(data);
						
				}
			  });
 	  	  });
	  	  
  		$("#week").bind("click",function(){
		  $.ajax({
			  url: '<?php echo U('user/getuserchart');?>',
		        type: "get",
				data:{
					'mode':'week',
					
					},
				dataType:'json',
				error:function(){
						AlertTips("服务器忙，请稍候再试",2000);
						},
				success:function(data){
							$('#btnkey').val('week');
						data=eval(data)  ;
						var bt_total=[];
						var bt_reg=[];
						var bt_phone=[];
						var templist=[];
						for(var vo in data){
							bt_total.push([data[vo].t,data[vo].totalcount]);
							bt_reg.push([data[vo].t,data[vo].regcount]);
							bt_phone.push([data[vo].t,data[vo].phonecount]);
							templist.push([data[vo].t,data[vo].td]);
						}
						var dataset=[{label:"注册总人数",data:bt_total},{label:"帐号注册",data:bt_reg},{label:"手机注册",data:bt_phone}];
						 $.plot($("#placeholder"), dataset, {grid: { hoverable: true, clickable: true, borderColor:'#000',borderWidth:1},xaxis:{ticks:templist},series:{lines:{fill:true, show: true}, points:
						    { show: true,
						    	  }}});
						 rendertable(data);
				}
			  });
	  	  });
  		$("#month").bind("click",function(){
  		  $.ajax({
  			  url: '<?php echo U('user/getuserchart');?>',
  		        type: "get",
  				data:{
  					'mode':'month',
  					
  					},
  				dataType:'json',
  				error:function(){
  						AlertTips("服务器忙，请稍候再试",2000);
  						},
  				success:function(data){
  							$('#btnkey').val('month');
  						data=eval(data)  ;
  						var bt_total=[];
						var bt_reg=[];
						var bt_phone=[];
						var templist=[];
						for(var vo in data){
							bt_total.push([data[vo].t,data[vo].totalcount]);
							bt_reg.push([data[vo].t,data[vo].regcount]);
							bt_phone.push([data[vo].t,data[vo].phonecount]);
							templist.push([data[vo].t,data[vo].td]);
						}
						var dataset=[{label:"注册总人数",data:bt_total},{label:"帐号注册",data:bt_reg},{label:"手机注册",data:bt_phone}];
  						 $.plot($("#placeholder"), dataset, {grid: { hoverable: true, clickable: true, borderColor:'#000',borderWidth:1},xaxis:{ticks:daylist},series:{lines:{fill:true, show: true}, points:
  						    { show: true,
  						    	  }}});
  						rendertable(data);
  				}
  			  });
  	  	  });

  		$("#query").bind("click",function(){
			var st=new Date($("#sdate").val());	
			var et=new Date($("#edate").val());	
			if(st.getTime()>et.getTime()){
				AlertTips("开始日期不能大于结束日期",2000);
					return;
			}

			 $.ajax({
	  			  url: '<?php echo U('user/getuserchart');?>',
	  		        type: "get",
	  				data:{
	  					'mode':'query',
	  					'sdate':$("#sdate").val(),
	  					'edate':$("#edate").val(),
	  					},
	  				dataType:'json',
	  				error:function(){
	  						AlertTips("服务器忙，请稍候再试",2000);
	  						},
	  				success:function(data){
	  							$('#btnkey').val('query');
		  						$('#btnkey').attr('sdate',$("#sdate").val());
		  						$('#btnkey').attr('edate',$("#edate").val());
	  						var templist=[];
	  						var bt_total=[];
							var bt_reg=[];
							var bt_phone=[];
	  						data=eval(data)  ;
	  						for(var vo in data){
	  							templist.push([data[vo].t,data[vo].td]);
	  							bt_total.push([data[vo].t,data[vo].totalcount]);
								bt_reg.push([data[vo].t,data[vo].regcount]);
								bt_phone.push([data[vo].t,data[vo].phonecount]);
	  						}
	  						
	  						var dataset=[{label:"注册总人数",data:bt_total},{label:"帐号注册",data:bt_reg},{label:"手机注册",data:bt_phone}];
	  						 var plot= $.plot($("#placeholder"), dataset, {xaxis:{ticks:templist},  grid: { hoverable: true, clickable: true, borderColor:'#000',borderWidth:1}, series:{lines:{fill:true, show: true}, points:
	  						    { show: true,
	  						    	  }}});
	  					
	  						rendertable(data);
	  				}
	  			  });
  	  	});
  		$("#today").trigger("click");
});

var previousPoint = null;
	$("#placeholder").bind("plothover", function (event, pos, item) {
	
      if (item) {
          if (previousPoint != item.dataIndex) {
              previousPoint = item.dataIndex;
              
              $('#tooltip').fadeOut(200,function(){
					$(this).remove();
				});
              var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
                  
              maruti.flot_tooltip(item.pageX, item.pageY, y+"");
          }
          
      } else {
			$('#tooltip').fadeOut(200,function(){
					$(this).remove();
				});
          previousPoint = null;           
      }   
  });	
maruti = {
		// === Tooltip for flot charts === //
		flot_tooltip: function(x, y, contents) {
			
			$('<div id="tooltip">' + contents + '</div>').css( {
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
}

function rendertable(data){
	
	$("#gridbox").empty();
	var trHtml="";
	for(var vo in data){
		trHtml+="<tr>";
		trHtml+="<td>"+data[vo].showdate+"</td>";
		trHtml+="<td>"+data[vo].totalcount+"</td>";
		trHtml+="<td>"+data[vo].regcount+"</td>";
		trHtml+="<td>"+data[vo].phonecount+"</td>";
		trHtml+="</tr>";

	}
	$("#gridbox").append(trHtml);
}
</script></body></html>