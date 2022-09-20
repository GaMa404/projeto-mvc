<?php

namespace ProjetoMVC\DAO;

use ProjetoMVC\Model\CargoModel;

class CargoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(CargoModel $model)
    {
        $sql = 'INSERT INTO cargo (descricao) VALUES (?)';

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();
    }

    public function update(CargoModel $model)
    {
        $sql = 'UPDATE cargo SET descricao=? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM cargo';

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }
    
    public function selectById(int $id)
    {
        include_once 'Model/CargoModel.php';

        $sql = 'SELECT * FROM cargo WHERE id=?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CargoModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM cargo WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}