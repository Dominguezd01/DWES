-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-01-2023 a las 13:14:48
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `id_actor` int(11) NOT NULL,
  `nacionalidad` varchar(55) DEFAULT NULL,
  `nombre_apellidos` varchar(100) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_actor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`id_actor`, `nacionalidad`, `nombre_apellidos`, `sexo`) VALUES
(1, 'Frances', 'Jacqueline Bisset', 'f'),
(2, 'Espanol', 'Antonio Banderas', 'm'),
(3, 'Espanol', 'Belen Rueda', 'f'),
(4, 'Estadounidense', 'Brad Pitt', 'm'),
(5, 'Estadounidense', 'Laura Dern', 'f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cine`
--

DROP TABLE IF EXISTS `cine`;
CREATE TABLE IF NOT EXISTS `cine` (
  `id_cine` varchar(15) NOT NULL,
  `nombre_c` varchar(30) DEFAULT NULL,
  `ciudad_c` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_cine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cine`
--

INSERT INTO `cine` (`id_cine`, `nombre_c`, `ciudad_c`) VALUES
('CINE1', 'Odeon', 'Burgos'),
('CINE2', 'Van Golem', 'Burgos'),
('CINE3', 'CineSur', 'Sevilla'),
('CINE4', 'Capitol', 'Madrid'),
('CINE5', 'Conde Duque', 'Madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intervenciones`
--

DROP TABLE IF EXISTS `intervenciones`;
CREATE TABLE IF NOT EXISTS `intervenciones` (
  `id_actor` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_actor`,`titulo`),
  KEY `fk_titulo` (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `intervenciones`
--

INSERT INTO `intervenciones` (`id_actor`, `titulo`) VALUES
(2, 'Dolor y gloria'),
(4, 'Erase una vez... Hollywood'),
(5, 'Historia de un matrimonio'),
(2, 'La piel que habito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE IF NOT EXISTS `peliculas` (
  `titulo` varchar(45) NOT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `ano_prod` int(4) DEFAULT NULL,
  PRIMARY KEY (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`titulo`, `genero`, `ano_prod`) VALUES
('Dolor y gloria', 'drama', 2019),
('Erase una vez... Hollywood', 'comedia', 2019),
('Historia de un matrimonio', 'drama', 2019),
('La piel que habito', 'thriller', 2011);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectar`
--

DROP TABLE IF EXISTS `proyectar`;
CREATE TABLE IF NOT EXISTS `proyectar` (
  `titulo` varchar(30) DEFAULT NULL,
  `id_cine` varchar(30) DEFAULT NULL,
  `fecha_proy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectar`
--

INSERT INTO `proyectar` (`titulo`, `id_cine`, `fecha_proy`) VALUES
('Dolor y gloria', 'CINE1', '2019-11-15'),
('Dolor y gloria', 'CINE2', '2019-11-15'),
('Dolor y gloria', 'CINE3', '2019-11-15'),
('Dolor y gloria', 'CINE4', '2019-11-15'),
('Dolor y gloria', 'CINE5', '2019-11-15'),
('Erase una vez...Hollywood', 'CINE1', '2019-11-01'),
('Erase una vez...Hollywood', 'CINE3', '2019-11-01'),
('Erase una vez...Hollywood', 'CINE4', '2019-11-01'),
('Historia de un matrimonio', 'CINE3', '2019-10-15'),
('Historia de un matrimonio', 'CINE4', '2019-10-15'),
('La piel que habito', 'CINE1', '2010-10-01'),
('La piel que habito', 'CINE2', '2010-10-01'),
('La piel que habito', 'CINE3', '2010-10-01'),
('La piel que habito', 'CINE4', '2010-10-01'),
('La piel que habito', 'CINE5', '2010-10-01');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `intervenciones`
--
ALTER TABLE `intervenciones`
  ADD CONSTRAINT `fk_id_actor` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `fk_titulo` FOREIGN KEY (`titulo`) REFERENCES `peliculas` (`titulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
