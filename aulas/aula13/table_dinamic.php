<html>
<head>
	 <meta charset="utf-8">
	<title>table denamic</title>
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <!-- CSS dateTable -->
    <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<div class="col-md-8 conl-md-offset-2">
		<table id="myTable" class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>CPF</th>
					<th>RG</th>
					<th>Telefone</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Al</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Ac</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Aa</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>



 	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- JS dateTable -->
    <script src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		//active dateTable https://datatables.net/
    	$(document).ready(function(){
    		$('#myTable').DataTable();
		});
    </script>
</body>
</html>