<?php

include_once(__DIR__ . "/banco/sql_livros.php");

//Verificar se o ID do livro foi enviado/recebido
$id = "";
if(isset($_GET['id']))
    $id = $_GET['id'];

if(! $id) {
    echo "ID do livro não informado!";
    echo "<br>";
    echo "<a href='livros.php'>Voltar</a>";
    exit;
}

//Excluir o livro
livros_excluir($id);

//Redirecionar a página
header("location: livros.php");