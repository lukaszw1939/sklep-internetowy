$(function(){
	$("#konto_dialog").dialog({
		autoOpen: false, width: 600
	});
	
	$("#konto").click(function(){
		$('#konto_dialog').dialog("open");
	});
});
