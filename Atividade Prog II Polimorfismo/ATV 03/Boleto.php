<?php

require_once 'Pagamento.php';

class Boleto extends Pagamento {
    private $codigoBarras;
    
    public function __construct($valor, $data, $codigoBarras) {
        parent::__construct($valor, $data);
        $this->codigoBarras = $codigoBarras;
    }
    
    public function processar() {
        return "Processando pagamento via Boleto..." .
               "\nCódigo de Barras: " . $this->codigoBarras .
               "\n" . $this->getInformacoes();
    }
}