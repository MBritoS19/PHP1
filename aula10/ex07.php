<?php
    if (!empty($_POST))
    {
        $v1 = $_POST["v1"];
        $v2 = $_POST["v2"];
        $op = $_POST["op"];
        if ($op == "*")
        {
            $r = $v1 * $v2;
            echo "Seu resultado eh: ".$r;
        }
        else if ($op == "/")
        {
            $r = $v1 / $v2;
            echo "Seu resultado eh: ".$r;
        }
        else if ($op == "+")
        {
            $r = $v1 + $v2;
            echo "Seu resultado eh: ".$r;
        }
        else
        {
            $r = $v1 - $v2;
            echo "Seu resultado eh: ".$r;
        }
    }
?>

<form method="post">
    V1 : <input type="text" name="v1">
    <br>
    V2 : <input type="text" name="v2">
    <br>
    <select name="op">
        <option>Escolha</option>
        <option value="+">Somar</option>
        <option value="-">Subtrair</option>
        <option value="*">Multiplicar</option>
        <option value="/">Dividir</option>
    </select>
    <br>
    <input type="submit" value="Enviar">
</form>