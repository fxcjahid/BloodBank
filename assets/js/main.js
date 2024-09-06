(function ($) {
	"use strict";

	// Global use
	$('.datepicker-here').datepicker({
		autoClose: true,
		dateFormat: 'dd-mm-yyyy',
	});

	/** Make select option dropdown */
	$('select').dropdown();

	// page: Home slide
	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 210,
		itemMargin: 5,
		minItems: 2,
		maxItems: 4,
		start: function (slider) {
			$('body').removeClass('loading');
		}
	});


	//Page: View Request
	var $theList = $("#item-group");
	var $gridBtn = $("#view-grid");
	var $listBtn = $("#view-list");

	$theList.addClass("grid");
	$gridBtn.addClass("active");

	$gridBtn.on("click", function () {
		$listBtn.removeClass("active");
		$(this).addClass("active");

		$theList.removeClass("list");
		$theList.addClass("grid");
	});

	$listBtn.on("click", function () {
		$gridBtn.removeClass("active");
		$(this).addClass("active");

		$theList.removeClass("grid");
		$theList.addClass("list");
	});

	// Add active Class in menu
	var url = window.location.href;
	var page = url.substr(url.lastIndexOf('/') + 1);
	$('.nav li a[href*="' + page + '"]').parent().addClass('active');

})(jQuery);