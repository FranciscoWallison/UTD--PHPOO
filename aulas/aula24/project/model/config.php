<?php 

	//Mostrar e debugar errors
	ini_set("display_errors", 1);
	error_reporting(E_ALL | E_PARSE);


	#Criando as rotas (urls);

	//Nome do projeto;
	$project_name = "/project";

	//Rotas para links e inclusão de arquivos(via links)
	$project_index = "http://".$_SERVER['SERVER_NAME']."/$project_name";

	//Rotas de nclusão de arquivos(includes)
	$project_path = $_SERVER['DOCUMENT_ROOT']."/$project_name";


	//echo $project_index;


?>