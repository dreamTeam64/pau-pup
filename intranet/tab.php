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
		<tr>
			<td><?php echo $donnees['mail'] ?></td>
			<td><?php echo $donnees['nom'] ?></td>
			<td><?php echo $donnees['prenom'] ?></td>
			<td><?php echo $donnees['raison'] ?></td>
		</tr>
		<p><strong>Description:</strong></p>
		<br>
		<?php echo $donnees['description'] ?>
	<?php
	}

	$rep -> closeCursor();

	?>
