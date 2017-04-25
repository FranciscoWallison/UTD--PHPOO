

<html>
<head>
	<title></title>
</head>
<body>
	<form action="desafio.php" method="POST">
		<input type="number" name="lado1" emin=0; max=120; placeholder="lado1">
		<input type="number" name="lado2" emin=0; max=120; placeholder="lado2">
		<input type="number" name="lado3" emin=0; max=120; placeholder="lado3">
		<input type="submit" value="enviar">
	</form>
</body>
</html>
<?php 

/**
 * 3 lados iquais 		= Equilatero
 * 2 lados iguais 		= Isosceles
 * 3 lados diferente 	= Escaleno
 * Quando não é triangulo
 * as somas de dois lado não for maior que a do outro
 * quando as soma de dois lados forem iguais 
 */


if ( isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3']) ) {
		$lado1 = $_POST['lado1'];
		$lado2 = $_POST['lado2'];
		$lado3 = $_POST['lado3'];
	if(
		$lado1 + $lado2 >= $lado3 && $lado1 + $lado3 >= $lado2 && $lado2 + $lado3 >= $lado1 &&
		$lado1 + $lado2 != $lado3 && $lado1 + $lado3 != $lado2 && $lado2 + $lado3 != $lado1
		)
    {
		if($lado1 == $lado2 && $lado2 == $lado3 && $lado3 == $lado1){
			echo("Triangulo Equilatero");
		}
		elseif($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1){
			echo("Triangulo Isosceles");
		}
		elseif($lado1 != $lado2 && $lado2 != $lado3 && $lado3 != $lado1){
			echo("Triangulo Escaleno");
		}
    }
    else{
       	echo ("Não é um triangulo!");
    }
}
  ?>