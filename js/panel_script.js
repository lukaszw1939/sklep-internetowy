$(function(){
	$("#konto_dialog").dialog({
		autoOpen: false, width: 600
	});
	
	$("#konto").click(function(){
		$('#konto_dialog').dialog("open");
	});
	
	$("#produkty").click(function(){
		$.ajax({
			url : "../panel/produkty.php",
			success : function(data){
				$("#content").html(data);
			}
		});
	});
	
	$("#lista-produktow").click(function(){
		$.ajax({
			url : "../panel/lista.php",
			success : function(data){
				$("#content").html(data);
			}
		});
	});
	
	$("#dodaj_do_koszyka").click(function(){
		$.ajax({
			url : "../panel/dodaj_do_koszyka.php",
			success : function(data){
				$("#content").html(data);
			}
		});
	});
	
	$("#produkty_czekające").click(function(){
		$.ajax({
			url : "../panel/produkty_czekające.php",
			success : function(data){
				$("#content").html(data);
			}
		});
	});
	
	$("#produkty_zaakceptowane").click(function(){
		$.ajax({
			url : "../panel/produkty_zaakceptowane.php",
			success : function(data){
				$("#content").html(data);
			}
		});
	});
	
});
