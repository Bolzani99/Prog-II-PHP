<?php
class Pedido {
    private $itens = [];
    
    public function add($item) {
        $this->itens[] = $item;
    }
    
    public function listar() {
        foreach ($this->itens as $i => $item) {
            echo ($i + 1) . ". " . $item . "<br>";
        }
    }
}

// Exemplo de uso
echo "<h3>Pedido Simples</h3>";

$pedido = new Pedido();
$pedido->add("Pizza");
$pedido->add("Refri");
$pedido->add("Sorvete");

$pedido->listar();
?>