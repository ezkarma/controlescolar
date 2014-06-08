-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2014 a las 16:59:22
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curp` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidopat` varchar(45) DEFAULT NULL,
  `apellidomat` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `grado` varchar(45) DEFAULT NULL,
  `promediogeneral` varchar(45) DEFAULT NULL,
  `grupo_id` int(11) NOT NULL,
  `tutor_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `curp`, `nombre`, `apellidopat`, `apellidomat`, `sexo`, `grado`, `promediogeneral`, `grupo_id`, `tutor_id`) VALUES
(1, '123', 'Gracibel', 'Campos', 'Ramos', 'femenino', '3', '9.5', 0, 'anahi@hotmail.com'),
(2, 'PECR901203', 'Raymundo', 'Perez', 'Carmona', 'H', '3', '8.9', 0, 'anahi@hotmail.com'),
(3, 'JUAM1203', 'Juanito', 'Lopez', 'Sanchez', 'Masculino', NULL, NULL, 6, ''),
(4, 'MAR456', 'Maria', 'Alcaraz', 'Santiago', 'Femenino', NULL, NULL, 6, '');

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
(6, '1', 'C', '1C');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `grado`, `profesor`) VALUES
(1, 'Matematicas', 3, 'Prof. Morales'),
(2, 'Ciencias Naturales', 2, 'Sr. Lopez'),
(3, 'Historia', 1, 'Sr. Sanchez');

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
(5, 'ale@hotmail.com', 'f52bbaf2ad1e54fe7555ad2143831533b07451ea', 'tutor', 'ux6miM'),
(7, 'anahi@hotmail.com', '88eca5776b9659bb16d0bbb65189dd28420138e5', 'tutor', 'I26dwu'),
(4, 'juan@hotmail.com', '2cbcd48c8454d311426d46aab54f8c9426ce3066', 'tutor', 'kzkKPz'),
(6, 'pedrito@hotmail.com', '70f99b095b8fb5ca9b850e2f7d87c4e7d8af023c', 'tutor', 'gbAsUI'),
(3, 'rayp03@hotmail.com', '7f66d48faba590edc59db7ece77af0e3e2e8d680', 'tutor', '5e2EuY');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
