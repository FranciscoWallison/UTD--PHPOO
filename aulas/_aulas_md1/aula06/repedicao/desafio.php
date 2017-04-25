<html>
<head>
	<title>Desafio</title>
</head>
<body>
	<select>
		<option disabled selected> -- Ano -- </option>
		<?php for($n = date("Y"); $n >= 1900 ; $n = $n - 1){ ?>
			<option> <?="$n";?></option>
		<?php } ?>
	</select>
</body>
</html>