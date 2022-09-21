<?php
        /*
          Classes Controller são responsáveis por processar as requisições do usuário.
          Isso significa que toda vez que um usuário chama uma rota, um método (função)
          de uma classe Controller é chamado.
          O método poderá devolver uma View (fazendo um include), acessar uma Model (para
          buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
          chamar outra Controller.
         */

namespace ProjetoMVC\Controller;

use ProjetoMVC\Model\PessoaModel;

class PessoaController extends Controller{
    public static function index()
    {
        $model = new PessoaModel();
        $model->getAllRows();

        parent::render('Pessoa/ListarPessoa', $model);
    }

    public static function form()
    {
        $model = new PessoaModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/

        parent::render('Pessoa/FormPessoa', $model);
    }

    public static function save()
    {     
        $pessoa = new PessoaModel();

        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->rg = $_POST['rg'];
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->endereco = $_POST['endereco'];

        $pessoa->save();

        header("Location: /pessoa");
    }

    public static function delete()
    {
        $model = new PessoaModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /pessoa"); // redirecionando o usuário para outra rota.
    }
}