<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=intranet','root','getht1bluray');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$mail = $_POST['mail'];
	$mdpBis = $_POST['mdpBis'];
	$mdp = $_POST['mdp'];

	if ($mdp == $mdpBis) {
		$insertion = $bdd ->prepare('INSERT INTO clients(mail,mdp) VALUES (:mail,:mdp)');

		$insertion->execute(array(
	            'mail' => $mail,
	            'mdp' => $mdp,
	        ));

		header('Location: /connexion.php');
		exit;
	} else {
		header('Location: /inscription.php?error=1');
		exit;
	}
	
	

	
	?>