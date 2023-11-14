<?php 

require_once(__DIR__ . "/conexao.php"); 

//Salvar leituras
function salvar_leitura($tabela, $momento, $valor) {
    $con = conectar_banco();

    $sql = "INSERT INTO " . $tabela . 
        " (momento_leitura, valor)" .
        " VALUES (?, ?)";

    $stm = $con->prepare($sql);
    $stm->execute(array($momento, $valor));
}

function listar_leituras($tabela) {
    $con = conectar_banco();

    $sql = "SELECT * FROM " . $tabela . 
            " ORDER BY id DESC";

    $stm = $con->prepare($sql);
    $stm->execute();

    return $stm->fetchAll();
}