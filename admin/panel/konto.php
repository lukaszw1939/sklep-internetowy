<?php
	session_start();
	ob_start();
	include("../db_login.php");
	var_dump($_POST);
	$names = $_POST["names"];
	$surname = $_POST["surname"];
	$id_worker = $_SESSION["user_id"];
	$_SESSION["user_name"] = $names;
	$_SESSION["user_last_name"] = $surname;
	$zapytanie = mysqli_query($conn2, "UPDATE workers SET surname='$surname', names = '$names' WHERE id_worker = '$id_worker'");
	header("Location: index.php");
	ob_end_flush();
?>