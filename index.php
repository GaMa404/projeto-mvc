<?php

$uri_parse = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/CategoriaProdutoController.php';
include 'Controller/FuncionarioController.php';
include 'Controller/CargoController.php';

// :: -> operador de resolução de escopo
// Escopo -> meio 

switch($uri_parse){
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;
        
    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/update':
        PessoaController::update();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;
    
    ## Rotas para produto
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/update':
        ProdutoController::update();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    ## Rotas para categoria_produto
    case '/categoria_produto':
        CategoriaProdutoController::index();
    break;

    case '/categoria_produto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoria_produto/save':
        CategoriaProdutoController::save();
    break;

    case '/categoria_produto/update':
        CategoriaProdutoController::update();
    break;

    case '/categoria_produto/delete':
        CategoriaProdutoController::delete();
    break;


    ## Rotas para cargo
    case '/cargo':
        CargoController::index();
    break;

    case '/cargo/form':
        CargoController::form();
    break;

    case '/cargo/save':
        CargoController::save();
    break;

    case '/cargo/update':
        CargoController::update();
    break;
    
    case '/cargo/delete':
        CargoController::delete();
    break;

    ## Rotas para funcionario
    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;

    case '/funcionario/update':
        FuncionarioController::update();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;
}