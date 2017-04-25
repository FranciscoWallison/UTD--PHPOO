<?php

$barbara['name'] 		= "Barbara";
$barbara['email'] 		= "barbara@gmail.com";
$barbara['telefone'] 		= "315615";
$barbara['dt_nsac'] 	= "04/12/1992";
$barbara['endereco'] 	= "Rua 1, Montese ";


//Wallison
$Wallison['name'] 		= "Wallison";
$Wallison['email'] 	= "Wallison@gmail.com";
$Wallison['telefone'] 	= "315615";
$Wallison['dt_nsac'] 	= "04/12/1992";
$Wallison['endereco'] 	= "Rua 2, Montese ";

//Wallison
$chico['name'] 		= "chico";
$chico['email'] 	= "chico@gmail.com";
$chico['telefone'] 	= "315615";
$chico['dt_nsac'] 	= "04/12/1992";
$chico['endereco'] 	= "Rua 2, Montese ";


$pessoa[] = $chico;
$pessoa[] = $Wallison;
$pessoa[] = $barbara;


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

<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<?php
						foreach ($barbara as $key => $value) 
						{
					?>
						
						<td><?= $key?></td>
					
					<?php
						}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($pessoa as $key => $values) 
				{
				?>

				<tr>
					<th scope="row">1</th>
					<?php
						foreach ($values as $key => $value) 
						{
					?>
						<td><?= $value?></td>
					
					<?php
						}
					?>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
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