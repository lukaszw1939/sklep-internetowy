<?php
	session_start();

	include("db_login.php");
	var_dump($_POST);
	$login = $_POST["login"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	
	$zapytanie ="INSERT INTO workers(id_adress, login, password) VALUES ('1', '$login', '$password')";
	$wynik = mysqli_query($conn2, $zapytanie);
	
	header("Location: index.php");

?>