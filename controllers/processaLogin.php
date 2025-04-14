<?php
require_once '../models/Usuario.php';
session_start();

// Usuario admin
$usuarios = [ new Usuario("Administrador", "admin@admin.com", "admin") ];

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$autenticado = false;

if (isset($_SESSION['usuarios'])) 
{
    foreach ($_SESSION['usuarios'] as $usuario) 
    {

        if ($usuario->autenticar($email, $senha)) 
        {
            $autenticado = true;
            header('Location: ../views/dashboard.php');
            break;
        }

    }
}

// Pega o nome do usuário para fazer a proteção de rotas
$_SESSION['usuario_logado'] = $usuario->getNome(); 


// Manda o usuario para o index com a mensagem de erro em caso de falha ao logar
if (!$autenticado) 
{
    $_SESSION['erro_login'] = "E-mail ou senha incorretos.";
    header("Location: ../views/index.php"); 
    exit;
}

