<?php
	include("db_login.php");
	var_dump($_POST);
	$login = $_POST["login"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	
	$zapytanie =mysqli_query($conn1, "INSERT INTO clients(id_address, login, password) VALUES (1, '$login', '$password')");
	header("Location: index.php");
	
?>