<?php
	
	//Função de validação das mensagens
	function validate_error(){
		if(!isset($_GET['error'])){
			return false;
		}

		switch($_GET['error']){
			case "senha_incorreta":
				$alert_class="danger";
				$alert_icon="warning";
				$alert_text="Sua senha está incorreta. Verifique sua digitação.";
				include_once 'view/alert.html';
			break;

			case "access_denied":
				$alert_class="danger";
				$alert_icon="times-circle";
				$alert_text="Você não tem permissão para acessar a página.";
				
				include_once 'view/alert.html';
			break;

		}

	}

	function validate_success(){
		if(!isset($_GET['success'])){
			return false;
		}

		switch($_GET['success']){
			case "inserted_book":
				$alert_class="success";
				$alert_icon="thumbs-up";
				$alert_text="Livro Cadastrado com sucesso.";
				include_once 'view/alert.html';
			break;

			case "deleted_book":
				$alert_class="success";
				$alert_icon="check-circle";
				$alert_text="Livro deletado com sucesso.";
				include_once 'view/alert.html';
			break;
		}

	}


	//Função de validação das opções
	function validate_option(){
		//verificando as opções
		if(!isset($_GET['option'])){
			return false;
		}

		//switch de opções
		switch($_GET['option']){
			case "home":
				echo "Você está na HomePage";
			break;

			case "list_functionaries":
				//echo "Renderizando a lista de funcionarios...";
				include_once 'list_functionaries.php';
			break;

			case "list_books":
				//renderizando a tabela dos livros
				include_once 'view/list_books.html';


				echo "<br><a href='?option=insert_book'>";
				echo "<i class='fa fa-plus'></i>";
				echo " Novo Livro";
				echo "</a>";
			break;

			case "insert_book":
				include_once 'view/forms/book_cadaster.html';
			break;	

			default:
				echo "A página em questão encontra-se em construção!";

		}


	}