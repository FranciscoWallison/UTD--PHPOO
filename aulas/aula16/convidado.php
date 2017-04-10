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
	<form action="convidado.php" method="POST"><!-- FORM -->

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



 

function convidados($name)
{
  $convidados = ["Monique", "Wallison", "Wagner", "Carol", "Alysson", "Dirceu", "Hyggor", "Mathias" , "test"];

  asort($convidados);

  $n = ucfirst(strtolower($name) );
  return in_array($n, $convidados);
}

if (isset( $_POST['name'] ) ) {

	echo convidados($_POST['name'])? "Convidado!":"Não é convidado!";
}

