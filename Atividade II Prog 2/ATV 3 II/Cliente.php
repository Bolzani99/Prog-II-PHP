<?php
class Cliente {
    private $nome;
    private $cpf;
    
    public function __construct($nome = "", $cpf = "") {
        $this->setNome($nome);
        $this->setCpf($cpf);
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
        return true;
    }
    
    public function getCpf() {
        return $this->cpf;
    }
    
    public function setCpf($cpf) {
        // Remove tudo que não é número
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        
        // Verifica se tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }
        
        // Verifica se não é uma sequência de números iguais (ex: 111.111.111-11)
        if (preg_match('/^(\d)\1+$/', $cpf)) {
            return false;
        }
        
        // Se passou nas validações, salva o CPF
        $this->cpf = $cpf;
        return true;
    }
    
    // Método para formatar o CPF com pontos e traço
    public function getCpfFormatado() {
        if (strlen($this->cpf) == 11) {
            return substr($this->cpf, 0, 3) . '.' . 
                   substr($this->cpf, 3, 3) . '.' . 
                   substr($this->cpf, 6, 3) . '-' . 
                   substr($this->cpf, 9, 2);
        }
        return $this->cpf;
    }
}

// Exemplo de uso
echo "<h3>Cliente com Validação de CPF</h3>";

// Criando cliente com CPF válido
$cliente1 = new Cliente("Maria Silva", "123.456.789-09");
echo "Nome: " . $cliente1->getNome() . "<br>";
echo "CPF: " . $cliente1->getCpfFormatado() . "<br><br>";

// Tentando usar CPF inválido
$cliente2 = new Cliente("João Santos", "111.111.111-11");
if ($cliente2->getCpf() == "") {
    echo "CPF do João é inválido!<br>";
} else {
    echo "CPF do João: " . $cliente2->getCpfFormatado() . "<br>";
}

// Testando com CPF muito curto
$cliente3 = new Cliente("Ana", "123");
if ($cliente3->getCpf() == "") {
    echo "CPF da Ana é inválido!<br>";
}
?>