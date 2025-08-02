<?php
$host = 'localhost';
$database = 'loja';
$user = 'root';
$pass = '';

try {
     $pdo = new PDO("mysql:host=$host;database=$database", $user, $pass);
// Habilita erros do PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>