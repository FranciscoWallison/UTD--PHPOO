## Bootstrap
	###### button
```
<div class="container">
		<button type=button class="btn btn-primary" aria-label="Left Align"><span class="glyphicon glyphicon-log-in" aria-hidden=true> LOGIN </span></button>
	</div>
	<div class="container">
		<button type=button class="btn btn-warning" aria-label="Left Align"><span class="glyphicon glyphicon-info-sign" aria-hidden=true> LOGIN </span></button>
	</div>
	<div class="container">
		<button type=button class="btn btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden=true> EXCLUIR </span></button>
	</div>
	<div class="container">
		<button type=button class="btn btn-success" aria-label="Left Align"><span class="glyphicon glyphicon-thumbs-up" aria-hidden=true> LOGIN </span></button>
	</div>
	<div class="container">
		<button type=button class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-user" aria-hidden=true> LOGIN </span></button>
	</div>
```
	###### Formulario & Modal
```
	<div class="container">
		<button type=button class="btn btn-primary btn-xs" aria-label="Left Align" data-toggle="modal" data-target="#myLogin"><span class="glyphicon glyphicon-log-in" aria-hidden=true> LOGIN </span></button>
	</div>
	<div class="modal fade" id="myLogin" aria-labelledby="myModalLabelLogin" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabelLogin"> <span class="glyphicon glyphicon-user" aria-hidden=true>  </span> Login</h4>
	      </div>
	      <div class="modal-body">
			<form>
				<div class="form-group">
					<label for="recipient-name" class="control-label">Login:</label>
					<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
					<label for="message-senha" class="control-label">Senha:</label>
					<input type="password" class="form-control" id="recipient-senha">
				</div>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Fechar</button>
	        <button type="button" class="btn btn-success btn-xs">Logar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

```
	modal-> modal-header, modal-body, modal-footer