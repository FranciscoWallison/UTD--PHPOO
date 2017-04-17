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