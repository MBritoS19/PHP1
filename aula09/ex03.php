<?php

if(!empty($_GET["nome"]))
{
    $nome = $_GET["nome"];
    echo "Seja bem vindo, $nome<br>";
}