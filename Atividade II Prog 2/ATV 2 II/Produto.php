<?php
class Produto {
    private $preco;
    
    public function __construct($precoInicial = 0) {
        $this->setPreco($precoInicial);
    }
    
    public function getPreco() {
        return $this->preco;
    }
    
    public function setPreco($novoPreco) {
        if ($novoPreco >= 0) {
            $this->preco = $novoPreco;
            return true;
        } else {
            return false;
        }
    }
}

// Exemplo de uso
echo "<h3>Exemplo de Classe Produto</h3>";

// Criando um produto
$produto = new Produto(50);
echo "Preço inicial: R$ " . $produto->getPreco() . "<br>";

// Alterando o preço para um valor válido
if ($produto->setPreco(75)) {
    echo "Preço alterado para: R$ " . $produto->getPreco() . "<br>";
} else {
    echo "Falha ao alterar preço!<br>";
}

// Tentando alterar para um valor negativo
if ($produto->setPreco(-20)) {
    echo "Preço alterado para: R$ " . $produto->getPreco() . "<br>";
} else {
    echo "Não foi possível definir preço negativo! Preço mantido: R$ " . $produto->getPreco() . "<br>";
}

// Criando um produto com preço negativo no construtor
// (será ajustado para zero pela validação)
$produto2 = new Produto(-30);
echo "Produto com preço negativo no construtor: R$ " . $produto2->getPreco() . "<br>";

// Definindo preço zero
if ($produto2->setPreco(0)) {
    echo "Preço definido como zero: R$ " . $produto2->getPreco() . "<br>";
}
?>