<?php
	require "init.php";
	$return_arr = array();
	$id = $_POST['id'];
	//$idef = $_POST['idef'];

	//$sql = "select * from Jogador WHERE IdE in ($id,$idef)";
	$sql = "select * from Jogador WHERE IdE = $id AND (Selecionados = 1 OR Selecionados = 2)";
	//$sql = "select * from Jogador WHERE IdE = $id AND (Selecionados = 1 OR Selecionados = 2) OR IdE = $idef AND (Selecionados = 1 OR Selecionados = 2)";
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