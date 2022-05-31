<?php

class FuncionarioModel
{
   public $id, $nome, $data_nascimento, $rg, $cpf, $sexo, $id_cargo;

   public $lista_cargo;

   public $rows;

   public function save()
   {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO;

        if(empty($this->id))
        {
            $dao->insert($this);
        } 

        else
        {
            $dao->update($this); 
        }

        header("Location: /funcionario");
   }

   public function getAllCargos()
    {
        include 'DAO/CargoDAO.php';
        $dao = new CargoDAO();

        return $dao->select();
    }

   public function getAllRows()
   {
       include 'DAO/FuncionarioDAO.php';

       $dao = new FuncionarioDAO();

       $this->rows = $dao->select();
   }

   public function getById(int $id)
   {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new FuncionarioModel();
   }

   public function delete(int $id)
   {
       include 'DAO/FuncionarioDAO.php';

       $dao = new FuncionarioDAO();

       $dao->delete($id);
   }
}