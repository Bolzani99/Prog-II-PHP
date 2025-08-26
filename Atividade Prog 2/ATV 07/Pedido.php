<?php
class Pedido {
    private $itens = [];
    
    public function inserirItem($item): void {
        $this->itens[] = $item;
    }
    
    public function listarItens(): array {
        return $this->itens;
    }
}

// Exemplo de usoa
echo "<h3>Sistema de Pedidos</h3>";

$pedido = new Pedido();

// inserindo itens
$pedido->inserirItem("Camiseta");
$pedido->inserirItem("Calça");
$pedido->inserirItem("Tênis");

// Listando itenss
$itens = $pedido->listarItens();
echo "Itens do pedido: <br>";
foreach ($itens as $item) {
    echo "- " . $item . "<br>";
}
?>