<?php

namespace ProjetoMVC\DAO;

use ProjetoMVC\Model\FuncionarioModel;

class FuncionarioDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }


    public function insert(FuncionarioModel $model)
    {
        $sql = 'INSERT INTO funcionario (nome, data_nascimento, rg, cpf, sexo, id_cargo) VALUES (?, ?, ?, ?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_nascimento);
        $stmt->bindValue(3, $model->rg);
        $stmt->bindValue(4, $model->cpf);
        $stmt->bindValue(5, $model->sexo);
        $stmt->bindValue(6, $model->id_cargo);

        $stmt->execute();
    }

    public function update(FuncionarioModel $model)
    {
        $sql = 'UPDATE funcionario SET nome=?, data_nascimento=?, rg=?, cpf=?, sexo=?, id_cargo=? WHERE id=?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_nascimento);
        $stmt->bindValue(3, $model->rg);
        $stmt->bindValue(4, $model->cpf);
        $stmt->bindValue(5, $model->sexo);
        $stmt->bindValue(6, $model->id_cargo);
        $stmt->bindValue(7, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT f.id, f.nome, f.data_nascimento, f.rg, f.cpf, f.sexo, c.descricao AS cargo
                FROM funcionario f
                JOIN cargo c ON (c.id = f.id_cargo)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/FuncionarioModel.php';

        $sql = 'SELECT f.id, f.nome, f.data_nascimento, f.rg, f.cpf, f.sexo, f.id_cargo, c.descricao AS cargo
        FROM funcionario f
        JOIN cargo c ON (c.id = f.id_cargo)
        WHERE f.id=?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM funcionario WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
} 