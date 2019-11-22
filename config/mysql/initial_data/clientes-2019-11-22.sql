DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clientes` WRITE;
/*ALTER TABLE `posts` DISABLE KEYS; */

INSERT INTO `clientes` (`nome`, `email`)
VALUES
	('Bruno Purcinelli','bruno.purcinelli@email.com'),
	('Carlos Henrique','carlos.henrique@email.com'),
	('Talhes Magalhaes','talhes.magalhaes@email.com');

/*ALTER TABLE `posts` ENABLE KEYS; */
UNLOCK TABLES;