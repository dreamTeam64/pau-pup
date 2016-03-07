<?php
	require 'db.class.php';
	$DB = new DB('localhost','root','','intranet');

	$tab = array(
		'mdp' => $_POST['mail']
	);

	$rep = $DB -> queryWithArguments('SELECT * FROM clients where mail = :mdp');

	if (sizeof($rep) =! 0) {
		if (sizeof($rep) = 1) {
			if (crypt($_POST['mdp'],$rep['mdp'])==$rep['mdp']) {
				session_start();
				$_SESSION['id'] = $rep['id'];
				$_SESSION['pseudo'] = $rep['mail'];
				header('Location: /intranet/dashboard.php');
				exit();
			}else{
				header('Location: /connexion.php?error=1');
				exit();
			}
		}else{
			die("There is more than one user");
		}
	}

	
?>

