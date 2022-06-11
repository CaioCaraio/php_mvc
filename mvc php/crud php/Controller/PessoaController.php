<?php

 class PessoaController
{
    public static function index()
    {
        //incluindo o arquivo PessoaModel.php
        include 'Model/PessoaModel.php';
        //instanciando a classe PessoaModel
        $model = new PessoaModel();
        //chamando metodo getAllRows da Model
        $model->getAllRows();
        //chamando a Lista de pessoas
        include 'View/Pessoa/ListagemPessoa.php';
    }

    public static function form()
    {
        //incluindo o arquivo PessoaModel.php
        include 'Model/PessoaModel.php';
        //instanciando a classe PessoaModel
        $model = new PessoaModel();

        //se o id estiver definido
        if(isset($_GET['id'])) 
        //$model vai selecionar o GetById
        $model = $model->getById( (int) $_GET['id']);
        
        //chamando o formulário de pessoas
        include 'View/Pessoa/frmPessoa.php';
    }

    public static function save()
    {
        //incluindo o arquivo PessoaModel.php
        include 'Model/PessoaModel.php';
       //instanciando a classe PessoaModel
        $model = new PessoaModel();

        //pegando os valores do form e colocando dentro da $model
        $model->id = $_POST['id'];
        $model->nome = $_POST['Nome'];
        $model->cpf = $_POST['CPF'];
        $model->dataNascimento = $_POST['Nascimento'];
        $model->email = $_POST['Email'];
        $model->telefone = $_POST['Telefone'];
        $model->endereco = $_POST['Endereco'];


        //aplicando o metodo save
        $model->save();

        //indo para a /pessa (listagem)
        header("Location: /pessoa");
    }

    public static function delete()
    {
        //incluindo o arquivo PessoaModel.php
        include 'Model/PessoaModel.php';

       //instanciando a classe PessoaModel
        $model = new PessoaModel();

        //se o id estiver definido
         if(isset($_GET['id'])) 

        //$model vai deletar pelo id
        $model->delete( (int) $_GET['id']);

        //vai ir para /pessoa (listgem)
        header("Location: /pessoa");
    }
}
?>