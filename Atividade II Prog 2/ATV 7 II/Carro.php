<?php
class Carro {
    private $velocidade = 0;
    
    public function acelerar($valor) {
        $novaVelocidade = $this->velocidade + $valor;
        
        if ($novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
            echo "Acelerando! Velocidade: " . $this->velocidade . " km/h<br>";
        } else {
            echo "Limite de 200 km/h atingido!<br>";
        }
    }
    
    public function frear($valor) {
        $novaVelocidade = $this->velocidade - $valor;
        
        if ($novaVelocidade >= 0) {
            $this->velocidade = $novaVelocidade;
            echo "Freando! Velocidade: " . $this->velocidade . " km/h<br>";
        } else {
            echo "Carro já está parado!<br>";
        }
    }
    
    public function getVelocidade() {
        return $this->velocidade;
    }
}

// Exemplo de uso
echo "<h3>Controle do Carro</h3>";

$meuCarro = new Carro();

$meuCarro->acelerar(50);
$meuCarro->acelerar(80);
$meuCarro->frear(30);
$meuCarro->acelerar(150); // Tenta passar de 200
$meuCarro->frear(300); // Tenta frear demais

echo "<br>Velocidade final: " . $meuCarro->getVelocidade() . " km/h";
?>