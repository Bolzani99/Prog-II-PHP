<?php
class Usuario {
    private $senha;
    
    public function __construct($senha) {
        $this->senha = $senha;
    }
    
    public function verificarSenha($senhaDigitada): bool {
        return $senhaDigitada === $this->senha;
    }
}

// Exemplo de usoo
echo "<h3>Sistema de Verificação de Senha</h3>";

// Criando usuaario com senha "123456"
$usuario = new Usuario(senha: "123456");

// Testando senhs
echo "Testando senha 'abc123': ";
echo $usuario->verificarSenha(senhaDigitada: "abc123") ? "CORRETA" : "INCORRETA";
echo "<br>";

echo "Testando senha '123456': ";
echo $usuario->verificarSenha(senhaDigitada: "123456") ? "CORRETA" : "INCORRETA";
echo "<br>";

echo "Testando senha '': ";
echo $usuario->verificarSenha(senhaDigitada: "") ? "CORRETA" : "INCORRETA";
?>