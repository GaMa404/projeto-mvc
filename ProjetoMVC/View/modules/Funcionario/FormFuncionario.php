<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
</head>

<body>
<form action="/funcionario/save" method="post">
        <fieldset>
            <legend>Cadastro de Pessoas</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br> <br>

            <label for="data_nascimento">Data Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $model->data_nascimento ?>" />

            <br> <br>

            <label for="rg">RG:</label>
            <input type="text" name="rg" id="rg" value="<?= $model->rg ?>" />

            <br> <br>

            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" id="cpf" value="<?= $model->cpf ?>" />

            <br> <br>

            <label for="sexo">Sexo:</label>
            <input type="radio" name="sexo" id="sexo" value="Masculino" checked="<?= ($model->sexo == "Masculino") ? 'checked' : " " ?>" /> Masculino
            <input type="radio" name="sexo" id="sexo" value="Feminino" checked="<?= ($model->sexo == "Feminino") ? 'checked' : " " ?>" /> Feminino 

            <br> <br>

            <label for="cargo"> Cargo: </label>
            <select name="cargo">
                <?php foreach($model->lista_cargo as $cargo):?>
                    <option value="<?=$cargo['id']?>" <?= ($cargo['id'] == $model->id_cargo) ? 'selected' : " " ?> > 
                        <?= $cargo['descricao']?> 
                    </option>
                <?php endforeach ?> 
            </select>

            <br> <br>

            <button type="submit">Enviar</button>
        </fieldset>
    </form>   

</body>
</html>