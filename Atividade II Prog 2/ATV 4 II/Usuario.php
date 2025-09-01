<?php
class Usuario {
    private $senha;
    
    public function __construct($senha = "") {
        $this->senha = $senha;
    }
    
    public function verificarSenha($senhaDigitada) {
        return $senhaDigitada === $this->senha;
    }
    
    // Método opcional para definir/alterar a senha
    public function definirSenha($novaSenha) {
        $this->senha = $novaSenha;
        return true;
    }
}

// Exemplo de uso
echo "<h3>Sistema de Verificação de Senha</h3>";

// Criando um usuário com senha
$usuario = new Usuario("minhasenha123");

// Testando senhas
echo "Testando senha 'abc': " . 
     ($usuario->verificarSenha("abc") ? "Correta" : "Incorreta") . "<br>";
     
echo "Testando senha 'minhasenha123': " . 
     ($usuario->verificarSenha("minhasenha123") ? "Correta" : "Incorreta") . "<br>";

// Alterando a senha
$usuario->definirSenha("novaSenha456");

echo "Testando nova senha 'novaSenha456': " . 
     ($usuario->verificarSenha("novaSenha456") ? "Correta" : "Incorreta") . "<br>";
?>