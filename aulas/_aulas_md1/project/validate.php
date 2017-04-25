<?php

	//função validação das mensagesn
	function validadete_message()
	{

	}

	//função de validação das opções
	function validade_option()
	{
		//vereificando as opções
		if(isset($_GET['optin']))
		{
			return false;
		}

		//switch de opção
		switch ($_GET['option']) {
			case 'home':
				echo "home page";
				break;
			case 'list_functionary':
					//carregando o template listagem de funcionarios
					include_once "functionaryList.php";
				break;

			case 'listPedidos':
				//carregando o template cadastrar pedido
				include_once "listPedidos.php";
			break;

			case 'creat_order':
				//carregando o template cadastrar pedido
				include_once "creatOrder.php";
			break;

			default:
				//carregando o template de boas vindas
				include_once "welcome.html";
				break;
		}

	}


	function validate_error()
	{
		//vereificando as opções
		if(!isset($_GET['error']))
		{
			return false;
		}

		//switch de opção
		switch ($_GET['error']) {
			case 'senha_incorreta':
				$alert_class 	= "danger";
				$alert_title 	= "Senha Incorreta";
				$alert_text  	= "Sua senha está incorreta. Verifique sua digitação!";
				$alert_ico		= "glyphicon glyphicon-exclamation-sign";
				$alert_header 	=  "index.php";

				include_once 'alert.html';
				break;
			case 'access_denied':
				$alert_class 	= "danger";
				$alert_title 	= "Acesso Negado";
				$alert_text  	= "Você não tem permissão para acessar a página. Faça login para ter acesso";
				$alert_ico		= "glyphicon glyphicon-exclamation-sign";
				$alert_header 	=  "index.php";

				include_once 'alert.html';
				break;
			case 'user_not_falde':
				$alert_class 	= "danger";
				$alert_title 	= "Usuario não encontrado";
				$alert_text  	= "Cadastre-se para poder usar o sistema.";
				$alert_header 	=  "index.php";
				$alert_ico		= "glyphicon glyphicon-exclamation-sign";
				include_once 'alert.html';
				break;
			
			default:
				//carregando o template de boas vindas
				include_once "welcome.html";
				break;
		}

	}


	function validate_success()
	{
		//vereificando as opções
		if(!isset($_GET['success']))
		{
			return false;
		}

		//switch de opção
		switch ($_GET['success']) {
			case 'ending_session':
				$alert_class 	= "success";
				$alert_title 	= "Você sai com sucesso!";
				$alert_text  	= "Até a próxima.";
				$alert_ico		= "fa fa-check";
				
				$alert_header 	=  "index.php";

				include_once 'alert.html';
				break;
			case 'insertd_pedido':
				$alert_class 	= "success";
				$alert_title 	= "Pedido feito com sucesso!";
				$alert_text  	= "Atenda logo";
				$alert_ico		= "fa fa-check";
				
				$alert_header 	=  "index.php";

				include_once 'alert.html';
				break;
			
			default:
				//carregando o template de boas vindas
				include_once "welcome.html";
				break;
		}

	}