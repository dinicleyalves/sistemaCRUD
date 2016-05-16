

<table class="striped">
	<thead style="background-color: #000; color: #fff;">
		<tr>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Excluir</td>
		</tr>
	</thead>

	<tbody>
	
	<?php

		$listarClients = listar("tb_clientes");
		foreach ($listarClients as $cliente):

	?>

	<tr>
		<td><?php echo $cliente->tb_clientes_nome; ?></td>
		<td><?php echo $cliente->tb_clientes_email; ?></td>
		<td>
			<a href="?excluir=true&id=<?php echo $cliente->id ;?>" class="red darken-4 btn"><i class="mdi-content-add"> Excluir</i></a>
		</td>
	</tr>

	<?php endforeach; ?>	
	
	</tbody>

</table>

