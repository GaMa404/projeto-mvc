<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionário</title>
</head>
<body>  
    <table> 
        <tr>
            <th> Excluir </th>
            <th> ID </th>
            <th> Nome </th>
            <th> Data de Nascimento </th> 
            <th> RG </th>
            <th> CPF </th>
            <th> Sexo </th>
            <th> Cargo </th>
        </tr>
        
        <?php foreach($model->rows as $item): ?>
            <tr>       
                <td>
                    <a href="/funcionario/delete?id=<?= $item['id'] ?>"> X </a> 
                </td>

                <td><?= $item['id'] ?></td>

                <td>
                    <a href="/funcionario/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
                </td> 

                <td> <?= $item['data_nascimento'] ?> </td>
                <td> <?= $item['rg'] ?> </td>
                <td> <?= $item['cpf'] ?> </td>
                <td> <?= $item['sexo'] ?> </td>
                <td> <?= $item['cargo'] ?> </td>
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
</body>
</html>