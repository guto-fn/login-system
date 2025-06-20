<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .logout-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.2s ease;
            margin-top: 20px;
            margin-left: 600px;
            align-items: center;
        }

        .logout-button:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Bem vindo!</h1>

    <a href="./logout.php" class="logout-button">Encerrar sessão</a>

    <?php
    phpinfo();
    ?>
</body>

</html>