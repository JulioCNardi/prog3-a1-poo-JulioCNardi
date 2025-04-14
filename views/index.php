<?php
    session_start();
    $erro = $_SESSION['erro_login'] ?? '';
    unset($_SESSION['erro_login']); // limpa depois de F5 na página
?>

<!DOCTYPE html>
<html lang="en">

<!-- Sessão que armazena a senha errada caso de erro no processamento do Login. -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Login Sistema</title>
</head>
<body>

    <div class="loginBox">
        <h1>Login</h1>
        <br>
            <!-- Dá display na mensagem de erro caso e-mail ou senha esteja incorreta -->
            <?php if (!empty($erro)) : ?>
                <p style="color: red;"><?= $erro ?></p>
            <?php endif; ?>
        <br>
        <form method="post" action="../controllers/processaLogin.php">
            <label>E-mail</label><br> <input type="email" name="email" required><br><br>
            <label>Senha</label><br> <input type="password" name="senha" required><br><br>
            <label>Lembrar E-mail:</label> <input type="checkbox" name="lembrar" value="1"><br><br>
            <button type="submit">acessar</button>
        </form>
        <br>
        <a href="cadastro.php">Não tenho cadastro</a>
    </div>

</body>
</html>