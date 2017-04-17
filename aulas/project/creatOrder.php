
<form ction="creatOrder.php" method="POST">
    <input type="text" name="typePizza" placeholder="Tipo da pizza">
    <input type="text" name="amountPizza" placeholder="Quantidade">
    <input type="text" name="sizePizza" placeholder="Tamanho">
    <input type="submit">
</form>

<?php
if(isset($_POST['typePizza']) && isset($_POST['amountPizza']) && isset($_POST['sizePizza']))
{
	$typePizza 	= $_POST['typePizza'];
	$amountPizza 	= $_POST['amountPizza'];
	$sizePizza 	= $_POST['sizePizza'];
	//Criando um arquivo com o php
	$arquivo = fopen("cadastroPedido.txt", "a+");

	//Escrevo dentro do arquivo
	fwrite($arquivo,
		/*
		"--------------------------------\n".
	 	"|	Name 	= 	".$name."  		\n".
	 	"|	Idae 	= 	".$idade." 		\n".
	 	"|	E-mal 	= 	".$email." 		\n".
	 	"--------------------------------\n"
	 	*/
	 	$typePizza." - ".$amountPizza." - ".$sizePizza."\n"
	 );

	//fecho o arquivo
	fclose($arquivo);

	echo "Gravado!";
}
?>
