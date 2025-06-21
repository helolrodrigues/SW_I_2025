<?php
include_once'Funcionario.class.php';

$funcionario1 = new Funcionario("Heloísa Rodrigues", 3000);
$funcionario1->exibirInformacoes();
echo "<hr>";
$funcionario1->aumentarSalario(10); 
$funcionario1->exibirInformacoes();
?>
