<?php 
				try{
					$bdd = new PDO('mysql:host=localhost;dbname=intranet','root','');
				}
				catch(Exception $e){
					die('Erreur:'.$e->getMessage());
				}

				$req = $bdd -> query("SELECT image.chemin AS 'chemin' FROM image JOIN clients ON image.id_client = clients.id WHERE clients.id = {$_SESSION['id']} ORDER BY image.id DESC");


				$donnee = $req -> fetch();
				echo "<img src='{$donnee['chemin']}'' width='100px'></img>";
			

				?>