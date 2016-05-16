<?php 

if(isset($_GET['excluir']) AND $_GET['excluir'] == 'true'){

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$registroExcluido = deletar("id", $id, "tb_clientes");

	$mensagem = ($registroExcluido) ? "Excluido com sucesso!" : "Erro ao excluir o cliente!";
}