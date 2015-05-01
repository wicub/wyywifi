<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo C('sitename');?>--会员中心</title>
<meta name="keywords" content="<?php echo C('keyword');?>"/>
<meta name="description" content="<?php echo C('content');?>"/>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap-responsive.min.css" />
<!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-style.css" />  -->
<!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-media.css" /> -->
<link href="<?php echo ($Theme['P']['root']); ?>/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo ($Theme['P']['root']); ?>/font/googlefont.css" rel="stylesheet" /> 
<!-- 添加后的插件 -->
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/cloud-admin.css" >
<link rel="stylesheet" type="text/css"  href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/themes/default.css" id="skin-switcher" >
<link rel="stylesheet" type="text/css"  href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/responsive.css" >
<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/font-awesome.min.css" >
<!-- ANIMATE css3-->
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/animatecss/animate.min.css" />
<!-- DATE RANGE PICKER日期插件 -->
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/bootstrap-daterangepicker/daterangepicker-bs3.css" />
<!-- TODO -->
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/jquery-todo/css/styles.css" />
<!-- FULL CALENDAR 日期插件-->
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/fullcalendar/fullcalendar.min.css" />
<!-- FULL CALENDAR 通知插件-->
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/gritter/css/jquery.gritter.css" />
<style>
.sidebar-menu > ul > li > a .arrow.open::before {
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
</style>

<!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/uniform.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/select2.css" /> -->
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/select2/select2.min.css" /> 
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/uniform/css/uniform.default.min.css" />
</head>
<body>
   <!--Header-part-->
<header class="navbar clearfix" id="header">
	<div class="container">
		<!-- <div id="headera">
		  <h1><a href="#"></a></h1>
		</div> -->
		<!--close-Header-part--> 
		<!--top-Header-menu-->
		<div class="navbar-brand">
					<!-- COMPANY LOGO -->
					<a href="index.html">
						<img src="<?php echo ($Theme['P']['root']); ?>/weiyun/Web/images/yilian_LOGO.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120">
					</a>
					<!-- /COMPANY LOGO -->
					<!-- TEAM STATUS FOR MOBILE -->
					<div class="visible-xs">
						<a href="#" class="team-status-toggle switcher btn dropdown-toggle">
							<i class="fa fa-users"></i>
						</a>
					</div>
					<!-- /TEAM STATUS FOR MOBILE -->
					<!-- SIDEBAR COLLAPSE -->
					<div id="sidebar-collapse" class="sidebar-collapse btn">
						<i class="fa fa-bars" 
							data-icon1="fa fa-bars" 
							data-icon2="fa fa-bars" ></i>
					</div>
					<!-- /SIDEBAR COLLAPSE -->
				</div> 
				
				
		<!-- <div id="user-nav" class="navbar navbar-inverse"> -->

		  <ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
			   <li  class="dropdown" id="profile-messages" >
			   <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
				   <i class="icon icon-user fa fa-cog"></i>  
				   <span class="text name">欢迎光临</span>
				   <i class="fa fa-angle-down"></i>
			   <!-- <b class="caret"> --></b></a>
				  <ul class="dropdown-menu skins">
					<li><a data-skin="default" href="<?php echo U('User/account');?>" ><!-- <i class="icon-user"></i> --> 修改密码</a></li>
					<li class="divider"></li>
					<li><a data-skin="night" href="<?php echo U('User/logout');?>"><!-- <i class="icon-key"></i> -->退出</a></li>
				  </ul>
				</li>
			
		  <li class="dropdown"><a title="" href="<?php echo U('User/logout');?>"  data-toggle="tooltip" class="team-status-toggle dropdown-toggle tip-bottom">
		  <i class="icon icon-share-alt a fa-users"></i> <span class="text name">退出</span> <i class="fa fa-angle-down"></i>
		  </a></li>
					
			 </ul>
			 
		<!-- </div> -->
	</div>
</header>

<!--close-top-Header-menu-->

   <!--sidebar-menu-->
<section id="page">
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
	<div class="sidebar-menu nav-collapse">
	  <ul>
		<li class="<?php if(($a == 'index')): ?>active"<?php endif; ?>" ><a href="<?php echo U('User/index');?>"><i class=" fa fa-tachometer fa-fw"></i> <span class="menu-text">首页
		</span><span class="selected"></span></a> </li>
		 <li class="<?php if(($a == 'info')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/info');?>"><i class=" fa fa-user fa-fw"></i> <span>商户信息</span></a> </li>
		 
		<!-- <li class="has-sub submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" > <a href="#" id="urpt"><i class="icon icon-user"></i> <span class="menu-text">设置修改</span>
			 <span class="arrow"></span>
			 </a>
				  <ul class="sub">
					<li><a href="<?php echo U('Wifiset/base');?>"><span class="sub-menu-text">基本信息</span></a></li>
					<li><a href="<?php echo U('Wifiset/renzheng');?>"><span class="sub-menu-text">认证信息</span></a></li>
					<li><a href="<?php echo U('Wifiset/neiwang');?>"><span class="sub-menu-text">内网信息</span></a></li>
					<li><a href="<?php echo U('Wifiset/waiwang');?>"><span class="sub-menu-text">外网信息</span></a></li>
				  </ul>
		</li>-->
		 
		 
		<!--  <li class="<?php if(($a == 'lianmeng')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/lianmengset');?>"><i class=" fa fa-globe fa-fw"></i> <span>联盟设置</span></a> </li> -->
		<li class="<?php if(($a == 'application')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/application');?>"><i class=" fa fa-cogs fa-fw"></i> <span>应用设置</span></a> </li>
			   <li class="<?php if(($a == 'routemap')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/routemap');?>"><i class=" fa fa-group fa-fw"></i> <span>路由管理</span></a> </li>
		  <li class="<?php if(($a == 'authtplset')): ?>active"<?php endif; ?>"> <a href="<?php echo U('Authset/tplset');?>"><i class="fa fa-th fa-fw"></i> <span>认证页面</span></a> </li>
		 
		 
		 <li class="has-sub submenu <?php if(($a == 'adv')): ?>active"<?php endif; ?>"> <a href="#" id="adv"><i class="fa fa-cloud fa-fw""></i> <span class="menu-text">广告管理</span>
		  <span class="arrow"></span>
		 </a>
				<ul class="sub">
				<li><a href="<?php echo U('User/adv');?>"><span class="sub-menu-text">广告管理</span></a></li>
				
				 <li><a href="<?php echo U('User/advrpt');?>"><span class="sub-menu-text">广告统计</span></a></li>
				 <li><a href="<?php echo U('User/actrpt');?>"><span class="sub-menu-text">活动发布</span></a></li>
				
			  </ul>
	   </li>
	   
		<!-- <li class="has-sub submenu <?php if(($a == 'web3g')): ?>active"<?php endif; ?>"> <a href="#" id="web3g"><i class=" fa fa-th-large fa-fw"></i> <span class="menu-text">手机网站</span>
				 		<span class="arrow"></span>
				 			   </a>
				  <ul class="sub">
				 					<li><a href="<?php echo U('index/web/index');?>"><span class="sub-menu-text">网站设置</span></a></li>
				 					
				 					 <li><a href="<?php echo U('web/catelog');?>"><span class="sub-menu-text">网站分类</span></a></li>
				 					 <li><a href="<?php echo U('web/arts');?>"><span class="sub-menu-text">文章管理</span></a></li>
				 					  <li><a href="<?php echo U('web/tempset');?>"><span class="sub-menu-text">模板管理</span></a></li>
				 					  <li><a target="_blank" href="http://www.wyywifi.com/index.php/api/wap/index/sid/<?php echo (session('uid')); ?>.html"><span class="sub-menu-text">网站预览</span></a></li>
				  </ul>
				 		</li> -->
		 <li class="<?php if(($a == 'comment')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/comment');?>"><i class="fa fa-comment fa-fw"></i> <span>客户留言</span></a> </li>
		<li class="has-sub submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" > <a href="#" id="urpt"><i class="fa fa-user fa-fw"></i> <span class="menu-text">用户统计</span>
			 <span class="arrow"></span>
			 </a>
				  <ul class="sub">
					<li><a href="<?php echo U('User/userchart');?>"><span class="sub-menu-text">统计报表</span></a></li>
					<li><a href="<?php echo U('User/report');?>"><span class="sub-menu-text">用户列表</span></a></li>
				  </ul>
		</li>
		
		
		<li class="<?php if(($a == 'online')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/rpt');?>"><i class="fa fa-signal fa-fw"></i> <span>上网统计</span></a> </li>
	   <li class="has-sub submenu <?php if(($a == 'advfun')): ?>active"<?php endif; ?>" > <a href="#" id="sale"><i class="fa fa-phone fa-fw"></i> <span class="menu-text">营销管理</span>
	   <span class="arrow"></span>
	   </a>
		  <ul class="sub">
			<li><a href="<?php echo U('index/Adv/phonelist');?>"><span class="sub-menu-text">手机号码管理</span></a></li>
			<!--  <li><a href="<?php echo U('adv/set');?>"><span class="sub-menu-text">短信帐号管理</span></a></li>
			<li><a href="<?php echo U('adv/sms');?>"><span class="sub-menu-text">短信群发</span></a></li>
			<li><a href="<?php echo U('adv/smslist');?>"><span class="sub-menu-text">短信发送列表</span></a></li> -->
		  </ul>
		</li>
	  
	  </ul>
	</div>
</div>
	<!--sidebar-menu-->

<div id="main-content">
<!--main-container-part-->
	<div class="container">
		<div class="row">
<div id="content" class="col-lg-12">
<!-- <div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>  <a href="#" class="current">应用设置</a> </div>
  <h1>应用设置</h1>
</div> -->

	<div id="content-header" class="page-header">
		<ul class="breadcrumb">
			<li>
				<!-- <i class="fa fa-home"></i> -->
				<div id="breadcrumb"> <i class="icon-home fa fa-home"></i><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom">首页</a></div> 
			</li>
			<li>应用设置</li>
		</ul>
		<!-- <div id="breadcrumb"> <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a></div> -->
		<!-- /BREADCRUMBS -->
			<div class="clearfix">
				<h3 class="content-title pull-left"><span><i class="fa-cogs icon-spin "></i>&nbsp;&nbsp;</span>应用设置</h3>
			</div> 
			<div class="description">&nbsp;</div>
	  </div>


	<div class="col-md-12">
		<!-- BASIC -->
		<div class="box border primary">
		<div class="box-title">
			<!-- <h4><i class="fa fa-bars"></i>b</h4> -->
			<div class="widget-title"> <span class="icon">  </span>
         <h4><i class="fa fa-bars"></i>编辑</h4>
        </div>
		</div>	  
	  <div class="box-body big">

       
        <form name='form' action="index.php?m=User&a=doapp" method="post" class="form-horizontal" enctype="multipart/form-data">
 		
       		<div class="form-group">
       		<div class="span1"></div>
       			<div class="alert alert-block span10 hide" id="msgbox"> 
              <h4 class="alert-heading">提示信息</h4>
             <div id="alertmsg"></div>
              </div>
       		</div>
			
			<div class="form-group">
              <label class="col-sm-2 control-label">认证模式:</label>
              <div class="col-sm-9 controls">
                <?php if(is_array($authmode)): $i = 0; $__LIST__ = $authmode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="checkbox">
                  <input type="checkbox" class="uniform" onchange="yincangweixin(this)" value="<?php echo ($vo["key"]); ?>" name="authmode[]" id="xuanxiang<?php echo ($vo["key"]); ?>" <?php echo showauthcheck($vo['key'],$info['authmode']);?>/>
                  <?php echo ($vo["txt"]); ?>
				  </label><?php endforeach; endif; else: echo "" ;endif; ?>
               
              </div>
            </div>
			
			
			<div class="form-group"  id="wxacc4">
              <label class="col-sm-2 control-label">分享标题 :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="标题"  name="wxtitle" id="wxtitle" value="<?php echo $data['title'];?>" />
              	 <span class="help-block">请输入您想分享的标题</span>
              </div>
            </div>
			
			<?php if($data == true): ?><div class="form-group"  id="wxpic4">
             <label class="col-sm-2 control-label">分享标题图片 :</label>
               <div class="col-md-10 controls">
				<img src="<?php echo ($data["titlepic"]); ?>"  width="100" height="100" />
              </div> 
            </div>
			<div class="form-group"  id="wxpic4">
             <label class="col-sm-2 control-label">修改图片 :</label>
               <div class="col-md-10 controls">
               <input type="file" class="file-input"  name="img">
			    <span class="help-block ">建议上传图片规格:720*480</span>
                
              </div> 
            </div>
			<?php else: ?>
			<div class="form-group"  id="wxpic4">
             <label class="col-sm-2 control-label">分享标题图片 :</label>
               <div class="col-md-10 controls">
               <input type="file" class="file-input"  name="img">
			    <span class="help-block ">建议上传图片规格:720*480</span>
                
              </div> 
            </div><?php endif; ?>
			
            <div class="form-group"  id="wxacc">
              <label class="col-sm-2 control-label">微信ID :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="微信号"  name="wx" id="wx" value="<?php echo echojsonkey(showauthdata('3',$info['authmode']),'user');?>" />
              	 <span class="help-block">请输入您想让用户关注的微信名称</span>
              </div>
            </div>
			
            <div class="form-group" id="wxauth" >
              <label class="col-sm-2 control-label">认证方式: </label>
              <div class="col-sm-9">
                <input style="display:none;" type="text" class="form-control" placeholder="微信认证密码 " name="wxauthpwd" id="wxauthpwd" value="123456"/><!--<?php echo echojsonkey(showauthdata('3',$info['authmode']),'pwd');?>-->
               <span class="help-block" style="display:none;">输入微信认证上网的认证密码</span>
			   <span class="help-block" style="color:red;">设置图文回复,关键词为"上网",外部链接为：http://www.wyywifi.com/index.php/api/wxlogin/index/</span>
			   <p>如使用微信认证,请复制以下白名单地址在路由器中设置:</p>
			        
<pre class="prettyprint linenums " style="width:90%">
<ol class="linenums" id="baimingdan">
qq.com,weixin.com,short.weixin.qq.com,long.weixin.qq.com,szshort.weixin.qq.com,wyywifi.com,apple.com,captive.apple.com</ol></pre>
</div>
            </div>
			
			
			
             <div class="form-group">
              <label class="col-md-2 control-label">上网时段控制 :</label>
              <div class="col-sm-10">
                 
				 <select name="sh" id="sh" class="col-md-2" >
                  <?php $__FOR_START_23003__=0;$__FOR_END_23003__=24;for($i=$__FOR_START_23003__;$i < $__FOR_END_23003__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if(($info['sh']) == $i): ?>selected<?php endif; ?>><?php echo ($i); ?>:00点</option><?php } ?>      
                  </select>
				  
				  <div class="col-md-1">到</div>
                  <!-- <label class="span1">到</label> -->
                
				<select name="eh" id="eh" class="col-md-2">
                  	<?php $__FOR_START_11384__=0;$__FOR_END_11384__=24;for($i=$__FOR_START_11384__;$i < $__FOR_END_11384__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if(($info['eh']) == $i): ?>selected<?php endif; ?>><?php echo ($i); ?>:00点</option><?php } ?>
                  </select>
                 
              	
              </div>
			  <span class="help-block" style="margin-left=10px">允许用户上网的时间范围。注:比如 7:00~20:00点</span> 
            </div>
			
			 <div class="form-group">
			   <label class="col-md-2 control-label">上网限制 :</label>
              <div class="col-sm-10 controls">
                 <label>
                <input type="radio" value="1" name="countflag" <?php if(($info['countflag']) == "1"): ?>checked<?php endif; ?>>启用
                 </label>  
                 <label> 
                  <input type="radio" value="0" name="countflag" <?php if(($info['countflag']) == "0"): ?>checked<?php endif; ?>>停用
				  
    		</label>
               <span class="help-block">上网限制,可有效防止员工长时间占用无线网络</span> 
              </div>
			  
			 
			 </div>
			 
			<div class="form-group">
			   <label class="col-md-2 control-label">上网允许认证次数 :</label>
              <div class="col-sm-9 controls">
                <input type="text"  class="form-control" placeholder="请输入认证次数"  name="countmax" id="countmax" value="<?php echo ($info['countmax']); ?>"/>
              <span class="help-block">本日允许使用wifi的次数（在启用上网限制功能后有效）</span>
              </div>
			 </div>
			 
            <div class="form-group">
              <label class="col-md-2 control-label">上网时间限制 :</label>
              <div class="col-sm-9  controls">
                <input type="text"  class="form-control" placeholder="请输入时间(单位:分钟)"  name="timelimit" id="timelimit" value="<?php echo ($info['timelimit']); ?>"/>
              <span class="help-block">允许用户上网的时间(单位:分钟)。注:不限制时间请填:0</span>
              </div>
            </div>
			
            <div class="form-group">
              <label class="col-md-2 control-label">认证后行为:</label>
              <div class="col-sm-9 controls">
               
              <label>
                <input type="radio" value="1" name="authaction" <?php if(($info['authaction']) == "1"): ?>checked<?php endif; ?>>跳转指定网页
                 </label>  
                 <label> 
                  <input type="radio" value="0" name="authaction" <?php if(($info['authaction']) == "0"): ?>checked<?php endif; ?>>不跳转
    		</label>
      				 <label>
      				 <input type="radio" value="2" name="authaction" <?php if(($info['authaction']) == "2"): ?>checked<?php endif; ?>>跳转请求网页
				 </label>       
               <!--  <label>
						 <input type="radio" value="3" name="authaction" <?php if(($info['authaction']) == "3"): ?>checked<?php endif; ?>>跳转到微官网
				 </label>   --> 
				  <span class="help-block">用户通过认证后引导用户行为选择。</span> 
              </div>
            </div>
             
            <div class="form-group">
              <label class="col-md-2 control-label">指定跳转URL :</label>
              <div class="col-sm-9  controls">
                <input type="text" class="form-control" placeholder="跳转网页地址 " name="jumpurl" id="jumpurl" value="<?php echo ($info['jumpurl']); ?>"/>
              </div>
            </div>
       
            <div class="form-actions">
              <input type="submit" class="btn btn-success" name="sub" value="保存"/>
            </div>
          </form>
        </div>
      </div>
      
      
    </div>
    
  </div>
  </div>
  
</div></div> 
   <!--Footer-part-->
<!-- <div class="row-fluid" style="padding: 10px;text-align: center;">
  <div id="footer" class="span12 col-md-12"> 2014 <a href="http://www.wyywifi.com/">wyywifi.com</a> </div>
</div> -->
</section>
<!--end-Footer-part--> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/script.js"></script> 
<script>
/*-----------------------------------------------------------------------------------*/
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
</script>
 <div style="display: none">
     <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
      </div>
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.ui.custom.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/matrix.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.uniform.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/select2.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/common.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/jquery-uploadify/jquery.uploadify.js"></script> 
<script>
function copyText(obj) 
{ 
$(document).ready(function(){
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();

	$("input[name='authmode[]']").each(function(){
		if($(this).attr('checked')&&$(this).val()==3){
			$('#wxauth').show();
			$('#wxacc').show();
		}
		$(this).bind('click',function(){
				
				if($(this).attr('checked')&&$(this).val()==3){
						$('#wxauth').show();
						$('#wxacc').show();
				}else if(!$(this).attr('checked')&&$(this).val()==3){
						$('#wxauth').hide();
						$('#wxacc').hide();
				}
		});
	});

	$("input[name='sub']").bind('click',function(){
		var rs=true;
		
		
		
		$("input[name='authmode[]']").each(function(){
			if($(this).attr('checked')&&$(this).val()==3){
				
					 var v=$('#wxauthpwd').val();
						
					 if (v == "") {
						
						 AlertTips("请输入微信认证密码",2000);
					        rs= false;
					 }
					 if(!isaccount(v)){
						
						 AlertTips("请输入微信认证密码",2000);
					        rs= false;
					 }
					 var wx=$('#wx').val();
						
					 if (wx == "") {
						
						 AlertTips("请输入微信账号",2000);
					        rs= false;
					 }
				
				}
		});
			
		return rs;
	});
});
</script>

			<script>
				if($('#xuanxiang3').attr('checked')!="checked"){
					$("#wxacc").hide();
					$("#wxauth").hide();
				}
				if($('#xuanxiang4').attr('checked')!="checked"){
					$("#wxacc4").hide();
					$("#wxpic4").hide();
				}
				function yincangweixin(tt){
					if(tt.id=="xuanxiang3"){
							$("#wxacc").toggle();
							$("#wxauth").toggle();
					}
					if(tt.id=="xuanxiang4"){
							$("#wxacc4").toggle();
							$("#wxpic4").toggle();
					}
				}
				
				
			</script>
</body>
</html>