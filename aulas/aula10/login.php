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
	<div class="site-wrapper">
			
      <div class="container">
      	
        <div class="cover-container">
			<div class="masthead clearfix">
				<div class="inner">
				<nav class="nav nav-masthead">
					<button class="nav-link btn btn-primary bnt-xs" data-toggle="modal" data-target="#myCad">
                		<i class="glyphicon glyphicon-plus"></i>
                		Cadastre-se
                	</button>
				</nav>
				</div>
			</div>
			<img class="rounded-circle" src="img/lock-login.png" width="140" height="140">
	       	
		<form class="form-signin" action="mostra_dados.php" method="POST">
	       <hr>
	        <label for="inputEmail" class="sr-only">Email</label>
	        <input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
	        <label for="inputPassword" class="sr-only">Senha</label>
	        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Lembra
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
	    	<hr>
	   </form>

		</div> 
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
<!-- Modal cadastre-se -->
<div class="modal fade" id="myCad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> Cadastro</h4>
      </div>
      <form action="" method=""><!-- FORM -->

        <div class="modal-body">
          	<label for="inputNomeCompleto"> Nome Completo </label><br>
            	<input type="text" id="inputNomeCompleto" placeholder="Digite seu nome" class="form-control" required maxlength="22"><br>	

            <label for="inputEmail"> Email: </label><br>
            	<input type="email" id="inputEmail" placeholder="Digite seu email" class="form-control" required><br>

            <label for="inputDataNascimento"> Data do Nasccimento: </label><br>
            	<input type="date" id="inputDataNascimento" placeholder="Digite data do nascimento" class="form-control" required><br>

 
            <label for="inputEndereco"> Endereço </label><br>
              <textarea id="inputEndereco" placeholder="Digite seu Endereço" class="form-control" required></textarea><br> 

            <label for="inputSenha"> Senha: </label><br>
            	<input type="password" id="inputSenha" class="form-control"><br>
            
            <label for="inputConfirmaSenha"> Confirmar Senha: </label><br>
            	<input type="password" id="inputConfirmaSenha" class="form-control"><br>	
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Fazer Cadastro</button>
        </div>

      </form><!-- END FORM -->
    </div>
  </div>
</div>