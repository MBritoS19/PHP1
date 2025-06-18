<?php
$i = 1;
$d = 1;
while ($i <= 10)
{
    $mensagem = "<font size=$d face='Verdana'>$i</font>";
    echo nl2br ("$mensagem\n");
    if ($i % 2 == 0)
    {
        $d++;
    }
    $i++;
}