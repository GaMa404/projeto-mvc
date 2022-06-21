<?php

class FuncionarioController
{
    public static function index()
    {
        $model = new FuncionarioModel();
        $model->getAllRows();

        include 'View/modules/Funcionario/ListarFuncionario.php';
    }
    
    public static function form()
    {
        $model = new FuncionarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        $model->lista_cargo = $model->getAllCargos();

        include 'View/modules/Funcionario/FormFuncionario.php';
    }

    public static function save()
    {
        $funcionario = new FuncionarioModel();

        $funcionario->id = $_POST['id'];
        $funcionario->nome = $_POST['nome'];
        $funcionario->data_nascimento = $_POST['data_nascimento'];
        $funcionario->rg = $_POST['rg'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->sexo = $_POST['sexo'];
        $funcionario->id_cargo = $_POST['cargo'];
        
        $funcionario->save();

        header("Location: /funcionario");
    }

    public static function delete()
    {
        $model = new FuncionarioModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /funcionario");
    }
}