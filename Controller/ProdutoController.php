<?php 

class ProdutoController
{
    public static function index()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Produto/ListarProdutos.php';
    }

    public static function form()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
            
        $model->lista_categorias = $model->getAllCategorias();

        include 'View/modules/Produto/FormProduto.php';
    }

    public static function save()
    {
        include 'Model/ProdutoModel.php';

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
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /produto");
    }
}