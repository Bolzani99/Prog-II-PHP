<?php


class Animal {
    public function falar() {
        return "Som genérico de animal";
    }
}


class Cachorro extends Animal {
    public function falar() {
        return "Au Au!";
    }
}


class Gato extends Animal {
    public function falar() {
        return "Miau!";
    }
}

// Exemplo de uso
$animal = new Animal();
$cachorro = new Cachorro();
$gato = new Gato();

echo "Animal: " . $animal->falar() . "\n";
echo "Cachorro: " . $cachorro->falar() . "\n";
echo "Gato: " . $gato->falar() . "\n";

// Demonstração de polimorfismo
function fazerAnimalFalar(Animal $animal) {
    echo $animal->falar() . "\n";
}

echo "\nPolimorfismo:\n";
fazerAnimalFalar(new Cachorro()); 
fazerAnimalFalar(new Gato());     
?>