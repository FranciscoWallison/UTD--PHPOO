<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <form ction="#" method="POST">
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="idade" placeholder="idade">
            <input type="text" name="email" placeholder="email">
            <input type="submit">
        </form>
		<table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Peso(kg)</th>
                    <th>Altura(m)</th>
                    <th>IMC</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody id="tabela-pacientes">
                <tr class="paciente" id="primeiro-paciente">
                    <td class="info-idade"><?= $name?></td>
                    <td class="info-idade"><?= $idade?></td>
                    <td class="info-email"><?= $email?></td>             
                </tr>
            </tbody>
        </table>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

<?php 

if(isset($_POST['name']) && isset($_POST['idade']) && isset($_POST['email']))
{
	//Recebendo os dados
	$data = implode("-", $_POST);

	//Tranformando em string
	setcookie("cadaster", $data );
	echo '<pre>';

	var_dump($_COOKIE['cadaster']);

	//Transformando a string em arrays
	$dataEx = explode("-", $_COOKIE['cadaster']);
	echo '</pre>';

?>

<table border="2">
	<tr>
		<th>Nome</th>
		<th>Idae</th>
		<th>Email</th>
	</tr>
	<tr>
		<?php 
			foreach ($dataEx as $key => $value) {
				echo "<td>". $value . "</td>";
			}

		?>
	</tr>
</table>
<?php 
}
?>
