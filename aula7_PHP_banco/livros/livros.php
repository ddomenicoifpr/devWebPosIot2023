<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//include_once(__DIR__ . "/banco/conexao.php");
//$conn = conectar_banco();
//print_r($conn);

include_once(__DIR__ . "/banco/sql_livros.php");
$livros = livros_listar();
//print_r($livros);
//echo "<pre>" . print_r($livros, true) . "</pre>";
//echo $livros[2]['titulo'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>

<body>

    <h1>Cadastro de livros</h1>

    <h3>Formulário de livros</h3>
    <form action="livros_exec.php" method="POST">
        <div>
            <label for="txtTitulo">Título</label>
            <input type="text" id="txtTitulo" name="titulo" />
        </div>

        <div>
            <label for="selGenero">Gênero</label>
            <select id="selGenero" name="genero">
                <option value=""></option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </div>

        <div>
            <label for="numQtdPag">Quantidade de Páginas</label>
            <input type="number" id="numQtdPag" name="qtdPag" />
        </div>

        <button type="submit">Gravar</button>
        <button type="reset">Limpar</button>
    </form>

    <div id="divMsg" style="color: red; display: none;">
    </div>

    <h3>Listagem de livros</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Gênero</th>
                <th>Páginas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($livros as $l): ?>
            <tr>
                <td><?= $l['titulo']; ?></td>
                <td><?php 
                    if($l['genero'] == 'D')
                        echo "Drama";
                    elseif($l['genero'] == 'F')
                        echo "Ficção";
                    elseif($l['genero'] == 'R')
                        echo "Romance";
                    elseif($l['genero'] == 'O')
                        echo "Outros";
                ?></td>
                <td><?php echo $l['qtd_paginas']; ?></td>
                <td><a href="livros_del.php?id=<?php echo $l['id']; ?>" >
                        Excluir</a></td>
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>

    <script src="js/validacao.js"></script>
</body>

</html>