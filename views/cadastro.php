<?php
session_start();
$erro = $_SESSION['erro_cadastro'] ?? '';
$sucesso = $_SESSION['sucesso_cadastro'] ?? '';
unset($_SESSION['erro_cadastro'], $_SESSION['sucesso_cadastro']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Login Sistema</title>
</head>

<body>

    <div class="loginBox">
        <h1>Cadastro</h1>
        <br>

        <!-- Dá display nas mensagem de sucesso e erro -->
        <?php if (!empty($erro)) : ?>
            <p style="color: red;"><?= $erro ?></p>
        <?php endif; ?>

        <?php if (!empty($sucesso)) : ?>
            <p style="color: green;"><?= $sucesso ?></p>
        <?php endif; ?>

        <br>
        <form method="post" action="../controllers/processaCadastro.php">
            <label>Nome:</label><br> <input type="text" name="nome" required><br><br>
            <label>E-mail</label><br> <input type="email" name="email" required><br><br>
            <label>Senha</label><br> <input type="password" name="senha" required><br><br>
            <button type="submit">Cadastrar</button>
        </form>
        <br>
        <a href="index.php">Voltar ao Login</a>
    </div>
</body>
</html>