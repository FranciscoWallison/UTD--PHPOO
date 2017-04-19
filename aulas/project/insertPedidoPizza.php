<?php
	
	$typePizza 	= $_POST['typePizza'];
	$amountPizza 	= $_POST['amountPizza'];
	$sizePizza 	= $_POST['sizePizza'];
	$horaPedidoHora = date("H:i:s");
	$horaPedidoData = date("m/d/Y");
    $dataSize = count(file("cadastropedido.txt"))+1;


	//Criando um arquivo com o php
	$arquivo = fopen("cadastropedido.txt", "a+");

	//Escrevo dentro do arquivo
	fwrite($arquivo,
		/*
		"--------------------------------\n".
	 	"|	Name 	= 	".$name."  		\n".
	 	"|	Idae 	= 	".$idade." 		\n".
	 	"|	E-mal 	= 	".$email." 		\n".
	 	"--------------------------------\n"
	 	*/
	 	$dataSize." - ".$typePizza." - ".$amountPizza." - ".$sizePizza." - ".$horaPedidoHora." - ".$horaPedidoData."\n"
	 );

	//fecho o arquivo
	fclose($arquivo);

	//redirecionar
	header("location: functionary.php?option=listPedidos&success=insertd_pedido");