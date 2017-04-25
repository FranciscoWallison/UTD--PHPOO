<?php 
/*
	$idade = 10;

	if( $idade <= 10 )
	{
		echo "Vai tirar o cheiro do mijo!!";
	}if( $idade >= 11 && $idade <= 14 )
	{
		echo "Vai vira uma princesa!!!";
	}if( $idade >= 15 && $idade <= 18 )
	{
		echo "Olha ae macho, já tem cabelo na petieca";
	}if( $idade >= 19 && $idade <= 59 )
	{
		echo "Já pode ser preso!!!";
	}if( $idade >= 59 )
	{
		echo "Vai tirar o cheiro do mijo!!";
	};
*/
echo '<hr>';
	if( $idade <= 10  )
	{
		echo "Vai tirar o cheiro do mijo!!";
	}else{
		if( $idade <= 14 )
		{
			echo "Você é um(a)  PRE ADOLECENTE";
		}else
		{
			if($idade <= 18)
			{
				echo "Você é um(a) Dolescente!!";
			}else
			{
				if($idade <= 59 )
				{
					echo "Você é um(a) ADULTO(A)!";
				}else
				{
					echo "Você é um(a) IDOSO(A)! ";
				}
			}
		}
	};


