
<form action="insertPedidoPizza.php" class="bs-example bs-example-form" method="POST">
	<div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Tipo</button>
      </span>
      <input type="text" class="form-control" name="typePizza" placeholder="Tipo da pizza">
    </div><!-- /input-group -->
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Quantidade</button>
      </span>
      <input type="text" class="form-control" name="amountPizza" placeholder="Quantidade">
    </div><!-- /input-group -->
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Tamanho</button>
      </span>
      <input type="text" class="form-control" name="sizePizza" placeholder="Tamanho">
    </div><!-- /input-group -->
    
	<hr>
	
		<input  class="form-control btn btn-success" value="Confirma!" type="submit">
   
</form>
<a  class="form-control btn btn-primary" href="?option=listPedidos">

	<i class=""></i>
	voltar!

</a>