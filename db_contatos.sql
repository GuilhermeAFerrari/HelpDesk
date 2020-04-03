DROP DATABASE IF EXISTS db_contatos;

CREATE DATABASE IF NOT EXISTS db_contatos;

USE db_contatos;

CREATE TABLE tb_pessoa (
  id_pessoa int(4) NOT NULL AUTO_INCREMENT,
  nm_pessoa varchar(50) NOT NULL,
  nr_cpf varchar(14) NOT NULL,
  nr_rg varchar(13) NOT NULL,
  nm_departamento varchar(30) NOT NULL,
  nr_telefone varchar(15) NOT NULL,
  nm_email varchar(70) NOT NULL,
  ds_tipo varchar(10) NOT NULL,
  ds_status varchar(10) NOT NULL,
	PRIMARY KEY(id_pessoa)
);

CREATE TABLE tb_chamado (
  id_chamado int(4) NOT NULL AUTO_INCREMENT,
  id_pessoa int(4) NOT NULL,
  ds_status varchar(8) NOT NULL DEFAULT 'ABERTO',
  ds_chamado varchar(500) NOT NULL,
  ds_prioridade varchar(20) NOT NULL,
  ds_resolucao varchar(500) NOT NULL,
	PRIMARY KEY(id_chamado)
);

CREATE TABLE tb_login (
    id_login int(4) NOT NULL AUTO_INCREMENT,
	id_pessoa int(4) NOT NULL UNIQUE,
	nm_login varchar(20) NOT NULL UNIQUE,
	ds_senha varchar(150) NOT NULL,
	PRIMARY KEY(id_login)
);

ALTER TABLE tb_login
ADD CONSTRAINT fk_pessoaLogin FOREIGN KEY (id_pessoa) REFERENCES tb_pessoa (id_pessoa);

ALTER TABLE tb_chamado
ADD CONSTRAINT fk_chamadoPessoa FOREIGN KEY (id_pessoa) REFERENCES tb_pessoa (id_pessoa);

/*
INSERT INTO tb_pessoa (nm_pessoa, nr_cpf, nr_rg, nm_departamento, nr_telefone, nm_email, ds_tipo, ds_status)
VALUES ("Angelo", "39283266862", "455849717", "TI",
        "992305257", "angelo@yahoo.com", "Tecnico", 
        "Ativo");
INSERT INTO tb_pessoa (nm_pessoa, nr_cpf, nr_rg, nm_departamento, nr_telefone, nm_email, ds_tipo, ds_status)
VALUES ("Brendo", "12312312344", "322451527", "Almoxarifado",
        "998875548", "brendo@yahoo.com", "Usuario", 
        "Ativo");
INSERT INTO tb_pessoa (nm_pessoa, nr_cpf, nr_rg, nm_departamento, nr_telefone, nm_email, ds_tipo, ds_status)
VALUES ("Jabes", "33655488947", "555689586", "TI",
        "987874575", "jabes@yahoo.com", "Tecnico", 
        "Ativo");
INSERT INTO tb_pessoa (nm_pessoa, nr_cpf, nr_rg, nm_departamento, nr_telefone, nm_email, ds_tipo, ds_status)
VALUES ("Guilherme", "77788599856", "998288371", "TI",
        "123344147", "guiferrari@yahoo.com", "Tecnico", 
        "Ativo");
INSERT INTO tb_pessoa (nm_pessoa, nr_cpf, nr_rg, nm_departamento, nr_telefone, nm_email, ds_tipo, ds_status)
VALUES ("Renan", "99885445789", "244588954", "Tesouraria",
        "995844578", "renan@yahoo.com", "Usuario", 
        "Ativo");

INSERT INTO tb_login (id_pessoa, nm_login, ds_senha)
VALUES (1, "angelo", "1234"),
	   (2, "brendo", "1234"),
       (3, "jabes", "1234"),
       (4, "guilherme", "1234"),
       (5, "renan", "1234");
*/
	   