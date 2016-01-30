 
<!DOCTYPE html>
<html lang="fr">
<head>
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
	


</head>
<body>
	<div id="global">
		<div id="menuDash">
			<ul>
				<li><a href="/index.php"><font color="#00FF00">pau'pup</font></a></li>
				<li><a href=""><font color="#00FF00">deconnexion</font></a></li>
			</ul>
		</div>
		<div id="wrapperDash">
			<h1>DASHBOARD</h1>
			<hr color="blue">
			<div id="OptDash">
				<div id="tab">
						<?php 
							include 'tab.php';
						?>
				</div>	
			</div>
		</div>
		<div id="footerDash">
			
		</div>
	</div>
</body>