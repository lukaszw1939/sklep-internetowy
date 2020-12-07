<?php
session_start();
include("../db_login.php");
echo "<h1><center>Dodaj nowy produkt do sprzedaży. </center></h1>"
?>
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
		<div class="col-sm-10"><input type="number" name="percent_vat" step="0.01" class="form-control" /></div>
	</div>

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Identyfikator producenta</label>
		<div class="col-sm-10"><input type="number" name="id_producents" class="form-control" /></div>
	</div>

	<input type="submit" class="form-control btn btn-primary" id="inputEmail113" value="Dodaj produkt" />
</form>