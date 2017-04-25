<?php	

	//Variáveis
	$nome 		= 	"Francisco Wallison"; // Strings
	$email		= 	"franciscowallison@gmail.com"; // String
	$idade		= 	22; 		// Inteiro ou Numerico
	$saldoBanco	= 	-199.89;	// Float(11) ou Double(255)
	$statusConta=	true;		// Booleano 

	echo '<input type="text" id="inputSenha" class="form-control" value="'.$nome.'"><br>';
	echo '<input type="text" id="inputSenha" class="form-control" value="',$email,'"><br>';
	//var_dump($saldoBanco);
	echo "<pre>";

?>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" id="inputSenha" class="form-control" value="<?php echo $nome			?>"><br>
	<input type="text" id="inputSenha" class="form-control" value="<?php echo $email		?>"><br>
	<input type="text" id="inputSenha" class="form-control" value="<?php echo $idade		?>"><br>
	<input type="text" id="inputSenha" class="form-control" value="<?php echo $saldoBanco	?>"><br>
	<input type="text" id="inputSenha" class="form-control" value="<?php echo $statusConta	?>"><br>
</body>
</html>