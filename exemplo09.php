<?php 
class filemtime{
    public $nome;
    public $saldo;

    function __construct($valor) 
    {
        $this->saldo = $this->saldo + $valor;
    
    }
}