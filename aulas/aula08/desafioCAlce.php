<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/cover/cover.css" rel="stylesheet">
  </head>

<body>
	
	<div class="masthead clearfix">
        <div class="inner">
		 <form action="desafioCAlce.php" class="form" method="POST">
		 	<input type="number" class="form-control" name="numero1" emin=0; max=120; placeholder="Numero1">
		 	<select name="formula">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
		 	<input type="number" class="form-control" name="numero2" emin=0; max=120; placeholder="Numero2"> <br>
		 	<input class="btn btn-lg btn-secondary " type="submit" value="enviar">
		 </form>
		</div>
	

 <div class="inner cover conatiner">
            <h1 class="cover-heading"></h1>
            <p class="lead">
            <p class="lead text-center">

			<?php 
			if ( isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['formula']) ) {
			 	$numero1 	= $_POST['numero1'];
				$numero2 	= $_POST['numero2'];
				$formula 	= $_POST['formula'];

				switch($formula){
					case "+":
						echo ($numero1+$numero2);
						break;
					case "-":
						echo ($numero1-$numero2);
						break;
					case "*":
					 	echo ($numero1*$numero2);
					 	break;
					case "/":
					 	echo ($numero1/$numero2);
					 	break;
					 default:
					 	echo "Valor invalido";
				};
			};
			 ?>
  			</p>
      </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>