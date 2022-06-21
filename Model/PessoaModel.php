<?php

class PessoaModel{

    // Atributos (campos do banco de dados)
    public $id, $nome, $rg, $cpf, $telefone;
    public $data_nascimento, $email, $endereco;

    public $rows;

    public function save()
    {
        $dao = new PessoaDAO();

        if(empty($this->id))
        {
            // Chamando o método insert que recebe o próprio objeto model
            // já preenchido
            $dao->insert($this);

        } else {

            $dao->update($this); // Como existe um id, passando o model para ser atualizado.
        }      

        header("Location: /pessoa");
    }

    public function getAllRows()
    {
        $dao = new PessoaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PessoaDAO();

        $obj = $dao->selectById($id); 

        return ($obj) ? $obj : new PessoaModel();
    }

    public function delete(int $id)
    {
        $dao = new PessoaDAO();

        $dao->delete($id);
    }
}