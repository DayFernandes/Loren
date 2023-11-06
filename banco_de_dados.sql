create database banco_de_dados;

Use banco_de_dados ;

Create table usuario (
cpf_usu char (11) primary key not null,
nome_usu varchar (100) not null,
email_usu varchar (250) not null,
senha_usu varchar (50) not null,
men_usu varchar (100)
);
