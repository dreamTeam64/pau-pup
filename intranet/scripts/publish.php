<?php 
	

	//connexion

	try{
		$bdd = new PDO('mysql:host=localhost;dbname=news','root','');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	//variables

	$date = $_POST['date'];
	$titre = $_POST['titre'];
	$contenu = $_POST['text'];

	//insertion

	$insertion = $bdd ->prepare('INSERT INTO post(date,titre,contenu) VALUES (:date,:titre,:contenu)');

	$insertion->execute(array(
            'date' => $date,
            'titre' => $titre,
            'contenu' => $contenu
        ));
	header('Location: ../actualite.php');
	exit;
?>

