<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
</body>
</html>

<?php

if(isset($_GET["cor"]))
{
    $cor = $_GET["cor"];
    echo "<body style='background-color:$cor'>";
}
else
{
    echo "Falta o parâmetro cor.";
}