<?php
	$IdJ = $_POST['IdJ'];
	$IdEv = $_POST['IdEv'];
	$ts = $_POST['ts'];
	$IdU = $_POST['IdU'];
	
	echo $ts;
	
	require "init.php";

	$sql = "INSERT INTO EventoJogador (Id, IdJ, IdEv, ts, IdC) VALUES (NULL, '$IdJ', '$IdEv', '$ts', '$IdU')";
	if (mysql_query($sql)) {
    	echo "Inserido!";
	} else {
    	echo "Error: " . $sql . "<br>" . mysql_error($conexao);
    }
    /* close connection */
	mysql_close($conexao);
	
	/*$IdJ = $_POST['IdJ'];
	$IdEv = $_POST['IdEv'];
	$Remate = $_POST['Remate'];
	$Passe = $_POST['Passe'];
	$Perda_de_Bola = $_POST['Perda_de_Bola'];
	$Corte = $_POST['Corte'];
	$Recuperacao = $_POST['Recuperacao'];
	$Cruzamento = $_POST['Cruzamento'];
	$Lancamento = $_POST['Lancamento'];
	$Canto = $_POST['Canto'];
	$Livre = $_POST['Livre'];
	$Lancamento = $_POST['Penalty'];
	$Golo = $_POST['Golo'];
	
	require "init.php";
	
    $data = json_decode($IdJ, true);

	if (is_array($data['upload_fishes'])) {
    	foreach ($data['upload_fishes'] as $record) {
    		$IdJ = $record['IdJ'];
			$IdEv = $record['IdEv'];
			$Remate = $record['Remate'];
			$Passe = $record['Passe'];
			$Perda_de_Bola = $record['Perda_de_Bola'];
			$Corte = $record['Corte'];
			$Recuperacao = $record['Recuperacao'];
			$Cruzamento = $record['Cruzamento'];
			$Lancamento = $record['Lancamento'];
			$Canto = $record['Canto'];
			$Livre = $record['Livre'];
			$Penalty = $record['Penalty'];
			$Golo = $record['Golo'];
			
			$sql = "INSERT INTO EventoJogador (id, IdJ, IdEv, Remate, Passe, Perda_de_Bola, Corte, Recuperacao, Cruzamento, Lancamento, Canto, Livre, Penalty, Golo) VALUES (NULL, '$IdJ', '$IdEv', '$Remate', '$Passe', '$Perda_de_Bola', '$Corte', '$Recuperacao', '$Cruzamento', '$Lancamento', '$Canto', '$Livre', '$Penalty', '$Golo')";
        	if (mysql_query($sql)) {
   		 		//echo mysql_insert_id();
			} else {
    			echo "Error: " . $sql . "<br>" . mysql_error($conexao);
    		}	
        }
    	//close connection 
		mysql_close($conexao);
	}*/
?>