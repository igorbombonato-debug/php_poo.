<?php

interface INotificador {
    public function enviar($destinatario, $mensagem);
}

// implementar:e-mail
class NotificadorEmail implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo"Email enviado para{$destinatario}. Mensagem:{$mensagem}.";
    }
}

// implementar: sms
class NotificadorSMS implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo"SMS enviado para{$destinatario}. Mensagem:{$mensagem}";
    }
}
// implementar: zap zap
class NotificadorZap implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo"Whatsapp enviado para{$destinatario}. Mensagem:{$mensagem}";
    }
}
// classe que usa a interface
class SistemaDeNotificacoes{
    private $notificador;

    public function  __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem)
    {
        $this->notificador->enviar($destinatario,$mensagem);
    }
}



$sistemaEmail = new SistemaDeNotficacoes(new NotificadorEmail());
$sistemaSMS = new SistemaDeNotficacoes(new NotificadorSMS());
$sistemaWhatsapp = new SistemaDeNotficacoes(new NotificadorWhatsapp());

$sistemaEmail->notificarUsuario("joao@email,com", "Seu Pedido foi confirmado");
$sistemaSMS->notificarUsuario("17997651234", "Seu Pedido foi confirmado");
$sistemaWhatsapp->notificarUsuario("1799651234", "Seu Pedido foi confirmado");