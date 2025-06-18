<?php
$vetor = [
    0 => "Rodolfo",
    20 => "Franco",
    40 => "Paulo",
    69420 => "Ribeiro"
];

echo "<ol>";
foreach ($vetor as $preco => $produto)
{
    echo "<li style='text-allign: center'>$produto esta custando R$:$preco kwanzas</li><br>";
}
echo "</ol>";
?>