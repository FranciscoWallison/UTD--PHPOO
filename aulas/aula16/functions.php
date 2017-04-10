<?php
	//criando uma função
	function soma()
	{
		$a = 3;
		$b = 4;

		$total = $a + $b;

		echo $total;
		echo '<hr>';
	}

	//chamando a função
	soma();
	soma();


	function soma_2($n1,$n2)
	{
		$a = $n1;
		$b = $n2;

		$total = $a + $b;

		echo $total;
		echo '<hr>';


	}

	$n1 = 5;
	$n2 = 9;
	//chamando a função
	soma_2($n1 ,$n12);
	soma_2();


	function intervalo($n1,$n2)
	{
	
		if($n1<$n2)
		{
			for ($i=$n1+1; $i < $n2; $i++) { 
				echo $i;
				echo '<br>';
			};
		}else{
			for ($i=$n2-1; $i > $n1; $i--) { 
				echo $i;
				echo '<br>';
			};
		}
		

	};

	intervalo(5,10);