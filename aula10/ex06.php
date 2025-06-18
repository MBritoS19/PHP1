<?php
$fundo = "white";
$letra = "black";
if(!empty($_POST))
{
    $fundo = $_POST["fundo"];
    $letra = $_POST["letra"];
}
echo "<body style='background-color: $fundo; color: $letra'>";
?>
<h1>Exercício 6</h1>
<form method="post">
    Cor de fundo:
    <select name="fundo">
        <option>Escolha</option>
        <option value="white">Branco</option>
        <option value="yellow">Amarelo</option>
        <option value="pink">Rosa</option>
    </select>
    Cor das letras:
    <select name="letra">
        <option>Escolha</option>
        <option value="white">Branco</option>
        <option value="yellow">Amarelo</option>
        <option value="pink">Rosa</option>
    </select>
    <br>
    <input type="submit" value="Atualizar">
</form>