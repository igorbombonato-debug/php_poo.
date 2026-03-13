<?php

class AreaCalc
{
    public static $pi = 3.141517;

    static function areaCircunferencia($raio)
    {
        return $raio * $raio * (AreaCalc::$pi);
    }
}

$raioAtual = 10;
$area = areaCalc::areaCircunferencia($raioAtual);
$valorPi = AreaCalc::$pi;
echo "Área circunferencia de raio $raioAtual é $area <br>";
acho"Valor de pi $valorPi<br>";