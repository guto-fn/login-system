<?php

session_start();

require __DIR__ . '/../connection/con.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {

        die("Preencha todos os campos!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        die("Email inválido!");
    }

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {

        die('Usuário não encontrado!');
    }

    if (!password_verify($password, $user['password'])) {

        die('Senha incorreta!');
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];

    header('Location: /php/dashboard.php');
    exit;
}

die('Acesso inválido.');
