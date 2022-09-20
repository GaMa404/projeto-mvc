<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoas</title>
    <style>
        input, label {display: block}
    </style>
</head>
<body>
    <form action="/pessoa/save" method="post">
        <fieldset>
            <legend>Cadastro de Pessoas</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br>

            <label for="rg">RG:</label>
            <input type="text" name="rg" id="rg" value="<?= $model->rg ?>" />

            <br>

            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" id="cpf" value="<?= $model->cpf ?>" />

            <br>

            <label for="data_nascimento">Data Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $model->data_nascimento ?>" />

            <br>

            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" value="<?= $model->email ?>" />

            <br>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" value="<?= $model->telefone ?>" />

            <br>

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" value="<?= $model->endereco ?>" />

            <br>

            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>