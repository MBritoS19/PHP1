<?php

function miar($var = false)
{
    if ($var == false)
    {
        echo "miau.<br>";
    }
    else
    {
        echo "miau, miau, miau.<br>";
    }
}

miar();
miar(false);
miar(true);