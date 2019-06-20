-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2019 a las 03:58:02
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
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` bigint(10) NOT NULL,
  `categoria` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `lugar` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `video` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `audio` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
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
  `contraseña` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
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
(1123455, 'Tarjeta de identidad', 'jose', 'Echeverri', 24423412, 'aoajsd@hotmial.com', 'Abejorral', '2000-01-01', 'jmep', '$2y$10$mJbEB57jhvaIKMundxLQq.R3/hsFv/UgE2ON9gamsVfgsv73jkwte'),
(1234566, 'cedula', 'Maria', 'Florez', 3124456545, 'maria@gmail.com', 'Barrio Obrero', '2001-02-09', 'root', '123'),
(1234567, 'Cedula de ciudadania', 'Jose Manuel', 'Echeverri', 233442234, 'palacio.90@hotmail.com', 'Abejorral', '2000-06-20', 'jemp', '$2y$10$wRNhNhpWXsayiasxiyUkyuRA/GMqaMiop5QX0fb8hH5DNUamIbv1m'),
(12345678, 'Cedula de ciudadania', 'ghjkl', 'ghjkl', 45678, 'ghjk@gmail.com', 'rftgyuj', '0056-04-23', 'qwewertyujio', '$2y$10$Ko8YyBJ.9ffmu9DO0SfHXu11doEHqOWlSz4Rx2sidORkLDWlTLCZK'),
(23456789, 'Tarjeta de identidad', 'Karyme ', 'Cardona Botero', 55555, 'aleja@hotmail.com', 'abejorro', '2000-06-20', 'kary', '$2y$10$HN6/RTMPVDgQo4zMCIVK5OfG.Y6owO1pYV8k5w2osWuEUzguBTLOW'),
(120394566, 'Tarjeta de identidad', 'Aleja', 'Botero', 123456, 'palacio.90@hotmail.com', 'asdfghj', '2000-02-12', 'jhgg', '$2y$10$TaXyHSWfZUXZRwVF3CDXZ.ihr1OPnjhV9Q0iFqbE0qgf.uB8paIXe'),
(123456789, 'Cedula de ciudadania', 'edfgthjk', 'rtyujio', 3456789, 'dfghj@gmail.com', 'dfghjkl', '0078-06-05', 'qwertyuio', '$2y$10$4djKTKFTnILnyjHA1fO4nuOcb3sIttsdEwWbuuw/zwjifA.17aSpe');

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
