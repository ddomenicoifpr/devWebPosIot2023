<?php

//Constantes com os dados da conexão ao banco de dados
define("DB_HOST", 'mysql-server');
define("DB_BASE", 'pos_livros');
define("DB_USUARIO", 'root');
define("DB_SENHA", 'root');

//Conectar ao banco de dados
function conectar_banco() {
    $opcoes = array(
        //Define o charset da conexão
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        //Define o tipo do erro como exceção
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //Define o retorno das consultas como array associativo (campo => valor)
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    
    $con = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_BASE,
                    DB_USUARIO, DB_SENHA, $opcoes);

    return $con;
}