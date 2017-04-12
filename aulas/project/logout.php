<?php

	//iniciando a sessão
	session_start();

	//destruindo a sessão
	session_destroy();
	//redirecionado para o formulário
	header("location: index.php?success=session_ending");
?>