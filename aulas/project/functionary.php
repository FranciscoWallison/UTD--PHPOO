<?php
	
	//carregando o template de validação
	include_once "validate.php";

	//Starta a sessão
	session_start();

	if(!isset($_SESSION['functionary'])){
		header('location: index.php');
	}

	function page_content()
	{
		
		//rederixamdp a opção
		validade_option();

	}
	

	$page_title = "Pagina do Funcionario";

	include_once 'template.html';