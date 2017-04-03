<?php 
//Barbara
$name_barbara 		= "Barbara";
$email_barbara 		= "barbara@gmail.com";
$senha_barbara 		= sha1("123456");
$dt_nsac_barbara 	= "04/12/1992";
$endereco_barbara 	= "Rua 1, Montese ";


//Wallison
$name_Wallison 		= "Wallison";
$email_Wallison 	= "Wallison@gmail.com";
$senha_Wallison 	= sha1("1234");
$dt_nsac_Wallison 	= "04/12/1992";
$endereco_Wallison 	= "Rua 2, Montese ";


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body>
  	<?php
  		if ($_POST['email'] == $email_Wallison &&  sha1($_POST['password']) == $senha_Wallison){
	?>
	<div class=" container jumbotron"> 
		<h1><?= "Felidicades ".$name_Wallison." hoje 'seu dia!" ?></h1> 
		<p>Feliz aniversario :)</p>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Senha</th>
					<th>Data De Nacimento</th>
					<th>Endereço</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td><?= $name_Wallison?></td>
					<td><?= $email_Wallison?></td>
					<td><?= $senha_Wallison?></td>
					<td><?= $dt_nsac_Wallison?></td>
					<td><?= $endereco_Wallison?></td>
				</tr>
			</tbody>
		</table>
		<p>
			<a href="login.php" class="btn btn-primary btn-lg">Voltar</a>
		</p> 
	</div>
	<?php
		
	}elseif($_POST['email'] == $email_barbara &&  sha1($_POST['password']) == $senha_barbara){
	?> 
	<div class=" container jumbotron"> 
		<h1><?= "Felidicades ".$name_barbara." hoje 'seu dia!" ?></h1> 
		<p>Feliz aniversario :)</p> 
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Senha</th>
					<th>Data De Nacimento</th>
					<th>Endereço</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td><?= $name_barbara?></td>
					<td><?= $email_barbara?></td>
					<td><?= $senha_barbara?></td>
					<td><?= $dt_nsac_barbara?></td>
					<td><?= $endereco_barbara?></td>
				</tr>
			</tbody>
		</table>
		<p>
			<a href="login.php" class="btn btn-primary btn-lg">Voltar</a>
		</p> 
	</div>
	<?php
		}else{
	?> 
	<div class=" container jumbotron"> 
		<h1>Senha ou E-mail Invalida</h1> 
		<p></p> 
		<p>
			<a href="login.php" class="btn btn-primary btn-lg">Voltar</a>
		</p> 
	</div>
	<?php
		}
	?> 

?>

<br>
 </div> <!-- /container -->
</div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>