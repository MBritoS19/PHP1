<?php
$logado = false;
$media = 7;
if ($logado)
{
    if ($media >= 6)
    {
        echo "<h1>Aprovado</h1>";
    }
    else
    {
        echo "<h1>Reprovado</h1>";
    }
}
else
{
    echo "<h1>Você não está logado no sistema</h1>";
}