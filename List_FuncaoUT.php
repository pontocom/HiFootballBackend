<?php
	require "init.php";
	$return_arr = array();

	$sql = "select * from FuncaoUT ";
	$resultado = mysql_query($sql) or die ("Erro ;" . mysql_error);
	if(mysql_num_rows($resultado) > 0)
	{
		while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
			$array = $row;
			//$array['Id'] = $row['Id'];
			//$array['Nome'] = $row['Nome'];
    		//printf("ID: %s  Name: %s", $row[0], $row[1]);
    		//printf("<br />");  
    		array_push($return_arr,$array);
		}
		echo json_encode($return_arr);
	}
	else
		echo 0;
		
	/* close connection */
	mysql_close($conexao);
?>