<?php
	
	if (isset($_SESSION)) {
		//Starta a sessão
		session_start();
		
		//testar se existe sessão
		if(isset($_SESSION['admin'])){
			header('location: admin.php');
		}elseif (isset($_SESSION['functionary'])) {
			header('location: functionary.php');
		}
	}				
	
	//Título da páguna
	$title = "Pizzaria";

	function page_content()
	{
		//carregando o template de boas vindas
		include_once "welcome.html";
	}
	//inclusão do Template (layout do sistema)
	include_once 'template.html';
