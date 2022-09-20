<?php 

namespace ProjetoMVC\Controller;

use ProjetoMVC\Model\ProdutoModel;

class ProdutoController extends Controller
{
    public static function index()
    {
        $model = new ProdutoModel();
        $model->getAllRows();

        parent::render('Pessoa/ListarProduto', $model);
    }

    public static function form()
    {
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
            
        $model->lista_categorias = $model->getAllCategorias();

        parent::render('Pessoa/FormProduto', $model);
    }

    public static function save()
    {
        $produto = new ProdutoModel();

        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->preco = $_POST['preco'];
        $produto->id_categoria_produto = $_POST['categoria_produto'];

        $produto->save();
        
        header("Location: /produto");
    }

    public static function delete()
    {
        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /produto");
    }
}