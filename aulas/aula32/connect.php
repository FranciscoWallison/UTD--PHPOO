<?php 
	/**
	 * Esse arquivo será responsável pela conexão geral com o banco de dados 
	 * @author: Francisco Wallison 
	 * @package: /root
	 * @data: 02/05/2017
	 **/


	#################################
	### Variáveis de INICIALIZAÇÃO ##
	#################################
	# mysql -h localhost -u root -p --

	ini_set("display_errors", 1);
	error_reporting(E_ALL | E_PARSE);


	//Variáveis de INICIALIZAÇÃO
	$host 		= "localhost";
	$user 		= "root";
	$pass 		= "utd123456";
	$db_name	= "db_aft_test";

	//Realizar a conexão
	$connect = mysqli_connect($host, $user, $pass) or die(mysql_error());

	//Selecionar o banco de dados
	$date = mysqli_select_db($connect, $db_name) or die(mysqli_error($connect));

?>