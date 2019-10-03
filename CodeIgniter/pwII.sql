use projetopwiii;

create table Pessoa (
idPessoa int primary key auto_increment,
nome varchar(250) not null,
userName varchar(100) not null unique,
email varchar(250) not null unique,
senha varchar(50) not null,
cpf varchar(11) not null,
telFixo varchar(10) null,
telCelular varchar(11) null,
tipoUsuario varchar(30) not null,
ativo varchar(30) default 'ativo');

select * from Pessoa;

INSERT INTO Pessoa (nome, userName, email, senha, cpf, telCelular, tipoUsuario) 
VALUES ('Marcelo Pelaes', 'celopelaes', 'marcelo.palmeida@etec.sp.gov.br', '123456', '12345678911', '952827130', 'administrador');

INSERT INTO Pessoa (nome, userName, email, senha, cpf, telCelular, tipoUsuario) 
VALUES ('Wagner Gusmão', 'VouSacanear', 'wagner.gusmao@etec.sp.gov.br', '123456', '12345678912', '952827130', 'cliente');
	