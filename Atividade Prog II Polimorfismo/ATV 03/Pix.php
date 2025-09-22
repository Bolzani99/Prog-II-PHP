<?php

require_once 'Pagamento.php';

class Pix extends Pagamento {
    private $chavePix;
    
    public function __construct($valor, $data, $chavePix) {
        parent::__construct($valor, $data);
        $this->chavePix = $chavePix;
    }
    
    public function processar() {
        return "Processando pagamento via PIX..." . PHP_EOL .
               "Chave PIX: " . $this->chavePix . PHP_EOL .
               $this->getInformacoes() . PHP_EOL .
               "Status: Processado instantaneamente";
    }
}