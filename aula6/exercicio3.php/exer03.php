<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 <title>
</head>
<body>
<?php
echo "<h2>Exercício 3</h2>";
$produtos = [
    ["nome" => "TV", "preco" => 1000, "categoria" => "Eletrônicos"],
    ["nome" => "Calça", "preco" => 80, "categoria" => "Roupas"],
    ["nome" => "Feijão", "preco" => 10, "categoria" => "Comida"]
];

echo "<table border='1'>";
echo "<tr><td>Nome</td><td>Preço</td><td>Categoria</td></tr>";
foreach ($produtos as $p) {
    echo "<tr>";
    echo "<td>" . $p["nome"] . "</td>";
    echo "<td>" . $p["preco"] . "</td>";
    echo "<td>" . $p["categoria"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>