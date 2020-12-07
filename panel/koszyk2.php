

<?php
	session_start();
	include("../db_login.php");
	var_dump($_POST);
	$user_login = $_SESSION["user_login"];

	$id_product = $_POST["id_product"];
	$zapytanie2 = "UPDATE `products` SET `who_would_buy` = '$user_login' WHERE `id_product` = '$id_product'";
	$wynik2 = mysqli_query($conn1, $zapytanie2);
	if($wynik2)
	{
		echo "Wykonano zapytanie";
	}
	header("Location: ../index.php");
?>