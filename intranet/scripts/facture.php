<?php
	session_start();
	
	if (!isset($_SESSION['pseudo'])) {
		header('Location: /connexion.php');
		exit();
	}

	try{
		$bdd = new PDO('mysql:host=localhost;dbname=form','root','');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$id = $_POST['id'];

	$req = $bdd -> prepare('DELETE FROM contact where id = :id');

	$data = "";

	$donnees = $rep -> fetch()

/*
nom 	Fontaine	Mail 	pierre.ftn64@gmail.com
prenom	Pierre

heure 	40h
prix/h 	20€

total 	800€ 	






*/
	$data .= "nom \t".utf8_encode($donnees['nom'])."\t \t";
	$data .= "mail \t".utf8_encode($donnees['mail'])."\n";

	$data .= "prenom \t" utf8_encode($donnees['prenom'])."\n";
	$data .= utf8_encode($donnees['raison'])."\t";
	$data .= "\n \n";
	



	


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=save.csv");
header("Pragma: no-cache");
header("Expires: 0");
print "$data";
?>