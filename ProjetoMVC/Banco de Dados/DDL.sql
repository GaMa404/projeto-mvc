CREATE DATABASE db_sistema;

USE db_sistema;

CREATE TABLE categoria_produto
(
    id INT AUTO_INCREMENT,
    descricao VARCHAR(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE produto 
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    preco DOUBLE NOT NULL,
    id_categoria_produto INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_categoria_produto) REFERENCES categoria_produto(id)
);

CREATE TABLE pessoa
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    rg VARCHAR(45) NOT NULL,
    cpf CHAR(11) NOT NULL,
    data_nascimento DATE NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    PRiMARY KEY (id) 
);

CREATE TABLE cargo
(
    id INT AUTO_INCREMENT,
    descricao VARCHAR(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE funcionario
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    data_nascimento DATE NOT NULL,
    rg VARCHAR(45) NOT NULL,
    cpf CHAR(11) NOT NULL,
    sexo VARCHAR(50) NOT NULL,
    id_cargo INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_cargo) REFERENCES cargo(id)
);