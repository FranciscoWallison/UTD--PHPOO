<?php
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$birth 		= $_POST['birth'];
	$address 	= $_POST['address'];

	$dataUser 	= [ $name, $email, $birth, $address ];

	echo "<br>";
	echo "<hr> <h3>for</h3>";
	echo "<br>";
	//Imprimindo os valores do array
	for( $i = 0 ; $i < count($dataUser); $i++ )
	{
		echo $dataUser[$i]."<br>";
	}

	echo "<br>";
	echo "<hr> <h3>while</h3>";
	echo "<br>";
	//Imprimindo os valores do array
	$i = 0;
	while ( $i < count($dataUser)) {
		echo $dataUser[$i]."<br>";
		$i++;
	}

	echo "<br>";
	echo "<hr> <h3>foreach</h3>";
	echo "<br>";
	//Imprimindo os valores do array
	foreach ($_POST as $key => $value) {
		echo $key." - ".$value."<br>";
	}


	