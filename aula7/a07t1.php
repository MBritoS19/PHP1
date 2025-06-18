<?php

function miar($o = false)
{
    if ($o)
    {
        echo "miau, miau, miau.<br>";
    }
    else
    {
        echo "miau.<br>";
    }
}

function mugir($o = false)
{
    if ($o)
    {
        echo "mu, mu, mu.<br>";
    }
    else
    {
        echo "mu.<br>";
    } 
}

function latir($o = false)
{
    if ($o)
    {
        echo "au, au, au.<br>";
    }
    else
    {
        echo "au.<br>";
    }  
}

$var = true;
latir($var);
mugir($var);
miar($var);
$var = false;
latir($var);
mugir($var);
miar($var);