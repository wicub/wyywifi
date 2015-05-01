<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Cloud Admin | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/cloud-admin.css" >
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap-daterangepicker/daterangepicker-bs3.css" /> -->
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/animatecss/animate.min.css" />
	<!-- FONTS -->
	
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
					
			
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">此路由还未绑定到云端点击开始绑定继续操作</h2>
								<div class="divide-40"></div>
								
								  <div class="form-actions">
							
									<button type="submit"   onclick="swapScreen('register');return false;" class="btn btn-lg btn-danger">点击绑定</button>
								  </div>
								
								<div class="divide-20"></div>
								
								<div class="login-helpers" style="text-align: center;">
											微速云提供
									
								</div>	
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
			<!-- REGISTER -->
			<section id="register">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">绑定信息</h2>
								<div class="divide-40"></div>
							

							<form role="form" action="/index.php/api/login/dologin" method="post" class="form-horizontal" > 
							<!-- <form role="form" > -->
								
								  <div class="form-group">
									<label for="exampleInputUsername">用户名</label>
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" placeholder="帐号"  name="user" id="user">
								
								  </div> 
								  
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密码</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" placeholder="密码" name="password" id="password" >
								  </div>
								
								 <div class="form-group hidden"> 
									
									<input type="hidden" class="form-control"  value="get_get()"  name="gw_id" id="gw_id" >
								  </div>
								
								  <div class="form-actions">
									<!-- <button type="submit"  onclick="loglogin();return false;" class="btn btn-success" id="btn_log"> 登录</button>  -->
									 <button type="submit"   class="btn btn-success" id="btn_log"> 登录</button> 
								  </div>
								</form>
								
								
								<!-- SOCIAL REGISTER -->
								
								<div class="divide-20"></div>
								
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('login');return false;"> 返回</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="forgot">
			<!-- <section id="login_success"> -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">登录成功</h2>
								<div class="divide-40"></div>
								<form role="form">
								 
								  <div class="form-actions">
									<button type="submit" class="btn btn-info">正在跳转页面</button>
								  </div>
								</form>
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('login');return false;"></a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>  
			<!-- FORGOT PASSWORD -->
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/bootstrap-dist/js/bootstrap.min.js"></script>
	
	
	<!-- UNIFORM -->
	<script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/uniform/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<!-- <script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/new/script.js"></script> -->
	<script>
		jQuery(document).ready(function() {		
			App.setPage("login");  //Set current page
			App.init(); //Initialise plugins and elements
			
		});
		
		
		window.onload=function(){
			var gwid=get_get();
			document.getElementById('gw_id').value=gwid;
			
			//alert($("#gw_id").val());
		}
		
		function loglogin(){
		
		var u=$('#txt_user').val();
		var p=$('#password').val();
		var gwid=get_get();
				 
				if (u == "") {
					 alert( "请输入用户名",  2000);
				        return false;
				 }
				  if (p == "") {
					
					  alert( "请输入密码",2000);
				        return false;
				  }
				  $.ajax({
					  url: '<?php echo U('api/login/dologin');?>',
				        type: "post",
						data:{
							'user':u,
							'gw_id':gwid,
							'password':p,
							'__hash__':$('input[name="__hash__"]').val()
							},
						dataType:'json',
						error:function(){
								AlertTips("服务器忙，请稍候再试",2000);
								},
						success:function(data){
								
								if(data.error==0){
									location.href=data.url;
									
								}else{
									alert(data.msg, 2000);
								}
						}
					  });
		
		
		}
		
		
	function get_get(){
		querystr = window.location.href.split("?");
		if(querystr[1]){	
		GETs = querystr[1].split("&");
		GET =new Array();	
		for(i=0;i<GETs.length;i++){
			tmp_arr = GETs[i].split("=");
			key=tmp_arr[0];
			GET[key] = tmp_arr[1];
				}
		}
		//return querystr[1];
		return GET["gw_id"];
	}
	
	
	
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>