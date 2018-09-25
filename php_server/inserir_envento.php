<?php
	$idec = $_POST['idec'];
	$idev = $_POST['idev'];
	$idu = $_POST['idu'];
	$idc = $_POST['idc'];
	$jornada = $_POST['jornada'];
	$data = $_POST['data'];
	$nomej = $_POST['nomej'];
	$tempo = $_POST['tempo'];
	//$descricao = $_GET['descricao'];
	
	require "init.php";

	$sql = "SELECT * FROM Evento WHERE IdEC = '$idec' AND IdEV = '$idev' AND Data = '$data'";
	$result=mysql_query($sql) or die("Error: " . mysql_error());
	if(mysql_num_rows($result) > 0){

    	while($row=mysql_fetch_array($result))
		{
  			echo $row['Id'];
  		}
	}
	else{

	    $sql = "INSERT INTO Evento (id, IdEC, IdEV, IdU, IdC, Jornada, Data, Nome_do_Jogo, Tempo) VALUES (NULL, '$idec', '$idev', '$idu', '$idc', '$jornada', '$data', '$nomej', '$tempo')";
		if (mysql_query($sql)) {
    		echo mysql_insert_id();
		} 
		else {
    		echo "Error: " . $sql . "<br>" . mysql_error($conexao);
   		}

	}
    /* close connection */
	mysql_close($conexao);
	
?>