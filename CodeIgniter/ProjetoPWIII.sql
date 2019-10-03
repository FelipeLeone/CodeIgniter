CREATE DATABASE ProjetoPWIII;

USE ProjetoPWIII;

CREATE TABLE TB_PRODUTO(
ID INT PRIMARY KEY  AUTO_INCREMENT NOT NULL,
NOME VARCHAR(50)NOT NULL,
PESO  NUMERIC  NOT NULL,
PRECO DECIMAL(8,2) NOT NULL
);

create table imagens (
    idimagem int auto_increment primary key,
    nome varchar(30) not null,
    tamanho int(30) not null,
    extensao varchar(30) not null,
    caminho varchar(200) not null,
    preco decimal(12 , 2 ) not null,
    titulo varchar(20) not null
);

select * from imagens ;


/*create table tb_produtos(
id int primary key auto_increment,
nome varchar (50),
marca varchar(100),
preco decimal(10,2),
imagem varchar(3000),

qtd int
);*/


/*create table tb_carrinho (
id int primary key auto_increment,
id_cliente int,
id_produto int
);

create table compra (
    idcompra int auto_increment primary key,
    fkimagem int not null,
    fkusuario int not null,
	pecas int,
    foreign key (fkimagem)
        references imagens (idimagem),
    foreign key (fkusuario)
        references tb_login (id)
);


alter table tb_carrinho add foreign key(id_cliente) references tb_login (id);
alter table tb_carrinho add foreign key(id_produto) references tb_produtos (id);*/


/*insert into tb_produtos(nome, marca, preco, qtd, imagem) values ("Empire", "Hinode",100.50, 50, "Imagens/Empire.jpg");*/
insert into TB_PRODUTO(NOME, PESO, PRECO) values ("Empire",100,100.50);


SELECT *FROM TB_PRODUTO;


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

select *from Pessoa;

INSERT INTO Pessoa (nome, userName, email, senha, cpf, telCelular, tipoUsuario)
VALUES ('Felipe Leone', 'leone', 'leonefelip@gmail.com', '123456', '40183162838', '953860078', 'administrador');

INSERT INTO Pessoa (nome, userName, email, senha, cpf, telCelular, tipoUsuario)
VALUES ('Adrain Henrique', 'adrian', 'adrain@etec.sp.gov.br', '123456', '12345678911', '952827130', 'administrador');

INSERT INTO Pessoa (nome, userName, email, senha, cpf, telCelular, tipoUsuario)
VALUES ('Joao', 'jp', 'jp@etec.sp.gov.br', '123456', '12345678912', '952827130', 'cliente');
