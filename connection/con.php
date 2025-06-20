<?php

$host = 'localhost';
$port = '5432';
$dbname = 'login_system_db';
$user = 'admin';
$passw = 'admin';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão com o banco de dados realizada com sucesso! \n";
} catch (PDOException $e) {
    dir("Erro na conexão com o banco de dados \n " . $e->getMessage());
}