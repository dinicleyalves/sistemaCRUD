<?php 

if(isset($_POST['nomeCliente'])){

	$nomeCliente = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
	$emailCliente = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_STRING);
	$emailValidado = filter_input(INPUT_POST, 'emailCliente', FILTER_VALIDATE_EMAIL);

	if(empty(array_filter($_POST))){
		$mensagem  = "Todos os campos são obrigatórios!";
		}else if(!$emailValidado){
			$mensagem = "Digite um e-mail válido!";
		}else{
			$attributes = [
				"tb_clientes_nome" => $nomeCliente,
				"tb_clientes_email" => $emailCliente
			];

			$clienteCadastrado = cadastrar("tb_clientes", $attributes);

			$mensagem = ($clienteCadastrado) ? "Cliente cadastro com sucesso!" : 

			"Ocorreu um erro ao cadastar!";
		}
}