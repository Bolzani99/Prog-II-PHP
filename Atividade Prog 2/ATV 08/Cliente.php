<?php
class Cliente {
    public $nome;          // publico: qualquer lugar acess
    protected $cpf;        // Protegido: só classe e herdeiros
    private $telefone;     // Privado: so esta classe

    public function __construct($nome, $cpf, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    // metodo para acessar CPF proegido
    public function verCpf(): mixed {
        return $this->cpf;
    }

    // metodo para acessar telefone prvado
    public function verTelefone(): mixed {
        return $this->telefone;
    }

    // metodo para alterar telefone
    public function mudarTelefone($novo): void {
        $this->telefone = $novo;
    }
}

// Ttestando
$cliente = new Cliente(nome: "Silvio Bolzani", cpf: "111.222.333-44", telefone: "(49) 99999-9999");

// Public acesso diret
echo "Nome: " . $cliente->nome . "<br>";

// Protected: precisa de metodo
echo "CPF: " . $cliente->verCpf() . "<br>";

// Private: precisa de metodo
echo "Telefone: " . $cliente->verTelefone() . "<br>";

// Alterando telefone
$cliente->mudarTelefone(novo: "(49) 88888-8888");
echo "Novo telefone: " . $cliente->verTelefone();
?>