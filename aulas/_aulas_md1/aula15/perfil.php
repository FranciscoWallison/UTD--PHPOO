
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php 
	session_start();

	
	//tesando se existe sessão
	if(isset($_SESSION['small'])){
		var_dump($_SESSION['small']);
	}elseif(isset($_SESSION['bigger'])){
		var_dump($_SESSION['bigger']);
	}
?>
	<br>
	<a href="logout.php">Sair da Sessão!</a><br>
	<a href="biggerOrSmall.php">Retornar!</a><br>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>