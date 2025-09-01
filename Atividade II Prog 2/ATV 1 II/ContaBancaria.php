<?php
class ContaBancaria {
    private $saldo;
    
    public function __construct($saldoInicial = 0) {
        $this->saldo = $saldoInicial;
    }
    
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }
    
    public function sacar($valor) {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }
}

// Exemplo de uso
echo "<h3>Exemplo de Conta Bancária</h3>";

// Criando uma conta
$minhaConta = new ContaBancaria(100);
echo "Saldo inicial: R$ " . $minhaConta->getSaldo() . "<br>";

// Depositando
$minhaConta->depositar(50);
echo "Após depositar R$ 50: R$ " . $minhaConta->getSaldo() . "<br>";

// Sacando
if ($minhaConta->sacar(30)) {
    echo "Saque de R$ 30 realizado!<br>";
} else {
    echo "Não foi possível sacar R$ 30!<br>";
}
echo "Saldo atual: R$ " . $minhaConta->getSaldo() . "<br>";

// Tentando sacar valor maior que o saldo
if ($minhaConta->sacar(200)) {
    echo "Saque de R$ 200 realizado!<br>";
} else {
    echo "Saldo insuficiente para sacar R$ 200!<br>";
}
echo "Saldo mantido: R$ " . $minhaConta->getSaldo() . "<br>";

// Depositando valor inválido
if ($minhaConta->depositar(-10)) {
    echo "Depósito de R$ -10 realizado!<br>";
} else {
    echo "Não é possível depositar valor negativo!<br>";
}
echo "Saldo final: R$ " . $minhaConta->getSaldo() . "<br>";
?>