<?php include("head.php") ?>

<body>
	<div id="wrapper">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">

			<div class="jumbotron">
  				<h1>Sklep Internetowy - LukaszenkoShop</h1>
  				<p>Dodaj produkt, którego pragniesz się pozbyć. Pomożemy Ci sprzedać go szybko i za dobrą cenę</p>
  				<p><a class="btn btn-primary btn-lg" role="button">Dodaj produkt</a></p>
			</div>

			</div>
			<div class="col-xs-6 col-md-4">
			
			<div class="jumbotron">
				<h3>Zaloguj się</h3>

				<form method="post" action="login.php">
					<input type="text" name="login" placeholder="login" class="form-control"/> <br />
					<input type="password" name="password" placeholder="hasło" class="form-control"/> <br />
					<input type="submit" class="btn btn-primary" value="Zaloguj się"/>
					<input type="button" class="btn btn-primary" value="Zarejestruj sie" id="register"/>
				</form>
                        </div>


			</div>
		</div>
	</div>

	<div id="register_dialog" title="Załóż konto">
		<form method="post" action="register.php">
			<input type="text" name="login" placeholder="login" class="form-control"/> <br />
			<input type="password" name="password" placeholder="hasło" class="form-control"/> <br />
			<input type="submit" class="btn btn-primary" value="Załóż konto"/>

		</form>
	</div>
</body>
</html>


