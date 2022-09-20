<?php

namespace ProjetoMVC\DAO;

use ProjetoMVC\Model\ProdutoModel;

class ProdutoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(ProdutoModel $model)
    {
        $sql = 'INSERT INTO produto (nome, descricao, preco, id_categoria_produto) VALUES (?, ?, ?, ?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->preco);
        $stmt->bindValue(4, $model->id_categoria_produto);

        $stmt->execute();
    }

    public function update(ProdutoModel $model)
    {
        $sql = 'UPDATE produto SET nome=?, descricao=?, preco=?, id_categoria_produto=? WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->preco);
        $stmt->bindValue(4, $model->id_categoria_produto);
        $stmt->bindValue(5, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT p.id, p.nome, p.descricao, p.preco, cp.descricao AS categoria 
                FROM produto p 
                JOIN categoria_produto cp ON (cp.id = p.id_categoria_produto)';
    
        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = 'SELECT p.id, p.nome, p.descricao, p.preco, p.id_categoria_produto, cp.descricao AS categoria 
                FROM produto p 
                JOIN categoria_produto cp ON (cp.id = p.id_categoria_produto)
                WHERE p.id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM produto WHERE id=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}