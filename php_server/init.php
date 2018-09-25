<?php
	//$id = $_GET['id'];
	
	$conexao = mysql_connect('localhost','root','');
	if (!$conexao) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	
	mysql_select_db('HiFootball',$conexao);

?>