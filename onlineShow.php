<?php
	mysql_connect("localhost",'root','');
	mysql_select_db("people");

	$timestamp_5min = time() - (60 * 5);
	
	mysql_query('DELETE FROM connected WHERE timestamp < ' . $timestamp_5min);
	
	$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connected');
	$donnees = mysql_fetch_array($retour);

	echo '<p>Il y a actuellement ' . $donnees['nbre_entrees'] . ' visiteurs connectés sur mon site !</p>';
?>