<?php
	session_start();
	ob_start();

	include("db_login.php");
	include("head.php");
	var_dump($_POST);
	$login = $_POST["login"];
	$password = $_POST["password"];

	$zapytanie = mysqli_query($conn2, "SELECT login, password FROM workers WHERE login ='$login' AND password='$password'");
	$wynik_zapytania = mysqli_fetch_array($zapytanie);

	if($zapytanie){
			$zapytanie = mysqli_query($conn2, "SELECT id_worker, login, names, surname FROM workers WHERE login = '$login'");
			$wynik_zapytania = mysqli_fetch_array($zapytanie);

			$_SESSION["zalogowany"] = 1;
			$_SESSION["user_id"] = $wynik_zapytania[0];
			$_SESSION["user_login"] = $wynik_zapytania[1];
			$_SESSION["user_name"] = $wynik_zapytania[2];
			$_SESSION["user_last_name"] = $wynik_zapytania[3];
			$_SESSION["user_avatar"] = $wynik_zapytania[4];
			$_SESSION["user_owner_shop"] = $wynik_zapytania[5];
			
			header("Location: panel/index.php");
	}else{
		echo "Błędne hasło";
		}
	
	ob_end_flush();
?>
