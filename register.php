<?php
	include("db_login.php");
	
	$login = $_POST["login"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	
	$zapytanie =mysqli_query("INSERT INTO clients(login, password) VALUES ('$login', '$password')");
	header("Location: index.php");
?>