-- Para entrar no shel do mysql
-- mysql -u root -p senha

-- //mostra todos banco de dados
-- SHOW DATABASES;

-- //mostra todas as tabelas do banco selecionado
-- SHOW TABLES;

-- //seleciona um banco de dados para trabalhar
-- USE `nome_do_banco`

-- // Exclui o banco de dados chamado modelo e todos os dados dentro dele
-- DROP DATABASE `nome_do_banco`; 

-- // Exclui a tabela chamado modelo e todos os dados dentro dele
-- DROP TABLES `nome_do_tabelas`; 

-- // mostra detalhes da tabela, colunas e tipo de dados
-- DESC `nome_da_sua_tabela`

-- //verconteudo 
-- SELECT * FROM `produtos` ;

-- //alterar ou adicionar as colunas da tabela
-- // alterar o nome da coluna
-- ALTER TABLE funcionarios  CHANGE cliente_desde cliente_descricao TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
-- // deletar a coluna
-- ALTER TABLE `clientes` DROP COLUMN nomeDaColuna;
-- // adicionar uma nova coluna
-- ALTER TABLE `clientes` ADD COLUMN `nomeCliente` VACGAR(255) AFTER `codigoCliente`;  



-- Inserindo registro na atabela Produtos --
/*
	* Exeplo : da tabela	
	CREATE TABLE `produtos` (
		`codigoProduto` INT(4),
		`preco` FLOAT,
		`nome` VARCHAR(255),
		`data_de_validade` DATE,
		`tipoProduto` VARCHAR(255),
		`descricao` VARCHAR(255),
		`nome_de_fornecedor` VARCHAR(255)
	);
*/
#Explo de inseção
INSERT INTO `produtos` (
`codigoProduto`,
`preco`,
`nome`,
`data_de_validade`,
`tipoProduto`,
`descricao`,
`nome_de_fornecedor`
) VALUES (
1,
2.99,
'Sabão cracra',
'2020-02-12',
'limpeza/higiene',
'Sabão pra não enrolar',
'Mamonas'
);
#Explo de inseção
INSERT INTO `produtos` (
`codigoProduto`,
`preco`,
`nome`,
`data_de_validade`,
`tipoProduto`,
`descricao`,
`nome_de_fornecedor`
) VALUES (
2,
3.99,
'Detergente',
'2010-02-12',
'limpeza/higiene',
'Indicado para o uso doméstico geral, principalmente, para lavar louças',
'Mamonas'
),
(
3,
1.99,
'Sabão Pó Caixa Ypê',
'2020-02-12',
'limpeza/higiene',
'Sabão em caixa 300g',
'YPÊ DISTRIBUIDORA'
),
(
4,
10.20,
'Pá Coleta Seletiva',
'2019-02-12',
'limpeza',
'Pá para melhor desempelho e limpeza',
'Talimpo'
),
(
5,
15.99,
'Balde Doblô',
'2018-02-12',
'limpeza',
'Balde para melhor desempelho e limpeza',
'Tasujo'
);
# inserindo cliente
INSERT INTO `clientes` (
`codigoCliente`,
`nome`,
`endereco`,
`cpf`,
`contato`,
`email`,
`sexo`
) VALUES (
1,
'Chico Wallison',
'CE/fortaleza',
'1531515465',
'9999-9999',
'franciscowallison@gmail.com',
'M'
);
# inserindo funcionarios
INSERT INTO `funcionarios` (
`codigoFuncionario`,
`nome`,
`endereco`,
`cpf`,
`data_admicao`,
`salario`,
`contato`,
`email`,
`sexo`
) VALUES (
1,
'Chico Dudu',
'CE/fortaleza',
'5412315',
'2017-04-26',
200.00,
'9899-9999',
'franciscowallison@gmail.com',
'M'
);


SELECT * FROM `clientes`;