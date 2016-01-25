<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset = "utf-8"/>
	<title>Pau'pup</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slide.js"></script>
	


</head>
<body>
	<div id="global">
		<div id="menu">
			<div id="Logo">
				<a href="index.php"><img src="img/LOGO.png" width="250px"></a>
			</div>
			<ul>
				<li>
					<a href="index.php">
  							<span class="glyphicon glyphicon-home" aria-hidden="false"> Accueil</span>
					</a>
				</li>
				<li>
					<a href="equipe.php">
  							<span class="glyphicon glyphicon-user" aria-hidden="true"> Equipe</span>
					</a>
				</li>
				<li>
					<a href="methode.php">
  							<span class="glyphicon glyphicon-pencil" aria-hidden="true"> Méthode</span>
					</a>
				</li>
				<li>
					<a href="contact.php">
  							<span class="glyphicon glyphicon-send" aria-hidden="true"> Contact</span>
					</a>
				</li>
			</ul>
		</div>
		<div id="wrapper">
			<div class="section">
				<h1><font color="red">Inscription:</font></h1>
				<br />
			</div>
			<div class="section" id="form">
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-5">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email*">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-5">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Password*">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-5">
							<input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password*">
						</div>
					</div>
					<div>
						<div class="col-sm-offset-1 col-sm-5">
							<h4><font color="blue">Choisissez une image de profil:</font></h4>
						</div>
						<div class="col-sm-offset-1 col-sm-10">
							<label class="file"><input type="file" id="file"><span class="file-custom"></span></label>
						</div>
					</div>
				</form>

				<!-- Je sais pas pourquoi le bandeau du bas recouvre la dernière division -->
				<br />
				<br />
				<br />
				<br />

			</div>
		</div>
		<div id="footer">
			copyright © 2016. Made with <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
		</div>
	</div>
</body>