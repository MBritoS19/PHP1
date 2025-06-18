<?php
$array = [
    "Verde" => "0f0",
    "Amarelo" => "ff0",
    "Azul" => "00f",
    "Branco" => "fff"
];

foreach ($array as $cor => $i)
{
    echo "<p style='background-color:grey; color: $i'>$cor: $i </p><br>";
}