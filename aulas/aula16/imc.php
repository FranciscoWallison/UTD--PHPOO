<?php 
function resultado($resultado)
{
        if($resultado < 17)
            return 'Muito abaixo do peso';

        if($resultado > 17 &&  $resultado < 18.49)
            return 'Abaixo do peso';

        if($resultado > 18.5 &&  $resultado < 24.99)
            return 'Peso normal';

        if($resultado > 25 &&  $resultado < 29,99)
            return 'Peso normal';

        if($resultado > 30 &&  $resultado < 34,99)
            return 'Obesidade I';

        elseif($resultado > 35 &&  $resultado < 39,99){
            return 'Obesidade II (severa)';
        }elseif($resultado > 40){
            return 'Obesidade Obesidade';
        }
}

function imc($name,$peso,$altura)
{
    $imc = $peso/($altura*2);
echo    '<table class="table">
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
                    <td class="info-peso">'.$name.'</td>
                    <td class="info-peso">'.$peso.'</td>
                    <td class="info-altura">'.$altura.'</td>
                    <td class="info-imc">'.$imc.'</td>
                     <td class="info-imc">'.echo resultado($imc).'</td>
                </tr>
            </tbody>
        </table>';
}


?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <form ction="imc.php" method="POST">
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="peso" placeholder="peso">
            <input type="text" name="altura" placeholder="altura">
            <input type="submit">
        </form>

        <?php
            if( isset($_POST['name']) )
            {
                imc($_POST['name'], $_POST['peso'], $_POST['altura']);
            }
        ?>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
