-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2019 a las 02:10:02
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `innexu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretario`
--

CREATE TABLE `secretario` (
  `id` int(11) NOT NULL,
  `num_doc` bigint(10) NOT NULL,
  `tipo_doc` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `dependencia` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `departamento` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `municipio` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `img` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `secretario`
--

INSERT INTO `secretario` (`id`, `num_doc`, `tipo_doc`, `nombre`, `apellido`, `cargo`, `dependencia`, `departamento`, `municipio`, `telefono`, `email`, `usuario`, `pass`, `sexo`, `img`) VALUES
(1, 437666315, 'Cédula de Ciudadanía', 'Roberto', 'Amariles', 'Ingeniero', 'Secretaria de Hacienda', 'Antioquia', 'Abejorral', 3214548909, 'roberto@gmail.com', 'Roberto', '1234', 'Hombre', ''),
(2, 437666395, 'Cédula de Ciudadanía', 'Julian', 'Garcia', 'Ingeniero Agronomo', 'Secretaría de Agricultura, Medio Ambiente y D', 'Antioquia', 'Abejorral', 3214548908, 'Julian@gmail.com', 'Julian', '1234', 'Hombre', ''),
(3, 427666395, 'Cédula de Ciudadanía', 'Juliana', 'Perez', 'Promotor de Deportes', 'Unidad deportiva-Gimnasio', 'Antioquia', 'Abejorral', 3114548908, 'Juliana@gmail.com', 'Juliana', '1234', 'Mujer', ''),
(4, 427686395, 'Cédula de Ciudadanía', 'Luis', 'Gomez', 'Aux. Servicios Generales', 'Empresas Públicas de Abejorral EPA', 'Antioquia', 'Abejorral', 3014548908, 'Luis@gmail.com', 'Luis', '1234', 'Hombre', ''),
(5, 427686395, 'Cédula de Ciudadanía', 'Luisa', 'Vargas', 'Promotor deportivo', 'Unidad deportiva José Antonio Villegas', 'Antioquia', 'Abejorral', 3014548900, 'Luisa@gmail.com', 'Luisa', '1234', 'Mujer', ''),
(6, 427286395, 'Cédula de Ciudadanía', 'Mime', 'Cardona', 'Atención al usuario', 'Palacio Municipal - Recepción', 'Antioquia', 'Abejorral', 3014548000, 'Mime@gmail.com', 'Mime', '1234', 'Mujer', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `secretario`
--
ALTER TABLE `secretario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `secretario`
--
ALTER TABLE `secretario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
