<?php
require 'conexao.php';
$id = 11;
$novoPreco = 79.99;
$sql = "UPDATE livro SET preco = :preco WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':preco', $novoPreco);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "livro atualizado com sucesso!";
} else {
echo "Erro ao atualizar livro.";
}
?>