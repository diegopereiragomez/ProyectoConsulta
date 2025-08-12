USE cms; /* nome da túa bbdd */
CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(16) NOT NULL,
  `contrasinal` varchar(64) NOT NULL,
  `data_acceso` datetime DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `usuarios` tinyint(1) NOT NULL DEFAULT '0',
  `novas` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

/***************************/

USE cms;
CREATE TABLE `noticias` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL DEFAULT '',
  `slug` varchar(36) DEFAULT '',
  `extracto` varchar(128) DEFAULT '',
  `texto` longtext,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `home` tinyint(1) NOT NULL DEFAULT '0',
  `datapublicacion` datetime DEFAULT NULL,
  `autor` varchar(64) DEFAULT NULL,
  `imaxe` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;