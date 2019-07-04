-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 05:55:30
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `num_doc` bigint(10) NOT NULL,
  `tipo_doc` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` bigint(10) NOT NULL,
  `categoria` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `lugar` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `prioridad` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `confidencialidad` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `adjunto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje_cat`
--

CREATE TABLE `mensaje_cat` (
  `idmensaje_cat` bigint(10) NOT NULL,
  `mensaje_id_mensaje` bigint(10) NOT NULL,
  `secretario_num_doc` bigint(10) NOT NULL,
  `respuesta_mens_idrespuesta_mens` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_mens`
--

CREATE TABLE `respuesta_mens` (
  `idrespuesta_mens` bigint(10) NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretario`
--

CREATE TABLE `secretario` (
  `num_doc` bigint(10) NOT NULL,
  `tipo_doc` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `dependencia` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `num_doc` bigint(10) NOT NULL,
  `tipo_doc` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `residencia` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `usuario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`num_doc`, `tipo_doc`, `nombre`, `apellido`, `telefono`, `email`, `residencia`, `fecha`, `usuario`, `pass`) VALUES
(1234566, 'cedula', 'Maria', 'Florez', 3124456545, 'maria@gmail.com', 'Barrio Obrero', '2001-02-09', 'root', '123'),
(1234567, 'Cedula de ciudadania', 'Jose Manuel', 'Echeverri', 233442234, 'palacio.90@hotmail.com', 'Abejorral', '2000-06-20', 'jemp', '$2y$10$wRNhNhpWXsayiasxiyUkyuRA/GMqaMiop5QX0fb8hH5DNUamIbv1m'),
(23456789, 'Tarjeta de identidad', 'Karyme ', 'Cardona Botero', 55555, 'aleja@hotmail.com', 'abejorro', '2000-06-20', 'kary', '$2y$10$HN6/RTMPVDgQo4zMCIVK5OfG.Y6owO1pYV8k5w2osWuEUzguBTLOW'),
(123456734, 'Cedula de ciudadania', 'Rosa', 'Botero', 33333333333, 'rosa@gmail.com', 'La Ceja', '0000-00-00', 'Rosa12', '$2y$10$UTLhBTpoEjzrITEzZteMOuYcrV6Zwo3lh8ooZYV6t6yhdHhOq.Inu'),
(1001247029, 'Tarjeta de identidad', 'Tatiana', 'Duque Cortes', 2147483647, 'dtatiana310@gmail.com', 'Abejorral', '2003-08-30', 'Tatis2003', '$2y$10$KeCbiee8dSpmLQQ/iJ2KbOABwcxELQqli/uvRskGgxXa1uMiokDa6'),
(1001446777, 'Cedula de ciudadania', 'Karyme', 'Cardona Botero', 2147483647, 'karymecardona@gmail.com', 'Abejorral', '1998-01-02', 'Mime', '$2y$10$6GliFqioo43UvE9rP9O5EOmVI2e6fV9dX5Ys9OdeEiQ4L.YFt9KGa'),
(1001765567, 'Tarjeta de identidad', 'Mauricio', 'Grajales', 3123455432, 'mauro@gmail.com', 'Abejorral', '2003-08-07', 'Mauro', '$2y$10$MiUI7NCRL674a/I3HDvtt.Nc7A26Pb1gs7eQNyu.dhEigKFpN2H.m'),
(1234567890, 'Cedula de ciudadania', 'Paola', 'Pavas', 123456789, 'paolap@gmail.com', 'abejorral', '0000-00-00', 'paola', '345'),
(4444444444, 'Cedula de ciudadania', 'Antonio', 'Muñoz', 43434343, 'ant@gmail.com', 'La Ceja', '0009-07-05', 'antonio43', '$2y$10$BQcE0Pg1GiXU4Lg2xj2zlO6410iYr/7uYjcMBUW9vGth1vo7lDT8S'),
(10012470290, 'Tarjeta de identidad', 'Tatiana', 'Duque ', 3128495810, 'dtatiana310@gmail.com', 'Abejorral', '2003-08-30', 'Tatisbi', '$2y$10$vhv794dJX36RD3obUFxuoOp.WpV/g.sFv8Vh5cS4LjShzv8WsI/ra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_mens`
--

CREATE TABLE `usuario_mens` (
  `idusuario_mens` bigint(10) NOT NULL,
  `usuario_num_doc` bigint(10) NOT NULL,
  `mensaje_id_mensaje` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`num_doc`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `mensaje_cat`
--
ALTER TABLE `mensaje_cat`
  ADD PRIMARY KEY (`idmensaje_cat`),
  ADD KEY `fk_mensaje_cat_mensaje1_idx` (`mensaje_id_mensaje`),
  ADD KEY `fk_mensaje_cat_secretario1_idx` (`secretario_num_doc`),
  ADD KEY `fk_mensaje_cat_respuesta_mens1_idx` (`respuesta_mens_idrespuesta_mens`);

--
-- Indices de la tabla `respuesta_mens`
--
ALTER TABLE `respuesta_mens`
  ADD PRIMARY KEY (`idrespuesta_mens`);

--
-- Indices de la tabla `secretario`
--
ALTER TABLE `secretario`
  ADD PRIMARY KEY (`num_doc`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`num_doc`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- Indices de la tabla `usuario_mens`
--
ALTER TABLE `usuario_mens`
  ADD PRIMARY KEY (`idusuario_mens`),
  ADD KEY `fk_usuario_mens_usuario1_idx` (`usuario_num_doc`),
  ADD KEY `fk_usuario_mens_mensaje1_idx` (`mensaje_id_mensaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje_cat`
--
ALTER TABLE `mensaje_cat`
  MODIFY `idmensaje_cat` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta_mens`
--
ALTER TABLE `respuesta_mens`
  MODIFY `idrespuesta_mens` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_mens`
--
ALTER TABLE `usuario_mens`
  MODIFY `idusuario_mens` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mensaje_cat`
--
ALTER TABLE `mensaje_cat`
  ADD CONSTRAINT `fk_mensaje_cat_mensaje1` FOREIGN KEY (`mensaje_id_mensaje`) REFERENCES `mensaje` (`id_mensaje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensaje_cat_respuesta_mens1` FOREIGN KEY (`respuesta_mens_idrespuesta_mens`) REFERENCES `respuesta_mens` (`idrespuesta_mens`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensaje_cat_secretario1` FOREIGN KEY (`secretario_num_doc`) REFERENCES `secretario` (`num_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_mens`
--
ALTER TABLE `usuario_mens`
  ADD CONSTRAINT `fk_usuario_mens_mensaje1` FOREIGN KEY (`mensaje_id_mensaje`) REFERENCES `mensaje` (`id_mensaje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_mens_usuario1` FOREIGN KEY (`usuario_num_doc`) REFERENCES `usuario` (`num_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
