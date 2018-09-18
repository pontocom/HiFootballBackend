<?php
	$nome = $_POST['nome'];
	$morrada = $_POST['morrada'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$cp = $_POST['cp'];
	$data_n = $_POST['data'];
	$id_f = $_POST['id'];
	
	$conexao = mysql_connect('localhost','root','');
	if (!$conexao) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	mysql_select_db('Loja',$conexao);
	$sql = "INSERT INTO ut (id, Nome, morrada, email, password, cp, data_nascimento, id_funcao) VALUES (NULL, '$nome', '$morrada', '$email', '$password', '$cp', '$data_n', '$id_f')";
	if (mysql_query($sql)) {
    	echo "1";
	} else {
    	echo "Error: " . $sql . "<br>" . mysql_error($conexao);
    	
    /* close connection */
	mysql_close($conexao);
}
?>