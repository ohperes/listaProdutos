CREATE TABLE `produto` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(25) NOT NULL,
  `preco` FLOAT(10) NOT NULL,
  `marca` VARCHAR(25) NOT NULL,
  `validade` DATE NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(30) NOT NULL,
  `tipo` INT(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`));


/* cadastro de um administrador deve ser fetio a mão para teste
insert into usuario (nome, email, senha, tipo) values('root', 'root@root', 'root', '2');