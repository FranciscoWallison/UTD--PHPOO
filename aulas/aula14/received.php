<?php 

$name 	= $_POST['name'];
$email 	= $_POST['email'];
$cell 	= $_POST['cell'];
$cpf 	= $_POST['cpf'];

$data[] = $_POST;
var_dump($data);

//srtatando a sessão
session_start();

//Criando os dados dentro de uma sessão
$_SESSION["test"] = $_POST;

?>
<hr>
<a href="test_received.php">Ir para o test!</a><br>
<a href="form.html">Ir para o form!</a><br>
<a href="test3_received.php">test!</a><br>