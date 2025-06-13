<?php
include_once 'Livro.class.php';

$livro = new Livro ('Iracema', 'José de Alencar', true);

//echo "<prep>"; //Ajusta para visualização de código
//print_r($livro);
//echo "</prep>";

echo "STATUS DO LIVRO: ";
echo $livro ->ExibirStatus();
echo "<hr>";

echo "Foi feito um empréstimo";
$livro -> Emprestar();
echo "<hr>";

echo "STATUS DO LIVRO: ";
echo $livro ->ExibirStatus();
echo "<hr>";

echo "Foi feito um empréstimo";
$livro -> Emprestar();
echo "<hr>";

echo "Efetuando uma devolução";
$livro ->Devolver();
echo "<hr>";

echo "STATUS DO LIVRO: ";
echo $livro ->ExibirStatus();
echo "<hr>";
?>