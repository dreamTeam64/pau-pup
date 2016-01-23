<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=form','root','getht1bluray');
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
            'mail' => $mail,
            'nom' => $nom,
            'prenom' => $prenom,
            'raison' => $raison,
            'description' => $description
        ));

	echo $mail;

	
	?>