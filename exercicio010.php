<?php

class conta
{
    public $numero;
    public $saldo;

    function __construct($numero,$saldo)
    {
      $this->numero = $numero;
      $this->saldo = $saldo;
    }

    function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    function debitar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }

    function transferir($outraConta, $valor)
    {
        if($this->saldo >=$valor){
            $this->debitar($valor);
            $outraConta->creditar($valor);
        }
    }
}

$contaRoberto = new conta(1,3000);
$contaDaniel = new conta(2,1000);
echo "Saldo da Conta $contaRoberto->numero: $contaRoberto->saldo <br>";
echo "Saldo da Conta $contaDaniel->numero: $contaDaniel->saldo <br>";

$contaDaniel->transferir($contaRoberto,1000);
echo "Transferencia efetuada <br>";

echo "Saldo da Conta $contaRoberto->numero: $contaRoberto->saldo <br>";
echo "Saldo da Conta $contaDaniel->numero: $contaDaniel->saldo <br>";
