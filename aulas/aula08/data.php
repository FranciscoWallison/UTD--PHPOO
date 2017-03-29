<?php
/**
 * Recebemdo os dados do formulário
 */
	 $name 		= $_POST['name'];
	 $years_old = $_POST['years_old'];

	 /**
	  * $name 		= $_GET['name'];
	  * $years_old = $_GET['years_old'];
	  */
	 	//echo $_GET['name'];
	 echo "Teste de Pessoa ". $_GET['profile'] ."<br>";
	 echo "Bem vindo(a) $name <br>";
	 echo "A sua idade é $years_old <br>";
	 
	 if( $years_old <= 10  )
	{
		echo "Vai tirar o cheiro do mijo!!";
	}else{
		if( $years_old <= 14 )
		{
			echo "Você é um(a)  PRE ADOLECENTE";
		}else
		{
			if($years_old <= 18)
			{
				echo "Você é um(a) Dolescente!!";
			}else
			{
				if($years_old <= 59 )
				{
					echo "Você é um(a) ADULTO(A)!";
				}else
				{
					echo "Você é um(a) IDOSO(A)! ";
				}
			}
		}
	};

