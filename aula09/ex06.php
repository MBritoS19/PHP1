<?php

echo "<h1>Escolha uma cor<h1>";
echo "<a href='?cor=verde'>Verde</a><br>";
echo "<a href='?cor=azul'>Azul</a><br>";

if (isset($_GET["cor"]))
{
    $cor = $_GET["cor"];
    if ($cor == "verde")
    {
        echo "<body style='background-color:green'>";
    }
    else
    {
        echo "<body style='background-color:blue'>";
    }
}