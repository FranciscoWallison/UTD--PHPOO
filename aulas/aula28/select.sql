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
`tb_registers` AS R
WHERE `register_name`
LIKE '% W %';

#ORGANIZANDO PELO NOME
SELECT 
id_register AS Numero,
register_name AS Nome
FROM
`tb_registers`
GROUP BY `register_name`;



UPDATE `tb_registers`SET`register_name`= "FRANCISCO WALLISON SOUSA DO NASCIMETO" WHERE `id_register` = 1;

DELETE FROM `tb_registers` WHERE id_register >2;


