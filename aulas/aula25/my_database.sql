
--  SCRIPTS DO SEU BANCO --

--  CRAINCO BANCO  --
CREATE DATABASE `wallison`;

-- Usando o banco --
USE `wallison`;

-- Criando a tabela Registro --
CREATE TABLE `registro` (
	`nome` VARCHAR(255),
	`email` VARCHAR(255),
	`cpf` VARCHAR(20),
	`telefone` VARCHAR(20)
);