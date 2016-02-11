<?php
	session_start();
	
	if (!isset($_SESSION['pseudo'])) {
		header('Location: /connexion.php');
		exit();
	}
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=form','root','getht1bluray');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}
	$id = $_POST['id'];
	$mail = $_POST['mail'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$raison = $_POST['raison'];
	$text = $_POST['text'];

	$description = $text;

	$insertion = $bdd ->prepare('UPDATE contact SET mail = :mail, nom = :nom, prenom = :prenom, raison = :raison, description = :description WHERE id = :id');

	$insertion->execute(array(
            'mail' => $mail,
            'nom' => $nom,
            'prenom' => $prenom,
            'raison' => $raison,
            'description' => $description,
            'id' => $id
        ));

	header('Location: ../dashboard.php');
	exit;
?>

