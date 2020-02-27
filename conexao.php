<?php

function novaConexao($banco = 'curso_php') {
	$servidor = 'db';
	$usuario = 'root';
	$senha = 'jair1234';

	$conexao = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conexao->connect_error) {
		die('Erro: ' . $conexao->connect_error);
	}

	return $conexao;
}

?>