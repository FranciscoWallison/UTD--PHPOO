<?php 
	ini_set("display_errors", 1);
	error_reporting(E_ALL | E_PARSE);
	//Chamando conexão com Banco
	include_once('connect.php');

	$name = $_POST['register_name'];
	$email = $_POST['register_email'];
	$cpf = $_POST['register_cpf'];
	$phone = $_POST['register_phone'];

	//Comando de Inserção de Registro no Banco
	$query = "INSERT INTO `tb_registers` (
				`register_name`,
				`register_email`,
				`register_cpf`,
				`register_phone`)
			VALUES (
				'$name',
				'$email',
				'$cpf',
				'$phone')";
	echo $query;
	var_dump($connect);
exit();
	//Enviando os dados
	mysqli_query($, $query) or die(mysqli_error($connect)):

