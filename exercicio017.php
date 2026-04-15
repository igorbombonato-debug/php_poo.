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

    public function publicFunc(){
        echo "Método publico<br>"
    }
    private function privateFunc(){
        echo "Método privado<br>"
    }
    protected function protectedFunc(){
        echo "Método protegido<br>"
    }
}

$teste = new Visibilidade(1, 2, 3);
echo"atributo Public = $teste->varPublic";
// echo"atributo Protected = $teste->varProtected";
// echo"atributo Private = $teste->varPrivate";

echo "<br>"

$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();