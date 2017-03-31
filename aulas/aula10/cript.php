<?php

$senha = "1234";
echo "Sem nada -> ".$senha;
echo "<hr>";

//Criptografia de Mão dupla
$a = base64_encode($senha);
echo "Criptografia base64_encode() -> ".$a;
echo "<hr>";

//Desriptografia do Base 64
$a = base64_decode($a);
echo "Desriptografia base64_decode() -> ".$a;
echo "<hr>";

//Criptografia de Mão unica
$a = md5($senha);
echo "Criptografia md5() -> ".$a;
echo "<hr>";

//Criptografia de Mão unica
$a = sha1($senha);
echo "Criptografia sha1() -> ".$a;
echo "<hr>";

//Criptografia de Mão unica
$a = sha1(md5($senha));
echo "Criptografia sha1(md5()) -> ".$a;