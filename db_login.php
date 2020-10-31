<?php
	include("head.php");
	
	mysql_connect("localhost", "root", "") or die("Nie można połączyć z bazą danych");
	mysql_select_db("sklep"); or die("Baza o podanej nazwie nie istnieje. Przepraszamy");

?>
