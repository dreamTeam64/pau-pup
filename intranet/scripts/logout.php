<?php 
	session_start();
	session_destroy();
	echo utf8_decode("vous avez été deconnecté");
	header('Location: /index.php');
	exit();
?>