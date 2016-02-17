<?php
	$id = $_POST['id']; //on stock la valeur id_client.
	$maxsize = $_POST['sizeMax'];//on impose la taille max.
	$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );//on gère les extensions valide pour ne pas se retrouver avec un scripts php mal intentionné.
	
	//connexion à la base de donnée
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=intranet','root','');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	if ($_FILES['icone']['size'] > $maxsize){ //verfication de la taille de l'image
		echo "Le fichier est trop gros <br>";
	}
	else {
		$extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'],'.'),1));//recupération de l'extension
		if (in_array($extension_upload,$extensions_valides)){//verification de la validité de l'extension
			chmod("img/", 0733);//verfication de pouvoir ecrire dans le fichier img/
			$nom = "img/{$id}.{$extension_upload}";//creation d'un nom unique pour l'image qui ecrasera une precedente photo de profile du meme utilisateur
			$resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);//on bouge l'image dans le fichier

			$insertion = $bdd ->prepare('INSERT INTO image(id_client,path) VALUES (:id_client,:path)');

			$insertion->execute(array(
	            'id_client' => $id,
	            'path' => $nom,
	        ));
		} 
		else{
			echo "extension incorrect <br>";
		}
	}
	header('Location: ../playground.php');
  	exit();
?>