<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

$codigoSQL = "UPDATE `produtos` SET `nome` = :nm, `url` = :url, `descricao` = :des, `preco` = :pre WHERE `produtos`.`id` = :id";

try 
{
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'url' => $_GET['url'], 'des' => $_GET['descricao'], 'pre' => $_GET['preco'], 'id' => $_GET['id']));

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
