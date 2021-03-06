<?php include('WhosOnline.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="icon" type="image/png" href="/img/favicon.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
	<meta charset = "utf-8"/>
	<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
	<meta name="description" content="Création de sites sur mesure, faites nous confiance pour réaliser votre prochaine application Web !" />
	<meta name="keywords" content="paupup,pau,web,pup,internet,creation" />
	<title>Paupup</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
	<link href="mobile.css" rel="stylesheet" type="text/css" media="all">
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slide.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/act.js"></script>
</head>
<body>

	<div id="global">
		<div id="menu">
			<div id="Logo">
				<a href="index.php"><img src="img/LOGO.png" alt="PauPup"></a>
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
			
			<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><center>Nous vous invitons à reporter les failles de sécurité dans la page contact, nous vous en remercions !</center></div>

			<div id="actualite">
			</div>

			<div id="presentation" class="section">
				<center><h3>Création de site sur mesure et Transition Numérique ! </h3></center>
				<br>
				<p>
					Qui mieux que des étudiants passionnés par leur formation peuvent mettre à profit leurs connaissances ?
				</p>
				<p>
					L'économie et l'Informatique sont les points forts de notre "Organisation" ! Nous sommes aptes à vous
					aider dans la communication, et à vous épauler sur le côté créatif !
				</p>
			</div>
			<hr color="black" width="300px">
			<div id="solution" class="section">
				<center><h3>Nos Solutions !</h3></center>
				<br>
				<p>
					L'interêt de nous choisir pour vous faire connaitre sur le Web est que nous faisons des sites légers
					et donc rapides à charger ! Le temps c'est de l'argent et on le sait !
				</p>
				<p>
					Nous tendons à manipuler les dernières technologies pour adapter aux mieux nos solutions !
				</p>
					<br><br>
					<div class="slideshow">
					
						<ul>
							<li>
								<img src="img/js.png" height="100" alt="" width="100px" height="auto">
							</li>
							<li>
								<img src="img/angular.png" height="100" alt="" width="100px" height="auto" >
							</li>
							<li>
								<img src="img/css.png" height="100" alt="" width="100px" height="auto">
							</li>
							<li>
								<img src="img/boot.png" height="100" alt="" width="100px" height="auto">
							</li>
							<li>
								<img src="img/git.png" height="100" alt="" width="100px" height="auto">
							</li>
						</ul>
					</div>
				</p>
				<p>
					Nous hebergeons nos sites sur des Raspberry. <br/>
					<center><img src="img/rasp.png" height="100" width="100"></center>
				</p>
				<p>
					Elles ont l'avantage de consommer peu et d'être puissante.
					Vous pouvez heberger votre site vous même si vous disposez d'une connection fiable, sinon un serveur
					peut être choisit lors de l'entretien.
				</p>
			</div>
			<hr color="black" width="300px">
			<div id="profileEnt" class="section">
			<h3>Profil Recherché</h3>
				<br/>
				<p style="inherit">
					<b><i>Votre identité</i></b>
					<ul>
						<li>Professionnel (ex: PME)</li>
						<li>Particulier (ex: photographe,musicien ...)</li>
						<li>Association</li>
						<li>Organisateur d'évènements</li>
					</ul>
				</p>
				<p ><b><i>Lieu</i></b></p>
				<p >
					<ul>
						<li>Pau</li>
						<li>Tarbes</li>
						<li>Biarritz</li>
					</ul>
				</p>
				
			</div>
			
				
			
		</div>

		<div id="footer">
			copyright © 2016. Made with <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
			<br>
			<a href="/intranet/dashboard.php">intranet</a>
		</div>
	</div>
</body>
</html>