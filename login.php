<?php
	include("db_login.php");
	$login = $_POST["login"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	
	$zapytanie = mysqli_query($conn1, "SELECT login FROM clients WHERE login = '$login'");
	$wynik_zapytania = mysqli_fetch_array($zapytanie);
	
	if($wynik_zapytania[0] != $login){
		echo "User nie istnieje";
	}else{
		$zapytanie = mysqli_query($conn1, "SELECT password FROM clients WHERE login = '$login'");
		$wynik_zapytania = mysqli_fetch_array($zapytanie);
		
		if($password = $wynik_zapytania[0]){
			echo "Zalogowany";
		}else{
			echo "Błędne hasło";
		}
	}
?>