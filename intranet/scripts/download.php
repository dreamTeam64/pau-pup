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

	$rep = $bdd -> query('SELECT * FROM contact');

	while ($donnees = $rep -> fetch()) {
		$data = $donnees['nom']."\t";
		$data .= $donnees['prenom']."\t";
		$data .= $donnees['mail']."\t";
		$data .= $donnees['raison']."\t";
		$data .= $donnees['description']."\t";
		$data .= "\n";
	}

	


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=save.txt");
header("Pragma: no-cache");
header("Expires: 0");
print "$data";