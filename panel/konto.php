<?php
	session_start();
	ob_start();
	include("../db_login.php");
	var_dump($_POST);
	$names = $_POST["names"];
	$surname = $_POST["surname"];
	$id_client = $_SESSION["user_id"];
	$_SESSION["user_name"] = $names;
	$_SESSION["user_last_name"] = $surname;
	$zapytanie = mysqli_query($conn1, "UPDATE clients SET surname='$surname', names = '$names' WHERE id_client = '$id_client'");
	header("Location: index.php");
	ob_end_flush();
?>