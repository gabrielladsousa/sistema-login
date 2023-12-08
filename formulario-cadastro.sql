CREATE SCHEMA `formulario-cadastro` ;

CREATE TABLE `formulario-cadastro`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
  
  SELECT * FROM `formulario-cadastro`.`usuarios`;