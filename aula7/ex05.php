<?php

function contar($a = 1, $b = 10)
{
    $r = [];
    for ($i = $a; $i <= $b; $i++)
    {
        $r[] = $i;
    }
    return $r;
}

function mostrar($vetor)
{
    foreach($vetor as $i)
    {
        echo "$i, ";
    }
}
mostrar(contar(5,15));
echo "<br>";
mostrar([1,2,3,4,5,6]);