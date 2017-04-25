<?php

	//recebendo dados do form
	$data_book = $_POST;

	//tratando os dados
	$data_book = implode(" - ",$data_book);

	//criando o arquivo de base
	$archive = fopen("db_book.txt","a+");

	//Escrevendo os dados no arquivo
	fwrite($archive, $data_book);
	fwrite($archive, "\n");

	//fecha o arquivo 
	fclose($archive);

	//redireciona
	header("location: admin.php?option=list_books&success=inserted_book");



?>