<?php
$media = 10;
$r = "Reprovado";
if ($media >= 6)
{   
    $r = "Aprovado";
}
else if ($media >= 4)
{
    $r = "Recuperação";
}
echo "Resultado: $r";