<?php
	
	//tesando se existe sessão
	if(!isset($_SESSION['small'])){
		header("location: index.php?error=access_denied");
	}

?>

<hr>
	Bem viondo, pivet doido
	<?php
	

	echo $_SESSION['small']['name'];

	?>
	!
<hr>
<a href="logout.php">Sair da Sessão!</a>