<pre>
<?php
echo "Antes do sort:<br>";
$v = [
    0 => "Jão",
    4 => "Biel",
    2 => "Paulo",
    3 => "Rodolfo",
    1 => "Rodrigo"
];
print_r($v);
echo "<br>";
sort($v);
echo "Depois do sort:<br>";
print_r($v);
echo "<br>";
foreach ($v as $a => $p)
{
    echo $a."-".$p."<br>";
}