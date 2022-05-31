<?php 

class CargoController
{
    public static function index()
    {
        include 'Model/CargoModel.php';

        $model = new CargoModel();
        $model->getAllRows();

        include 'View/modules/Cargo/ListarCargo.php';
    }

    public static function form()
    {
        include 'Model/CargoModel.php';
        $model = new CargoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Cargo/FormCargo.php';
    }

    public static function save()
    {
        include 'Model/CargoModel.php';

        $cargo = new CargoModel();

        $cargo->id = $_POST['id'];
        $cargo->descricao = $_POST['descricao'];
        $cargo->save();

        header("Location: /cargo");
    }

    public static function delete()
    {
        include 'Model/CargoModel.php';

        $model = new CargoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /cargo");
    }
}