<?php
class Aluno {
    private $nome;
    private $nota;
    
    public function __construct($nome, $nota = 0) {
        $this->nome = $nome;
        $this->setNota($nota);
    }
    
    public function setNota($novaNota) {
        if ($novaNota >= 0 && $novaNota <= 10) {
            $this->nota = $novaNota;
            echo "Nota alterada para: " . $this->nota . "<br>";
            return true;
        } else {
            echo "Nota inválida! Deve ser entre 0 e 10.<br>";
            return false;
        }
    }
    
    public function getNota() {
        return $this->nota;
    }
    
    public function getNome() {
        return $this->nome;
    }
}

// Exemplo de uso
echo "<h3>Controle de Notas do Aluno</h3>";

$aluno = new Aluno("João", 7);
echo "Aluno: " . $aluno->getNome() . "<br>";
echo "Nota inicial: " . $aluno->getNota() . "<br>";

$aluno->setNota(8.5);
$aluno->setNota(15); // Inválida
$aluno->setNota(-3); // Inválida
$aluno->setNota(9.0);

echo "<br>Nota final: " . $aluno->getNota();
?>