<?php 

	include_once 'form.html';

	session_start();

	//tesando se existe sessão
	if(isset($_SESSION['small'])){
		header("location: small.php");
	}elseif(isset($_SESSION['bigger'])){
		header("location: bigger.php");
	}


 ?>