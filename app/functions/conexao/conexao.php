<?php

	function conectar(){

		$pdo = new PDO('mysql:dbhost=localhost; dbname=loja', "root", "");
		return $pdo; 

	}