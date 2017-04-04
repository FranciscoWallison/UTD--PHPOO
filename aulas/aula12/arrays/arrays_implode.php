<?php
	$carros[] = "BMW";
	$carros[] = "FUNSCA";
	$carros[] = "CAMARO";


	$carros2[] = "BMW";
	$carros2[] = "FUNSCA";
	$carros2[] = "CAMARO";

	$string2 = implode(", ", $carros2);

	$string3 = explode(", ", $string2);

	foreach($carros as $key => $valor){
		//Validar ultima virgula
		if (isset($carros[$key+1]) ) {
			$string .= $valor.", ";
		}else{
			$string .= $valor;
		}
	}

	echo $string."<br>";

	echo $string2."<br>";

	print_r( $string3 );