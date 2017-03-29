<html>
<head>
	<title></title>
</head>
<body>
 <form action="form.php?profile=common" method="POST">
 	<input type="text" name="name" placeholder="nome"><br>
 	<input type="number" name="years_old" emin=0; max=120; placeholder="idae">
 	<input type="submit" value="enviar">
 </form>

 <?php 
 /**
 * Recebemdo os dados do formulário
 */
 if ( isset($_POST['name']) && isset($_POST['years_old']) ) {
 	# code...
 
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
	}elseif( $years_old <= 14 )
		{
			echo "Você é um(a)  PRE ADOLECENTE";
		}elseif($years_old <= 18)
			{
				echo "Você é um(a) Dolescente!!";
			}elseif($years_old <= 59 )
				{
					echo "Você é um(a) ADULTO(A)!";
				}else{
					echo "Você é um(a) IDOSO(A)! ";
				}
			}
		}
	};

	//Validando idade
	 	switch($filme){
		case 1:
			echo "Vai tirar o cheiro do mijo!!";
			break;
		case 2:
			echo "Você é um(a)  PRE ADOLECENTE";
			break;
		case 3:
		 	echo "Você é um(a) Dolescente!!";
		 	break;
		case 4:
		 	echo "Você é um(a) ADULTO(A)!";
		 	break;
		case 5:
		 	echo "Você é um(a) ADULTO(A)!";
		 	break;
		 	
		 default:
		 	echo "Valor invalido";
	}

}
 ?>
</body>
</html>