<?php

abstract class Notificacao {
    abstract public function enviar();
}

class Email extends Notificacao {
    private $destinatario;
    private $assunto;
    
    public function __construct($destinatario, $assunto) {
        $this->destinatario = $destinatario;
        $this->assunto = $assunto;
    }
    
    public function enviar() {
        return "Email enviado para: {$this->destinatario} - Assunto: {$this->assunto}";
    }
}

class SMS extends Notificacao {
    private $telefone;
    private $mensagem;
    
    public function __construct($telefone, $mensagem) {
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }
    
    public function enviar() {
        return "SMS enviado para: {$this->telefone} - Mensagem: " . substr($this->mensagem, 0, 20) . "...";
    }
}

class Push extends Notificacao {
    private $dispositivo;
    private $titulo;
    
    public function __construct($dispositivo, $titulo) {
        $this->dispositivo = $dispositivo;
        $this->titulo = $titulo;
    }
    
    public function enviar() {
        return "Notificação Push enviada para: {$this->dispositivo} - Título: {$this->titulo}";
    }
}

// Demonstração do sistema
echo "=== SISTEMA DE NOTIFICAÇÕES ===\n\n";

$notificacoes = [
    new Email("silvio@unoesc.com", "Bem-vindo ao sistema"),
    new SMS("(11) 99999-9999", "Seu código de verificação é 123456"),
    new Push("iPhone-123", "Nova mensagem recebida"),
    new Email("admin@unoesc.com", "Relatório diário")
];

foreach ($notificacoes as $i => $notificacao) {
    $resultado = $notificacao->enviar();
    $tipo = get_class($notificacao);
    
    echo ($i + 1) . ". [$tipo] $resultado\n";
    echo "---\n";
}

?>