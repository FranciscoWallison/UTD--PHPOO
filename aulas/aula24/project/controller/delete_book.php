<?php  

	//Abrindo os dados dos livros
	$books = file("db_book.txt");

	//Pegando o id do livro a ser deletado
	$filter = $_GET['filter'];

	//Excluindo o livro do arquivo (banco)
	unset($books[$filter]);

	//tratando os livros para serem reinseridos
	$books = implode("",$books);

	//Apagando o arquivo para ser recriado com os livros atuais, sem o livro deletado
	unlink("db_book.txt");
	
	//Recriando o arquivo
	$archive = fopen("db_book.txt", "a+");

	//Jogando os livros novamente no arquivo
	fwrite($archive, $books);

	//fechando o arquivo
	fclose($archive);

	//Redirecionando para a lista atualizada
	header("location: admin.php?option=list_books&success=deleted_book");


?>