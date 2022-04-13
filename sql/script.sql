mysql -u root

create database FisioRio;

use FisioRio;

create table usuario(
    idUser int primary key auto_increment,
    nome varchar(15) not null,
    sobrenome varchar(50) not null,
    login varchar(50) unique,
    senha varchar(50) not null,
    email varchar(40) unique not null,
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
#TENTATIVA1 DE FAZER O RELACIONAMENTO

#adicionando chave estrageira na tabela usuario
ALTER TABLE usuario ADD COLUMN codigo_fisio INT,
ADD CONSTRAINT fk_codigo_fisio
FOREIGN KEY (codigo_fisio) 
REFERENCES fisioterapeuta (idFisio);

#fazendo a ligação do codigo_fisio da tabela usuario com o 
#codigo idFsio da tabela fisioterapeuta.
UPDATE usuario SET codigo_fisio = 1 WHERE idUser = 48;

#Agora para fazermos uma ligação bidirecional, teremos que adicionar uma chave
estrangeira da tabela usuario na tabela fisioterapeuta.

#adicionando chave estrageira na tabela fisioterapeuta
ALTER TABLE fisioterapeuta ADD COLUMN codigo_user INT,
ADD CONSTRAINT fk_codigo_user
FOREIGN KEY (codigo_user)
REFERENCES usuario (idUser);

#fazendo a ligação do codigo_user da tabela fisioterapeuta com 
#codigo idUser da tabela usuario.
UPDATE fisioterapeuta SET codigo_user = 48 WHERE idFisio = 1;

#APAGANDO CHAVE ESTRANGEIRA
ALTER TABLE fisioterapeuta DROP FOREIGN KEY fk_codigo_user; 
#TENTATIVA2 DE FAZER O RELACIONAMENTO


#teste de inserir o email do usuario na tabela fisioterapeuta
ALTER TABLE fisioterapeuta ADD COLUMN email_user VARCHAR(40),
ADD CONSTRAINT fk_email_user
FOREIGN KEY (email_user)
REFERENCES usuario (email);

#jogando um email na tabela fisioterapeuta.
UPDATE fisioterapeuta SET email_user ="pink@hotmail.com" WHERE idFisio = 1;


#adicionando chave estrageira na tabela endereco


