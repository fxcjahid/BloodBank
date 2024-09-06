(function ($) {

	// Global use
	$('.datepicker-here').datepicker({
		autoClose: true,
		dateFormat: 'dd-mm-yy',
	});

	/** Sidebar */
	$(".openbtn").on("click", function () {
		$(".ui.sidebar").toggleClass("very thin icon");
		$(".asd").toggleClass("marginlefting");
		$(".sidebar z").toggleClass("displaynone");
		$(".ui.accordion").toggleClass("displaynone");
		$(".ui.dropdown.item").toggleClass("displayblock");

		$(".logo").find('img').toggle();

	})

	/** Top right bar profile menu dropdown */
	$(".ui.dropdown").dropdown({
		on: "hover"
	});

	/** Make select option dropdown */
	$('select').dropdown();


	/** Data Table */
	$('#data-table').DataTable();

	/** jQuery UI sortable  */
	$("#sortable").sortable();

	/** Update Location */
	$(".updateLocation").on('click', function () {
		var modal = $('#eqwwq');
		modal.find('input[name=id]').val($(this).data('id'));
		modal.find('input[name=title]').val($(this).data('title'));
		modal.find('select[name=city]').val($(this).data('city'));
		modal.find('select[name=state]').val($(this).data('state'));
		modal.find('select[name=country]').val($(this).data('country'));
		modal.find("a[href*='delete']").attr('href', '?delete=' + $(this).data('id'));
	});


})(jQuery);