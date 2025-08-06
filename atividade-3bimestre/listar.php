<?php
require 'conexao.php';
$sql = "SELECT * FROM livro";
$stmt = $pdo->query($sql);
while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "ID: " . $livro['id'] . "<br>";
echo "Nome: " . $livro['nome'] . "<br>";
echo "Preço: R$" . $livro['preco'] . "<br>";
echo "Estoque: " . $livro['estoque'] . "<br><br>";
}
?>