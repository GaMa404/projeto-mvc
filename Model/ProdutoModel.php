<?php

namespace ProjetoMVC\Model;

use ProjetoMVC\DAO\
{
    ProdutoDAO,
    CategoriaProdutoDAO
};

class ProdutoModel extends Model
{
    public $id, $nome, $descricao, $preco, $id_categoria_produto;

    public $lista_categorias;

    public function save()
    {
        $dao = new ProdutoDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        } 

        else
        {
            $dao->update($this); 
        }      

        header("Location: /produto");
    }

    public function getAllCategorias()
    {
        $dao = new CategoriaProdutoDAO();

        return $dao->select();
    }

    public function getAllRows()
    {
        $dao = new ProdutoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new ProdutoModel();
    }

    public function delete(int $id)
    {
        $dao = new ProdutoDAO();

        $dao->delete($id);
    }
}