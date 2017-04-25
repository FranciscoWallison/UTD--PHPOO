<?php
/**
 * while - enquanto
 */

$a = 1;

while($a <= 10){
	echo "$a";
	$a++;
	echo "<hr>";
} 


?>

<html>
<head>
	<title>Desafio</title>
</head>
<body>
	<select>
		<option disabled selected> -- Ano -- </option>
		<?php 
			$n = date("Y");  
			while($n >= 1900){ 
		?>
			<option> <?="$n";?></option>
		<?php  
			$n--;} 
		?>
	</select>

	<?php echo "<hr>"; ?>

		<?php 
			$n = 1;  
			while($n <= 5){ 
		?>
			<input type="text" id="inputSenha" class="form-control" placeholder="fruta<?= $n?>"><br>
		<?php  
			$n++;} 
		?>

		}}º
</body>
</html>