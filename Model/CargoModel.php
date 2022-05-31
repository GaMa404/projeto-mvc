<?php

class CargoModel
{
    public $id, $descricao;

    public $rows;

    public function save()
    {
        include 'DAO/CargoDAO.php';

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
        include 'DAO/CargoDAO.php';

        $dao = new CargoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/CargoDAO.php';

        $dao = new CargoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CargoModel();
    }

    public function delete(int $id)
    {
        include 'DAO/CargoDAO.php';

        $dao = new CargoDAO();

        $dao->delete($id);
    }
}