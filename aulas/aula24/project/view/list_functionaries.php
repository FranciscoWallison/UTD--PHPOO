<table class="table table-hover table-bordered">
	<th>Nome</th>
	<th>Email</th>
	<th>Celular</th>
	<th>CPF</th>
	<th>Acesso</th>
	<th>Ações</th>
	
	<?php  
		
		//incluindo o banco
		include_once 'database.php';

		//renderizando os funcionários
		foreach ($person_db as $account) {
			if($account['user_type'] == "Funcionario"){
				echo "<tr>";
				
				//Retirando Dados que nao serão mostrados na tabela
				unset($account['password']);
				unset($account['phone']);	
				
				foreach ($account as $key => $value) {
					echo "<td>".$value."</td>";
				}
				echo "<td>";
					echo '<button class="btn btn-warning btn-xs">
							<i class="fa fa-pencil">
							</i>
						</button> ';
					echo '<button class="btn btn-danger btn-xs">
							<i class="fa fa-trash">
							</i>
						</button>';
				echo "</td>";

				echo "</tr>";
			}//fecha o if
		}//fecha o foreach

	?>
</table>