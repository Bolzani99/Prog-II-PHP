<?php
class Produto {
    public $nome;
    private $preco;
    
    public function getPreco() {
        return $this->preco;
    }
    
    public function setPreco($novoPreco) {
        if ($novoPreco >= 0) {
            $this->preco = $novoPreco;
        } else {
            echo "Erro: Preço não pode ser negativo!\n";
        }
    }
}

// Instanciando o objetoa
$meuProduto = new Produto();

// Atribuindo valores
$meuProduto->nome = "Notebook Dell";
$meuProduto->setPreco(novoPreco: 3250.90);

// Exibindo os valores
echo "Detalhes do Produto:\n";
echo "Nome: " . $meuProduto->nome . "\n";
echo "Preço: R$ " . number_format(num: $meuProduto->getPreco(), decimals: 2, decimal_separator: ',', thousands_separator: '.') . "\n\n";

// yestando a validação
echo "Testando Validação:\n";
echo "Tentando definir preço negativo (-100): ";
$meuProduto->setPreco(novoPreco: -100);

echo "Tentando definir preço válido (500): ";
$meuProduto->setPreco(novoPreco: 500);
echo "Novo preço: R$ " . number_format(num: $meuProduto->getPreco(), decimals: 2, decimal_separator: ',', thousands_separator: '.') . "\n\n";

// Exemplo adicional com outro produto
echo "Outro Produto:\n";
$outroProduto = new Produto();
$outroProduto->nome = "Mouse Gamer";
$outroProduto->setPreco(novoPreco: 150.75);

echo "Produto: " . $outroProduto->nome . "\n";
echo "Preço: R$ " . number_format(num: $outroProduto->getPreco(), decimals: 2, decimal_separator: ',', thousands_separator: '.');
?>