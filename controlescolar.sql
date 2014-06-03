-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2014 a las 15:50:45
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `controlescolar`
--
CREATE DATABASE IF NOT EXISTS `controlescolar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `controlescolar`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL,
  `curp` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidopat` varchar(45) DEFAULT NULL,
  `apellidomat` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `grado` varchar(45) DEFAULT NULL,
  `promediogeneral` varchar(45) DEFAULT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `curp`, `nombre`, `apellidopat`, `apellidomat`, `sexo`, `grado`, `promediogeneral`, `grupo_id`) VALUES
(0, '1', '1', '1', '1', '1', '1', '1', 0),
(1, '123', 'Gracibel', 'Campos', 'Ramos', 'femenino', '3', '9.5', 0),
(2, 'PECR901203', 'Raymundo', 'Perez', 'Carmona', 'H', '3', '8.9', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `Bimestre` varchar(45) DEFAULT NULL,
  `Calificacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(45) DEFAULT NULL,
  `grupo` varchar(45) DEFAULT NULL,
  `nombre` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `grado`, `grupo`, `nombre`) VALUES
(1, '3', 'A', '3A'),
(2, '2', 'B', '2B'),
(3, '1', 'c', 'no ha'),
(4, '5', 'v', '5'),
(5, '7', 'g', '7g'),
(6, '1', 'C', '1C'),
(7, '2', 'B', '2B'),
(8, '3', 'n', '3n'),
(9, '2', 'E', '2E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `idHorarios` int(11) NOT NULL,
  `HoraInicio` varchar(45) DEFAULT NULL,
  `HoraFinal` varchar(45) DEFAULT NULL,
  `Dia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idHorarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `grado` int(11) NOT NULL,
  `profesor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `grado`, `profesor`) VALUES
(1, 'Matematicas', 3, 'Prof. Morales'),
(2, 'Ciencias Naturales', 2, 'Sr. Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `idProfesores` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `ApellidoPat` varchar(45) DEFAULT NULL,
  `ApellidoMat` varchar(45) DEFAULT NULL,
  `Perfil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProfesores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE IF NOT EXISTS `tutores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidopat` varchar(45) DEFAULT NULL,
  `apellidomat` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id`, `nombre`, `apellidopat`, `apellidomat`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Raymundo', 'Perez', 'Carmona', NULL, NULL, 'rayp03@hotmail.com'),
(2, 'Juan Antonio', 'Lopez', 'Sanchez', 'Calle Madero', '7471060601', 'juan@hotmail.com'),
(3, 'Alejandra', 'Guzman', 'Carreto', 'calle S/N', '123', 'ale@hotmail.com'),
(4, 'Pedrito', 'Lopez', 'Carmona', 'Desconocida', '7471060601', 'pedrito@hotmail.com'),
(5, 'Anahi', 'Salais', 'Orozco', 'Calle Bugambilias', '7471060601', 'anahi@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `primer_password` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `rol`, `primer_password`) VALUES
(1, 'admin', 'bc52acb4aea384ee6f4ba017211cd8f5d7969d39', 'admin', 'Rx9hPN'),
(5, 'ale@hotmail.com', 'd1e781001a3e717b67cb603a7883b654beffc98a', 'tutor', 'Hou9U8'),
(7, 'anahi@hotmail.com', 'b7e53da478ba158d1131133aa47a43fa8334cff0', 'tutor', 'K6q7yM'),
(4, 'juan@hotmail.com', 'db9c7577a52d4bd600d38b6023093c5e534606c1', 'tutor', 'QyF28C'),
(6, 'pedrito@hotmail.com', '835168a41725a8441e372a788616c8a743c550e1', 'tutor', 'vQEIiV'),
(3, 'rayp03@hotmail.com', 'e0bc652583b840940c79f523e71e6ce9c3f5030c', 'tutor', 'g3wIY4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
