<?php
	session_start();
	ob_start();
	
	$_SESSION["zalogowany"] = 0;
	header("Location: ../index.php");
	ob_end_flush();
?>