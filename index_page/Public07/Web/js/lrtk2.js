
(function ($) {
	$(function () {

		sideSlider(); //×ó²àÊúµ¼º½
	});
	function sideSlider() {
		if (!$(".product_ftn-side dl").length) {
			return false;
		}
		var $aCur = $(".product_ftn-side dl").find(".cur a"),
			$targetA = $(".product_ftn-side dl dd a"),
			$sideSilder = $(".side-slider"),
			curT = $aCur.position().top+1;
		$sideSilder.stop(true, true).animate({
			"top" : curT
		});
		$targetA.mouseenter(function () {
			var posT = $(this).position().top+1;
			$sideSilder.stop(true, true).animate({
				"top" : posT
			}, 240);
		}).parents(".product_ftn-side").mouseleave(function (_curT) {
			_curT = curT
				$sideSilder.stop(true, true).animate({
					"top" : _curT
				});
		});
	};
	
})(jQuery);