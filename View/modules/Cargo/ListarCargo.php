<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cargo</title>
</head>
<body>  
    <table> 
        <tr>
            <th> Excluir </th>
            <th> ID </th>
            <th> Descrição </th>
        </tr>
        
        <?php foreach($model->rows as $item): ?>
            <tr>       
                <td>
                    <a href="/cargo/delete?id=<?= $item['id'] ?>"> X </a> 
                </td>

                <td><?= $item['id'] ?></td>

                <td>
                    <a href="/cargo/form?id=<?= $item['id'] ?>"><?= $item['descricao'] ?></a>
                </td> 
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
</body>
</html>