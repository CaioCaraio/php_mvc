<?php

class PessoaModel
{

    //definindo as váriaveis que vão ser utilizadas em toda a classe
    public $id, $nome, $cpf, $dataNascimento, $email, $telefone, $endereco, $rows;
    

    public function save()
    {
        //incluindo o arquivo pessoaDAO.php
        include 'DAO/PessoaDAO.php';

        //instânciando a classe dao e chamando-a de $dao
        $dao = new PessoaDAO();

        //se o id tiver vazio 
     if(empty($this->id))
     {

        // inserir os dados
        $dao->insert($this);

    }else //caso n esteja vazio
    {
        //atualizar os dados
        $dao->update($this);
    }
    }

    public function getAllRows()
    {

        include 'DAO/PessoaDAO.php';


        $dao = new PessoaDAO();

        //$rows vai valer o select que esta dentro do DAO
        $this->rows = $dao->select();

    }

    public function getById(int $id)
    {
       include 'DAO/PessoaDAO.php';
       $dao = new PessoaDAO();
    
       // $obj vai valer o campo id do selectById que esta dentro do DAO
       $obj = $dao->selectById($id);
       return($obj) ? $obj : new PessoaModel();
    }

    

    public function delete(int $id)
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        //chamando a função delete do dao
       $dao->delete($id);
    }


    }




?>