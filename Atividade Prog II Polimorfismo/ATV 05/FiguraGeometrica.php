<?php

abstract class FiguraGeometrica {
    abstract public function calcularArea();
}

class Quadrado extends FiguraGeometrica {
    private $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends FiguraGeometrica {
    private $raio;
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function calcularArea() {
        return pi() * $this->raio * $this->raio;
    }
}

class Retangulo extends FiguraGeometrica {
    private $base, $altura;
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

// Demonstração do polimorfismo
echo "CÁLCULO DE ÁREAS\n\n";

$figuras = [
    new Quadrado(5),
    new Circulo(3),
    new Retangulo(4, 6)
];

foreach ($figuras as $i => $figura) {
    $nome = get_class($figura);
    $area = $figura->calcularArea();
    
    echo ($i + 1) . ". $nome:\n";
    echo "   Área: " . number_format($area, 2) . "\n";
    echo "   ---\n";
}

echo "\nMais exemplos:\n";

echo "Quadrado(7): " . (new Quadrado(7))->calcularArea() . "\n";
echo "Círculo(5): " . number_format((new Circulo(5))->calcularArea(), 2) . "\n";
echo "Retângulo(8,3): " . (new Retangulo(8, 3))->calcularArea() . "\n";

?>