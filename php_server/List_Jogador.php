<?php
	require "init.php";
	$return_arr = array();
	$id = $_POST['id'];

	$sql = "select * from Jogador WHERE IdE='$id'";
	$resultado = mysql_query($sql) or die ("Erro ;" . mysql_error);
	if(mysql_num_rows($resultado) > 0)
	{
		while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
			$array = $row;
    		array_push($return_arr,$array);
		}
		echo json_encode($return_arr);
	}
	else
		echo 0;
		
	/* close connection */
	mysql_close($conexao);
?>