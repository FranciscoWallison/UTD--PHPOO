<?php

	//Startando a sessão
	session_start();

	//Destruindo os dados da sessão
	session_destroy();

	//Redirecionando para a página inicial
	header("location: index.php?success=ending_session");

?>