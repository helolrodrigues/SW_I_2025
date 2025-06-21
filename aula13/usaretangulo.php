<?php
include_once 'Retangulo.class.php';

$retangulo = new Retangulo();
$retangulo->setLargura(5);
$retangulo->setAltura(10);

echo "ÁREA: " . $retangulo->calcularArea();
echo "<br>PERÍMETRO: " . $retangulo->calcularPerimetro();
?>