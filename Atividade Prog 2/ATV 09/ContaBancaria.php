<?php
class ContaBancaria {
    private $saldo;

    public function __construct($saldoInicial = 0) {
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor): void {
        $this->saldo += $valor;
        echo "Depositado: R$ " . $valor . "<br>";
    }

    public function sacar($valor): bool {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ " . $valor . " realizado!<br>";
            return true;
        } else {
            echo "Saldo insuficiente para sacar R$ " . $valor . "<br>";
            return false;
        }
    }

    public function verSaldo(): mixed {
        echo "Saldo atual: R$ " . $this->saldo . "<br>";
        return $this->saldo;
    }
}

// Testando
echo "<h3>Conta Bancária</h3>";

$conta = new ContaBancaria(saldoInicial: 100); // saldo inicial  100

$conta->verSaldo();

// ssaque dentro do saldo
$conta->sacar(valor: 30);
$conta->verSaldo();

// Saque maior que saldo não permite
$conta->sacar(valor: 90);
$conta->verSaldo();

// seposito e novo saque
$conta->depositar(valor: 50);
$conta->sacar(valor: 40);
$conta->verSaldo();
?>