-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2020 a las 02:57:09
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `cedula` varchar(15) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`cedula`, `usuario`, `clave`, `correo`) VALUES
('852469', 'administrator_2', 'admin123', 'angela_roz@gmail.com'),
('87444135', 'administrator_1', 'aeza123', 'admin_vete@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(10) NOT NULL,
  `nombres` varchar(25) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombres`, `telefono`, `direccion`, `usuario`, `clave`) VALUES
(76243073, 'Kevin VÃ©lez', 8892404, 'Calle 2#94B-41', 'kevin_velez', 'velecito123'),
(1006053828, 'David Medina', 4864443, 'Carrera 11c', 'David.Medina.17', 'David-16'),
(1010405666, 'Ximena Arboleda', 3928019, 'Avenida 6A con Cr 4', 'Ximena_:3', 'ximena_arboleda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE IF NOT EXISTS `mascota` (
  `id` int(3) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `genero` enum('macho','hembra') DEFAULT NULL,
  `raza` varchar(10) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `dueno` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dueno` (`dueno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `nombre`, `genero`, `raza`, `tipo`, `dueno`) VALUES
(171, 'Pucca', 'hembra', 'Siberiano', 'perro', 1010405666),
(176, 'Paco', 'macho', 'canario', 'pájaro', 76243073),
(303, 'Zeus', 'macho', 'Mini Lop', 'conejo', 1006053828);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `nombre_producto` varchar(30) DEFAULT NULL,
  `codigo_barras` int(13) NOT NULL,
  `precio` int(10) DEFAULT NULL,
  `marca` varchar(25) DEFAULT NULL,
  `cedula_consumidor` int(10) DEFAULT NULL,
  PRIMARY KEY (`codigo_barras`),
  KEY `cedula_consumidor` (`cedula_consumidor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE IF NOT EXISTS `vacunas` (
  `nombre_vacuna` varchar(40) DEFAULT NULL,
  `codigo_vacuna` varchar(20) NOT NULL,
  `dosis` varchar(7) DEFAULT NULL,
  `nombre_enfermedad` varchar(40) DEFAULT NULL,
  `id_mascota` int(3) DEFAULT NULL,
  PRIMARY KEY (`codigo_vacuna`),
  KEY `id_mascota` (`id_mascota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna_aplicada`
--

CREATE TABLE IF NOT EXISTS `vacuna_aplicada` (
  `codigo_aplicacion` int(20) NOT NULL,
  `fecha` varchar(30) DEFAULT NULL,
  `id_mascota` int(3) DEFAULT NULL,
  `cod_vacuna` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo_aplicacion`),
  KEY `id_mascota` (`id_mascota`),
  KEY `cod_vacuna` (`cod_vacuna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`dueno`) REFERENCES `cliente` (`cedula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`cedula_consumidor`) REFERENCES `cliente` (`cedula`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD CONSTRAINT `vacunas_ibfk_1` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vacuna_aplicada`
--
ALTER TABLE `vacuna_aplicada`
  ADD CONSTRAINT `vacuna_aplicada_ibfk_1` FOREIGN KEY (`id_mascota`) REFERENCES `mascota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacuna_aplicada_ibfk_2` FOREIGN KEY (`cod_vacuna`) REFERENCES `vacunas` (`codigo_vacuna`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
