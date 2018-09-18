<?php
	
	$IdEv = $_POST['IdEv'];
	$ts = $_POST['ts'];
	$IdJ = $_POST['IdJ'];
	/*$Remate = $_POST['Remate'];
	$Passe = $_POST['Passe'];
	$Perda_de_Bola = $_POST['Perda_de_Bola'];
	$Corte = $_POST['Corte'];
	$Recuperacao = $_POST['Recuperacao'];
	$Cruzamento = $_POST['Cruzamento'];
	$Lancamento = $_POST['Lancamento'];
	$Canto = $_POST['Canto'];
	$Livre = $_POST['Livre'];
	$Penalty = $_POST['Penalty'];
	$Golo = $_POST['Golo'];
	$btpg = $_POST['btpg'];
	$btlg = $_POST['btlg'];
	$btlancamentog = $_POST['btlancamentog'];
	$btcantog = $_POST['btcantog'];
	$faltao = $_POST['faltao'];
	$faltad = $_POST['faltad'];
	$rematef = $_POST['rematef'];
	$remateb = $_POST['remateb'];
	$agolo = $_POST['agolo'];
	$bolafora = $_POST['bolafora'];
	$pontapebaliza = $_POST['pontapebaliza'];
	$defesa = $_POST['defesa'];
	$camarelo = $_POST['camarelo'];
	$cvermelho = $_POST['cvermelho'];*/
	$IdAcao = $_POST['IdAcao'];
	$IdU = $_POST['IdU'];
	
	require "init.php";
	
	$sql = "INSERT INTO EJ 
			(Id, IdEv, IdJ, ts, IdAcao, IdC) 
			VALUES (NULL, '$IdEv', '$IdJ', '$ts', '$IdAcao', '$IdU')";
	if (mysql_query($sql)) {
    	echo "Inserido!";
	} else {
    	echo "Error: " . $sql . "<br>" . mysql_error($conexao);
    }
    /* close connection */
	mysql_close($conexao);
?>