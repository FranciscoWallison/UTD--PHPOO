<?php 

 	//Incluir o banco de dados
	include_once 'database.php';

	//RECEBER OS DADOS DO FORMULARIO
	$email 		= ucfirst(strtolower($_POST['email']));
	$password 	= $_POST['password'];

	//TESTA O LOGIN
	foreach ($person_db as $accounts){
		//validar usuariio email
		if (ucfirst(strtolower($accounts['email'])) === $email){
			//validar usuariio senha
			if ($accounts['password'] == sha1($password)  ){

				//VALIDA O TIPO DO USER
				if ($accounts['user_type'] == "admin") {
					
					//Starta a sessão
					session_start();

					//Salvando os dados
					$user = $accounts;

					//Criando a sessão
					$_SESSION['admin'] = $user;

					//Redireciona para index
					header('location: index.php');
					break;
					
				}elseif($accounts['user_type'] == "functionary"){
					
					//Starta a sessão
					session_start();

					//Salvando os dados
					$user = $accounts;

					//Criando a sessão
					$_SESSION['functionary'] = $user;

					//Redireciona para index
					header('location: index.php');
					break;
				}//END VALIDA TIPO DE USER
				
				$login = true; //VALIDA SE EXISTE USER
				break;

			}else{

				$error = "incorrect_password";// SENHA INVALIDA
				break;

			}

		}//END IF VALIDA EMAIL
		
	}//END FOREACH 
	#validando os erros
	if($error == "incorrect_password"){
		header("location: index.php?error=senha_incorreta");
	}elseif(empty($login)){
		header("location: index.php?error=usuario_nao_cadastrado");
	}
	