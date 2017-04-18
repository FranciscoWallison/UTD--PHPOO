<?php
//Incluir o banco de dados
include_once 'database.php';

?>

		<table class="table" id="">
			 <caption class="text-center">Lista dos Funcionarios.</caption>
            <thead>
                <tr>
                	<th>#</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>ação</th>
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
                                <td class="info-altura">
                                    <button type="button" class="btn btn-warning btn-xs" data-placement="bottom" title="Editar"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> </button>
                                    <button type="button" class="btn btn-danger btn-xs" data-placement="bottom" title="Deletar" ><span class="fa fa-trash" aria-hidden="true"></span> </button>
                                </td>
			                </tr>        
                    <?php
                    		}
                		}
                    ?>
                
            </tbody>
        </table>

