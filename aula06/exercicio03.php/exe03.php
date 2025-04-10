<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 - Tabela de produtos</title>
</head>
<body>
<style>
        table {
           margin-left: auto;
           margin-right: auto;
        }
          
        th, td {
            border: 2px solid #444;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: black;
            color: white;
        }

        .eletrônicos {
            background-color:rgb(230, 173, 173);
        }

        .roupas {
            background-color:rgb(124, 109, 206);
        }

        .beleza {
            background-color:rgb(184, 112, 199);
        }
    </style>
</head>
<body>

<?php
$produtos = [
    [
        'nome' => 'tablet',
        'preco' => 2500.00,
        'categoria' => 'eletrônicos'
    ],
    [
        'nome' => 'moletom',
        'preco' => 50.00,
        'categoria' => 'roupas'
    ],
    [
        'nome' => 'smartphone',
        'preco' => 1500.00,
        'categoria' => 'eletrônicos'
    ],
    [
        'nome' => 'perfume',
        'preco' => 60.99,
        'categoria' => 'beleza'
    ],
    [
        'nome' => 'camiseta',
        'preco' => 19.99,
        'categoria' => 'roupas'
    ]
];
?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): 
            $classe = $produto['categoria'];
        ?>
            <tr class="<?= $classe ?>">
                <td><?= $produto['nome'] ?></td>
                <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td><?= $produto['categoria'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>