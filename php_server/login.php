<?php
	//$ut = $_GET['user'];
	//$senha = $_GET['pass'];
	$ut = $_POST['username'];
	$senha = $_POST['password'];
	
	require "init.php";
	
	$sql = "select * from Utilizador where Email = '$ut' and Password = '$senha'";
	$resultado = mysql_query($sql) or die ("Erro: " . mysql_error);
	if(mysql_num_rows($resultado) == 1)
	{
		//echo 1;
		while($row = mysql_fetch_array($resultado))
		{
			echo $row['Id'];
		}
	}
	else
		echo "Erro: Tente novamente.";
		
	/* close connection */
	mysql_close($conexao);
?>