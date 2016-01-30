<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=intranet','root','getht1bluray');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$req = $bdd -> prepare('SELECT * FROM clients where mail = ?');
	$req -> execute(array($_POST['mail']));

	$rep = $req -> fetch();

	if (crypt($_POST['mdp'],$rep['mdp'])==$rep['mdp']) {
			session_start();
			$_SESSION['id'] = $rep['id'];
			$_SESSION['pseudo'] = $rep['mail'];
			header('Location: /intranet/dashboard.php');
			exit();
	}
	else{
		echo "Identification Failure";
	}
?>

<!--Debut de dashboard.php -->

<?php 
  	session_start();
  	if (!isset($_SESSION['pseudo'])) {
  		header('Location: /index.php');
  		exit();
  	}
?>
