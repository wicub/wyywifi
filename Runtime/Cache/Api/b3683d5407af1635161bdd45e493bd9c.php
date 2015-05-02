<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="format-detection" content="telephone=no"><title><?php echo ($shopinfo[0]['shopname']); ?></title><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/css/css.css"><!--风格--><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/css/media.css"><!--自适应--><script type="text/javascript" src="http://www.wyywifi.com/UI/Public/js/jquery.js"></script><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/css/form.css"><!--自适应--></head><body><div class="topbar"><div class="headtitle font18"><?php echo ($shopinfo[0]['shopname']); ?></div></div><div class="mainbox bgform clearfix"><div class="formbox"><form name="regform"><div class="tips" id="tips"></div><div class=""></div><!--  <label class="lb_title mr-tb-5"  for="password">上网密码:</label><div class="iptbox corner-all-4 mr-tb-5 "><input class="ipt" type="password" name="password" id="password"  placeholder="请输入微信验证密码" value="" autocomplete="off"></div> --><div class="tips  mr-tb-10" id="tips"></div><div style="text-align:center"><img src="<?php echo ($Theme['T']['js']); ?>/JTTP.jpg" align="middle"/></div><a  class="btn_base corner-all-10 t-wh c-wifiadv uba mr-tb-10" href="http://weixin.qq.com/r/bHV9ZRzEoEHfrVgG9yB_" id="btn_reg">打开微信关注</a><p style="text-align:center" id="wolegequ">仅限苹果手机点击可以打开微信,安卓请自己打开微信,请先复制微信号</p><a  class="btn_base corner-all-10 c-eee  t-333  uba b-wh  " href="javascript:void(0);" id="btn_back">返回首页</a></div></form><div class="blockdiv"></div></div><script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script><script type="text/javascript" src="<?php echo ($Theme['T']['js']); ?>/api.js"></script><script type="text/javascript">/*
* 智能机浏览器版本信息:
*
*/
  var browser={
    versions:function(){ 
           var u = navigator.userAgent, app = navigator.appVersion; 
           return {//移动终端浏览器版本信息 
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
         }(),
         language:(navigator.browserLanguage || navigator.language).toLowerCase()
}
//document.getElementById('btn_reg').style.display = "none";

if(browser.versions.android){
	$("#btn_reg").hide();
	$("#wolegequ").hide();
}
</script><script>	$(document).ready(function(){
		  $("input").each(function(){
				$(this).bind("focusin",function(){

					$(this).parent().addClass('us-input-focus');
				});
				$(this).bind("focusout",function(){
					$(this).parent().removeClass('us-input-focus');

				});
			  });
		$("#btn_reg").bind('click',function(){
		
			var p=$('#password').val();
			 
			  if (p == "") {
				  Tips("tips", "请填写认证密码", true, 1000);
			        return false;
			  }
			  $.ajax({
				  	url: '<?php echo U('userauth/dowxauth');?>',
			        type: "post",
					data:{
					
						'password':p,
						
						},
					dataType:'json',
					error:function(){
							 Tips("tips", "服务器忙，请稍候再试", true, 1500);
							
							},
					success:function(data){
							if(data.error==0){
								Tips("tips", "认证成功", false, 1500);
								setTimeout("goUrl('"+data.url+"')",1500);
							}else{
								Tips("tips", data.msg, true, 2000);
							}
					}
				  });

		});
		$('#btn_back').bind('click',function(){
				history.go(-1);
			});
	});

	function goUrl(url){
		location.href=url;
	}
</script><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script></body></html>