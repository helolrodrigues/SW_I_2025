<?php
require 'conexao.php';
$nome = "Pequeno principe";
$preco = 99.99;
$estoque = 20;
$sql = "INSERT INTO livro (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':estoque', $estoque);
if ($stmt->execute()) {
echo "livro inserido com sucesso!";
} else {
echo "Erro ao inserir livro.";
}
?>