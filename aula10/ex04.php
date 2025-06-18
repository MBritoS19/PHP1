<?php

if (!empty($_POST))
{
    if (!empty($_POST["login"]) && !empty($_POST["senha"]))
    {
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        if ($login == "admin" && $senha == "123456")
        {
            echo "Acesso Concedido!<h1>";
        }
        else
        {
            echo "<h1 style='color: red'> ACESSO NEGADO!</h1>";
        }
    }
}

?>

<form action="" method="post">
    Login: <input type="text" name="login"> <br>
    Senha: <input type="password" name="senha"> <br>
    <input type="submit" value="Entrar"> <br>
</form>