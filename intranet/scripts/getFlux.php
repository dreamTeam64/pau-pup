<?php 	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=news','root','');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$req = $bdd -> query('SELECT * FROM post ORDER BY id DESC');

	while ($donnee = $req -> fetch()){
	?>
	<div id="<?php echo $donnee['id'] ?>">
		<span class="date"><?php echo $donnee['date'] ?>:</span>
		<span class="titre"><?php echo $donnee['titre'] ?> !</span>
		<p>
			<?php echo $donnee['contenu'] ?>
		</p>
	</div>
 	<?php 

 	}

 	$req -> closeCursor();
	?>