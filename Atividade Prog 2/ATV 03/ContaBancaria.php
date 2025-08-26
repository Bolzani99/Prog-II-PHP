<?php
class ContaBancaria {
    private $saldo = 0;
    
    public function depositar($valor): void {
        $this->saldo += $valor;
    }
    
    public function sacar($valor): bool {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
    
    public function verSaldo() {
        return $this->saldo;
    }
}

// usando a conta
$conta = new ContaBancaria();
$conta->depositar(valor: 100);
echo "Saldo: R$ " . $conta->verSaldo() . "<br>";

$conta->depositar(valor: 50);
echo "Saldo: R$ " . $conta->verSaldo() . "<br>";

if ($conta->sacar(valor: 30)) {
    echo "Saque realizado!<br>";
} else {
    echo "Saldo insuficiente!<br>";
}

echo "Saldo final: R$ " . $conta->verSaldo();
?>