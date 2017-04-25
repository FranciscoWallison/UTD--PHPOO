<?php 
	 ini_set('display_errors', true);
	 //error_reporting(E_ALL | E_PARSE);
/**
 * FOR()
 * INICIO -> CONDICAO -> COMO EU VOU
*/
	for($n=0;$n==100;$n=$n+1){
		if($n % 3 == 0){
			echo $n;
		}
	}