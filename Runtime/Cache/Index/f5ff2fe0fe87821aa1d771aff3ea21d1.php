<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo C('sitename');?></title>
	<meta name="keywords" content="<?php echo C('keyword');?>"/>
	<meta name="description" content="<?php echo C('content');?>"/>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--  <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap-responsive.min.css" />
<!-- <link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-login.css" /> -->
<link href="<?php echo ($Theme['P']['root']); ?>/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo ($Theme['P']['root']); ?>/font/googlefont.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/new/cloud-admin.css" >



<style>
	.edulist{line-height: 25px;font-size:14px;}
</style>
    </head>
    <body class="login">
     <link href="<?php echo ($Theme['P']['root']); ?>/css/qq/css/contact.css" rel="stylesheet" type="text/css" />

  <style type="text/css">
  
    .sideBarNav
    {
        right:0px;
        margin:100px 0px 0px 0px;
        position:fixed;
    }  
    .menubox{display:none;float:right;}
    .showbox{float:right;margin-top:40px;}
    .showbox img{border:0px;cursor:pointer;}
	
</style>
<!--  <div class="sideBarNav">  

    <div class="menubox">
         <div id="con">
            <div class="list">
               <div class="contact">
                            <p>售前咨询</p>
             <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=269587770&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:269587770:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> 
         	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=269587770&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:269587770:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> 
         
          <p>售后支持</p>

                 <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=269587770&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:269587770:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
  <p>商务合作</p>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=269587770&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:269587770:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>

                      	<div style="display:block;height:50px;">&nbsp;</div>

          </div>
             
            </div>
            <a id="toTop" onfocus="this.blur()" title="回到顶部" href="#">
                <img style="border-bottom: 0px; border-left: 0px; border-top: 0px; border-right: 0px"
                    src="<?php echo ($Theme['P']['root']); ?>/css/qq/images/con_bom.png" width="128" height="22"></a>
        </div>
    </div>
    <div class="showbox">
        <img src="<?php echo ($Theme['P']['root']); ?>/css/qq/images/r2.gif"  width="24" height="88px" id="showqq"/>
    </div>
</div>  --> 
	<section id="page">
	<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<a href="index.html"><img src="<?php echo ($Theme['P']['root']); ?>/weiyun/Web/images/yilian_LOGO.png" height="40" alt="logo name" /></a>
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">登 录</h2>
								<div class="divide-40"></div>
           <!-- <div id="loginbox">  
						     	<div class="control-group normal_text"> <h3><img src="<?php echo ($Theme['P']['img']); ?>/wifilogo.png" /></h3></div>
						                   -->
            <form id="loginform" role="form" >
		       		<div class="alert hide" id="msgbox" style="margin:10px 0px;">
               <div id="alertmsg"></div>
             </div>
            
                <div class="form-group">
                   <!--[if IE]>
          					<div><span style="padding:9px 9px;*line-height:31px; font-size:14px;font-weight:bold;color:#fff; width:60px; display:inline-block;">帐号：</span><span style="width:75%;display:inline-block;">&nbsp;&nbsp;</span></div>
     					<![endif]-->

                        	<label >账户</label>
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input  class="form-control" type="text" placeholder="帐号"  name="txt_user" id="txt_user" />
                        	
                 </div>
                
                <div class="form-group">
                    <div class="controls">
						<div class="main_input_box">
                          <!--[if IE]>
          					<div><span style="padding:9px 9px;*line-height:31px; font-size:14px;font-weight:bold;color:#fff; width:60px; display:inline-block;">密码:</span><span style="width:75%;display:inline-block;">&nbsp;&nbsp;</span></div>
     					<![endif]-->
						<label >密码</label>
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input   class="form-control" type="password" placeholder="密码" name="password" id="password"/>
                        </div>
                    </div>
                </div>
                <!-- <div class="control-group">
                    <div class="main_input_box" style="font-size:16px;">
                  		测试帐号:xc&nbsp;&nbsp;密码:123
                       
                    </div>
                </div> -->
                   <div class="form-group">
                    <div class="controls" style="margin-bottom: 10px;">
                   
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" href="javascript:void(0);" id="btn_reg">用户注册</a></span>
                 
                    <span class="pull-right"><a type="submit" href="javascript:void(0);" class="btn btn-success" id="btn_log"> 登录</a></span>
               		</div>
                </div>
  
                
                 
            </form>
            
          



        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        </section>
        <script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap.min.js"></script> 
		<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/common.js"></script> 
        <script type="text/javascript">
$(function(){AlertTips( "请输入用户名",  2000);});
    	document.onkeydown=function(event){
    	  e = event ? event :(window.event ? window.event : null);
    	  if(e.keyCode==13){
    	   //执行的方法
    	  	$('#btn_log').click();
    	  }
    	 }
    
        $(function () {
        	$('#btn_reg').bind('click',function(){
				location.href='<?php echo U('index/index/reg');?>';
				});
            // bg switcher
          
            $('#btn_log').bind('click',function(){
				var u=$('#txt_user').val();
				var p=$('#password').val();
				 if (u == "") {
					 AlertTips( "请输入用户名",  2000);
				        return false;
				 }
				  if (p == "") {
					
					  AlertTips( "请输入密码",2000);
				        return false;
				  }
				  $.ajax({
					  url: '<?php echo U('index/user/dologin');?>',
				        type: "post",
						data:{
							'user':u,
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
									AlertTips(data.msg, 2000);
								}
						}
					  });
				});
        });
    </script>
     <script language="javascript">
        var isshow = false;
        $(function () {
            $("#showqq").click(function () {
                if (!isshow) {
                    isshow = true;
                    $(".showbox").css("margin-right", "-3px");
                    $(".menubox").show('slow');
                } else {
                    isshow = false;
                    $(".showbox").css("margin-right", "0px");
                    $(".menubox").hide('slow');
                }
            });

           
        });   
</script>
    </body>

</html>