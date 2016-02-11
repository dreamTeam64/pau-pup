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

	$rep = $bdd -> query('SELECT * FROM contact ORDER BY id DESC');

	$data = "";

	while ($donnees = $rep -> fetch()) {
		$data .= utf8_encode($donnees['nom'])."\t";
		$data .= utf8_encode($donnees['prenom'])."\t";
		$data .= utf8_encode($donnees['mail'])."\t";
		$data .= utf8_encode($donnees['raison'])."\t";
		$data .= utf8_encode($donnees['description'])."\t";
		$data .= "\n";
	}

	


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=save.csv");
header("Pragma: no-cache");
header("Expires: 0");
print "$data";