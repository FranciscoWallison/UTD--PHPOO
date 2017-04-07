<?php
	
	//tesando se existe sessão
	if(!isset($_SESSION['bigger'])){
		header("location: index.php?error=access_denied");
	}

?>

<hr>
	Bem viondo, Já pod eser preso doido
	<?php
	

	echo $_SESSION['bigger']['name'];

	?>
	!
<hr>

<a href="logout.php">Sair da Sessão!</a>