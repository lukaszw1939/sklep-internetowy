<?php
	session_start();
	include("../db_login.php");
	var_dump($_POST);
	$id_product = $_POST["id_product"];
	
	$zapytanie2 ="UPDATE products SET who_buy ='1' WHERE id_product = '$id_product'");
	mysqli_query($conn2, $zapytanie2);
	
	header("Location: index.php");
?>