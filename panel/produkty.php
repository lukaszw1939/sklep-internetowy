<?php
session_start();
include("../db_login.php");
if($_SESSION["user_owner_shop"] == ""){
?>
<?php
	$zapytanie = mysqli_query($conn1, "SELECT id_category, name_category FROM category");
	echo "<div style='float: left'>";
	echo "<table border='1px dashed brown'>";
	echo "<tr><td>id_category</td><td>name_category</td></tr>";
	while($row = mysqli_fetch_row($zapytanie)){
		echo "<tr><td>". $row[0]."</td><td>".$row[1]."</td></tr>";
	}
	echo "</table>";
	echo "</div>";
	$zapytanie2 = mysqli_query($conn1, "SELECT id_producent, name_producent FROM producents");
	echo "<div style='float: left'>";
	echo "<table border='1px dashed brown'>";
	echo "<tr><td>id_producent</td><td>name_producent</td></tr>";
	while($row2 = mysqli_fetch_row($zapytanie2)){
		echo "<tr><td>". $row2[0]."</td><td>".$row2[1]."</td></tr>";
	}
	echo "</table>";
	echo "</div>";
?>
<div style="clear: both">
<h3><center>Nie posiadasz żadnego przedmiotu wystawionego w sklepie. Dodaj produkt do sklepu.</center></h3>
</div>

<form class="form-horizontal" method="post" action="zaloz_sklep.php">

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Identyfikator kategorii</label>
		<div class="col-sm-10"><input type="number" name="id_category" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Nazwa produktu</label>
		<div class="col-sm-10"><input type="text" name="name_product" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Typ</label>
		<div class="col-sm-10"><input type="text" name="type" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Wersja</label>
		<div class="col-sm-10"><input type="text" name="version" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Opis</label>
		<div class="col-sm-10"><input type="text" name="description" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Zdjęcie</label>
		<div class="col-sm-10"><input type="file" name="photo" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Cena netto</label>
		<div class="col-sm-10"><input type="number" name="price_netto" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Cena brutto</label>
		<div class="col-sm-10"><input type="number" name="price_brutto" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Procent VAT <br />(1% zapisuje się 0.01)</label>
		<div class="col-sm-10"><input type="number" name="percent_vat" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Identyfikator producenta</label>
		<div class="col-sm-10"><input type="number" name="id_producents" class="form-control" /></div>
	</div>

	<input type="submit" class="form-control btn btn-primary" id="inputEmail113" value="Dodaj produkt" />
</form>
<?php
}else{
	$user_login = $_SESSION["user_login"];
	$zapytanie = mysqli_query($conn1, "SELECT id_category, name_product, type, version, description, photo,
	price_netto, price_brutto, percent_vat, id_producents FROM products WHERE founder = '$user_login'");
	$wynik_zapytania = mysqli_fetch_array($zapytanie);

	echo "<h3>Dodałeś produkt o nazwie:" . $wynik_zapytania[1] . "</h3>";
	echo "<h4>Typ produktu:" . $wynik_zapytania[2] . "</h4>";
	echo "<h4>Wersja:" . $wynik_zapytania[3] . "</h4>";
	echo "<h4>Opis:" . $wynik_zapytania[4] . "</h4>";
	echo "<h4>Zdjęcie:" . $wynik_zapytania[5] . "</h4>";
	echo "<h4>Cena netto:" . $wynik_zapytania[6] . "</h4>";
	if(file_exists("../sklepy/" . $wynik_zapytania[1] . "/config.xml")){
		echo "Plik konfiguracyjny istnieje!";
	}
	else{
		echo "Brak pliku konfiguracyjnego. Stwórz plik";
	}
}
?>
