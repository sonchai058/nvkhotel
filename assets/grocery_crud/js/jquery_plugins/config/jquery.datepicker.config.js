$(function(){
	$('.datepicker-input').datepicker({
			yearRange: "1900:+100",
			dateFormat: js_date_format,
			showButtonPanel: true,
			changeMonth: true,
			changeYear: true
	});
	
	$('.datepicker-input-clear').button();
	
	$('.datepicker-input-clear').click(function(){
		$(this).parent().find('.datepicker-input').val("");
		return false;
	});
	
});