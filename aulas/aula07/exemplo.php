<?php
/**
 * Imprima os números de um determinado intervalo
 */


echo "<hr>";

$a = 10;
$b = 20;
if($a < $b){
	for($n = 1+$a;$n < $b;$n++){
		echo "Números - $n <br>";
	}
}else{

	for($n = 1-$a;$n > $b;$n--){
		echo "Números - $n <br>";
	}
}
