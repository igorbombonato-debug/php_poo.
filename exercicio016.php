<?php

class Visibilidade{
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic,$varProtected,$varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }
}

$teste = new Visibilidade(1, 2, 3);
echo"atributo Public = $teste->varPublic";
echo"atributo Protected = $teste->varProtected";
echo"atributo Private = $teste->varPrivate";