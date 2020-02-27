<?php

function novaConexao($banco = 'curso_php') {
	$servidor = 'db';
	$usuario = 'root';
	$senha = 'jair1234';

	try {
		$conexao = new PDO("mysql:host=$servidor;dbname=$banco", 
			$usuario, $senha);
		return $conexao;
	} catch (PDOException $e) {
		die('Erro: ' . $e->getMessage());
	}
}

?>