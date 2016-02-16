<?php 
	$maxsize = $_POST['sizeMax'];
	$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
	if ($_FILES['icone']['size'] > $maxsize){
		echo "Le fichier est trop gros <br>";
	}
	else{
		echo "taille de fichier correct <br>";
	}

	echo "taille de l image: ";

	$extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'],'.'),1));

	if (in_array($extension_upload,$extensions_valides)){
		echo "Extension correcte";
	} 
	else{
		echo "extension incorrect";
	}
?>