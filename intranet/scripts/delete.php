<?php
	require 'db.class.php';
	$DB = new DB('localhost','root','','form');
	
	$id = $_POST['id'];
	$DB -> del($id,'contact');

	header('Location: ../dashboard.php');
	exit;
?>