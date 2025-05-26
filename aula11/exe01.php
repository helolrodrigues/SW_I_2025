<?php
include_once 'exercicio01.php';



$produto = new Produto("Livro", "R$85.00", 4);

$produto->adicionarEstoque(10);
$produto->removerEstoque(5);
$produto->mostrarDetalhes();


?>