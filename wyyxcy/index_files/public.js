$(function(){
	/*---------------------------------------------------拖动翻页---------------------------------------------------------------*/
	var lock=false;
	function flipOK(direction){
		var index=$("#touchFlip").find("._show").removeAttr("class").css({"z-index":0}).index(),newIndex;
		switch(direction){
			case"next":
				if(index+1<$("#touchFlip").children().length){//有货
					newIndex=index+1;
					if(newIndex+1==$("#touchFlip").children().length){
						TweenMax.fromTo($("#turnBack"),.5,{display:"block",alpha:0},{alpha:1,ease:Power2.easeInOut});//显示返回首页
						TweenMax.killTweensOf($("#moveArrow"));
						$("#moveArrow").css("bottom",-$("#moveArrow").height());
					}
				}
				break;
			case"prev":
				if(index-1>=0){//有货
					newIndex=index-1;
				}
				if($("#turnBack").attr("style"))TweenMax.to($("#turnBack"),.5,{alpha:0,ease:Power2.easeInOut,onComplete:function(){$("#turnBack").removeAttr("style");}});//隐藏返回首页
				break;
		}
		$("#touchFlip").children().eq(newIndex).addClass("_show");
		lock=false;
	}
	//$("#touchFlip li").on("mousedown",function(e){//mousedown,touchstart
	$("#touchFlip li").on("touchstart",function(e){//mousedown,touchstart
		if(lock==false){
			$(document).off();
			var target=$("#touchFlip").find("._show").css({"z-index":0}),next=null,prev=null;
			if(target.index()+1<target.parent().children().length){
				next=target.next("li");
				next.css({"display":"block","z-index":2,"top":"100%","bottom":"auto"});
			}
			if(target.index()-1>=0){
				prev=target.prev("li");
				prev.css({"display":"block","z-index":1,"top":"auto","bottom":"100%"});
			}
			//var downY=e.pageY;
			var downY=event.touches[0].pageY;
			var newY;
			//$(document).on("mousemove",function(e){//mousemove,touchmove
			$(document).on("touchmove",function(e){//mousemove,touchmove
				//newY=e.pageY-downY;
				newY=event.touches[0].pageY-downY;
				if(newY<0){//往上划
					if(next){
						next.css("top",$(document).height()+newY);
						TweenMax.killTweensOf($("#moveArrow"));
						$("#moveArrow").removeAttr("style").css("bottom",-newY);
					}
				}
				else{//往下划
					if(prev){
						prev.css("bottom",$(document).height()-newY);
						TweenMax.killTweensOf($("#moveArrow"));
						$("#moveArrow").removeAttr("style").css("bottom",-newY);
					}
				}
				//.css({transition:"0s ease-out",transform:"translate("+gotoY+"px)"});
			});
			//$(document).on("mouseup",function(e){//mouseup,touchend
			$(document).on("touchend",function(e){//mouseup,touchend
				$(document).off("touchmove touchend");//
				if(newY<=-$(document).height()/3&&next){
					lock=true;
					TweenMax.to(next,.5,{top:0,ease:Power2.easeOut,onComplete:function(){flipOK("next");}});
					TweenMax.to($("#moveArrow"),.5,{bottom:$(document).height(),ease:Power2.easeOut,onComplete:function(){
						$("#moveArrow").removeAttr("style").css("bottom",-$("#moveArrow").height());
						moveArrow_startPlay();
					}});
				}
				else if(newY>=$(document).height()/3&&prev){
					lock=true;
					TweenMax.to(prev,.5,{bottom:0,ease:Power2.easeOut,onComplete:function(){flipOK("prev");}});
					//TweenMax.to($("#moveArrow"),.5,{top:-30,ease:Power2.easeIn});
					moveArrow_startPlay();
				}
				else{//flip失败
					if(next){
						TweenMax.to(next,.2,{top:"100%",ease:Power2.easeInOut});
						moveArrow_startPlay();
					}
					if(prev)TweenMax.to(prev,.2,{bottom:"100%",ease:Power2.easeInOut});
				}
			});//touchend
			return false;
			//e.preventDefault();
			//e.stopPropagation();
		}
	});
	
	/*---------------------------------------------------可拖动翻页箭头动画提示---------------------------------------------------------------*/

	
	//setInterval(Darrow,1000);
});

function moveArrow_startPlay(){
	if($("#moveArrow")){
		TweenMax.to($("#moveArrow"),.5,{bottom:10,ease:Power2.easeOut,onComplete:function(){
			TweenMax.to($("#moveArrow"),.5,{bottom:0,ease:Power2.easeIn,yoyo:true,repeat:-1});
		}});
	}
}

function Darrow(){
	$(".ico_dArrowR").toggleClass("ico_dArrowR_hover");
}

function ShowMessage(c){
	content =  "<div class='showmessage'>"+c+"</div>"
	$("body").append(content);
	$(".showmessage").fadeIn();
	setTimeout("HideMessage()", 2000);
}

function HideMessage(){
	$(".showmessage").fadeOut().remove();
}



