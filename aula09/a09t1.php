<?php

if(isset($_GET["op"]))
{
    $operacao = $_GET["op"];
    $ve1 = $_GET["v1"];
    $ve2 = $_GET["v2"];
    if ($operacao == 1)
    {
        $r = $ve1 + $ve2;
        echo "$r";
    }
    else if ($operacao == 2)
    {
        $r = $ve1 - $ve2;
        echo "$r";
    }
    else if ($operacao == 3)
    {
        $r = $ve1 * $ve2;
        echo "$r";
    }
    else
    {
        $r = $ve1 / $ve2;
        echo "$r";
    }
}