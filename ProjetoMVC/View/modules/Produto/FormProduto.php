<!DOCTYPE html>
<html lang=eng>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        input, label {display: block}
    </style>
</head>

<body>
    <form action="/produto/save" method="post">
        <fieldset>
            <legend> Cadastro de produtos </legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br>

            <label for="descricao"> Descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?= $model->descricao?>" />

            <br>

            <label for="preco"> Preço: </label>
            <input type="number" name="preco" id="preco" value="<?= $model->preco ?>" />

            <br>

            <label for="categoria_produto"> Categoria: </label>
            <select name="categoria_produto">
                <?php foreach($model->lista_categorias as $categoria):?>
                    <option value="<?= $categoria['id']?>" <?= ($categoria['id'] == $model->id_categoria_produto) ? 'selected' : " " ?> > 
                        <?= $categoria['descricao'] ?> 
                    </option>
                <?php endforeach?>
            </select>
            
            <br> <br>

            <button type="submit"> Enviar </button>
        </fieldset>  
    </form>  
</body>
</html> 