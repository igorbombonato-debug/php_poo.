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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";
            
            if ($imc < 18.5) {
                echo "<p>Classificação: Abaixo do peso</p>";
            } elseif ($imc >= 18.5 && $imc < 25) {
                echo "<p>Classificação: Peso normal</p>";
            } elseif ($imc >= 25 && $imc < 30) {
                echo "<p>Classificação: Sobrepeso</p>";
            } else {
                echo "<p>Classificação: Obesidade</p>";
            }
        } else {
            echo "<p>Altura deve ser maior que zero.</p>";
        }
    } 
    ?>
</body>
</html>