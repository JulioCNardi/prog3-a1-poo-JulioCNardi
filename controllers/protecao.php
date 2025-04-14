<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header("Location: ../views/index.php"); // redireciona se não estiver logado
    exit;
}
?>
