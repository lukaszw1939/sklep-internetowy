<?php
	session_start();
	ob_start();

	include("db_login.php");
	include("head.php");

	$login = $_POST["login"];
	$password = $_POST["password"];

	$zapytanie = mysqli_query($conn1, "SELECT login, password FROM clients WHERE login = '$login'");
	$wynik_zapytania = mysqli_fetch_array($zapytanie);

	if($wynik_zapytania[0] != $login){
		echo "User nie istnieje";
	}else{
		$zapytanie2 = mysqli_query($conn1, "SELECT password FROM clients WHERE login = '$login'");
		$wynik_zapytania2 = mysqli_fetch_array($zapytanie2);

		if(password_verify($password, $wynik_zapytania2[0])){
			$zapytanie = mysqli_query($conn1, "SELECT id_client, login, names, surname, avatar, founder FROM clients WHERE login = '$login'");
			$wynik_zapytania = mysqli_fetch_array($zapytanie);

			$_SESSION["zalogowany"] = 1;
			$_SESSION["user_id"] = $wynik_zapytania[0];
			$_SESSION["user_login"] = $wynik_zapytania[1];
			$_SESSION["user_name"] = $wynik_zapytania[2];
			$_SESSION["user_last_name"] = $wynik_zapytania[3];
			$_SESSION["user_avatar"] = $wynik_zapytania[4];
			$_SESSION["user_owner_shop"] = $wynik_zapytania[5];

			header("Location: panel/index.php");
		}else
		{
			echo "Błędne hasło";
		}
	}
	ob_end_flush();
?>
