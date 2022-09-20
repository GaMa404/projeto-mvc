<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
</head>
<body>
    <table> 
        <tr>
            <th> Excluir </th>
            <th> ID </th>
            <th> Nome </th>
            <th> Descrição </th>
            <th> Preço </th>
            <th> Categoria </th>
        </tr>
        
        <?php foreach($model->rows as $item): ?>
            <tr>       
                <td>
                    <a href="/produto/delete?id=<?= $item['id'] ?>"> X </a> 
                </td>

                <td><?= $item['id'] ?></td>

                <td>
                    <a href="/produto/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
                </td> 

                <td> <?= $item['descricao'] ?> </td>
                <td> <?= $item['preco'] ?> </td>
                <td> <?= $item['categoria'] ?> </td>
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
</body>
</html>