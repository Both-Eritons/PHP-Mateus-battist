/*
CREATE DATABASE cursophp(
	nome VARCHAR(200)
);
* criar database;

USE DATABASE cursophp;

DROP DATABASE cursophp;
* DELETAR DATABASE





CREATE TABLE pessoas(
	nome VARCHAR(200),
	idade INT
);

CREATE TABLE carro(
	marca VARCHAR(100),
	descricao TEXT,
	ano_fabricacao INT
);


CREATE TABLE teste(
	teste DATE
);

DROP TABLE teste;

--------- alter table -----------

alter table tabela
→ add coluna nova
add motor int;

→ deletar coluna
drop ano_fabricacao;

→ alterar coluna
modify column descricao varchar(500);

----------  constraints   -------------
→ not null
create table notnull(
	nome varchar(100) not null,
	idade int
);
show columns from notnull;



insert into notnull 
(idade) values
(18);


→ unique

create table mailmar(
	email varchar(255) not null unique,
	nome varchar(255)
);

show columns from mailmar;

insert into mailmar (email, nome) values("jose@gmail.com", "junior");

→ primary key

create table itens(
	id int unsigned auto_increment primary key,
	nome varchar(100),
	descricao text
);

insert into itens (nome, descricao) values("virolw", "sem desc");
insert into itens (nome, descricao) values("vsexo", "sem desc");
insert into itens (nome, descricao) values("vseelxo", "sem desc");
insert into itens (nome, descricao) values("vs2hexo", "sem desc");
insert into itens (nome, descricao) values("vsckexo", "sem desc");
select * from itens;

create table itens(
	id int unsigned auto_increment primary key,
	nome varchar(100),
	descricao text
);

insert into itens(nome,descricao) values('caneta', "lorem ipsum");

insert into itens(nome,descricao) values('microfone', "sexo idk oqke");
insert into itens(nome,descricao) values('motor', "sexo idk oqke");
insert into itens(nome,descricao) values('carregador', "sexo idk oqke");
insert into itens(nome,descricao) values('fone', "sexo idk oqke");
INSERT INTO itens(nome,descricao) VALUES('motor', "sexo idk oqke");
INSERT INTO itens(nome,descricao) VALUES('fone', "sexo idk oqke");

→ WHERE

SELECT * FROM itens WHERE nome = "fone";
SELECT ID,nome FROM itens WHERE ID <= 3;

→ WHERE E CONDICIONAIS

SELECT ID, nome FROM itens WHERE ID = 5 OR ID =2;
SELECT ID, nome FROM itens WHERE ID > 5 OR ID < 2;
SELECT ID, nome FROM itens WHERE ID > 5 OR nome = "fone";
SELECT ID, nome FROM itens WHERE ID > 5 AND nome = "fone";

→ ORDENAÇÃO

SELECT * FROM itens ORDER BY ID DESC;
SELECT * FROM itens ORDER BY ID ASC;
SELECT * FROM itens WHERE ID > 3 ORDER BY nome DESC;

→ UPDATE
UPDATE itens SET nome = "sexo" WHERE ID = 7;
UPDATE itens SET nome = "teste", descricao = "testando um 2" WHERE ID = 6;

→ DELETE

DELETE FROM itens WHERE ID = 7;
DELETE FROM itens WHERE nome = "teste";

→ CRIAR USUARIO

CREATE USER 'eriton'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON *.* TO 'eriton'@'localhost';
FLUSH PRIVILEGES;
*/
