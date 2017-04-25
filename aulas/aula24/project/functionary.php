<?php
	
	//incluindo o arquivo de validação
	include_once 'validate.php';

	session_start();

	if(!isset($_SESSION['functionary'])){
		header("location: index.php?error=access_denied");
	}


	//Título da Página
	$page_title = "Pagina do Pião";

	//função de renderização do conteúdo
	function page_content(){
		//renderizando a opção 
		validate_option();


	}

	//Incluindo o Template (layout)
	include_once 'template.html';
	

?>