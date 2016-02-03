<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="icon" type="image/png" href="http://printableletters.org/letterswp/wp-content/uploads/old-english-printable-letter-p.jpg">
	<meta charset = "utf-8"/>
	<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
	<title>Pau'pup</title>
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
</head>
<body>
	<div id="global">
		<div id="menu">
			<div id="Logo">
				<a href="index.php"><img src="img/LOGO.png"></a>
			</div>
			<span id="menuBut" class="glyphicon glyphicon-menu-hamburger" aria-hidden="false"></span>
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
				<center><h1>Prenez le temps de nous connaitre !</h1></center>
				<br>
			</div>
			<div id="membres">
				<div id="photo" class="inlineBox">
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#pierre"><img src="img/social1.svg" class="img-circle" height="120px" width="100px" alt="pierre"></a><br>Fontaine Pierre</li>
						<li><a href="#" data-toggle="modal" data-target="#francois"><img src="img/social2.svg" class="img-circle" height="120px" width="100px" alt="francois"></a><br>Thoraval Francois</li>
						<li><a href="#" data-toggle="modal" data-target="#ludovic"><img src="img/social3.svg" class="img-circle" height="120px" width="100px" alt="ludovic"></a><br>Bouzom Ludovic</li>
					</ul>
						
					<!-- Modal -->
					<div class="modal fade" id="pierre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Fontaine Pierre (20 ans) "Develloper Back End"</h4>
								</div>

								<div class="modal-body">
									<p>
										Etudiant en Informatique à Pau (UPPA).
									</p>
									<p>
										<details>
											<summary><h3>Skills</h3></summary>										<ul>
											<li>JavaScript</li>
											<li>JQuery</li>
											<li>PHP</li>
											<li>HTML5</li>
											<li>CSS3</li>
											<li>MySQL</li>
											<li>C++</li>
										</ul>
										</details>

									</p>
									<p>
										Je travail sous Unix ('OS X' & 'Debian'), j'ai pour projet de poursuivre mes études en robotique.<br>
										En patientant je serais ravi de vous aider sur votre prochaine Application Web.
									</p>
									
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="desc" class="inlineBox">
					<p>
						Parce que savoir qui va prendre en main votre projet est important, nous vous invitons à découvrir nos différents profiles !
					</p>
					<p>
						Vous y verrez en chacun de nous des compétences différentes et alors vous comprendrez que ce sont les "ingrédients" pour reussir la bonne "Vinaigrette" ... en 
						d'autres termes un Projet !
					</p>
					<p>
						Bien sur il faut garder en tête que nous ne sommes pas des professionnels, mais plutot des amateurs averti ayant l'objectif de devenir professionnel.
					</p><br>
					<p>
						<span class="glyphicon glyphicon-console" aria-hidden="true"> <kbd>sudo read cv !</kbd></span>
					</p>
				</div>
				

				<div class="modal fade" id="francois" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Francois Thoraval (age)</h4>
							</div>

							<div class="modal-body">
								Develloper "front end".
								
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="ludovic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Bouzom Ludovic (age)</h4>
							</div>

							<div class="modal-body">
								La vie de ludo
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="guillaume" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Gourrat Guillaume (age)</h4>
							</div>

							<div class="modal-body">
								<p>
									Etudiant en Informatique à Pau (UPPA).
								</p>									
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- img trigger modal -->
			
		</div>

		<div id="footer">
			copyright © 2016
		</div>
	</div>
</body>