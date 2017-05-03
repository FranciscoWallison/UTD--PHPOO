<?php
	//Chamando conexão com Banco
	include_once 'connect.php';

	//Arquivo 
	$table = "tb_registers";

	//Arquivo pai de inserção
	$query = "INSERT INTO `$table` (";

	//Tratando os campos 
	$fields = array_keys($_POST);

	//Transformanco os campos em string
	$fields = implode("`, `" , $fields);

	//2º parte de query
	$query .= "`$fields`) VALUES (";

	//Tratar os VALUES
	$values = implode("', '", $_POST );

	//3º parte query
	$query .= "'$values')";
	
	var_dump($query);