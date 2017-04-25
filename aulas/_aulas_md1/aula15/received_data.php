<?php
	$data = $_POST;


	//Testar a Maioridade
	if( $data['years_old'] <= 17 )
	{
		#Testando a menoridade

		//CRIANDO A SESSÃO
			#startando a session
			session_start();

			#criando a session small
			$_SESSION['small'] = $data;

		//função de redirecinamento
		header('location: biggerOrSmall.php');
		
	}else{
		#Testando a maioridade

		//CRIANDO A SESSÃO
			#startando a session
			session_start();

			#criando a session small
			$_SESSION['bigger'] = $data;
			
		//função de redirecinamento
		header('location: biggerOrSmall.php');
	}
