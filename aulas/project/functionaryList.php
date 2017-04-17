<?php
//Incluir o banco de dados
include_once 'database.php';

?>

		<table class="table" id="myTable">
			 <caption class="text-center">Lista dos Funcionarios.</caption>
            <thead>
                <tr>
                	<th>#</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>telefone</th>
                </tr>
            </thead>
            <tbody id="tabela-pacientes">
               
                	<?php 
                		foreach ($person_db as $accounts){
                			if ($accounts['user_type'] === 'functionary') {
                				# code...
                			
                	?>
		                	 <tr class="paciente" id="primeiro-paciente">
		                	 	<th scope="row">#</th>
			                    <td class="info-peso"><?=$accounts['name']?></td>
			                    <td class="info-peso"><?=$accounts['email']?></td>
			                    <td class="info-altura"><?=$accounts['phone']?></td>	
			                </tr>        
                    <?php
                    		}
                		}
                    ?>
                
            </tbody>
        </table>

