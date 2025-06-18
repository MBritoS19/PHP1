<!DOCTYPE html>
<html>
<head>
    <title>Matheuzinho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'usuario';

include 'navbar.php';
include 'erros.php';
?>
    <div class='container-fluid'>
        <h1>Resultado:</h1><br>
<?php
$dsn = "mysql:host=localhost;dbname=banco";
$user = "root";
$password = "";

try 
{
    $conexao = new PDO($dsn, $user, $password);
} 
catch (PDOException $excecao) {
    echo "Erro de conexão: " . $excecao->getMessage();
}
    
$nome = $_POST['nome'];

$envio = $conexao->exec("INSERT INTO usuario (id, nome) VALUES (NULL, '$nome')");

if($envio) {
    echo "Usuário criado!";
  } else {
    echo "Erro ao criar usuário";
  }
?> 

<table class="table" border="1">
  <?php
    $select = $conexao->query("SELECT nome FROM usuario");
    foreach ($select as $linha) {
        echo "<thead><tr><th scope=\"col\">".$linha['nome']."</tr></th></thead>";
    }
  ?>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
