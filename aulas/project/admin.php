<?php

	//Starta a sessão
	session_start();

	if(!isset($_SESSION['admin'])){
		header('location: index.php');
	}

	$page_title = "Pagina do Admin";

	include_once 'template.html';