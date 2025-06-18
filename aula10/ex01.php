<?php
    echo "Parâmetros GET: ";
    print_r($_GET);
    echo "<br> Parâmetros POST: ";
    print_r($_POST);
?>

<form>
    Nome: <br />
    <input type="text" name="nome" id="nome" /> <br />
    <input type="submit" value="Enviar" /> <br />
</form>