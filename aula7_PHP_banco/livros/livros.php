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
    </table>

</body>

</html>