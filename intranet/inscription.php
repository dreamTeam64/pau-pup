<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=intranet','root','getht1bluray');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];

	$insertion = $bdd ->prepare('INSERT INTO clients(mail,mdp) VALUES (:mail,:mdp)');

	$insertion->execute(array(
            'mail' => $mail,
            'mdp' => $mdp,
        ));

	header('Location: /connexion.php');
	exit;

	
	?>