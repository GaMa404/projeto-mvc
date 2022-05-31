<?php 

class CategoriaProdutoController
{
    public static function index()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();
        $model->getAllRows();

        include 'View/modules/CategoriaProduto/ListarCategoriaProduto.php';
    }

    public static function form()
    {
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/CategoriaProduto/FormCategoriaProduto.php';
    }

    public static function save()
    {
        include 'Model/CategoriaProdutoModel.php';

        $categoria_produto = new CategoriaProdutoModel();

        $categoria_produto->id = $_POST['id'];
        $categoria_produto->descricao = $_POST['descricao'];
        $categoria_produto->save();

        header("Location: /categoria_produto");
    }

    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /categoria_produto");
    }
}