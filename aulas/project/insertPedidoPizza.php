<?php

	$typePizza 	= $_POST['typePizza'];
	$amountPizza 	= $_POST['amountPizza'];
	$sizePizza 	= $_POST['sizePizza'];
	$horaPedido 	=date("D/M/Y  H:m:s");

	//Criando um arquivo com o php
	$arquivo = fopen("cadastroPedido.txt", "a+");

	//Escrevo dentro do arquivo
	fwrite($arquivo,
	 	$typePizza." - ".$amountPizza." - ".$sizePizza." - ".$horaPedido."\n"
	 );

	//fecho o arquivo
	fclose($arquivo);

	//redirecionar
	header("location: admin.php?option=listPedidos&success=insertd_pedido");