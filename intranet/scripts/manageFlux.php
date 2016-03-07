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
	<div id="toolBar">
			<ul>
				<li>
					<form method="post" action="scripts/delete.php">
						<button type="submit" class="btn btn-default">
  							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
						<input type="hidden" name="id" value="<?php echo $donnee['id'] ?>">
					</form>
				</li>
				<li>
					<form>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $donnee['id'] ?>">
  							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</form>
				</li>
			</ul>
		</div>

		<span class="date"><?php echo $donnee['date'] ?>:</span>
		<span class="titre"><?php echo $donnee['titre'] ?> !</span>
		<p>
			<?php echo $donnee['contenu'] ?>
		</p>
		<hr>

		<!-- Modal -->
		<div class="modal fade" id="<?php echo $donnee['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modification</h4>
					</div>
					<form method="post" action="scripts/update.php">
						<div class="Form">
							<label for="Email">Email<font color="red">*</font></label>
							<input type="Email" name="mail" class="form-control" id="InputEmail" value="<?php echo $donnee['mail'] ?>">
						</div>
						<br>
						<div class="Form">
							<label for="Surname">Nom<font color="red">*</font></label>
							<input type="Surname" name="nom" class="form-control" id="InputSurname" required="required" value="<?php echo $donnee['nom'] ?>">
						</div>
						<br>
						<div class="Form">
							<label for="Name">Prénom<font color="red">*</font></label>
							<input type="Name" name="prenom" class="form-control" id="InputName" required="required" value="<?php echo $donnee['prenom'] ?>">
						</div>
						<br>
						<div class="FormText">
							<label for="Description">Description: <font color="red">*</font></label>
							<textarea class="form-control" name="text" rows="10" required="required"><?php echo $donnee['description'] ?></textarea>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="id" value="<?php echo $donnee['id']?>">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							<button type="submit" class="btn btn-primary">Modifier</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
 	<?php 

 	}

 	$req -> closeCursor();
	?>