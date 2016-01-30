<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=form','root','getht1bluray');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$rep = $bdd -> query('SELECT * FROM contact');

	while($donnees = $rep->fetch()){
		?>
		<p>	<strong>Mail:</strong><?php echo $donnees['mail'] ?></td></p>
		<p>	<strong>Nom:</strong><?php echo $donnees['nom'] ?></td>
			<strong>Prénom:</strong><?php echo $donnees['prenom'] ?></td>
			<strong>Raison:</strong><?php echo $donnees['raison'] ?></td></p>
		<p>	<strong>Description:</strong><?php echo $donnees['description'] ?></p>
		<hr color="blue">
	<?php
	}

	$rep -> closeCursor();

	?>
