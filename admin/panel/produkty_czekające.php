<?php
session_start();
include("../db_login.php");

$user_login=$_SESSION["user_login"];

$zapytanie = 'SELECT * FROM lista';
$wynik = mysqli_query($conn2, $zapytanie);

echo "<table border='1px dashed brown'>";
while($row = mysqli_fetch_array($wynik))
{
	if($row["who_would_buy"]!="") 
	{
	echo "<tr>";
		echo "<td>".$row["id_product"]."</td>";
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

<form class="form-horizontal" method="post" action="akceptuj.php">
Podaj id produktu: <input type="number" name="id_product"/>
<div class="col-sm-10"><input type="submit" class="form-control btn btn-primary" id="inputEmail3" value="Zatwierdź transakcję" /></div>
</form>