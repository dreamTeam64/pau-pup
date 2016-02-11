<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=form','root','getht1bluray');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$id = $_POST['id'];

	$req = $bdd -> prepare('DELETE FROM contact where id = :id');
	$req -> execute(array(
		'id' => $id
	));

	header('Location: ../dashboard.php');
  	exit();
?>