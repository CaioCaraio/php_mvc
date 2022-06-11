<?php
//incluindo os arquivos controller para usar os metodos
include 'autoLoad.php';

//definindo a varivel URL 
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{

    
    case '/':
        echo "Página Inicial";
    break;

    case '/pessoa':
        //chamando o metodo index da classe controller
        PessoaController::index();
    break;

    case '/pessoa/form':
        //chamando o metodo form da classe controller
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        //chamando o metodo save da classe controller
        PessoaController::save();
    break;

    case '/pessoa/delete':
        //chamando o metodo delete da classe controller
        PessoaController::delete();
    break;


    case '/produto':
       ProdutoController::index();
    break;

    case '/produto/form':
       ProdutoController::form();
    break;
    
    case '/produto/form/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;
   

    
    case '/categoria':
        CategoriaController::index();
    break;

    case '/categoria/form':
        CategoriaController::form();
    break;

    case '/categoria/form/save':
        CategoriaController::save();
    break;

    case '/categoria/delete':
        CategoriaController::delete();
    break;
   

    //Case por padrão
    default:
    echo "Erro 404";
    break;


}

?>