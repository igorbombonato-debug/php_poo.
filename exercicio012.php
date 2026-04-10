<?php

class Conta
{
    public $numero;
    public $saldo;


    //Método Construtor
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo =$saldo;
    }

    //metodos
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
        if($this->saldo >= $valor){
            $this->debitar($valor);
            $outraConta->Creditar($valor);
        }
    }
}

class Poupanca extends Conta
{
    public $juros = 0.05;

    function atualizarJuros()
    {
        $this->saldo = $this->saldo * (1 + $this->juros);
    }
}

$conta= new Conta(1, 150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta $conta->numero: $conta->saldo<br>";

$poupanca = new Poupanca(2, 150);
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da conta $poupanca->numero: $poupanca->saldo<br>";