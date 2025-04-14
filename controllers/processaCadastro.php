<?php
require_once '../models/Usuario.php';
session_start();

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Cria um novo objeto 
$novoUsuario = new Usuario($nome, $email, $senha);

// Cria um array de usuarios na sessão
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

// Verifica se o e-mail já está cadastrado
foreach ($_SESSION['usuarios'] as $usuario) {
    if ($usuario->getEmail() === $email) {
        $_SESSION['erro_cadastro'] = "E-mail já cadastrado no sistema";
        header("Location: ../views/cadastro.php");
        exit;
    }
}

// Cria Usuario e manda a mensagem para a tela de cadastro
$novoUsuario = new Usuario($nome, $email, $senha);
$_SESSION['usuarios'][] = $novoUsuario;

$_SESSION['sucesso_cadastro'] = "Cadastro com sucesso";
header("Location: ../views/cadastro.php");
exit;
?>