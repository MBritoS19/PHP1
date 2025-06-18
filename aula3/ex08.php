<?php
$hora = 22;
if ($hora >= 6 && $hora <= 13)
{
    echo "<body style ='background-color:yellow'>";
    echo "Bom Dia";
}
else if ($hora > 13 && $hora < 18)
{
    echo "<body style ='background-color:green'>";
    echo "Boa Tarde";
}
else
{
    echo "<body style ='background-color:black'>";
    echo "<h1><font color='FFFFFF'>Boa noite</font></h1>";
}