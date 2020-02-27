<div class="titulo">PDO: Inserir Registro</div>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
	'José da Silva',
	'1980-02-01',
	'jose.silva @ email.com.br',
	'https://jose.silva.sites.com.br',
	2,
	5000.90
)";

$conexao = novaConexao();

if ($conexao->exec($sql)) {
	$id = $conexao->lastInsertId();
	echo "Novo cadastro com id $id";
} else {
	echo "Erro: " . $conexao->errorCode . "<br>";
	print_r($conexao->errorInfo);
}

$conexao->close();

?>