<?php

$num = $_GET["n"];

if (isset($_GET["n"]))
{
    for ($i = 1; $i <= 10; $i++)
    {
        $r = $i * $num;
        echo $i." * "."$num: ".$r."<br>";
    }
}