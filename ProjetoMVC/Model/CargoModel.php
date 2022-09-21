<?php

namespace ProjetoMVC\Model;

use ProjetoMVC\DAO\CargoDAO;

class CargoModel
{
    public $id, $descricao;
    
    public function save()
    {
        $dao = new CargoDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        } 

        else
        {
            $dao->update($this); 
        }      

        header("Location: /cargo");
    }

    public function getAllRows()
    {
        $dao = new CargoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new CargoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CargoModel();
    }

    public function delete(int $id)
    {
        $dao = new CargoDAO();

        $dao->delete($id);
    }
}