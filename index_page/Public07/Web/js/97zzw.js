$(document).ready(function() {
				

			/*	简化版示例	*/
					
/*			$("#nav li a").wrapInner( '<span class="out"></span>' );*/
			
			$("#nav li a").each(function() {
				$('<span class="over">' +  $(this).text() + '</span>' ).appendTo( this );
			});

			$("#nav li a").hover(function() {
				$(".out",this).stop().animate({'top':'68px'},200); // 向下滑动 - 隐藏
				$(".over",this).stop().animate({'top':'0px'},200); // 向下滑动 - 显示

			}, function() {
				$(".out",this).stop().animate({'top':'0px'},200); // 向上滑动 - 显示
				$(".over",this).stop().animate({'top':'-68px'},200); // 向上滑动 - 隐藏
			});

		});
