<?php 

class CargoController
{
    public static function index()
    {
        $model = new CargoModel();
        $model->getAllRows();

        include 'View/modules/Cargo/ListarCargo.php';
    }

    public static function form()
    {
        $model = new CargoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Cargo/FormCargo.php';
    }

    public static function save()
    {
        $cargo = new CargoModel();

        $cargo->id = $_POST['id'];
        $cargo->descricao = $_POST['descricao'];
        $cargo->save();

        header("Location: /cargo");
    }

    public static function delete()
    {
        $model = new CargoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /cargo");
    }
}