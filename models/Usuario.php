<?php
class Usuario 
{
    // Atributos
    private $nome;
    private $senha;
    private $email;
   
    // Funções de Construção e Autentificação
    public function __construct($nome, $email, $senha) 
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function autenticar($emailDigitado, $senhaDigitada) 
    {
        return $this->email === $emailDigitado && password_verify($senhaDigitada, $this->senha);
    }

    // Get e Setters
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($novoEmail) {
        $this->email = $novoEmail;
    }
    
    public function setSenha($novaSenha) {
        $this->senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
    }

}