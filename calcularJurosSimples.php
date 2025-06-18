<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Juros Simples</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Valor Inicial: </label><input type="number" name="valorInicial"><br>
        <label for="">Taxa de Juros: </label><input type="number" name="taxaJuros"><br>
        <label for="">Tempo: </label><input type="number" name="tempo"><br>
        <input type="submit" value="Calcular"><br>
    </form>
</body>
<?php
    error_reporting(0);
    $valorInicial = $_POST['valorInicial'];
    $taxaJuros = $_POST['taxaJuros'];
    $tempo = $_POST['tempo'];;
    $valorTotal = calcularJurosSimples($valorInicial, $taxaJuros, $tempo);
    function calcularJurosSimples(float $valorInicial, float $taxaJuros, float $tempo) 
    {
        $valorTotal = $valorInicial;
        $juros = ($valorInicial * ($taxaJuros)) / 100;
        for ($i = 0; $i < $tempo; $i++)
        {   
            $valorTotal += $juros;
        }
        return $valorTotal;
    };

    echo "<p>O valor total é de $valorTotal</p>";
    echo "<p>O valor do juros é de " . $valorTotal - $valorInicial . "</p>";
?>

</html>