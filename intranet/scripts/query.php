<?php
	require 'db.class.php';
	$DB = new DB('localhost','root','','form');
	
	$valeur = $_GET['value'];

	$DB -> query("SELECT * FROM contact WHERE nom LIKE '%".$valeur."%' OR prenom LIKE '%".$valeur."%'");
?>