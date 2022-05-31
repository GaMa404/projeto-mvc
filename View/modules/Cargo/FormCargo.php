<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cargo</title>
</head>

<body>
<form action="/cargo/save" method="post">
        <fieldset>
            <legend> Cadastro de cargos </legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="descricao"> Descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?= $model->descricao ?>" />

            <br> <br>

            <button type="submit"> Enviar: </button>
        </fieldset>
    </form>
</body>
</html>