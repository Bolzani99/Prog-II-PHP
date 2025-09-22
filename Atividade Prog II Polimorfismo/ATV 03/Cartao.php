<?php

require_once 'Pagamento.php';

class Cartao extends Pagamento {
    private $numeroCartao;
    private $bandeira;
    
    public function __construct($valor, $data, $numeroCartao, $bandeira) {
        parent::__construct($valor, $data);
        $this->numeroCartao = $numeroCartao;
        $this->bandeira = $bandeira;
    }
    
    public function processar() {
        return "Processando pagamento via Cartão..." .
               "\nBandeira: " . $this->bandeira .
               "\nCartão: " . substr($this->numeroCartao, -4) .
               "\n" . $this->getInformacoes();
    }
}