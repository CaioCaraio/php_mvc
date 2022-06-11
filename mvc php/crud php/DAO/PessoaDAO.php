<?php

class PessoaDAO
{

    private $conexao;

    public function __construct()
    {
        //fazendo a conexão com os servidores 
        $dsn = "mysql:host=localhost:3300;dbname=banco_mvc";
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }
    public function insert(PessoaModel $model)
    {
        //inserindo dentro da tebela pessoa
        $sql = "INSERT INTO Pessoa (Nome, CPF, Data_Nascimento, email, telefone, Endereco) VALUES (?, ?, ?, ?, ?, ?)";

         //preparado para inserir
         $stmt = $this->conexao->prepare($sql);
         
         //definido os valores do campo que esta em cima
         $stmt->bindValue(1, $model->nome); 
         $stmt->bindValue(2, $model->cpf);
         $stmt->bindValue(3, $model->dataNascimento);
         $stmt->bindValue(4, $model->email);
         $stmt->bindValue(5, $model->telefone);
         $stmt->bindValue(6, $model->endereco);
         //executando o comando de inserir
         $stmt->execute();

    }

    public function update(PessoaModel $model)
    {
        //atualizando os dados pelo id
        $sql = "UPDATE pessoa SET Nome=?, CPF=?, Data_Nascimento=?, email=?, telefone=?, Endereco=? WHERE id=?";
         
        //preparado para inserir
        $stmt = $this->conexao->prepare($sql);
        
        //definido os valores do campo que esta em cima
        $stmt->bindValue(1, $model->nome); 
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->dataNascimento);
        $stmt->bindValue(4, $model->email);
        $stmt->bindValue(5, $model->telefone);
        $stmt->bindValue(6, $model->endereco);
        $stmt->bindValue(7, $model->id);
        //executando o comando de atualizar
        $stmt->execute();

    }

    public function select()
    {
        //selecionando da tabela pessoa
        $sql ="SELECT * FROM Pessoa";
        // preparando para selecionar
        $stmt = $this->conexao->prepare($sql);
        //executando o comando de selecionar
        $stmt->execute();
    
        //retornando para o $stmt os valores do PDO
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        //incluindo uma vez o arquivo PessoaModel.php
        include_once 'Model/PessoaModel.php';

        //fazendo o select pelo id
        $sql = "SELECT * FROM pessoa WHERE id = ?";

        // preparando para selecionar
        $stmt = $this->conexao->prepare($sql);
        //bidando o valor do id da Sintaxe do sql
        $stmt->bindValue(1, $id);
        //executando o select pelo id
        $stmt->execute();

        return $stmt->fetchObject("PessoaModel");
    }

    public function delete(int $id)
    {
        // fazendo o delete pelo id
        $sql ="DELETE FROM Pessoa WHERE id = ? ";
        
        // preparando para deletar
        $stmt = $this->conexao->prepare($sql);
        //bidando o valor do id da Sintaxe do sql
        $stmt->bindValue(1, $id);
        //executando o delete
        $stmt->execute();
    
        
    }
}
?>