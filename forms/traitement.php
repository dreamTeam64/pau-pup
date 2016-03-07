<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=form','root','');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$mail = $_POST['mail'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$raison = $_POST['raison'];
	$text = $_POST['text'];

	$description = $text;

	$insertion = $bdd ->prepare('INSERT INTO contact(mail,nom,prenom,raison,description) VALUES (:mail,:nom,:prenom,:raison,:description) ');

	$insertion->execute(array(
            'mail' => htmlspecialchars($mail),
            'nom' => htmlspecialchars($nom),
            'prenom' => htmlspecialchars($prenom),
            'raison' => htmlspecialchars($raison),
            'description' => htmlspecialchars($description)
        ));

	header('Location: /contact.php?res=1');
	exit;

	
	?>