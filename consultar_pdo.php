<div class="titulo">PDO: Consultar Registros</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 5, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 0, PDO::PARAM_INT);

echo "<hr>";

if ($stmt->execute()) {
	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	print_r($resultado);
} else {
	echo "Erro: " . $conexao->errorCode . "<br>";
	print_r($conexao->errorInfo);
}

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 1);

echo "<hr>";

if ($stmt->execute()) {
	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	print_r($resultado);	
} else {
	echo "Erro: " . $conexao->errorCode . "<br>";
	print_r($conexao->errorInfo);
}

echo "<hr>";

$conexao->close();

?>