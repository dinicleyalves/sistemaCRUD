<?php

	function cadastrar( $tabela, $attributes ){

		/*faz conexão com o banco*/

		$pdo = conectar();

		/* pegar os indices dos arrays que são os campos da tabela */

		$keys = array_keys ($attributes);

		/* os nomes da tabela em forma de strings */

		$camposTabela = implode(',', $keys);

		/* iniciando variável que será usado no looping */

		$values = null;

		/* looping para pegar os valores e colocar os dois pontos (:) na frente de cada um deles */
		foreach ( $keys as $key){
		
			$values.=', :'.$key; 
		
		}

		/* tirar os espaços em branco e tirar a primeira virgula da string */
		$values = (trim(ltrim($values, ',')));

		/* prepara o sql */
		$cadastrar = $pdo->prepare(" insert into $tabela ($camposTabela) values ( $values) ");
		
		/*executa o sql dentro da função execute */
		$cadastrar->execute($attributes);

		/* retorna o ultimo id cadastrado*/
		return $pdo->lastInsertId();
}