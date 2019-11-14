-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 00:01:18
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

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
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id` bigint(10) NOT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `vereda_id` int(11) NOT NULL,
  `adjunto` varchar(20) DEFAULT NULL,
  `asunto` varchar(60) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) NOT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `prioridad` varchar(30) DEFAULT NULL,
  `confidencialidad` varchar(30) DEFAULT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id`, `categoria`, `vereda_id`, `adjunto`, `asunto`, `departamento`, `municipio`, `fecha_hora`, `prioridad`, `confidencialidad`, `texto`) VALUES
(1, 'INCENDIO', 70, 'php/upload/871.png', 'Incendio en restaurante', 'Antioquia', 'Abejorral', '2019-11-13 04:09:00', 'Muy prioritario', 'Poco confidencial', 'Ayuda!!!'),
(2, 'SISMO', 70, 'php/upload/958.jpg', 'Caida de un arbol', 'Meta', 'Acacias', '2019-11-13 17:29:59', 'Muy prioritario', 'Poco Confidencial', 'El arbol obstaculizo el paso'),
(3, 'Otra emergencia', 70, 'php/upload/851.jpg\r\n', 'Estudios de mi hijo', 'Meta', 'Acacias', '2019-11-14 15:14:26', 'Medianamente prioritario', 'Muy Confidencial', 'Hola Carlos Diego, mi hijo esta perdiendo la motivacion por el estudio.Esta en grado Noveno y me dice que no quiere estudiar.En realidad quiero que el se gradue. Puedess ayudarme?');

--
-- Disparadores `reporte`
--
DELIMITER $$
CREATE TRIGGER `REPORT_INSERT` AFTER INSERT ON `reporte` FOR EACH ROW INSERT INTO reportes_x_respuestas(reporte_id) VALUES (NEW.ID)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_x_respuestas`
--

CREATE TABLE `reportes_x_respuestas` (
  `id` bigint(10) NOT NULL,
  `reporte_id` bigint(10) DEFAULT NULL,
  `secretario_id` int(11) DEFAULT NULL,
  `respuesta_mens_id` bigint(10) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_x_respuestas`
--

INSERT INTO `reportes_x_respuestas` (`id`, `reporte_id`, `secretario_id`, `respuesta_mens_id`, `usuario_id`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 1, 2, 1),
(3, 3, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_mens`
--

CREATE TABLE `respuesta_mens` (
  `id` bigint(10) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `asunto` varchar(45) DEFAULT NULL,
  `adjunto` varchar(255) DEFAULT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respuesta_mens`
--

INSERT INTO `respuesta_mens` (`id`, `mensaje`, `asunto`, `adjunto`, `fecha_hora`) VALUES
(1, 'No te preocupes', 'La ayuda va en camino', 'php/upload/879.jpg', '2019-11-21 01:08:08'),
(2, 'Hola amigo, los bomberos estan llegando, no te preocupes.<br>', 'Tranquilo', 'php/upload/851.jpg', '2019-11-14 11:20:54'),
(3, 'Hola Karyme, podemos agendar un cita. Te parece el lunes 12 a las 4pm?', 'Estudios de tu hijo', ' php/upload/851.jpg\r\n', '2019-11-14 15:24:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretario`
--

CREATE TABLE `secretario` (
  `id` int(11) NOT NULL,
  `num_doc` bigint(10) NOT NULL,
  `tipo_doc` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `dependencia` varchar(45) NOT NULL,
  `departamento` varchar(35) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secretario`
--

INSERT INTO `secretario` (`id`, `num_doc`, `tipo_doc`, `nombre`, `apellido`, `cargo`, `dependencia`, `departamento`, `municipio`, `telefono`, `email`, `usuario`, `pass`, `sexo`, `img`) VALUES
(1, 1222641, 'Cedula de ciudadania', 'Carlos Diego ', 'Cortes ', 'Secretario de educacion ', 'Secretaria de educacion', 'Antioquia', 'Abejorral', 3212354313, 'carlos@abejorral.com', 'carlos', '$2y$10$BLjdbFQBr0GTgM/LStlY4OWzFiL8yDSooPnPoLCiZJdJ6CtE5Veu2', 'Hombre', 'php/upload/742.png'),
(2, 10220399652, 'Cédula de Ciudadania', 'Jose Manuel', 'Echeverri Palacio', 'Gerontologo', 'Centro Vida - Casa del adulto mayor', 'Antioquia', 'Abejorral', 32254437771, 'jose.echeverri@abejorral.goc.co', 'jose', '$2y$10$BLjdbFQBr0GTgM/LStlY4OWzFiL8yDSooPnPoLCiZJdJ6CtE5Veu2', 'Hombre', 'php/upload/742.png'),
(3, 102311545, 'Cédula de Ciudadania', 'Juan Camilo', 'Echavarria', 'veterinario', 'Secretaría de Salud, Protección y Bienestar S', 'Antioquia', 'Abejorral', 144224214, 'echavarria@abejorral.gov.co', 'juan', '$2y$10$ECJojrD6ziqKjVldAibrjesQfa.4EEK4bwsmM3/e.wFh35.W7Vq86', 'Hombre', 'php/upload/742.png'),
(4, 12132435512, 'Cedula de ciudadania', 'Monica ', 'Carsdoso', 'Coordinador Oficina de la Mujer', 'Centro de Bienestar Carmen Londoño', 'Antioquia', 'Abejorral', 32254614541, 'monica@abejorral.gov.co', 'monica', '$2y$10$9ipau5lO8Y6fXDX4VsZEeuI7kzazkCa.7hw54hYJ5yupZ/CEjde42', 'Mujer', 'php/upload/742.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `vereda_id` int(11) NOT NULL,
  `num_doc` bigint(10) NOT NULL,
  `tipo_doc` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `vereda_id`, `num_doc`, `tipo_doc`, `nombre`, `apellido`, `telefono`, `email`, `departamento`, `municipio`, `fecha`, `usuario`, `pass`, `tipo_usuario`, `sexo`, `img`) VALUES
(1, 1, 102203266, 'Pasaporte', 'Karyme', 'Botero', 3193468668, 'mime@hotmail.com', 'Meta', 'Acacias', '2019-11-13', 'mello', '$2y$10$XKNAkjy6W0FbCRftyXJ7/.eJ7dRSjgin1BhIcY1UWBa/BIl8H29jC', 0, 'Mujer', 'img/INNEXU1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vereda`
--

CREATE TABLE `vereda` (
  `id` int(11) NOT NULL,
  `vereda` varchar(45) DEFAULT NULL,
  `Municipio` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vereda`
--

INSERT INTO `vereda` (`id`, `vereda`, `Municipio`) VALUES
(1, 'La loma', ''),
(2, 'La esperanza', ''),
(3, 'Alto bonito', ''),
(4, 'Alto de letras', ''),
(5, 'Aures arriba', ''),
(6, 'Aures El Silencio', ''),
(7, 'Cañaveral', ''),
(8, 'Carrizales', ''),
(9, 'Chagualal', ''),
(10, 'Combia', ''),
(11, 'El Buey', ''),
(12, 'El Carmelo', ''),
(13, 'El Caunzal', ''),
(14, 'El Chagualo', ''),
(15, 'El Erizo', ''),
(16, 'El Granadillo', ''),
(17, 'El Volcan', ''),
(18, 'Guyaquil', ''),
(19, 'La Cascada', ''),
(20, 'La Circita', ''),
(21, 'La Cordillera', ''),
(22, 'La Esperanza', ''),
(23, 'La Florida', ''),
(24, 'La Labor', ''),
(25, 'La Llanada', ''),
(26, 'La Peña', ''),
(27, 'La Polka', ''),
(28, 'La Primavera', ''),
(29, 'La Victoria', ''),
(30, 'Loma Parte Alta', ''),
(31, 'Loma Parte Baja', ''),
(32, 'Los Rastrojos', ''),
(33, 'Morrogordo', ''),
(34, 'Piedra Candela', ''),
(35, 'Portugal', ''),
(36, 'Purima', ''),
(37, 'Quebradanegra', ''),
(38, 'Quebradona Abajo', ''),
(39, 'Quebradona Arriba', ''),
(40, ' San Bartolome y San Bosco ', ''),
(41, 'San Vicente', ''),
(42, 'Santa Ana', ''),
(43, 'Yarumal', ''),
(44, 'Altamira', ''),
(45, 'El Buey Colmenas', ''),
(46, 'El Guadual', ''),
(47, 'El Guaico', ''),
(48, 'La Saltadera', ''),
(49, 'Morron', ''),
(50, 'San Luis', ''),
(51, 'San Pedro', ''),
(52, 'Santa Catalina', ''),
(53, 'Cabuyal', ''),
(54, 'Corinto', ''),
(55, 'El Reposo', ''),
(56, 'El Vesubio', ''),
(57, 'Guayabal', ''),
(58, 'La Albania', ''),
(59, 'La Betulia', ''),
(60, 'La Floresta', ''),
(61, 'La Mata de Guadua', ''),
(62, 'La Perdida', ''),
(63, 'La Samaria', ''),
(64, 'Llano Grande', ''),
(65, 'Naranjal', ''),
(66, 'Pantano Negro', ''),
(67, 'San Bernardo', ''),
(68, 'Sotayac', ''),
(69, 'San Jose', ''),
(70, 'Zona urbana', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reporte_vereda1_idx` (`vereda_id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `reportes_x_respuestas`
--
ALTER TABLE `reportes_x_respuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reportes_x_respuestas_reporte1_idx` (`reporte_id`),
  ADD KEY `fk_reportes_x_respuestas_secretario1_idx` (`secretario_id`),
  ADD KEY `fk_reportes_x_respuestas_respuesta_mens1_idx` (`respuesta_mens_id`),
  ADD KEY `fk_reportes_x_respuestas_usuario1_idx` (`usuario_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD KEY `fk_usuario_vereda1_idx` (`vereda_id`);

--
-- Indices de la tabla `vereda`
--
ALTER TABLE `vereda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reportes_x_respuestas`
--
ALTER TABLE `reportes_x_respuestas`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `respuesta_mens`
--
ALTER TABLE `respuesta_mens`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `secretario`
--
ALTER TABLE `secretario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vereda`
--
ALTER TABLE `vereda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `fk_reporte_vereda1` FOREIGN KEY (`vereda_id`) REFERENCES `vereda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reportes_x_respuestas`
--
ALTER TABLE `reportes_x_respuestas`
  ADD CONSTRAINT `fk_reportes_x_respuestas_reporte1` FOREIGN KEY (`reporte_id`) REFERENCES `reporte` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reportes_x_respuestas_respuesta_mens1` FOREIGN KEY (`respuesta_mens_id`) REFERENCES `respuesta_mens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reportes_x_respuestas_secretario1` FOREIGN KEY (`secretario_id`) REFERENCES `secretario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reportes_x_respuestas_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_vereda1` FOREIGN KEY (`vereda_id`) REFERENCES `vereda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
