<?php
$media = 10;
$r =  "Aprovado";
if ($media >= 4 && $media <=6)
{
    $r = "Recuperação";
}
else if ($media < 4)
{
    $r = "Reprovado";
}
echo "Sua situação acadêmica: $r";