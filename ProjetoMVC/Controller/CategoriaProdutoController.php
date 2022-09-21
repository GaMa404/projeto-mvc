<?php 

namespace ProjetoMVC\Controller;

use ProjetoMVC\Model\CategoriaProdutoModel;

class CategoriaProdutoController extends Controller
{
    public static function index()
    {
        $model = new CategoriaProdutoModel();
        $model->getAllRows();

        parent::render('CategoriaProduto/ListarCategoriaProduto', $model);
    }

    public static function form()
    {
        $model = new CategoriaProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        parent::render('CategoriaProduto/FormCategoriaProduto', $model);
    }

    public static function save()
    {
        $categoria_produto = new CategoriaProdutoModel();

        $categoria_produto->id = $_POST['id'];
        $categoria_produto->descricao = $_POST['descricao'];
        $categoria_produto->save();

        header("Location: /categoria_produto");
    }

    public static function delete()
    {
        $model = new CategoriaProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /categoria_produto");
    }
}