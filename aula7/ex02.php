<?php

function latidos($var)
{
    if ($var)
    {
        echo "au, au, au, au.";
    }
    else
    {
        echo "au.";
    }
}

$trueorfalse = 1;
latidos($trueorfalse);
echo "<br>";
$trueorfalse = 0;
latidos($trueorfalse);