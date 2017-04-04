	<form action="palindromo.php" method="POST"><!-- FORM -->

        <div class="modal-body">
          	<label for="inputNomeCompleto"> Nome Completo </label><br>
            	<input type="text" name="palavra" id="inputNomeCompleto" placeholder="Digite seu nome" class="form-control" required maxlength="22"><br>	

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Fazer Cadastro</button>
        </div>

      </form><!-- END FORM -->

<?php

if($_POST['palavra']){
	$palavra = $_POST['palavra'];

	if (strrev($palavra) == $palavra) {
		echo "É palidromo!";
	}else{
		echo "Não é palidromo!";
	}
}