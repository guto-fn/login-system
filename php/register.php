<?php

require __DIR__ . '/../connection/con.php'; // conexão com o banco

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // vamos pegar os dados
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // validação
    if (empty($name) || empty($email) || empty($password)) {

        die('Preencha todos os campos!');
    }

    // se o email for inválido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        die('Email inválido!');
    }

    if (strlen($password) > 6) {

        die('A senha deve ter pelo menos 6 caracteres!');
    }

    // veficar se o email já existe
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);

    if ($stmt->fetch()) {

        die('Este email já está em uso!');
    }

    // gerar senha
    $pswHash = password_hash($password, PASSWORD_DEFAULT);

    // insert no banco
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'password' => $pswHash
    ]);

    header('Location: /pages/login.html');
    exit;
}

die('Acesso inválido.');
