<?php
session_start();
include("../db_login.php");

$user_login = $_SESSION["user_login"];
$zapytanie1 = "SELECT id_product, name_product, photo, who_would_buy, who_buy FROM lista";
$wynik1 = mysqli_query($conn1, $zapytanie1);
echo "<div style='float: left'>";
echo "<table border='1px dashed brown'>";
while($row = mysqli_fetch_array($wynik1))
{
	if(($row["who_would_buy"]!="") or ($row["who_buy"]!=""))
	{
	
	}
	else
	{
		echo "<tr>";
			echo "<td>". $row["id_product"]." </td>";
			echo "<td>". $row["name_product"]." </td>";
			echo "<td><img src=". $row["photo"]." width='150' height='150'/> </td>";
		echo "</tr>";
	}
}
echo "</table>";

?>
</div>
<div style='float: left'>
<form class='form-horizontal' method='post' action='koszyk2.php'>
Podaj id produktu: <input type="number" name="id_product"/>
<div class="col-sm-10"><input type="submit" class="form-control btn btn-primary" id="inputEmail3" value="Kup" /></div>
</form>
</div>

