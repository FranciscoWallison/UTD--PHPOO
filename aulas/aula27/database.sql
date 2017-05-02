-- mysql -h localhost -u root -p --
-- Importar
-- mysql -h localhost -u root -p db_aft_test < database.sql
-- Exporta
-- mysql -h localhost -u root -p db_aft_test > database_backup.sql



-- CRIAR UM BANCO DE DADOS --
-- CREATE DATABASE IF NOT EXISTS `db_aft_test`;
USE `db_aft_test`;

/*
CREATE TABLE IF NOT EXISTS `tb_registers`(
`id_register` INT(4) ZEROFILL AUTO_INCREMENT PRIMARY KEY,
`register_name` VARCHAR(255) NOT NULL,
`register_email` VARCHAR(255) UNIQUE KEY NOT NULL,
`register_cpf` VARCHAR(25) UNIQUE KEY NOT NULL,
`register_phone` VARCHAR(30) NOT NULL,

);

CREATE TABLE IF NOT EXISTS `tb_students`(
`id_student` INT(4) ZEROFILL AUTO_INCREMENT PRIMARY KEY,
`student_name` VARCHAR(255) NOT NULL,
`student_email` VARCHAR(255) UNIQUE KEY NOT NULL,
);

INSERT INTO `tb_registers`(
`register_name`,
`register_email`,
`register_cpf`,
`register_phone`
)VALUES(
'Francisco WAllison',
'franciscowallison@gmail.com',
'323.689.059-65',
'(85) 89889-7878'
);

INSERT INTO `tb_registers`(
`register_name`,
`register_email`,
`register_cpf`,
`register_phone`
)VALUES(
'Tabosa ',
'Tabosa@gmail.com',
'322.689.059-65',
'(85) 89889-7878'
),(
'Fernada ',
'Fernada@gmail.com',
'324.689.059-65',
'(85) 89889-7878'
),(
'Nego do Boreu ',
'Nego@gmail.com',
'329.689.059-65',
'(85) 89889-7878'
);


INSERT INTO `tb_registers`(
`register_name`,
`register_email`,
`register_cpf`,
`register_phone`
)VALUES(
'Zesinho ',
'Zesinho@gmail.com',
'722.689.059-65',
'(85) 89889-7878'
),(
'Luizinho ',
'Luizinho@gmail.com',
'789.689.059-65',
'(85) 89889-7878'
),(
'Nego do Zap ',
'NegoZap@gmail.com',
'329.123.059-65',
'(85) 89889-7878'
);


INSERT INTO `tb_students`(
`id_student`,
`student_name`,
`student_email`
)VALUES(
'Francisco WAllison',
'franciscowallison@gmail.com'
),(
'chico WAllison',
'chicowallison@gmail.com'
);
*/
CREATE TABLE IF NOT EXISTS `tb_notes`(
	`id_note` INT(4) ZEROFILL AUTO_INCREMENT PRIMARY KEY,
	`note_1` FLOAT,
	`note_2` FLOAT,
	`note_3` FLOAT,
	`note_4` FLOAT,
	`register_id` INT(4) UNIQUE
);

INSERT INTO `tb_notes`(
`note_1`,
`note_2`,
`note_3`,
`note_4`,
`register_id`
)VALUES(
8.5,
9.2,
7.6,
8.2,
1
),
(
7.5,
10,
7,
3.2,
2
),
(
6.5,
1.0,
6,
8.2,
3
),
(
10,
10,
6,
8.2,
4
);


#relação 
SELECT tb_registers.register_name, tb_notes.note_1,tb_notes.note_2, tb_notes.note_3 FROM tb_registers, tb_notes WHERE tb_registers.id_register = tb_notes.register_id;


SELECT tb_registers.register_name AS `Nome`
FROM
`tb_registers`;

#
SELECT 
id_register AS Numero,
register_name AS Nome
FROM
`tb_registers`
WHERE `register_name`
LIKE '% W %';

#ORGANIZANDO PELO NOME
SELECT 
id_register AS Numero,
register_name AS Nome
FROM
`tb_registers`
GROUP BY `register_name`;
