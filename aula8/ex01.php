<?php

echo strtoupper("Ola mundo!<br>");
echo strtolower("Ola mundo!<br>");

echo "String Ola Mundo! tem tamanho: ";
echo strlen("Ola mundo!");
echo "<br>";
echo "Posicao da palavra Mundo: ";
echo strpos("Ola mundo!", "mundo");
echo "<br>";

echo strrev("Ola mundo!");

echo trim("   Frase com espaço antes e depois         ");
echo "<br>";

echo str_word_count("Ola mundo!");
echo "<br>";

echo str_replace("mundo", "pessoas", "Ola mundo!");