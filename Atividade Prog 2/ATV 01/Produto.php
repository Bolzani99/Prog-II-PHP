<?php
// 1. Criar a classe
class Produto {
    public $nome;
    public $preco;
}

// 2. Instanciar o oabjeto
$meuProduto = new Produto();

// 3. Atribuir valores
$meuProduto->nome = "Notebook";
$meuProduto->preco = 2500.00;

// 4. Exibir os valores
echo "Nome do produto: " . $meuProduto->nome . "<br>";
echo "Preço: R$ " . number_format($meuProduto->preco, 2, ',', '.');
?>