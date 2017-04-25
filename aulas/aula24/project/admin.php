<?php
	
	//incluindo o arquivo de validação
	include_once 'controller/validate.php';

	session_start();

	if(!isset($_SESSION['admin'])){
		header("location: index.php?error=access_denied");
	}


	//Título da Página
	$page_title = "Pagina do Admin";

	//função de renderização do conteúdo
	function page_content(){
		//renderizando a opção 
		validate_success();
		validate_error();
		validate_option();
		
	}

	//Incluindo o Template (layout)
	include_once 'view/template.html';
	

?>