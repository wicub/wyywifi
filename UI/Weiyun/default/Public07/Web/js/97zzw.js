$(document).ready(function() {
				

			/*	�򻯰�ʾ��	*/
					
/*			$("#nav li a").wrapInner( '<span class="out"></span>' );*/
			
			$("#nav li a").each(function() {
				$('<span class="over">' +  $(this).text() + '</span>' ).appendTo( this );
			});

			$("#nav li a").hover(function() {
				$(".out",this).stop().animate({'top':'68px'},200); // ���»��� - ����
				$(".over",this).stop().animate({'top':'0px'},200); // ���»��� - ��ʾ

			}, function() {
				$(".out",this).stop().animate({'top':'0px'},200); // ���ϻ��� - ��ʾ
				$(".over",this).stop().animate({'top':'-68px'},200); // ���ϻ��� - ����
			});

		});
