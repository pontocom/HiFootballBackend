<?php
	$IdJ = $_POST['IdJ'];
	$IdEv = $_POST['IdEv'];
	$cgolo = $_POST['cgolo'];
	$cremate = $_POST['cremate'];
	$cdesarme = $_POST['cdesarme'];
	$cfalta = $_POST['cfalta'];
	$ccanto = $_POST['ccanto'];
	$fgolo = $_POST['fgolo'];
	$fremate = $_POST['fremate'];
	$fdesarme = $_POST['fdesarme'];
	$ffalta = $_POST['ffalta'];
	$fcanto = $_POST['fcanto'];
	$cposse = $_POST['cposse'];
	$fposse = $_POST['fposse'];
	
	require "init.php";

	$sql = "INSERT INTO EventoEquipa (id, IdE, IdEv, Golo_C, Golo_V, Remate_C, Remate_V, Desarme_C, Desarme_V, Falta_C, Falta_V, Canto_C, Canto_V, Posse_de_Bola_C, Posse_de_Bola_V) VALUES (NULL, '$IdJ', '$IdEv', '$cgolo', '$fgolo', '$cremate', '$fremate', '$cdesarme', '$fdesarme', '$cfalta', '$ffalta', '$ccanto', '$fcanto', '$cposse', '$fposse')";
	if (mysql_query($sql)) {
    	echo mysql_insert_id();
	} else {
    	echo "Error: " . $sql . "<br>" . mysql_error($conexao);
    	
    /* close connection */
	mysql_close($conexao);
}
?>