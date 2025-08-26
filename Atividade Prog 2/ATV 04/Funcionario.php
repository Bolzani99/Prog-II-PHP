<?php
class Funcionario {
    protected $salario;
}

class Gerente extends Funcionario {
    
    public function getSalario(): mixed {
        return $this->salario;
    }
    
    public function setSalario($valor): void {
        $this->salario = $valor;
    }
}

// xemplo de uso
$gerente = new Gerente();
$gerente->setSalario(valor: 5000);
echo "Salário do gerente: R$ " . $gerente->getSalario();
?>