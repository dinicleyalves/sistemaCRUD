<?php 

	function listar($tabela){

	$pdo = conectar();

	$listar = $pdo->query ( " select * from $tabela" );
	$listar->execute();
	return $listar->fetchAll(PDO::FETCH_OBJ);
	


}