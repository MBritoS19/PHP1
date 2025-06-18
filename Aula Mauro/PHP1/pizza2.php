<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Boas-vindas</title>
</head>

<body>
    <?php
      // Recebe o raio enviado pelo formulário
      $raio = $_POST['raio'];

      // Exibe a mensagem de boas-vindas
      $area = pi() * pow($raio, 2);
      echo "<h1>A area é: $area</h1>";
    ?>
</body>

</html>