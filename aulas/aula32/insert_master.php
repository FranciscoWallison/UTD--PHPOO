<?php
	//Chamando conexão com Banco
	include_once 'connect.php';

	//Arquivo 
	$table = $_POST['tb_name'];

	//Removendo o indice que guarda a tb_name
	unset($_POST['tb_name']);

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

//enviar para o banco de dados!
	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

	if($result){
		header("location: form.html?success=insert_ok");
	}else{
		header("location: form.html?error=insert_error");
	}
