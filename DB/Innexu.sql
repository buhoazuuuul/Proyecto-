-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2019 a las 21:13:33
-- Versión del servidor: 10.3.15-MariaDB
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
  `asunto` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `prioridad` smallint(6) DEFAULT NULL,
  `confidencialidad` smallint(6) DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `adjunto` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `categoria`, `asunto`, `lugar`, `fecha_hora`, `prioridad`, `confidencialidad`, `texto`, `adjunto`) VALUES
(1, '1', 'Nada', 'abejorral', '2013-11-24 17:15:10', 1, 1, '0', ''),
(2, '1', 'Nada', 'abejorral', '2013-11-24 17:15:10', 1, 1, '0', ''),
(3, '1', 'Nada', 'Abejorral', '2013-11-24 17:15:10', 1, 1, '', ''),
(4, '1', 'Nada', 'Abejorral', '2013-11-24 17:15:10', 1, 1, '', ''),
(5, '1', 'Nada', 'Abejorral', '2013-11-24 17:15:10', 1, 1, '', ''),
(6, '1', 'No se', 'Abejorral', '2013-11-24 17:15:10', 1, 1, '', ''),
(7, '1', 'No se', 'Abejorral', '2013-11-24 17:15:10', 1, 1, '', ''),
(8, '1', 'No se', 'Abejorral', '2013-11-24 17:15:10', 1, 1, '', ''),
(9, '', 'Epa pea', 'aaaaaa', '2019-07-08 19:07:31', 1, 1, '', '/Admin/img/404.png'),
(10, '', 'Borrasca', 'La esperanza', '2019-07-08 19:07:58', 2, 2, 'Ayuda!!', '/Admin/img/404.png'),
(11, '', 'aa', 'aaa', '2019-07-08 19:09:12', 1, 1, 'aaa', 'Admin/img/404.png'),
(12, '', 'Probando', 'Abejorral', '2019-07-08 20:14:18', 2, 2, 'Eso!!', 'Admin/img/404.png');

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

--
-- Volcado de datos para la tabla `secretario`
--

INSERT INTO `secretario` (`num_doc`, `tipo_doc`, `nombre`, `apellido`, `dependencia`, `telefono`, `email`, `usuario`, `contraseña`) VALUES
(10233695, 'Cedula', 'Juan Pablo', 'Cuadros', 'Salud Abejorral', 31224632, 'cuadros@abejorral.gov', 'juancuadros', '123456'),
(1022036395, 'Cedula', 'Juan Jose', 'Eceheverri', 'Catastro Abejorral', 55555, 'juanpala@abejorral.gov', 'juanpala', '123456');

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
(123456, 'Tarjeta de identidad', 'Jose', 'Palacio', 312546, 'palacio@hotmal.com', 'asdfghj', '2019-06-11', 'fddsaa', '$2y$10$drriO2NVhLBUAuDeguUO9.29MGIHVZBHhmZ8N6s/YQid19qgEDdsC'),
(234244, 'Cedula de ciudadania', 'Jose', 'Palacio', 312546, 'palacio@hotmal.com', 'asdfghj', '2019-06-11', '7263443', '$2y$10$JMQToeS.RSz/fOYZSrZWcu1CElOfNtDFSTJDeK4yGOMiXNoAb/1P2'),
(466666, 'Tarjeta de identidad', 'Jose ', 'Palacio', 132364, 'jose@hotmail.com', 'Abejorral', '1998-06-26', 'jose', '$2y$10$8FLhk9vCG2HDueT1iyyti.7hmZBcudzlzlTi07XR7FBuB3m/ADo3C'),
(12014662, 'Cedula de ciudadania', 'Juan ', 'Echeverri', 31245875, 'juan@ht.com', 'Abejorral', '2019-06-07', 'jddmm', '$2y$10$4st80toSUGhvBVLkMpv/D.M/AA6oX3vAdPFIQKgx0T5B47pLZ1/gq'),
(23456789, 'Tarjeta de identidad', 'Karyme ', 'Cardona Botero', 55555, 'aleja@hotmail.com', 'abejorro', '2000-06-20', 'kary', '$2y$10$HN6/RTMPVDgQo4zMCIVK5OfG.Y6owO1pYV8k5w2osWuEUzguBTLOW'),
(120123445, 'Cedula de ciudadania', 'Juan', 'Cuadros', 32146925, 'juanpala@hotmail.com', 'Abejorral', '2019-07-16', 'juan90@hotmail.com', '$2y$10$XoQrK3XZ2IYD2Ik54NoneeXCN1JrDX2pcEYqVbRZEv9HyrygM0oz2'),
(345678899, 'Tarjeta de identidad', 'Pablo', 'Palacio', 312546, 'palacio@hotmal.com', 'asdfghj', '2019-06-11', 'weer', '$2y$10$07ERFrqJIc7OfEVC1TjlZenvkyi3uJ1E11NdZGieGC2hI/SFuOObe'),
(1001446794, 'Tarjeta de identidad', 'Alejandra', 'Cardona Botero', 55555, 'aleja@hotmail.com', 'Abejorral', '2003-01-02', 'alejacardona', '$2y$10$2RvTSdNwwBSiTJWh8OIX3eqBgqCEZxNjcCE8aAO8HForG7RveySo.'),
(1022036398, 'Cedula de ciudadania', 'Predo', 'Perez', 25465444, 'pedro@gmail.com', 'Abejorrall', '2019-06-11', 'pedro', '$2y$10$f7xaRW1iZafLBuD.xx39lee1cXs.CsFHe/W/cCp.sKIvGlsw3jODK'),
(102203631254, 'Cedula de ciudadania', 'Jose Manuel', 'Echeverri', 3225443771, 'pls@hotmail.co', 'Abejorral', '1998-06-25', 'palacio.90@hotmail.com', '$2y$10$BPeA/fsqKVHfIiNzjbc6ae2uD8OeY2PRW97O./41q7WDpPH9mShEO');

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
  MODIFY `id_mensaje` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
