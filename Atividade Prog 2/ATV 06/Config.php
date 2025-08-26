<?php
class Config {
    protected $parametros = ['titulo' => 'Meu Site', 'cor' => 'azul'];
}

class LeitorConfig extends Config {
    public function getParametro($chave): mixed {
        return $this->parametros[$chave];
    }
}

class EditorConfig extends Config {
    public function setParametro($chave, $valor): void {
        $this->parametros[$chave] = $valor;
    }
    
    public function getParametro($chave): mixed {
        return $this->parametros[$chave];
    }
}

// Usando
$leitor = new LeitorConfig();
echo $leitor->getParametro(chave: 'titulo');

$editor = new EditorConfig();
$editor->setParametro(chave: 'cor', valor: 'verde');
echo $editor->getParametro(chave: 'cor');
?>