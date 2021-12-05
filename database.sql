CREATE DATABASE parcial;

use parcial;

CREATE TABLE parcial.usuario ( usuario_id INT NOT NULL AUTO_INCREMENT, usuario VARCHAR(200) NOT NULL, senha VARCHAR(32) NOT NULL, PRIMARY KEY (usuario_id));

insert into usuario (usuario,senha) values ('bruno', md5('1234'));

CREATE TABLE parcial.cadastros ( funcionario_id INT NOT NULL AUTO_INCREMENT, nome_funcionario VARCHAR(200) NOT NULL, contato_funcionario VARCHAR(45) NOT NULL, funcao_funcionario VARCHAR(45) NOT NULL, salario_funcionario FLOAT NOT NULL, PRIMARY KEY (funcionario_id));