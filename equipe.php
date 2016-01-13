<!DOCTYPE html>
<html ng-app="monApp">
<head>
	<meta charset = "utf-8"/>
	<title>Pau'pup</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
	<script type="text/javascript" src="js/mbre.js"></script>
</head>
<body>
	<div id="global">
		<div id="menu">
			<div id="Logo">
				<li><a href="#"><strong>Pau'pup</strong></a></li>
			</div>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="equipe.php">Equipe</a></li>
				<li><a href="#">PortFolio</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div id="wrapper">
			<div ng-controller="mbre">
				<li ng-repeat="mb in members">
					{{mb}}

				</li>
					
				
			</div>
		</div>

		<div id="footer">
			copyright © 2016
		</div>
	</div>
</body>