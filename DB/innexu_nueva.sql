-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2019 a las 02:44:06
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(10) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id` bigint(10) NOT NULL,
  `categoria_id` bigint(10) NOT NULL,
  `veredas_id` int(11) NOT NULL,
  `asunto` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `departamento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `municipio` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `vereda` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `prioridad` smallint(6) DEFAULT NULL,
  `confidencialidad` smallint(6) DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `adjunto` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `vereda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_x_respuestas`
--

CREATE TABLE `reportes_x_respuestas` (
  `id` bigint(10) NOT NULL,
  `reporte_id` bigint(10) NOT NULL,
  `secretario_id` int(11) NOT NULL,
  `usuario_num_doc` bigint(10) NOT NULL,
  `respuesta_mens_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_mens`
--

CREATE TABLE `respuesta_mens` (
  `id` bigint(10) NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `asunto` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `adjunto` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  `img` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
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
  `pass` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `img` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`num_doc`, `tipo_doc`, `nombre`, `apellido`, `telefono`, `email`, `residencia`, `fecha`, `usuario`, `pass`, `tipo_usuario`, `img`) VALUES
(123456, 'Tarjeta de identidad', 'Jose', 'Palacio', 312546, 'palacio@hotmal.com', 'asdfghj', '2019-06-11', 'fddsaa', '$2y$10$drriO2NVhLBUAuDeguUO9.29MGIHVZBHhmZ8N6s/YQid19qgEDdsC', 0, NULL),
(234244, 'Cedula de ciudadania', 'Jose', 'Palacio', 312546, 'palacio@hotmal.com', 'asdfghj', '2019-06-11', '7263443', '$2y$10$JMQToeS.RSz/fOYZSrZWcu1CElOfNtDFSTJDeK4yGOMiXNoAb/1P2', 0, NULL),
(466666, 'Tarjeta de identidad', 'Jose ', 'Palacio', 132364, 'jose@hotmail.com', 'Abejorral', '1998-06-26', 'jose', '$2y$10$8FLhk9vCG2HDueT1iyyti.7hmZBcudzlzlTi07XR7FBuB3m/ADo3C', 0, NULL),
(12014662, 'Cedula de ciudadania', 'Juan ', 'Echeverri', 31245875, 'juan@ht.com', 'Abejorral', '2019-06-07', 'jddmm', '$2y$10$4st80toSUGhvBVLkMpv/D.M/AA6oX3vAdPFIQKgx0T5B47pLZ1/gq', 0, NULL),
(23456789, 'Tarjeta de identidad', 'Karyme ', 'Cardona Botero', 55555, 'aleja@hotmail.com', 'abejorro', '2000-06-20', 'kary', '$2y$10$HN6/RTMPVDgQo4zMCIVK5OfG.Y6owO1pYV8k5w2osWuEUzguBTLOW', 0, NULL),
(120123445, 'Cedula de ciudadania', 'Juan', 'Cuadros', 32146925, 'juanpala@hotmail.com', 'Abejorral', '2019-07-16', 'juan90@hotmail.com', '$2y$10$XoQrK3XZ2IYD2Ik54NoneeXCN1JrDX2pcEYqVbRZEv9HyrygM0oz2', 0, NULL),
(345678899, 'Tarjeta de identidad', 'Pablo', 'Palacio', 312546, 'palacio@hotmal.com', 'asdfghj', '2019-06-11', 'weer', '$2y$10$07ERFrqJIc7OfEVC1TjlZenvkyi3uJ1E11NdZGieGC2hI/SFuOObe', 0, NULL),
(1001446794, 'Tarjeta de identidad', 'Alejandra', 'Cardona Botero', 55555, 'aleja@hotmail.com', 'Abejorral', '2003-01-02', 'alejacardona', '$2y$10$2RvTSdNwwBSiTJWh8OIX3eqBgqCEZxNjcCE8aAO8HForG7RveySo.', 0, NULL),
(1022036398, 'Cedula de ciudadania', 'Predo', 'Perez', 25465444, 'pedro@gmail.com', 'Abejorrall', '2019-06-11', 'pedro', '$2y$10$f7xaRW1iZafLBuD.xx39lee1cXs.CsFHe/W/cCp.sKIvGlsw3jODK', 0, NULL),
(102203631254, 'Cedula de ciudadania', 'Jose Manuel', 'Echeverri', 3225443771, 'pls@hotmail.co', 'Abejorral', '1998-06-25', 'palacio.90@hotmail.com', '$2y$10$BPeA/fsqKVHfIiNzjbc6ae2uD8OeY2PRW97O./41q7WDpPH9mShEO', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vereda`
--

CREATE TABLE `vereda` (
  `id` int(11) NOT NULL,
  `vereda` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vereda`
--

INSERT INTO `vereda` (`id`, `vereda`) VALUES
(1, 'La Esperanza'),
(2, 'La Loma');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reporte_categoria_idx` (`categoria_id`),
  ADD KEY `fk_reporte_vereda1_idx` (`vereda_id`);

--
-- Indices de la tabla `reportes_x_respuestas`
--
ALTER TABLE `reportes_x_respuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reportes_x_respuestas_reporte1_idx` (`reporte_id`),
  ADD KEY `fk_reportes_x_respuestas_secretario1_idx` (`secretario_id`),
  ADD KEY `fk_reportes_x_respuestas_usuario1_idx` (`usuario_num_doc`),
  ADD KEY `fk_reportes_x_respuestas_respuesta_mens1_idx` (`respuesta_mens_id`);

--
-- Indices de la tabla `respuesta_mens`
--
ALTER TABLE `respuesta_mens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secretario`
--
ALTER TABLE `secretario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`num_doc`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`);

--
-- Indices de la tabla `vereda`
--
ALTER TABLE `vereda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `reportes_x_respuestas`
--
ALTER TABLE `reportes_x_respuestas`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta_mens`
--
ALTER TABLE `respuesta_mens`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vereda`
--
ALTER TABLE `vereda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `fk_reporte_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reporte_vereda1` FOREIGN KEY (`vereda_id`) REFERENCES `vereda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reportes_x_respuestas`
--
ALTER TABLE `reportes_x_respuestas`
  ADD CONSTRAINT `fk_reportes_x_respuestas_reporte1` FOREIGN KEY (`reporte_id`) REFERENCES `reporte` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reportes_x_respuestas_respuesta_mens1` FOREIGN KEY (`respuesta_mens_id`) REFERENCES `respuesta_mens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reportes_x_respuestas_secretario1` FOREIGN KEY (`secretario_id`) REFERENCES `secretario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reportes_x_respuestas_usuario1` FOREIGN KEY (`usuario_num_doc`) REFERENCES `usuario` (`num_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
