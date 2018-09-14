-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2018 at 08:01 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misperris`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `region_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_CIUDAD_REGION_idx` (`region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`, `region_id`) VALUES
(1, 'Puente Alto', 1),
(2, 'La Florida', 1),
(3, 'Viña del mar', 2),
(4, 'Quintero', 2),
(5, 'Reñaca', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'Dra.Garcia', '123');

-- --------------------------------------------------------

--
-- Table structure for table `perro`
--

DROP TABLE IF EXISTS `perro`;
CREATE TABLE IF NOT EXISTS `perro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `raza` varchar(45) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perro`
--

INSERT INTO `perro` (`id`, `nombre`, `raza`, `peso`, `edad`) VALUES
(1, 'Billy', 'Beagle', 13, 13),
(2, 'Bill', 'Golden Retriver', 25, 5),
(3, 'Rex', 'German Shep', 15, 12);

-- --------------------------------------------------------

--
-- Table structure for table `postulante`
--

DROP TABLE IF EXISTS `postulante`;
CREATE TABLE IF NOT EXISTS `postulante` (
  `run` varchar(13) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `fecha_nac` datetime DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `tipo_vivienda_id` int(11) NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  PRIMARY KEY (`run`),
  KEY `fk_POSTULANTE_CIUDAD1_idx` (`ciudad_id`),
  KEY `fk_POSTULANTE_TIPO_VIVIENDA1` (`tipo_vivienda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postulante`
--

INSERT INTO `postulante` (`run`, `nombre`, `correo`, `fecha_nac`, `telefono`, `tipo_vivienda_id`, `ciudad_id`) VALUES
('00000000-0', 'Bill', 'jdfsjfgbj@gmail.com', '2000-08-19 00:00:00', 654654654, 1, 1),
('10052291-8', 'Juan', 'iggy@gmail.com', '1965-11-27 00:00:00', 315489546, 1, 1),
('13758246-5', 'fesjifjskdj', 'jdfsjfgbj@gmail.com', '1996-10-02 00:00:00', 986518998, 2, 1),
('19442471-K', 'Ignacio Lira', 'ignaciolira97@gmail.com', '1997-01-17 00:00:00', 986518998, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `nombre`) VALUES
(1, 'Región Metropolitana'),
(2, 'Valparaíso');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_vivienda`
--

DROP TABLE IF EXISTS `tipo_vivienda`;
CREATE TABLE IF NOT EXISTS `tipo_vivienda` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`id`, `tipo`) VALUES
(1, 'Casa con patio grande'),
(2, 'Casa con patio pequeño'),
(3, 'Casa sin patio'),
(4, 'Departamento');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_CIUDAD_REGION` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `postulante`
--
ALTER TABLE `postulante`
  ADD CONSTRAINT `fk_POSTULANTE_CIUDAD1` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_POSTULANTE_TIPO_VIVIENDA1` FOREIGN KEY (`tipo_vivienda_id`) REFERENCES `tipo_vivienda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
