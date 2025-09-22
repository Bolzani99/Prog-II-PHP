<?php

class Calculadora {
    
    // etodo somar com parâmetros opcionais
    public function somar($a, $b, $c = null) {
        if ($c === null) {
           
            return $a + $b;
        } else {
            
            return $a + $b + $c;
        }
    }
}

// Exemplo de uso
$calc = new Calculadora();

// Chamada com 2 paraametros
echo "Soma de 2 + 3 = " . $calc->somar(2, 3) . "\n";

// Chamada com 3 parametros  
echo "Soma de 2 + 3 + 4 = " . $calc->somar(2, 3, 4) . "\n";

// Outros exemplos
echo "Soma de 10 + 20 = " . $calc->somar(10, 20) . "\n";
echo "Soma de 1 + 2 + 3 = " . $calc->somar(1, 2, 3) . "\n";

// Com números decimais
echo "Soma de 1.5 + 2.3 = " . $calc->somar(1.5, 2.3) . "\n";
echo "Soma de 1.1 + 2.2 + 3.3 = " . $calc->somar(1.1, 2.2, 3.3) . "\n";

?>