<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparações</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Numero 1: </label><input type="text" name="num1"><br><br>
        <label for="">Numero 2: </label><input type="text" name="num2"><br><br>
        <input type="submit" name="Enviar">
    </form>

    <?php
    if (isset($_POST['num1']) and isset($_POST['num2'])) {
        $x = $_POST['num1'];
        $y = $_POST['num2'];

        if ($x > $y) {
            echo "$x é maior que $y<br>";
        }

        if ($y < $x) {
            echo "$y é menor que $x<br>";
        }

        if ($y >= $x) {
            echo "$y é maior ou igual que $x<br>";
        }

        if ($y <= $x) {
            echo "$y é menor ou igual que $x<br>";
        }

        if ($y == $x) {
            echo "$y é igual a $x<br>";
        }

        if ($y != $x) {
            echo "$y é diferente que $x com !=<br>";
        }

        if ($y <> $x) {
            echo "$y é diferente que $x com <><br>";
        }

        if ($y === $x) {
            echo "$y é identico a $x ou seja tem o mesmo valor e tipo<br>";
        }

        if ($y !== $x) {
            echo "$y não é identico a $x ou seja pode ter o mesmo valor e não ser o mesmo tipo, ou ser do mesmo tipo e não ter o mesmo valor ou nenhum dos dois<br>";
        }

        if (($y <=> $x) == 0) {
            echo "$y é igual a $x";
        }

        if (($y <=> $x) == 1) {
            echo "$y é maior que $x";
        }

        if (($y <=> $x) == -1) {
            echo "$y é menor que $x";
        }
    }
    ?>
</body>

</html>