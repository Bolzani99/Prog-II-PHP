<?php


abstract class Formatador {
    abstract public function formatar($texto);
}


class Maiusculo extends Formatador {
    public function formatar($texto) {
        return strtoupper($texto);
    }
}

class Minusculo extends Formatador {
    public function formatar($texto) {
        return strtolower($texto);
    }
}

class Capitalizado extends Formatador {
    public function formatar($texto) {
        return ucwords(strtolower($texto));
    }
}


class Mensagem {
    private $texto;
    private $formatador;
    
    public function __construct($texto, Formatador $formatador) {
        $this->texto = $texto;
        $this->formatador = $formatador;
    }
    
    public function setFormatador(Formatador $formatador) {
        $this->formatador = $formatador;
    }
    
    public function setTexto($texto) {
        $this->texto = $texto;
    }
    
    public function exibir() {
        return $this->formatador->formatar($this->texto);
    }
}

// Exemplo de uso
echo "<h2> Sistema de Formatação de Mensagens</h2>";

$textoOriginal = "atividade prog 2";


$maiusculo = new Maiusculo();
$minusculo = new Minusculo();
$capitalizado = new Capitalizado();


$mensagem = new Mensagem($textoOriginal, $maiusculo);

echo "<p><strong>Texto original:</strong> {$textoOriginal}</p>";
echo "<hr>";

echo "<p><strong>Maiúsculo:</strong> " . $mensagem->exibir() . "</p>";

// Mudando o formatador para minuusculo
$mensagem->setFormatador($minusculo);
echo "<p><strong>Minúsculo:</strong> " . $mensagem->exibir() . "</p>";

// Mudando o formatador para capitalizado
$mensagem->setFormatador($capitalizado);
echo "<p><strong>Capitalizado:</strong> " . $mensagem->exibir() . "</p>";

?>

<?php
// MAIS SIMPLES:
echo "<h3> Versão Simples:</h3>";

class MensagemSimples {
    public static function maiusculo($texto) {
        return strtoupper($texto);
    }
    
    public static function minusculo($texto) {
        return strtolower($texto);
    }
    
    public static function capitalizado($texto) {
        return ucwords(strtolower($texto));
    }
}

// Teste rápido
$texto = "silvio bolzani";
echo "<p>Original: {$texto}</p>";
echo "<p>Maiúsculo: " . MensagemSimples::maiusculo($texto) . "</p>";
echo "<p>Minúsculo: " . MensagemSimples::minusculo($texto) . "</p>";
echo "<p>Capitalizado: " . MensagemSimples::capitalizado($texto) . "</p>";
?>