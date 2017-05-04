<?php

	include_once 'connect.php';

	//Query e Select
	$query = "SELECT * FROM `tb_registers`";

	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));


	$registers = mysqli_fetch_assoc($result);

	while ($row = mysqli_fetch_assoc($result) ) {

		var_dump($row,'- <br> -'); 
	}
;