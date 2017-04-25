<?php
include'receive.php';

//srtatando a sessão
session_start();

//Criando os dados dentro de uma sessão
var_dump($_SESSION);

?>

<hr>
<a href="received.php">Ir para o receive!</a><br>
<a href="form.html">Ir para o form!</a><br>
<a href="test3_received.php">test!</a><br>