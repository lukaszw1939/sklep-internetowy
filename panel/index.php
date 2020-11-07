<body>
<?php
	session_start();
	ob_start();
	include("../head.php");
	if($_SESSION["zalogowany"]==1){
?>
<div class="row" style="width: 100%;">
	<div class="col-xs-12 col-sm-6 col-md-8"><div id="content"></div></div>
	<div class="col-xs-6 col-md-4">
		<div class="list-group">
			<a class="list-group-item active" id="konto" href="#konto"">
			<?php 
				if($_SESSION["user_name"] == "")
					echo $_SESSION["user_login"];
				else
					echo $_SESSION["user_name"] . " " . $_SESSION["user_last_name"];
			?></a>
			<a class="list-group-item" id="twoje-produkty" href="#">Twoje produkty</a>
		</div>
	</div>
</div>
<?php	
	}else{
		header("Location: ../index.php");
	}
	ob_end_flush();
?>

	<div id="konto_dialog" title="Zarządzanie kontem">
		<form class="form-horizontal" method="post" action="konto.php">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Imię</label>
				<div class="col-sm-10"><input type="text" name="names" class="form-control" id="inputEmail3" value="<?php echo $_SESSION['user_name']; ?>" /></div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Nazwisko</label>
				<div class="col-sm-10"><input type="text" name="surname" class="form-control" id="inputEmail3" value="<?php echo $_SESSION['user_last_name']; ?>" /></div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Aktualizacja</label>
				<div class="col-sm-10"><input type="submit" class="form-control btn btn-primary" id="inputEmail3" value="Zaktualizuj" /></div>
				
			</div>
		</form>
			<div class="col-sm-10"><button class="btn btn-primary"><a href="logout.php">Wyloguj się</a></button></div>
	</div>
</body>