<?php
	
	$txt = "WAllison asd aSDGSDF";

	//Função para deixar tudo na string em minuscula
	echo strtolower($txt);
	echo "<hr>";

	echo strtoupper($txt);
	echo "<hr>";


	$frase = "oi, eu sou goku";

	echo ucfirst($frase);
	echo "<hr>";

	echo ucwords($frase);
	echo "<hr>";

	echo lcfirst($frase);
	echo "<hr>";
	
	echo strlen($frase);
	echo "<hr>";

	echo str_word_count($frase);
	echo "<hr>";

	echo substr_count($frase, "o");
	echo "<hr>";

	echo str_repeat($txt."<br>", 5);
	echo "<hr>";

	echo strrev("Alucard");
	echo "<hr>";

	echo strrev("Alucard");
	echo "<hr>";