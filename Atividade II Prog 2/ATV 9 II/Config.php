<?php
class Config {
    protected $parametros = [];
}

class ConfigManager extends Config {
    public function set($chave, $valor) {
        $this->parametros[$chave] = $valor;
    }
    
    public function get($chave) {
        return $this->parametros[$chave] ?? null;
    }
    
    public function mostrarTudo() {
        foreach ($this->parametros as $chave => $valor) {
            echo $chave . ": " . $valor . "<br>";
        }
    }
}

// Exemplo de uso
echo "<h3>Sistema de Configurações</h3>";

$config = new ConfigManager();

// Definindo parâmetros
$config->set("site_nome", "Meu Site");
$config->set("cor_tema", "azul");
$config->set("limite_usuarios", 100);

// Mostrando tudo
echo "Configurações:<br>";
$config->mostrarTudo();

// Buscando valor específico
echo "<br>Nome do site: " . $config->get("site_nome");
echo "<br>Cor do tema: " . $config->get("cor_tema");
?>