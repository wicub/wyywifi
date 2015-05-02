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
</style></head><body><!--Header-part--><header class="navbar clearfix" id="header"><div class="container"><!-- <div id="headera"><h1><a href="#"></a></h1></div> --><!--close-Header-part--><!--top-Header-menu--><div class="navbar-brand"><!-- COMPANY LOGO --><a href="index.html"><img src="<?php echo ($Theme['P']['root']); ?>/weiyun/Web/images/yilian_LOGO.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120"></a><!-- /COMPANY LOGO --><!-- TEAM STATUS FOR MOBILE --><div class="visible-xs"><a href="#" class="team-status-toggle switcher btn dropdown-toggle"><i class="fa fa-users"></i></a></div><!-- /TEAM STATUS FOR MOBILE --><!-- SIDEBAR COLLAPSE --><div id="sidebar-collapse" class="sidebar-collapse btn"><i class="fa fa-bars" 
							data-icon1="fa fa-bars" 
							data-icon2="fa fa-bars" ></i></div><!-- /SIDEBAR COLLAPSE --></div><!-- <div id="user-nav" class="navbar navbar-inverse"> --><ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left"><li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user fa fa-cog"></i><span class="text name">欢迎光临</span><i class="fa fa-angle-down"></i><!-- <b class="caret"> --></b></a><ul class="dropdown-menu skins"><li><a data-skin="default" href="<?php echo U('User/account');?>" ><!-- <i class="icon-user"></i> --> 修改密码</a></li><li class="divider"></li><li><a data-skin="night" href="<?php echo U('User/logout');?>"><!-- <i class="icon-key"></i> -->退出</a></li></ul></li><li class="dropdown"><a title="" href="<?php echo U('User/logout');?>"  data-toggle="tooltip" class="team-status-toggle dropdown-toggle tip-bottom"><i class="icon icon-share-alt a fa-users"></i><span class="text name">退出</span><i class="fa fa-angle-down"></i></a></li></ul><!-- </div> --></div></header><!--close-top-Header-menu--><!--sidebar-menu--><section id="page"><div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><div class="sidebar-menu nav-collapse"><ul><li class="<?php if(($a == 'index')): ?>active"<?php endif; ?>" ><a href="<?php echo U('User/index');?>"><i class=" fa fa-tachometer fa-fw"></i><span class="menu-text">首页
		</span><span class="selected"></span></a></li><li class="<?php if(($a == 'info')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/info');?>"><i class=" fa fa-user fa-fw"></i><span>商户信息</span></a></li><!-- <li class="has-sub submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" ><a href="#" id="urpt"><i class="icon icon-user"></i><span class="menu-text">设置修改</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('Wifiset/base');?>"><span class="sub-menu-text">基本信息</span></a></li><li><a href="<?php echo U('Wifiset/renzheng');?>"><span class="sub-menu-text">认证信息</span></a></li><li><a href="<?php echo U('Wifiset/neiwang');?>"><span class="sub-menu-text">内网信息</span></a></li><li><a href="<?php echo U('Wifiset/waiwang');?>"><span class="sub-menu-text">外网信息</span></a></li></ul></li>--><!--  <li class="<?php if(($a == 'lianmeng')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/lianmengset');?>"><i class=" fa fa-globe fa-fw"></i><span>联盟设置</span></a></li> --><li class="<?php if(($a == 'application')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/application');?>"><i class=" fa fa-cogs fa-fw"></i><span>应用设置</span></a></li><li class="<?php if(($a == 'routemap')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/routemap');?>"><i class=" fa fa-group fa-fw"></i><span>路由管理</span></a></li><li class="<?php if(($a == 'authtplset')): ?>active"<?php endif; ?>"><a href="<?php echo U('Authset/tplset');?>"><i class="fa fa-th fa-fw"></i><span>认证页面</span></a></li><li class="has-sub submenu <?php if(($a == 'adv')): ?>active"<?php endif; ?>"><a href="#" id="adv"><i class="fa fa-cloud fa-fw""></i><span class="menu-text">广告管理</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('User/adv');?>"><span class="sub-menu-text">广告管理</span></a></li><li><a href="<?php echo U('User/advrpt');?>"><span class="sub-menu-text">广告统计</span></a></li><li><a href="<?php echo U('User/actrpt');?>"><span class="sub-menu-text">活动发布</span></a></li></ul></li><!-- <li class="has-sub submenu <?php if(($a == 'web3g')): ?>active"<?php endif; ?>"><a href="#" id="web3g"><i class=" fa fa-th-large fa-fw"></i><span class="menu-text">手机网站</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('index/web/index');?>"><span class="sub-menu-text">网站设置</span></a></li><li><a href="<?php echo U('web/catelog');?>"><span class="sub-menu-text">网站分类</span></a></li><li><a href="<?php echo U('web/arts');?>"><span class="sub-menu-text">文章管理</span></a></li><li><a href="<?php echo U('web/tempset');?>"><span class="sub-menu-text">模板管理</span></a></li><li><a target="_blank" href="http://www.wyywifi.com/index.php/api/wap/index/sid/<?php echo (session('uid')); ?>.html"><span class="sub-menu-text">网站预览</span></a></li></ul></li> --><li class="<?php if(($a == 'comment')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/comment');?>"><i class="fa fa-comment fa-fw"></i><span>客户留言</span></a></li><li class="has-sub submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" ><a href="#" id="urpt"><i class="fa fa-user fa-fw"></i><span class="menu-text">用户统计</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('User/userchart');?>"><span class="sub-menu-text">统计报表</span></a></li><li><a href="<?php echo U('User/report');?>"><span class="sub-menu-text">用户列表</span></a></li></ul></li><li class="<?php if(($a == 'online')): ?>active"<?php endif; ?>"><a href="<?php echo U('User/rpt');?>"><i class="fa fa-signal fa-fw"></i><span>上网统计</span></a></li><li class="has-sub submenu <?php if(($a == 'advfun')): ?>active"<?php endif; ?>" ><a href="#" id="sale"><i class="fa fa-phone fa-fw"></i><span class="menu-text">营销管理</span><span class="arrow"></span></a><ul class="sub"><li><a href="<?php echo U('index/Adv/phonelist');?>"><span class="sub-menu-text">手机号码管理</span></a></li><!--  <li><a href="<?php echo U('adv/set');?>"><span class="sub-menu-text">短信帐号管理</span></a></li><li><a href="<?php echo U('adv/sms');?>"><span class="sub-menu-text">短信群发</span></a></li><li><a href="<?php echo U('adv/smslist');?>"><span class="sub-menu-text">短信发送列表</span></a></li> --></ul></li></ul></div></div><!--sidebar-menu--><div id="main-content"><!--main-container-part--><div class="container"><div class="row"><div id="content" class="col-lg-12"><!-- <div id="content-header"><div id="breadcrumb"><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a><a href="#" class="current">用户统计</a></div><h1>用户统计</h1></div> --><div id="content-header" class="page-header"><ul class="breadcrumb"><li><!-- <i class="fa fa-home"></i> --><div id="breadcrumb"><i class="icon-home fa fa-home"></i><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom">首页</a></div></li><li>用户统计</li></ul><!-- <div id="breadcrumb"><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a></div> --><!-- /BREADCRUMBS --><div class="clearfix"><h3 class="content-title pull-left">用户列表</h3></div><div class="description">&nbsp;</div></div><!--  <div class="container-fluid"><hr><div class="row-fluid"><div class="span12"> --><div class="col-md-10"><!-- <div class="widget-box"><div class="widget-title"><span class="icon"><i class="icon-th"></i></span><h5>统计列表</h5></div> --><div class="box border blue"><div class="box-title"><!-- <h5><i class="fa fa-table"></i>统计列表</h5> --><div class="widget-title"><span class="icon"></span><h4><i class="fa fa-bars"></i>统计列表</h4></div></div><!-- <div class="widget-content nopadding"><table class="table table-bordered table-striped"><thead><tr><th>编号</th><th>用户名</th><th>手机号码</th><th>MAC地址</th><th>注册时间</th><th>认证模式</th><th>分配IP</th></tr></thead><tbody><?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["user"]); ?></td><td><?php echo ($vo["phone"]); ?></td><td><?php echo ($vo["mac"]); ?></td><td><?php echo (date('Y-m-d ',$vo["add_time"])); ?></td><td><?php echo getAuthWay($vo['mode']);?></td><td><?php echo ($vo["login_ip"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div> --><div class="box-body"><table class="table table-bordered table-striped"><thead><tr><th>编号</th><th>用户名</th><th>手机号码</th><th>MAC地址</th><th>注册时间</th><th>认证模式</th><th>分配IP</th></tr></thead><tbody><?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["user"]); ?></td><td><?php echo ($vo["phone"]); ?></td><td><?php echo ($vo["mac"]); ?></td><td><?php echo (date('Y-m-d ',$vo["add_time"])); ?></td><td><?php echo getAuthWay($vo['mode']);?></td><td><?php echo ($vo["login_ip"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div></div><div class="pagination pull-right"><?php echo ($page); ?></div></div></div></div></div></div></div></div><!--Footer-part--><!-- <div class="row-fluid" style="padding: 10px;text-align: center;"><div id="footer" class="span12 col-md-12"> 2014 <a href="http://www.wyywifi.com/">wyywifi.com</a></div></div> --></section><!--end-Footer-part--><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/script.js"></script><script>/*-----------------------------------------------------------------------------------*/
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
</script><div style="display: none"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script></div><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.ui.custom.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap.min.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/matrix.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/common.js"></script><script>$(document).ready(function(){
	$('#urpt').trigger('click');
});
</script></body></html>