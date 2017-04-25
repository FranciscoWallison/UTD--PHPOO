<?php 
	//incluindo o arquivo de validação
	include_once "controller/validate.php";
	include_once "model/config.php";

	//testar se existe sessões
	session_start();

	if(isset($_SESSION['admin'])){
		header("location: admin.php");
	}elseif(isset($_SESSION['functionary'])){
		header("location: functionary.php");
	}	


	//Título da página
	$page_title = "Página de Login";

	//Função responsável pelo carregamento do conteúdo da página
	function page_content(){
		//Carregando o conteúdo de boas vindas
		validate_error();
		include_once "view/welcome.html";

	} 
	
	//Inclusão do Template (layout do sistema)
	include_once "view/template.html";

?>