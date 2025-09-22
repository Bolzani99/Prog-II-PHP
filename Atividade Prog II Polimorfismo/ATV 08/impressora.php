<?php

abstract class Impressora {
    abstract public function imprimir();
}

class PDF extends Impressora {
    public function imprimir() {
        return "Imprimindo PDF";
    }
}

class Texto extends Impressora {
    public function imprimir() {
        return "Imprimindo Texto";
    }
}

class Imagem extends Impressora {
    public function imprimir() {
        return "Imprimindo Imagem";
    }
}

// Exemplo de uso
$documentos = [
    new PDF(),
    new Texto(),
    new Imagem()
];

foreach ($documentos as $doc) {
    echo get_class($doc) . ": " . $doc->imprimir() . "\n";
}

?>