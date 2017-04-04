<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class=" container ">
	<form action="convidados.php" method="POST"><!-- FORM -->

        <div class="modal-body">
          	<label for="inputNomeCompleto"> Nome Completo </label><br>
            	<input type="text" name="name" id="inputNomeCompleto" placeholder="Digite seu nome" class="form-control" required maxlength="22"><br>	

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Fazer Cadastro</button>
        </div>

      </form><!-- END FORM -->
      </div>

      	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<?php

$convidados = ["Monique", "Wallison", "Wagner", "Carol", "Alysson", "Dirceu", "Hyggor", "Mathias" , "test"];

asort($convidados);

foreach( $convidados as $chave => $valor ){
    echo "$chave = $valor\n";
}

if (isset( $_POST['name'] ) ) {
	//validadno maiuscula e menuscula
	$name = ucfirst(strtolower($_POST['name']) );
	//Imprimindo os valores do array
	$r = in_array($name, $convidados);
	//Validando
	echo $r? "Convidado!":"Não é convidado!";
}

