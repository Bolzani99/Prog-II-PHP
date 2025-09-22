<?php

abstract class Pagamento {
    protected $valor;
    protected $data;
    
    public function __construct($valor, $data) {
        $this->valor = $valor;
        $this->data = $data;
    }
    
    abstract public function processar();
    
    public function getInformacoes() {
        return "Valor: R$ " . number_format($this->valor, 2, ',', '.') . 
               " | Data: " . $this->data;
    }
}