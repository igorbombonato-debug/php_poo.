<?php

function calcularDescontos($salario,$previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, ',', '.');
}

$funcionarios = array(3);
$funcionarios[0] = array('João Filho', 1000,100);
$funcionarios[1] = array('Maria Rute', 2000,200);
$funcionarios[2] = array('José Salgado', 3000,300);

for ($i = 0; $1 < 3; $1++){
    $nome = $funcionarios[$i] [0];
    $desconto = calcularDescontos($funcionarios[$i] [1],$funcionarios[$i] [2]);
    echo "O valor do desconto de $nome é de R$ $descontos. <br>";
}