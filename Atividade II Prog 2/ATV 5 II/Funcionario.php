<?php
class Funcionario {
    protected $salario;
    
    public function __construct($salario) {
        $this->salario = $salario;
    }
    
    public function getSalario() {
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    public function addBonus($bonus) {
        $this->salario += $bonus;
    }
}

// Exemplo de uso
echo "<h3>Funcionários e Gerentes</h3>";

// Criando funcionário
$funcionario = new Funcionario(2000);
echo "Funcionário: R$ " . $funcionario->getSalario() . "<br>";

// Criando gerente
$gerente = new Gerente(3000);
echo "Gerente sem bônus: R$ " . $gerente->getSalario() . "<br>";

// Adicionando bônus
$gerente->addBonus(1000);
echo "Gerente com bônus: R$ " . $gerente->getSalario() . "<br>";

// Mais bônus
$gerente->addBonus(500);
echo "Gerente com mais bônus: R$ " . $gerente->getSalario() . "<br>";
?>