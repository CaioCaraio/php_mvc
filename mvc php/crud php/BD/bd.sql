drop database if exists Banco_MVC;
create database if not exists Banco_MVC;

use Banco_MVC;

Create table if not exists Pessoa(
id int auto_increment not null primary key,
Nome Varchar(50) not null,
CPF Char(15) not null,
Data_Nascimento date not null,
email varchar(100) not null,
telefone varchar(11) not null,
Endereco varchar(45) not null
);

Create table if not exists Produto(
    id int auto_increment not null primary key,
    produto Varchar(50) not null,
    estoque decimal(10,2) not null,
    preco Decimal(10,2) not null,
    id_categoria Int not null
);

Create table if not exists Categoria(
id int auto_increment not null primary key,
categoria varchar(50) not null,
descricao varchar(100) not null
);
