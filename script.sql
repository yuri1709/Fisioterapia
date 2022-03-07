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
insert into usuario values(null,'Administrador','','admin','admin123','admin@hotmail.com','adm');
insert into usuario values(null,'yuri','conder','yuri1709','y123','yuri@hotmail.com','medico');
insert into usuario values(null,'bruna','maher','bruna','bruna123','bruna@hotmail.com','paciente');

/*UPDATE usuario SET login = "bruna" where login = "paciente";*/

select * from usuario;

create table pacientes(
    idPaciente int primary key auto_increment,
    cpf int (11),
    IdUser int,
    CONSTRAINT fk_usuarioPaciente FOREIGN KEY (IdUser) REFERENCES usuario (idUser)
);

#inserindo dados na tabela
insert into pacientes values(null,17574229783,16);
/*UUID_TO_BIN(UUID())*/