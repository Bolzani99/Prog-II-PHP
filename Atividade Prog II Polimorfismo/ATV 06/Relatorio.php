<?php

class Relatorio {
    
    public function __call($metodo, $parametros) {
        $quantidade = count($parametros);
        
        if ($metodo === 'gerar') {
            switch ($quantidade) {
                case 0:
                    return $this->gerarCompleto();
                
                case 1:
                    return $this->gerarSimples($parametros[0]);
                
                case 2:
                    return $this->gerarComData($parametros[0], $parametros[1]);
                
                default:
                    return "Erro: Muitos parâmetros!";
            }
        }
        
        return "Método '$metodo' não existe!";
    }
    
    private function gerarCompleto() {
        return "Relatório completo gerado!";
    }
    
    private function gerarSimples($tipo) {
        return "Relatório de $tipo gerado!";
    }
    
    private function gerarComData($inicio, $fim) {
        return "Relatório de $inicio até $fim gerado!";
    }
}

// Exemplos de auso
$relatorio = new Relatorio();

// Chamando o mesmo metodo com parametros diferentes
echo $relatorio->gerar() . "\n";
echo $relatorio->gerar("vendas") . "\n";
echo $relatorio->gerar("2024-01-01", "2024-01-31") . "\n";

// Tentando chamar metodo que nno existe
echo $relatorio->imprimir() . "\n";

?>