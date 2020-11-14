$(function(){
	$("#konto_dialog").dialog({
		autoOpen: false, width: 600
	});
	
	$("#konto").click(function(){
		$('#konto_dialog').dialog("open");
	});
	
	$("#produkty").click(function(){
		$.ajax({
			url : "../sklep-internetowy/panel/blogi.php",
			success : function(data){
				$("#content").html(data);
			}
		});
	});
});
