drop database if exists sislojamarca;
create database sislojamarca;
use sislojamarca;

create table CadUsuario(
    IDSuap VARCHAR(15) primary key,
    nome VARCHAR(100) not null,
    email VARCHAR(100) unique,
    senha VARCHAR(100),
    telefone VARCHAR(11),
    cpf VARCHAR(11) unique
);

create table CadFornecedor(
    IDFornecedor VARCHAR(15) primary key,
    nomeFornecedor VARCHAR(100) not null,
    email VARCHAR(100) unique,
    cpf VARCHAR(11) unique,
    cnpj VARCHAR(14) unique
);

create table CadMarca(
    IDMarca VARCHAR(15) primary key,
    nomeMarca VARCHAR(255) not null,
    descriacao TEXT,
    dataCriacao DATE,
    contato VARCHAR(100),
    endereco VARCHAR(255),
    IDFornecedor VARCHAR(15),
    FOREIGN KEY (IDFornecedor)
    references CadFornecedor (IDFornecedor) 
);

create table CadProduto(
    CBarra VARCHAR(13) primary key,
    titulo VARCHAR(255) not null,
    preco DECIMAL(10, 2),
    marca VARCHAR(255),
    tipo VARCHAR(11),
    detalhesProduto TEXT,
    tamanhos VARCHAR(11),
    IDSuap_produto VARCHAR(16),
    FOREIGN KEY (IDSuap_produto)
    references CadUsuario (IDSuap),
    FOREIGN KEY (marca)
    references CadMarca (IDMarca)
);

select * from CadFornecedor;
select * from CadUsuario;
select * from CadMarca;
select * from CadProduto;