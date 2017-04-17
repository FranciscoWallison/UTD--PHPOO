<?php

	//Starta a sessão
	session_start();

	if(!isset($_SESSION['functionary'])){
		header('location: index.php');
	}

	function page_content()
	{
		//carregando o template de boas vindas
		include_once "welcome.html";
	}
	

	$page_title = "Pagina do Funcionarios";

	include_once 'template.html';