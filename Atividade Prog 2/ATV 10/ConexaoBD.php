<?php
class ConexaoBD {
    private $conexao;

    private function conectar(): bool {
        // Simula dados de conexão
        $servidor = "localhost";
        $usuario = "admin";
        $senha = "123456";
        
        // Simula conexão bem-sucedida
        $this->conexao = [
            'status' => 'conectado',
            'servidor' => $servidor,
            'usuario' => $usuario
        ];
        
        return true;
    }

    public function getConexao(): array {
        if (!$this->conexao) {
            $this->conectar();
        }
        return $this->conexao;
    }
}

// Usandoo
$database = new ConexaoBD();
$conexao = $database->getConexao();

echo "Banco: " . $conexao['servidor'] . "<br>";
echo "Usuário: " . $conexao['usuario'] . "<br>";
echo "Status: " . $conexao['status'];
?>