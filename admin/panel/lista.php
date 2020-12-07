<?php
session_start();
include("../db_login.php");

$zapytanie = 'SELECT * FROM lista';
$wynik = mysqli_query($conn2, $zapytanie);

echo "<table border='1px dashed brown'>";
while($row = mysqli_fetch_array($wynik))
{
	if(($row["who_would_buy"]!="") or ($row["who_buy"]!=""))
	{
	
	}
	else
	{
		echo "<tr>";
		echo "<td><img src=".$row["photo"]." width='300px'/></td>";
		echo "<td>Nazwa produktu: ".$row["name_product"]."<br />";
		echo "Kategoria: ".$row["name_category"]."<br />";
		echo "Producent: ".$row["name_producent"]."<br />";
		echo "Typ: ".$row["type"]."<br />";
		echo "Wersja: ".$row["version"]."<br />";
		echo "Opis: ".$row["description"]."<br />";
		echo "Cena Netto: ".$row["price_netto"]."<br />";
	echo "</tr>";	
	}
	
}
echo "</table";
?>