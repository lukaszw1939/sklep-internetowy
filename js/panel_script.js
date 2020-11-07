$(function(){
	$("#konto_dialog").dialog({
		autoOpen: false, width: 600
	});
	
	$("#konto").click(function(){
		$('#konto_dialog').dialog("open");
	});
	
	$("#twoje-produkty").click(function(){
		$.ajax({
			url: '../panel/blogi.php'.
			success: function(data){
				$('#content').html(data);
			}
		});
	});
});
