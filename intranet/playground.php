<?php 
	session_start();
	if (!isset($_SESSION['pseudo'])) {
		header('Location: /connexion.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="icon" type="image/png" href="/img/favicon.png" />
	<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
	<meta charset = "utf-8"/>
	<title>Pau'pup</title>
	<link href="dashStyle.css" rel="stylesheet" type="text/css" media="all">
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/slide.js"></script>
	<script type="text/javascript" src="/js/mbre.js"></script>


</head>
<body>
	<div id="global">
		<div id="menuDash">
			<ul>
				<li><a href="/index.php"><span class="glyphicon glyphicon-home" aria-hidden="false"> Pau'Pup</span></a></li>
				<li><a href="scripts/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="false"> Deconnexion</span></a></li>
			</ul>
		</div>
		<div id="wrapperDash">
			<div id="WhosOnline">
				
			</div>
			<h1><span class="glyphicon glyphicon-dashboard" aria-hidden="false"> DashBoard</span></h1>
			<hr>
			<nav>
				<ul>
					<li><a href="dashboard.php">DashBoard</a></li>
					<li><a href="playground.php">PlayGround</a></li>
				</ul>
			</nav>
			<hr>
			<div id="OptDash">
				<div id="uploadPic">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Info
						</div>
						<div class="panel-body">
							Création d'un uploader de photo et affichage.
							<ul>
								<li>Verifier taille ficher</li>
								<li>Verifier extension fichier</li>
								
							</ul>
						</div>
					</div>
					<form method="post" action="pgScripts/uploadPic.php" enctype="multipart/form-data">
					     <label for="icone">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
					     <input type="file" name="icone" id="icone" /><br />
					     <input type="hidden" name="sizeMax" value="1048576" />
					     <input type="submit" name="submit" value="Envoyer" />
					</form>
				</div>
			</div>
			<div>
				Affichage de l'image

				<img src="pgScripts/img/image.jpg" width="150px" height="auto">
			</div>
		</div>
		<div id="footerDash">
			PlayGround V1.0
		</div>
	</div>
</body>