<?php
// Classe veiculoo
class Veiculo {
    public $nome;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function mover() {
        return "está se movendo";
    }
}


class Carro extends Veiculo {
    public function mover() {
        return "anda na estrada";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        return "pedala na ciclovia";
    }
}

class Aviao extends Veiculo {
    public function mover() {
        return "voa no céu";
    }
}

// criadno veículos
$veiculos = [
    new Carro("Fusca"),
    new Bicicleta("Caloi"),
    new Aviao("Boeing 747")
];

// resultado simples
echo "<h3>Veículos em Ação:</h3>";
foreach ($veiculos as $veiculo) {
    $tipo = get_class($veiculo);
    echo "<p><strong>{$tipo} {$veiculo->nome}</strong>: {$veiculo->mover()}</p>";
}
?>