<html>
<head>
	<title></title>
</head>
<body>
<form ction="#" method="POST">
    <input type="text" name="name" placeholder="Nome">
    <input type="text" name="idade" placeholder="idade">
    <input type="text" name="email" placeholder="email">
    <input type="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['name']) && isset($_POST['idade']) && isset($_POST['email']))
{
	$name 	= $_POST['name'];
	$idade 	= $_POST['idade'];
	$email 	= $_POST['email'];
	//Criando um arquivo com o php
	$arquivo = fopen("cadastroCliente.txt", "a+");

	//Escrevo dentro do arquivo
	fwrite($arquivo,
		/*
		"--------------------------------\n".
	 	"|	Name 	= 	".$name."  		\n".
	 	"|	Idae 	= 	".$idade." 		\n".
	 	"|	E-mal 	= 	".$email." 		\n".
	 	"--------------------------------\n"
	 	*/
	 	$name." - ".$idade." - ".$email."\n"
	 );

	//fecho o arquivo
	fclose($arquivo);

	echo "Gravado!";
}
?>
