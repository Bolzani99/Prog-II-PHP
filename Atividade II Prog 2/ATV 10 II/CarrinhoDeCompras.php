<?php
class CarrinhoDeCompras {
    private $total = 0;
    
    public function add($valor) {
        $this->total += $valor;
    }
    
    public function verTotal() {
        echo "Total: R$ " . number_format($this->total, 2, ',', '.');
    }
}

// Exemplo de uso
echo "<h3>Carrinho de Compras</h3>";

$carrinho = new CarrinhoDeCompras();

$carrinho->add(50.00);
$carrinho->add(25.50);
$carrinho->add(15.75);

$carrinho->verTotal();
?>