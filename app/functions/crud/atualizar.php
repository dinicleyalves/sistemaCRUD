<?php 

function atualizar( $id, $tabela, $attributes){

	//primeiro a conexão

	$pdo = conectar();

	$values = null;


	foreach ($attributes as $key => $value) {
		$values.= $key. '= :' .$key.','; 
	}
	$values = (rtrim($values, ','));

	$atualizar = $pdo->prepare (" update $tabela set $values where id=:id ");
	$attributes['id'] = $id; 
	return $atualizar->execute($attributes);

}