<?php 
	function test()
	{
		static $a;
		
		$a += 10;
		echo $a;
		echo "<hr>";
	}

	//1º chamada
	test();

	//2º chamada
	test();

	//3º chamada
	test();