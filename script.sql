mysql -u root

create database FisioRio;

use FisioRio;

create table usuario(
    idUser int primary key auto_increment,
    nome varchar(15) not null,
    sobrenome varchar(50) not null,
    login varchar(50) unique,
    senha varchar(50) not null,
    email varchar(40) not null,
    perfil enum('0','1','2')
);

#inserir dado na tabela
insert into usuario values(null,'Administrador','','admin','admin123','admin@hotmail.com','0');
insert into usuario values(null,'yuri','conder','yuri1709','y123','yuri@hotmail.com','1');
insert into usuario values(null,'bruna','maher','bruna','bruna123','bruna@hotmail.com','2');

#aumentando o tamano de caracteres do email
/*ALTER TABLE usuario ALTER COLUMN email varchar(50);*/ /*não funcionou*/
/*UPDATE usuario SET login = "bruna" where login = "paciente";*/

/*select * from usuario;

create table pacientes(
    idPaciente int primary key auto_increment,
    cpf int (11),
    IdUser int,
    CONSTRAINT fk_usuarioPaciente FOREIGN KEY (IdUser) REFERENCES usuario (idUser)
);*/

/*#inserindo dados na tabela
insert into pacientes values(null,17574229783,16);
*/
