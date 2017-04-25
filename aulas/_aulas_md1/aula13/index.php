<?php

	//importando um arquivo para outro
	include "array_database.php";

	foreach($pessoa as $values){
		foreach($values as $value){
			echo $value;
		}
	}