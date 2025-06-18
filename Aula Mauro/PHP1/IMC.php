<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Boas-vindas</title>
</head>

<body>
    <?php
    if(isset($_POST['Peso']) && isset($_POST['Altura']))
    {
        $Peso = filter_var($_POST['Peso'], FILTER_SANITIZE_STRING);
        $Altura = filter_var($_POST['Altura'], FILTER_SANITIZE_STRING);
        if (!empty($Peso) && !empty($Peso)) 
        {
            $IMC = $Peso / pow($Altura, 2);
            echo "<h1>O IMC é: $IMC</h1>";
        } 
        else 
        {
            echo "Por favor, digite seu Peso e Altura.";
        }
    } 
    else 
    {
        echo "Erro ao enviar os dados.";
    }
    ?>
</body>

</html>