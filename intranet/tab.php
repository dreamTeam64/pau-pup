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
			<td>nom</td>
			<td>prenom</td>
			<td>raison</td>
			<td>description</td>
		</tr>
	<?php
	}

	$rep -> closeCursor();

	?>
