CREATE DATABASE parcial;

use parcial;

CREATE TABLE parcial.usuario ( usuario_id INT NOT NULL AUTO_INCREMENT, usuario VARCHAR(200) NOT NULL, senha VARCHAR(32) NOT NULL, PRIMARY KEY (usuario_id));

insert into usuario (usuario,senha) values ('bruno', md5('1234'));

CREATE TABLE parcial.cadastros ( funcionario_id INT NOT NULL AUTO_INCREMENT, nome_funcionario VARCHAR(200) NOT NULL, contato_funcionario VARCHAR(45) NOT NULL, funcao_funcionario VARCHAR(45) NOT NULL, salario_funcionario FLOAT NOT NULL, PRIMARY KEY (funcionario_id));

CREATE TABLE parcial.pacientes ( 
paciente_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, paciente_nome VARCHAR(200) NOT NULL, sexo VARCHAR(15) NOT NULL, endereco VARCHAR(200) NOT NULL, numero VARCHAR(15) NOT NULL, complemento VARCHAR(15) NOT NULL, 
bairro VARCHAR(40) NOT NULL, cidade VARCHAR(40) NOT NULL, cep VARCHAR(10) NOT NULL, email VARCHAR(50) NOT NULL, celular VARCHAR(20) NOT NULL, telefone VARCHAR(20) NOT NULL, peso FLOAT NOT NULL, altura FLOAT NOT NULL, 
hipertensao BOOLEAN, diabetes BOOLEAN, fumante BOOLEAN, cardiaco BOOLEAN, observacoes VARCHAR(100) NOT NULL, medicacao VARCHAR(100), dt_nasc DATE NOT NULL);