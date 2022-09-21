<?php

namespace ProjetoMVC\Model;

use ProjetoMVC\DAO\CategoriaProdutoDAO;

class CategoriaProdutoModel
{
    public $id, $descricao;

    public function save()
    {
        $dao = new CategoriaProdutoDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        } 

        else
        {
            $dao->update($this); 
        }      

        header("Location: /categoria_produto");
    }

    public function getAllRows()
    {
        $dao = new CategoriaProdutoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new CategoriaProdutoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CategoriaProdutoModel();
    }

    public function delete(int $id)
    {
        $dao = new CategoriaProdutoDAO();

        $dao->delete($id);
    }
}