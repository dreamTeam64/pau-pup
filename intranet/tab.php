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
		<p> 
			<form method="post" action="delete.php">
				<button type="submit" class="btn btn-default" aria-label="Left Align">
  					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</button>
				<input type="hidden" name="id" value="<?php echo $donnees['id'] ?>">
			</form>
			
			<button type="button" class="btn btn-default" aria-label="Left Align">
  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</button>
		</p>
		<p>	<strong>Mail: </strong><?php echo $donnees['mail'] ?></td></p>
		<p>	<strong>Nom: </strong><?php echo $donnees['nom'] ?></td>
			<strong>Prénom: </strong><?php echo $donnees['prenom'] ?></td>
			<strong>Qui est-ce ?: </strong><?php echo $donnees['raison'] ?></td></p>
		<p>	<strong>Description:</strong><?php echo $donnees['description'] ?></p>
		<hr>
	<?php
	}

	$rep -> closeCursor();

	?>
