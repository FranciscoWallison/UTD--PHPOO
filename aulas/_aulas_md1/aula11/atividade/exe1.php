<?php

$convidados = ["Monique", "Wallison", "Wagner", "Carol", "Alysson", "Dirceu", "Hyggor", "Mathias" , "test"];
$name = $_POST['name'];

	//Imprimindo os valores do array
	foreach ($convidados as $key => $value) {
		if($value == $name){
			echo "Convidado!";
		}else{
			$convidado = true;
		}
	}
	//Validando
	if($convidado)
		echo "Não é convidado!";