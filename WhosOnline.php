<?php
	mysql_connect("localhost",'root','');
	mysql_select_db("people");

	$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connected WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
	$donnees = mysql_fetch_array($retour);

	if ($donnees['nbre_entrees'] == 0){
	    mysql_query('INSERT INTO connected VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
	}
	else{
	    mysql_query('UPDATE connected SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
	}

	mysql_query('DELETE FROM connected WHERE timestamp < ' . $timestamp_5min);

?>