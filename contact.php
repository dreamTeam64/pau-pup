<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset = "utf-8"/>
	<title>Pau'pup</title>
	<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
	<link href="mobile.css" rel="stylesheet" type="text/css" media="all">
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
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/maps.js"></script>
</head>
<body>
	<div id="global">
		<div id="menu">
			<div id="Logo">
				<a href="index.php"><img src="img/LOGO.png"></a>
			</div>
			<span id="menuBut" class="glyphicon glyphicon-menu-hamburger"></span>
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
				<?php 
					if (isset($_GET['res'])) {
						if ($_GET['res'] == 1) {
							echo "<center><strong>Le formulaire à bien été envoyé !</strong></center>";
						}
					}
				?>
				
				<h1><center><strong>Vous souhaitez nous contacter ?</strong></center></h1>
				<br>
				<p>Veuillez remplir ce formulaire afin que nous puissions vous répondre.</p>
				<br>
				<h2><center>Formulaire de contact</center></h2>
				<br>
				<br>
				<h3>Informations de contact:</h3>
				<form method="post" action="forms/traitement.php">
					<div class="Form">
						<label for="Email">Email<font color="red">*</font></label>
						<input type="Email" name="mail" class="form-control" id="InputEmail" required="required" placeholder="@">
					</div>
					<br>
					<div class="Form">
						<label for="Surname">Nom<font color="red">*</font></label>
						<input type="Surname" name="nom" class="form-control" id="InputSurname" required="required" placeholder="Nom">
					</div>
					<br>
					<div class="Form">
						<label for="Name">Prénom<font color="red">*</font></label>
						<input type="Name" name="prenom" class="form-control" id="InputName" required="required" placeholder="Prénom">
					</div>
					<br>
					<div class="Form">
						<label for="People">Vous êtes ?<font color="red">*</font></label>
						<select id="Menu" name="raison" class="form-control">
							<option>Entreprise</option>
							<option>Artiste</option>
							<option>Autre</option>
						</select>
						<br>
						<br>
					</div>
					<div class="FormText">
						<label for="Description">Description: <font color="red">*</font></label>
						<textarea class="form-control" name="text" rows="10" required="required" placeholder="Décrivez votre projet afin que nous puissions vous répondre le plus rapidement possible"></textarea>
					</div>
					<br>
					<div class="Button">
						<button type="Submit" class="btn btn-default">Envoyer votre demande</button>
					</div>
				</form>
			</div>
			<div id="map" class="section"></div>
		</div>
		<div id="footer">
			copyright © 2016
		</div>
	</div>
<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP5-_PMQlai4erT9whJ8dmKxYKfj1g9Gs&callback=initMap">
</script>
</body>
<html>