<?php

namespace ProjetoMVC\Model;

use ProjetoMVC\DAO\
{
    FuncionarioDAO,
    CargoDAO
};

class FuncionarioModel
{
   public $id, $nome, $data_nascimento, $rg, $cpf, $sexo, $id_cargo;

   public $lista_cargo;

   public function save()
   {
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
        $dao = new CargoDAO();

        return $dao->select();
    }

   public function getAllRows()
   {
       $dao = new FuncionarioDAO();

       $this->rows = $dao->select();
   }

   public function getById(int $id)
   {
        $dao = new FuncionarioDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new FuncionarioModel();
   }

   public function delete(int $id)
   {
       $dao = new FuncionarioDAO();

       $dao->delete($id);
   }
}