<?php
function continha($operador,$num1,$num2)
{
    if ($operador == "+")
    {
        $total = $num1 + $num2;
        echo "$total<br>";       
    }
    else if ($operador == "-")
    {
        $total = $num1 - $num2;
        echo "$total<br>";       
    }
    else if ($operador == "*")
    {
        $total = $num1 * $num2;
        echo "$total<br>";       
    }
    else
    {
        $total = $num1 / $num2;
        echo "$total<br>";       
    }
}

$str = "+";
$n1 = 9;
$n2 = 3;
continha($str,$n1,$n2);
$str = "-";
$n1 = 9;
$n2 = 3;
continha($str,$n1,$n2);
$str = "*";
$n1 = 9;
$n2 = 3;
continha($str,$n1,$n2);
$str = "/";
$n1 = 9;
$n2 = 3;
continha($str,$n1,$n2);