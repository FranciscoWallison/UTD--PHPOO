CREATE TABLE IF NOT EXISTS `tb_functionatires`(
`id_func` INT(4) ZEROFILL AUTO_INCREMENT PRIMARY KEY,
`func_name` VARCHAR(255) NOT NULL,
`func_email` VARCHAR(255) UNIQUE KEY NOT NULL,
`func_password` VARCHAR(255) NOT NULL,
`func_cpf` VARCHAR(255) UNIQUE KEY NOT NULL,
`func_salary` FLOAT,
`func_occupation` VARCHAR(255) NOT NULL
);