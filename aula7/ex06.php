<?php
    function somarvetor($e, $n)
    {
        $total = 0;
        for ($i = 0; $i < $n; $i++)
        {
            $total = $total + $e[$i];  
        }
        return $total;
    }
    $v = [1,2,3,4,5];
    $x = 5;
    $y = somarvetor($v, $x);
    echo "$y";