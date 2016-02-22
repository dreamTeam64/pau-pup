<?php
	session_start();
	if (!isset($_SESSION['pseudo'])) {
		header('Location: /connexion.php');
		exit();
	}

	try{
		$bdd = new PDO('mysql:host=localhost;dbname=form','root','');
	}
	catch(Exception $e){
		die('Erreur:'.$e->getMessage());
	}

	$rep = $bdd -> query('SELECT * FROM contact ORDER BY id DESC');

	while($donnees = $rep->fetch()){
		?>
		<div id="toolBar">
			<ul>
				<li>
					<form method="post" action="scripts/delete.php">
						<button type="submit" class="btn btn-default">
  							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
						<input type="hidden" name="id" value="<?php echo $donnees['id'] ?>">
					</form>
				</li>
				<li>
					<form>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $donnees['id'] ?>">
  							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</button>
					</form>
				</li>
				<li>
					<form method="post" action="scripts/download.php">
						<button type="submit" class="btn btn-default">
  							<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
						</button>
						<input type="hidden" name="id" value="<?php echo $donnees['id'] ?>">
					</form>
				</li>
				<li>
					<form method="post" action="scripts/sendMail.php">
						<button type="submit" class="btn btn-default">
  							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</button>
						<input type="hidden" name="id" value="<?php echo $donnees['id'] ?>">
					</form>
				</li>
				<li>
					<form method="post" action="scripts/facture.php">
						<button type="submit" class="btn btn-default">
  							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
						</button>
						<input type="hidden" name="id" value="<?php echo $donnees['id'] ?>">
					</form>
				</li>
			</ul>
		</div>

		<p>	<strong>Mail: </strong><?php echo $donnees['mail'] ?></td></p>
		<p>	<strong>Nom: </strong><?php echo $donnees['nom'] ?></td>
			<strong>Prénom: </strong><?php echo $donnees['prenom'] ?></td>
			<strong>Qui est-ce ?: </strong><?php echo $donnees['raison'] ?></td></p>
			<strong>Description:</strong><pre><?php echo $donnees['description'] ?></pre>
		<hr>

		<!-- Modal -->
		<div class="modal fade" id="<?php echo $donnees['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modification</h4>
					</div>
					<form method="post" action="scripts/update.php">
						<div class="Form">
							<label for="Email">Email<font color="red">*</font></label>
							<input type="Email" name="mail" class="form-control" id="InputEmail" value="<?php echo $donnees['mail'] ?>">
						</div>
						<br>
						<div class="Form">
							<label for="Surname">Nom<font color="red">*</font></label>
							<input type="Surname" name="nom" class="form-control" id="InputSurname" required="required" value="<?php echo $donnees['nom'] ?>">
						</div>
						<br>
						<div class="Form">
							<label for="Name">Prénom<font color="red">*</font></label>
							<input type="Name" name="prenom" class="form-control" id="InputName" required="required" value="<?php echo $donnees['prenom'] ?>">
						</div>
						<br>
						<div class="Form">
							<label for="People">Vous êtes ?<font color="red">*</font></label>
							<select id="Menu" name="raison" class="form-control" value="<?php echo $donnees['raison'] ?>">
								<option>Entreprise</option>
								<option>Artiste</option>
								<option>Autre</option>
							</select>
							<br>
							<br>
						</div>
						<div class="FormText">
							<label for="Description">Description: <font color="red">*</font></label>
							<textarea class="form-control" name="text" rows="10" required="required"><?php echo $donnees['description'] ?></textarea>
						</div>
						<div class="modal-footer">
							<input type="hidden" name="id" value="<?php echo $donnees['id']?>">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							<button type="submit" class="btn btn-primary">Modifier</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	<?php
	}

	$rep -> closeCursor();

	?>
