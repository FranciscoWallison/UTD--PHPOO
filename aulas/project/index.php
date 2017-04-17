<?php

	//Starta a sessão
	session_start();

	if ( !(in_array('admin' , $_SESSION ) || in_array('functionary' , $_SESSION )) ) {
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
