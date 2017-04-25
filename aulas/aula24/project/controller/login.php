<?php  

	//incluir o banco de pessoas
	include_once '../model/database.php';
	
	//receber os dados do formulario
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	#Testar e encaminhar para as páginas
	//Transformando os cadastros em cada conta de usuário
	foreach ($person_db as $account) {
		//Se encontrar alguém com email e senha digitados no formulário...
		if($account['email'] == $email and 
		   $account['password'] == $password){
			
			#TESTA O TIPO DO USER
			//Testa se é admin
			if($account['user_type'] == "Administrador"){

				//starta a sessão
				session_start();

				//Salvando os dados
				$user = $account;

				//Criando a sessão
				$_SESSION['admin'] = $user;

				//Redireciona para o index
				header("location: ../index.php");


			}
			//Testa se é funcionario
			elseif($account['user_type'] == "Funcionario"){

				//starta a sessão
				session_start();

				//Salvando os dados
				$user = $account;

				//Criando a sessão
				$_SESSION['functionary'] = $user;

				//Redireciona para o index
				header("location: ../index.php");


			}

			//validação do login;
			$login = true;

		}elseif($account['email'] == $email and 
		   		$account['password'] != $password){

			//validando o erro de senha
			$error = "incorrect_password";
			break;

		}//fechando o elseif da conferencia do login
	}//fecha o foreach dos cadastros

	#Validando os erros
	
	//Se o error for senha incorreta
	if($error == "incorrect_password"){
		header("location: ../index.php?error=senha_incorreta");
	}
	//Se o login for falso, o usuário não existe
	elseif(!$login){
		header("location: ../index.php?error=usuario_nao_cadastrado");
	}



?>