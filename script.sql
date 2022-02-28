mysql -u root

create database FisioRio;

use FisioRio;

create table usuario(
    idUser int primary key auto_increment,
    nome varchar(15) not null,
    sobrenome varchar(50) not null,
    login varchar(20) unique,
    senha varchar(50) not null,
    email varchar(20) not null,
    perfil enum('adm','paciente','medico')
);

#inserir dado na tabela


select * from usuario;