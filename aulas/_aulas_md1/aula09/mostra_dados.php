<html>
<head>
	<meta charset="utf-8">
	<title> Usuários</title>
	<!-- Link do CSS do Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<!-- script do javascript do bootstrap -->
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<div class="bs-example" data-example-id="panel-without-body-with-table">
		<div class="panel panel-default">
			<div class="panel-heading ">
					Dados dos Usuários
					<a class="btn text-right btn-success btn-xs" href="form.php">Voltar</a>
				
			</div>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Telefone</th>
						<th>Endereço</th>
						<th>Açoes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td><?= $_POST['name'] ?></td>
						<td><?= $_POST['email'] ?></td>
						<td><?= $_POST['fone'] ?></td>
						<td><?= $_POST['address'] ?></td>
						<td>
							<div class="btn-group" role="group" aria-label="...">
							  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td><?= $_POST['name'] ?></td>
						<td><?= $_POST['email'] ?></td>
						<td><?= $_POST['fone'] ?></td>
						<td><?= $_POST['address'] ?></td>
						<td>
							<div class="btn-group" role="group" aria-label="...">
							  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td><?= $_POST['name'] ?></td>
						<td><?= $_POST['email'] ?></td>
						<td><?= $_POST['fone'] ?></td>
						<td><?= $_POST['address'] ?></td>
						<td>
							<div class="btn-group" role="group" aria-label="...">
							  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
</div>


<body>
</html>
