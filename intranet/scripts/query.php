<?php
	require 'db.class.php';
	$DB = new DB('localhost','root','','form');
	
	$valeur = $_GET['value'];

	$tab = $DB -> query("SELECT * FROM contact WHERE nom LIKE '%".$valeur."%' OR prenom LIKE '%".$valeur."%'");

	foreach ($tab as $donnee) {
		?>
			<tr>
				<td><?php echo $donnee['id'] ?></td>
				<td><?php echo $donnee['nom'] ?></td>
				<td><?php echo $donnee['prenom'] ?></td>
			</tr>
		<?php
	}
?>