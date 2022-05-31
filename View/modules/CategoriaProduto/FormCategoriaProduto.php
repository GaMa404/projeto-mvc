<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar Categorias Produto </title>
</head>

<body>
    <form action="/categoria_produto/save" method="post">
        <fieldset>
            <legend> Cadastro de categorias de produtos </legend>

            <br>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="descricao"> Descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?= $model->descricao ?>" />

            <br> <br>

            <button type="submit"> Enviar: </button>
        </fieldset>
    </form>
</body>
</html>