-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2025 at 05:22 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `titulo` varchar(32) NOT NULL DEFAULT '',
  `slug` varchar(36) DEFAULT '',
  `extracto` varchar(128) DEFAULT '',
  `texto` longtext,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `home` tinyint(1) NOT NULL DEFAULT '0',
  `datapublicacion` datetime DEFAULT NULL,
  `autor` varchar(64) DEFAULT NULL,
  `imaxe` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `slug`, `extracto`, `texto`, `activo`, `home`, `datapublicacion`, `autor`, `imaxe`) VALUES
(1, 'Gryffindor', 'gryffindor', 'La Casa Gryffindor fue fundada por el célebre mago Godric Gryffindor.', 'Godric solo aceptaba en su casa a aquellos magos y brujas que tenían valentía, disposición y coraje, ya que estas son las cualidades de un auténtico Gryffindor. Los colores de esta casa son el dorado y el escarlata y su símbolo es un león. La reliquia más preciada de la casa es la espada de Godric Gryffindor, perteneciente, como su nombre indica, al fundador de la casa. Los estudiantes de esta casa pasan la mayor parte del tiempo en la Torre de Gryffindor, ubicada en el séptimo piso del Castillo de Hogwarts.', 1, 1, '2019-07-22 00:00:00', 'https://harrypotter.fandom.com', 'gryffindor.jpg'),
(2, 'Hufflepuff', 'hufflepuff', 'La Casa Hufflepuff se encuentra en una bodega en el mismo pasillo subterráneo que en el de la cocina.', 'Hufflepuff anteriormente buscaba alumnos que quisieran pertenecer a esa casa de puro consentimiento, aunque actualmente busca alumnos leales, honestos, que no temen al trabajo pesado. La fundadora es nada menos que la bruja, amiga de toda la vida de Rowena Ravenclaw, Helga Hufflepuff. Helga, fue una bruja muy noble, amigable y la principal impulsora de que Hogwarts aceptase a alumnos nacidos de muggles. La principal reliquia de la casa es la copa de Helga Hufflepuff. El símbolo de la casa es un tejón negro y sus colores representativos son el amarillo y el negro carbón.', 1, 1, '2019-07-23 00:00:00', 'https://harrypotter.fandom.com', 'hufflepuff.jpg'),
(3, 'Ravenclaw', 'ravenclaw', 'La Casa Ravenclaw se encuentra en una torre en el ala oeste del castillo.', 'Sus colores son el azul y el bronce. Ravenclaw busca alumnos académicos, estudiosos y que siempre sepan lo que hay que hacer. Fue fundada por la bruja, nacida en la Canada, Rowena Ravenclaw. Supuestamente la principal inventora del nombre, lugar y formato de Hogwarts. Ella misma es la causante de que las escaleras se muevan. Su principal reliquia es la diadema de Rowena Ravenclaw. El símbolo de la casa es el águila, aunque en alguna versión del escudo es un cuervo.', 1, 0, '2019-07-24 00:00:00', 'https://harrypotter.fandom.com', 'ravenclaw.jpg'),
(4, 'Slytherin', 'slytherin', 'La Casa Slytherin se caracteriza principalmente por la ambición y la astucia.', 'Fue fundada por el mago Salazar Slytherin. La Sala Común de esta casa está situada en las mazmorras, pasando por un serie de numerosos pasillos subterráneos. Posiblemente se llega a ellos a través del Vestíbulo de Hogwarts . Específicamente se encuentra debajo del Lago Negro, haciendo que la sala común sea fría y con una tonalidad verdosa, ya que hay ventanas que dan a las aguas. Se accedea ella por una puerta altamente disimulada en un muro de piedra, diciendo una contraseña requerida. La única conocida es Sangre Pura. Su principal reliquia es el guardapelo de Salazar Slytherin. El animal representativo es la serpiente, sus colores son verde y plateado y el elemento es el agua asociada con la astucia y frialdad.', 0, 0, '2019-07-25 00:00:00', 'https://harrypotter.fandom.com', 'slytherin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `usuario` varchar(16) NOT NULL,
  `contrasinal` varchar(64) NOT NULL,
  `data_acceso` datetime DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `usuarios` tinyint(1) NOT NULL DEFAULT '0',
  `novas` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasinal`, `data_acceso`, `activo`, `usuarios`, `novas`) VALUES
(1, 'admin', 'hash', NULL, 1, 1, 1),
(2, 'user1', 'hash', NULL, 1, 0, 1),
(3, 'user2', 'hash', NULL, 0, 0, 1),
(4, 'user3', 'hash', NULL, 1, 1, 1),
(5, 'user4', 'hash', NULL, 1, 1, 1),
(6, 'user5', 'hash', NULL, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
