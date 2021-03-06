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
			<div id="WhosOnline"></div>
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
				<p>
					Bonjour <?php echo "{$_SESSION['pseudo']}" ?>
				</p>
				<p>
					Dernière nouveauté ! Ajoutez une photo de profile !
				</p>
				<form class="form-inline" method="post" action="scripts/upImg.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="sr-only" for="exampleInputPassword3">Fichier</label>
						<input type="file" class="form-control" name="icone" id="icone">
						<input type="hidden" name="id" value="<?php echo "{$_SESSION['id']}" ?>">
						<input type="hidden" name="sizeMax" value="1048576" />
					</div>
					<button type="submit" class="btn btn-default">envoyer</button>
				</form>

				<?php include 'scripts/pictProf.php' ?>
			</div>
		</div>
	</div>
</body>