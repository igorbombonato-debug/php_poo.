<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" step="0.1" required><br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>
<?php
class Pessoa {
    public $peso;
    public $altura;

    function __construct($peso, $altura) {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    function calcularIMC() {
        return $this->peso / ($this->altura * $this->altura);
    }

    function classificarIMC() {
        $imc = $this->calcularIMC();
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }
}   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $pessoa = new Pessoa($peso, $altura);
    $imc = number_format($pessoa->calcularIMC(), 2, ',', '.');
    $classificacao = $pessoa->classificarIMC();
    echo "<h2>Seu IMC é: $imc</h2>";
    echo "<h3>Classificação: $classificacao</h3>";
}
?>
</body>
</html>