<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

$codigoSQL = "UPDATE `livro` SET `titulo` = :tit, `idioma` = :idi, `paginas` = :pag, `editora` = :edi, `dataPublicacao` = :pub, `ISBN` = :isbn WHERE `livro`.`id` = :id";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('tit' => $_GET['titulo'], 'idi' => $_GET['idioma'], 'pag' => $_GET['paginas'], 'edi' => $_GET['editora'], 'pub' => $_GET['publicacao'], 'isbn' => $_GET['isbn'], 'id' => $_GET['id']));

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
header("location: mostrar.php");
