<?php

abstract class Transporte {
    abstract public function calcularTarifa($distancia);
}

class Onibus extends Transporte {
    private $tarifaBase = 4.50;
    private $valorPorKm = 0.25;
    
    public function calcularTarifa($distancia) {
        return $this->tarifaBase + ($distancia * $this->valorPorKm);
    }
}

class Metro extends Transporte {
    private $tarifaFixa = 5.00;
    
    public function calcularTarifa($distancia) {
        return $this->tarifaFixa;
    }
}

class Taxi extends Transporte {
    private $bandeira;
    
    public function __construct($bandeira = 1) {
        $this->bandeira = $bandeira;
    }
    
    public function calcularTarifa($distancia) {
        $tarifaBase = ($this->bandeira == 1) ? 8.00 : 10.00;
        return $tarifaBase + ($distancia * 3.50);
    }
}

// Demonstrçãao do sistema
echo "SISTEMA DE TRANSPORTE\n\n";

$transportes = [
    new Onibus(),
    new Metro(),
    new Taxi(1),
    new Taxi(2)
];

$distancias = [5, 10, 8, 12];

foreach ($transportes as $i => $transporte) {
    $distancia = $distancias[$i];
    $tarifa = $transporte->calcularTarifa($distancia);
    $nome = get_class($transporte);
    
    echo ($i + 1) . ". $nome\n";
    echo "   Distância: {$distancia} km\n";
    echo "   Tarifa: R$ " . number_format($tarifa, 2) . "\n";
    echo "   ---\n";
}

echo "\nCOMPARAÇÃO (10 km):\n";
foreach ($transportes as $transporte) {
    $nome = get_class($transporte);
    $tarifa = $transporte->calcularTarifa(10);
    echo "$nome: R$ " . number_format($tarifa, 2) . "\n";
}

?>