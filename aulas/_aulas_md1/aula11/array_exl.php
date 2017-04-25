<?php 

	$frutas = array(
				"Banana", 
				"Maça", 
				"Tomate", 
				"Uva"
			);

	$aux = count($frutas);
	//Imprimindo os valores do array
	for( $i = 0 ; $i < $aux ; $i++ )
	{
		echo $frutas[$i]."<br>";
	}

