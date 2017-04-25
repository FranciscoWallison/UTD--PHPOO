<?php 
	
	/**
	 * + = fila 
	 * w = escrita
	 * r = leitura
	 * a = ler/escrever
	 */

	//Criando um arquivo com o php
	$arquivo = fopen("cadastro.txt", "a+");

	//Escrevo dentro do arquivo
	fwrite($arquivo, "Olá eu sou o Dougças.\n");

	//fecho o arquivo
	fclose($arquivo);