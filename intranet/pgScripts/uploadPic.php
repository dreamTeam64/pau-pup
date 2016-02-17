<?php 
	$maxsize = $_POST['sizeMax'];
	$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
	if ($_FILES['icone']['size'] > $maxsize){
		echo "Le fichier est trop gros <br>";
	}
	else{
		echo "taille de fichier correct <br>";
		echo "taille de l image: {$_FILES['icone']['size']} <br>";
		echo "nom de l'image: {$_FILES['icone']['name']} <br>";
		$extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'],'.'),1));
		echo "l'extension de l'image est $extension_upload <br>";
		if (in_array($extension_upload,$extensions_valides)){
			echo "Extension correcte <br>";
			$nom = "img/image.{$extension_upload}";
			echo utf8_encode("$nom <br>");
			$resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);
			echo "$resultat <br>";
		} 
		else{
			echo "extension incorrect <br>";
		}
	}
	header('Location: ../playground.php');
  	exit();
?>