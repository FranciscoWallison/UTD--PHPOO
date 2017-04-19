
<?php 
    //pegando os dados do arquivos
    $data = file("cadastropedido.txt");
    foreach ($data as $key => $value) {
        $pedidos_db[] =  explode(" - ",$value);
    }

?>
		<table class="table" id="">
			 <caption class="text-center">Lista dos Pedidos.</caption>
            <thead>
                <tr>
                	<th>#</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                    <th>Tamanho</th>
                    <th>Inicio</th>
                    <th>ação</th>
                </tr>
            </thead>
            <tbody id="tabela-pacientes">
               <?php 
                        foreach ($pedidos_db as $pedidos){
                    
                    ?>
                             <tr class="paciente" id="primeiro-paciente">
                                <th scope="row"><?=$pedidos[0]?></th>
                                <td class="info-peso"><?=$pedidos[1]?></td>
                                <td class="info-peso"><?=$pedidos[2]?></td>
                                <td class="info-peso"><?=$pedidos[3]?></td>
                                <td class="info-peso"><?=$pedidos[4]?></td>
                                <td class="info-altura">
                                     <a href="" class="btn btn-warning btn-xs" data-placement="bottom" title="Editar"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> </a>
                                     <a href="" class="btn btn-danger btn-xs" data-placement="bottom" title="Cancelar" ><span class="fa fa-trash" aria-hidden="true"></span> </a>
                                </td>
                            </tr>        
                    <?php
                        }
                    ?>
            </tbody>
        </table>


<a href="?option=creat_order">

	<i class="fa fa-plus"></i>
	novo pedido!

</a>
