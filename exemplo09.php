<?php 
class filemtime{
    public $nome;
    public $saldo;

    function __construct($valor) 
    {
        $this->saldo = $this->saldo + $valor;
    
    }
}

$filme = new filme("toy story",10);
$filme->incrementarSaldo(5);

echo"Nome do filme: $filme->nome<br>";
acho"saldo disponivel: $filme->saldo";
