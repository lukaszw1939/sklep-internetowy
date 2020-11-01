<?php
	session_start();
	ob_start();
	include("../head.php");
	if($_SESSION["zalogowany"]==1){
		echo $_SESSION["user_id"] . "<br />" . $_SESSION["user_login"];
	}else{
		header("Location: ../index.php");
	}
	ob_end_flush();
?>