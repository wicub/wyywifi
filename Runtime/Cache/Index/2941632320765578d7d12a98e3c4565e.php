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

<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/uniform/css/uniform.default.min.css"  />
<!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/uniform.css" /> -->
<!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/select2.css" /> -->
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/select2/select2.min.css" /> 
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>

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
  <!-- <div id="breadcrumb"> <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>  <a href="#" class="current">商户信息</a> </div>
  <h1>商户信息</h1> -->
  
	<div id="content-header" class="page-header">
		<ul class="breadcrumb">
			<li>
				<!-- <i class="fa fa-home"></i> -->
				<div id="breadcrumb"> <i class="icon-home fa fa-home"></i><a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom">首页</a></div> 
			</li>
			<li>商户信息</li>
		</ul>
		<!-- <div id="breadcrumb"> <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a></div> -->
		<!-- /BREADCRUMBS -->
			<div class="clearfix">
				<h3 class="content-title pull-left"><span><i class="fa-user  icon-spin "></i>&nbsp;&nbsp;</span>商户信息</h3>
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
        <form action="/index.php?m=User&a=doindex" method="post" class="form-horizontal" role="form" onsubmit="return jiancha()">

            <!-- <div class="control-group">
	              <label class="control-label">商户名称 :</label>
	              <div class="controls">
	                <input type="text" class="span11" placeholder="商户名称"  name="shopname" id="shopname" value="<?php echo ($info["shopname"]); ?>" />
	                <span class="help-block">输入您商铺的名称，该名称将显示在认证页面顶部。</span> 
	              </div>
	            </div> -->
			<div class="form-group">
				<label class="col-sm-2 control-label">商户名称 :</label>
				<div class="col-sm-9">
				  <!-- <input type="text" class="span11" placeholder="商户名称"  name="shopname" id="shopname" value="<?php echo ($info["shopname"]); ?>" /> -->
				  <input class="form-control" placeholder="商户名称"  name="shopname"  id="shopname" type="text" value="<?php echo ($info["shopname"]); ?>">
                <span class="help-block">输入您商铺的名称，该名称将显示在认证页面顶部。</span> 
				</div>
			  </div>
			
			
			<div class="form-group">
				<label class="col-sm-2 control-label">联系人 :</label>
				<div class="col-sm-9">
				  <input class="form-control" placeholder="联系人" name="linker" id="linker" value="<?php echo ($info["linker"]); ?>" maxlength="20">
                </div>
			  </div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">手机号码  :</label>
				<div class="col-sm-9">
				  <input class="form-control" placeholder="手机号码"  name="phone" id="phone" value="<?php echo ($info["phone"]); ?>" maxlength="11">
                </div>
			  </div>
			  
            
			<div class="form-group">
              <label class="col-sm-2 control-label">消费水平:</label>
              <div class="col-sm-9 controls">
              <?php if(is_array($enumdata["shoplevel"])): $i = 0; $__LIST__ = $enumdata["shoplevel"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="checkbox-inline">
                  <input type="checkbox" value="<?php echo ($vo["key"]); ?>" name="shoplevel[]" <?php if(strpos($info['shoplevel'],"#".$vo['key']."#")>-1){echo "checked";} ?>/>
                  <?php echo ($vo["txt"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
               
              </div>
            </div>
			
			
			
			
            <div class="form-group">
              <label class="col-sm-2  control-label">行业类型:</label>
              <div class="col-sm-9 controls">
               <?php if(is_array($enumdata["trades"])): $i = 0; $__LIST__ = $enumdata["trades"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class="checkbox-inline">
                  <input type="checkbox" value="<?php echo ($vo["key"]); ?>" name="trade[]" <?php if(strpos($info['trade'],"#".$vo['key']."#")>-1){echo "checked";} ?> />
                  <?php echo ($vo["txt"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
				<span class="help-block">选择您所处的行业类型，可多选</span> 
              </div>
            </div>
			
             <div class="form-group">
              <label class="col-sm-2  control-label">商圈选择:</label>
              <div class="col-sm-9">
              <select name="province" id="province"  class="col-md-2"></select>
              <select name="city" id="city"  class="col-md-2"></select>
              <select name="area" id="area"  class="col-md-2"></select>	
                  
              </div>
            </div>
			
			<!-- <div class="form-group">
				<label class="col-sm-3 control-label">Selects</label>
				<div class="col-sm-9">
				 <select class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
				<div class="divide-20"></div>
				<select multiple class="form-control">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
				</div>
							 </div> -->
			
			
			
			
            <div class="form-group">
              <label class="col-sm-2 control-label">店铺地址 :</label>
              <div class="col-sm-9 controls">
			<input type="text" class="form-control" placeholder="店铺地址 " name="address" id="address" maxlength="11 value="<?php echo ($info["address"]); ?>"/>
               <span class="help-block">输入店铺的所在地址。</span> 
              </div>
            </div>
			<?php if(1 == 0): ?><!--$info.islm eq 0-->
			<div class="control-group">
			<div class="controls" style="color:red;display:none;">
			新功能“超级广告联盟”，请联系上级代理开通
			</div>
			</div>
			<?php else: ?>
			
			
			<div class="form-group">
              <label class="col-sm-2 control-label">坐标选择<font color="red"></font> :</label>
              <div class=" col-sm-9 controls">
				<div class="row">
				<div class="col-xs-2">
                <input type="text"  class="form-control" placeholder="经度 "  name="lng" id="lng" value="<?php echo ($info["lng"]); ?>" />&nbsp;&nbsp;</div>
				<div class="col-xs-2">
				<input   type="text"  class="form-control" placeholder="纬度 " name="lat" id="lat" value="<?php echo ($info["lat"]); ?>" /></div>
				</div>
				<font style="color:red;help-block">拖拽地图中的图标,获得您所在的坐标</font>
				 <div id="container" class="form-group" style="width:500px;height:500px;margin-top:10px;;margin-left:1px;border:1px solid gray;border-radius:5px;"></div>
					<script type="text/javascript">
					var map = new BMap.Map("container");          // 创建地图实例 
					map.addControl(new BMap.NavigationControl()); // 缩放控件
					map.enableScrollWheelZoom();					//启用鼠标滚轮缩放
					var point = new BMap.Point(<?php echo ($info["lng"]); ?>,<?php echo ($info["lat"]); ?>);  // 创建点坐标  
					map.centerAndZoom(point, 18);                 // 初始化地图，设置中心点坐标和地图级别 

					function myFun(result){//定位城市
							var cityName = result.name;
							map.setCenter(cityName);
							//alert("当前定位城市:"+cityName);
						}
						var myCity = new BMap.LocalCity();
						//myCity.get(myFun);


					//自定义标注图标
					var icon = new BMap.Icon('http://wxyxlm.b0.upaiyun.com/moavjc1397790268/2014/10/28/1414461207_a57b0ddc8f30c21c.png', new BMap.Size(40, 50), {  
					anchor: new BMap.Size(10, 30)  
					});
					var mkr =new BMap.Marker(map.getCenter(), {  
					icon: icon  
					}); 
					//修改自定义标注的偏移值					
					var pianyi = new BMap.Size(-12,-18);
					mkr.setOffset(pianyi);
					 
					var marker = new BMap.Marker(point);        // 创建标注 (默认的小标注)   
					map.addOverlay(mkr); 					//添加标注到地图(把这里mkr换成marker就是默认的小图标了)
					mkr.enableDragging();    									//可拖拽的标注(是否可拖拽,要记得更换mkr和marker的值)
					mkr.addEventListener("dragend", function(e){    				//可拖拽的标注
					//alert("当前位置：" + e.point.lng + ", " + e.point.lat);   		//可拖拽的标注 
					$("#lng").val(e.point.lng);
					$("#lat").val(e.point.lat);
					})																//可拖拽的标注



					//加载完成之后,改变标注点坐标,使之和当前定位的城市基本相符
					map.addEventListener("tilesloaded",function(){
						var newpoint = map.getCenter();
						mkr.setPosition(newpoint);
						$("#lng").val(newpoint.lng);
						$("#lat").val(newpoint.lat);
					});

					</script>  
              </div>
              </div>
			  
					<div class="form-group hidden">
					<label class="col-sm-2 control-label">是否开启商家联盟:</label>
					
						<div class="col-md-9">	
					<?php if($info['islm2'] == 0): ?><label style="margin-bottom:0px;"><input class="uniform" type="radio"  name="islm2" id="islm0" value="0" checked/>关闭</label>
						<label style="margin-bottom:0px;"><input class="uniform" type="radio"  name="islm2" id="islm1" value="1"/>开启</label>
					<?php else: ?>
						<label style="margin-bottom:0px;"><input class="uniform" type="radio"  name="islm2" id="islm0" value="0"/>关闭</label>
						<label style="margin-bottom:0px;"><input class="uniform" type="radio"  name="islm2" id="islm1" value="1" checked/>开启</label><?php endif; ?>
						</div>
					</div>
					
					<div class="form-group hidden">
					<label class="col-sm-2 control-label">折扣:</label>
					<div class="col-sm-9 controls">
					<input class="col-sm-2 form-control" style="width:100px;" maxlength="3" type="text"  name="zhekou" id="zhekou" value="<?php echo ($info["zhekou"]); ?>" />&nbsp;
					<font color="blue" style="font-size:16px;">折</font>
					<div id="tip" style="color:red;display:none;"></div>
					</div>
					</div><?php endif; ?>
			
			
		<!-- 	 <div class="form-group">
				  <label class="col-sm-2  control-label">商圈选择:</label>
				  <div class="col-sm-9 controls">
				  <select name="province" id="province"  class="form-control"></select>
				  <select name="city" id="city" class="form-control"></select>
				  <select name="area" id="area" class="form-control"></select>
					  
				  </div>
				</div> -->
            
            <div class="form-actions">
              <button type="submit" class="btn btn-success">保存</button>
			  
            </div>
          </form>
       
      </div>
      </div>
      
      
    </div>
    </div></div></div>
  </div>
  

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
  <script src="<?php echo ($Theme['P']['js']); ?>/jsaddress.js"></script>
                    <script type="text/javascript">
                    addressInit('province', 'city', 'area', '<?php echo ($info['province']); ?>', '<?php echo ($info["city"]); ?>', '<?php echo ($info["area"]); ?>');
                    </script>
<script>
$(document).ready(function(){
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
});
</script>

		  <script>
				function jiancha(){
					var zhekou = $('#zhekou').val();
					var re = new RegExp("^[0-9]([.]{1}[0-9]{1})?$");
					if(re.test(zhekou)){
					
					}else{
					$('#tip').text('折扣只能是正整数或者一位小数，如“9”或者“7.8”');
					$('#tip').show(500);
					setTimeout("yincang()",8000);
						return false;
					}
				}
				function yincang(){
					$('#tip').hide(500);
				}
		</script>
</body>
</html>