<?php

class Conta
{
    private $numero;
    private $saldo;


    //Método Construtor
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo =$saldo;
    }

    // métodos getters e setters
    public function getNumero()
    {
       return $this->numero;
    }

    public function getSaldo()
    {
        return $this->saldo;
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
    protected $juros;

    function __construct($numero, $saldo, $juros)
    {
      parent::__construct($numero,$saldo);
      $this->juros = $juros;
    
    }

    function creditar($valor)
    {
        parent::creditar($valor);
        $this->atualizarJuros();
    }

    function atualizarJuros()
    {
        $this->saldo = $this->saldo * (1 + $this->juros);
    }
}

$conta= new Conta(1, 150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta {$conta->getNumero()}: $conta->saldo<br>";

$poupanca = new Poupanca(2, 150, 0.10);
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da conta {$poupanca->getnumero()}: $poupanca->saldo<br>";