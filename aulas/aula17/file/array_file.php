<?php 
	//pegando os dados do arquivos
	$data = file("cadastroCliente.txt");
	foreach ($data as $key => $value) {
		$data2[] =  explode(" - ",$value);
	}

	
	foreach ($data2 as $key => $value) {
		var_dump($value);
		echo "<br>";
	}

	?>