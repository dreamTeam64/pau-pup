<?php
	session_start();
	
	if (!isset($_SESSION['pseudo'])) {
		header('Location: /connexion.php');
		exit();
	}

     $to      = 'pierre.ftn64@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: pierre.ftn64@gmail.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

    header('Location: ../dashboard.php');
  	exit();
 ?>