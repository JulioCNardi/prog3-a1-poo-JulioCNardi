<?php require_once '../controllers/protecao.php';?>

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
        <h1>Bem vindo</h1>
        <form action="../controllers/logout.php" method="post"> 
        <br>
        <button type="submit">Deslogar</button>
        </form>
    </div>

</body>
</html>