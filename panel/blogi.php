<?php
session_start();
include("../db_login.php");

if($_SESSION["user_owner_shop"] == ''){
?>

<h3>Nie posiadasz żadnego przedmiotu wystawionego w sklepie. Dodaj produkt do sklepu.</h3>

<form class="form-horizontal" method="post" action="zaloz_bloga.php">

	<div class="form-group">
		<label for="inputEmail13" class="col-sm-2 control-label">Nazwa kategorii</label>
		<div class="col-sm-10"><input type="text" name="name_category" class="form-control" /></div>
	</div>
</form>
<?php
}
?>