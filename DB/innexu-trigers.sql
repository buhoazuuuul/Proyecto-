-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 02:16:50
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
  `categoria` varchar(30) DEFAULT NULL,
  `vereda_id` int(11) NOT NULL,
  `adjunto` varchar(20) DEFAULT NULL,
  `asunto` varchar(60) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) NOT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `prioridad` varchar(20) DEFAULT NULL,
  `confidencialidad` varchar(20) DEFAULT NULL,
  `texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id`, `categoria`, `vereda_id`, `adjunto`, `asunto`, `departamento`, `municipio`, `fecha_hora`, `prioridad`, `confidencialidad`, `texto`) VALUES
(13, '0', 4, 'php/upload/849.png', 'aaaaa', 'Sucre', 'Corozal', '2019-09-16 21:45:00', '2', '1', 'aaaaaaaaaaaaaa'),
(14, '0', 1, 'php/upload/525.png', 'aaaaa', 'Sucre', 'Corozal', '2019-09-16 21:48:21', '0', '0', 'aaaaaaaaaaaa'),
(15, '0', 1, 'php/upload/864.png', 'caida', 'Sucre', 'Corozal', '2019-09-16 21:49:28', '0', '0', 'eso si'),
(16, '0', 1, 'php/upload/510.jpg', 'aaaaaaaaaaaaaaaa', 'Sucre', 'Corozal', '2019-09-16 21:51:33', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaaaaaaa'),
(17, '0', 1, 'php/upload/209.jpg', 'loka', 'Sucre', 'Corozal', '2019-10-02 03:10:03', 'Muy prioritario', 'Medianamente Confide', 'Urgente'),
(18, '0', 7, ' ', 'wwww', 'Sucre', 'Corozal', '2019-10-02 03:18:07', 'Medianamente priorit', 'Muy Confidencial', 'aaaaaaaaaaaaaaa'),
(19, '0', 3, ' aaaaa', 'aaaaaa', 'Sucre', 'Corozal', '2019-10-01 20:21:21', 'Medianamente priorit', 'Muy Confidencial', 'aaaaaaaaaaaaaaaaaaa'),
(20, '0', 1, ' aaaaaa', 'aaaaaaa', 'Sucre', 'Corozal', '2019-10-01 20:42:24', 'Muy prioritario', 'Poco Confidencial', 'aaaaa'),
(21, '0', 1, ' ', 'aaaaaaaaaaaaa', 'Sucre', 'Corozal', '2019-10-01 20:45:20', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaaa'),
(22, '0', 1, ' ', 'aaaaaaaaaaaaa', 'Sucre', 'Corozal', '2019-10-01 21:11:03', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaaaa'),
(31, '0', 1, ' ', 'aaaaaaaaaaaaaaaa', 'Sucre', 'Corozal', '2019-10-01 22:00:04', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaaaa'),
(32, '0', 1, ' ', 'aaaaaaaaaaaaaaaa', 'Sucre', 'Corozal', '2019-10-01 22:01:39', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaaaa'),
(33, '0', 1, ' ', 'aaaaaaaaaaaaaaaa', 'Sucre', 'Corozal', '2019-10-01 22:08:06', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaaaa'),
(34, '0', 1, ' ', 'aaaaaaaaaaa', 'Sucre', 'Corozal', '2019-10-01 22:09:17', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaaaaaaa'),
(35, '0', 1, 'aaaaaaaa', 'aaaaaaaaaaaaaaa', 'Sucre', 'Corozal', '2019-10-01 22:18:39', 'Muy prioritario', 'Poco Confidencial', 'aaaaaaaaaaa'),
(36, '8', 70, ' ', 'Caida de arboles', 'Sucre', 'Corozal', '2019-10-01 22:19:39', 'Muy prioritario', 'Poco Confidencial', 'Ayuda!!!'),
(37, '8', 70, ' ', 'Caida de arboles', 'Sucre', 'Corozal', '2019-10-01 22:21:48', 'Muy prioritario', 'Poco Confidencial', 'Ayuda!!!'),
(38, '4', 70, ' ', 'Caida de arbol', 'Sucre', 'Corozal', '2019-10-02 09:48:32', 'Muy prioritario', 'Poco Confidencial', 'Cualquier cosa'),
(39, '0', 1, ' ', 'sdgdgdfgf', 'Sucre', 'Corozal', '2019-10-05 17:35:35', 'Muy prioritario', 'Poco Confidencial', ''),
(40, '0', 1, ' ', 'Mucha pola', 'Sucre', 'Corozal', '2019-10-06 14:18:34', 'Muy prioritario', 'Poco Confidencial', 'Duis sodales auctor enim at sollicitudin. Fusce vel lacus accumsan, molestie ipsum et, lobortis sapien. Morbi id blandit nunc. Nunc fermentum suscipit nibh sit amet condimentum. Vestibulum fermentum mi eget odio malesuada, vitae viverra eros mollis. Nulla'),
(41, '0', 4, ' ', 'Mucha pola', 'Sucre', 'Corozal', '2019-10-06 14:19:10', 'Muy prioritario', 'Poco Confidencial', 'Duis sodales auctor enim at sollicitudin. Fusce vel lacus accumsan, molestie ipsum et, lobortis sapien. Morbi id blandit nunc. Nunc fermentum suscipit nibh sit amet condimentum. Vestibulum fermentum mi eget odio malesuada, vitae viverra eros mollis. Nulla'),
(42, '0', 4, ' ', 'Mucha pola', 'Sucre', 'Corozal', '2019-10-06 14:19:36', 'Medianamente priorit', 'Poco Confidencial', 'Duis sodales auctor enim at sollicitudin. Fusce vel lacus accumsan, molestie ipsum et, lobortis sapien. Morbi id blandit nunc. Nunc fermentum suscipit nibh sit amet condimentum. Vestibulum fermentum mi eget odio malesuada, vitae viverra eros mollis. Nulla'),
(43, '0', 4, ' ', 'Ajam', 'Sucre', 'Corozal', '2019-10-06 14:19:42', 'Medianamente priorit', 'Poco Confidencial', 'Duis sodales auctor enim at sollicitudin. Fusce vel lacus accumsan, molestie ipsum et, lobortis sapien. Morbi id blandit nunc. Nunc fermentum suscipit nibh sit amet condimentum. Vestibulum fermentum mi eget odio malesuada, vitae viverra eros mollis. Nulla'),
(44, '0', 1, ' ', 'Ajamhh', 'Sucre', 'Corozal', '2019-10-06 14:29:57', 'Medianamente priorit', 'Poco Confidencial', 'Duis sodales auctor enim at sollicitudin. Fusce vel lacus accumsan, molestie ipsum et, lobortis sapien. Morbi id blandit nunc. Nunc fermentum suscipit nibh sit amet condimentum. Vestibulum fermentum mi eget odio malesuada, vitae viverra eros mollis. Nulla');

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
(1, 32, NULL, NULL, NULL),
(2, 33, NULL, NULL, NULL),
(3, 34, NULL, NULL, NULL),
(4, 35, 1, NULL, 1),
(5, 36, 4, NULL, 1),
(6, 37, 4, NULL, 1),
(7, 38, 6, NULL, 1),
(8, NULL, NULL, 1, NULL),
(9, 39, 1, NULL, 1),
(10, 40, 1, NULL, 1),
(11, 41, 1, NULL, 1),
(12, 42, 1, NULL, 1),
(13, 43, 1, NULL, 1),
(14, 44, 6, 1, 1);

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
(1, 'Hola!', 'hola!', 'img/php.img', '0000-00-00 00:00:00');

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
(1, 437666315, 'Cédula de Ciudadanía', 'Roberto', 'Amariles', 'Ingeniero', 'Secretaria de Hacienda', 'Antioquia', 'Abejorral', 3214548909, 'roberto@gmail.com', 'Roberto', '1234', 'Hombre', ''),
(2, 437666395, 'Cédula de Ciudadanía', 'Julian', 'Garcia', 'Ingeniero Agronomo', 'Secretaría de Agricultura, Medio Ambiente y D', 'Antioquia', 'Abejorral', 3214548908, 'Julian@gmail.com', 'Julian', '1234', 'Hombre', ''),
(3, 427666395, 'Cédula de Ciudadanía', 'Juliana', 'Perez', 'Promotor de Deportes', 'Unidad deportiva-Gimnasio', 'Antioquia', 'Abejorral', 3114548908, 'Juliana@gmail.com', 'Juliana', '1234', 'Mujer', ''),
(4, 427686395, 'Cédula de Ciudadanía', 'Luis', 'Gomez', 'Aux. Servicios Generales', 'Empresas Públicas de Abejorral EPA', 'Antioquia', 'Abejorral', 3014548908, 'Luis@gmail.com', 'Luis', '1234', 'Hombre', ''),
(5, 427686395, 'Cédula de Ciudadanía', 'Luisa', 'Vargas', 'Promotor deportivo', 'Unidad deportiva José Antonio Villegas', 'Antioquia', 'Abejorral', 3014548900, 'Luisa@gmail.com', 'Luisa', '1234', 'Mujer', ''),
(6, 427286395, 'Cédula de Ciudadanía', 'Mime', 'Cardona', 'Atención al usuario', 'Palacio Municipal - Recepción', 'Antioquia', 'Abejorral', 3014548000, 'Mime@gmail.com', 'Mime', '1234', 'Mujer', '');

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
(1, 1, 1022036395, 'Cédula de Ciudadanía', 'Jose Manuel', 'Echeverri Palacio', 3225446984, 'palacio.90@hotmail.com', 'Sucre', 'Corozal', '1998-10-01', 'jmep', '$2y$10$LqlWRiCBijgPvrDM/I/f.OO1R/qXC/lpzwtE5TExVmOdMcZ/bHKQa', 0, 'Hombre', 'img/INNEXU1.png'),
(2, 1, 22544512312, 'Seleccione...', 'Juan Jose ', 'Echverri', 55555, 'juanpala300@hotmial.com', 'Arauca', 'Arauquita', '2019-09-11', 'juan', '$2y$10$GfKL6rBINiWVlQbP8kkSuu77MhU0W0ZDKMRD/o6b0aokuUfWTObF.', 0, 'Hombre', 'img/INNEXU1.png'),
(3, 1, 555555, 'Cédula de Ciudadanía', 'josem', 'ep', 4555555, 'jjjjjjjjj', 'Arauca', 'Arauquita', '2019-09-18', 'jm', '$2y$10$6brxrj3VjP5LjeCgTWRPd.c6BaQDuyN../TIaq9uWk92s/cBZ71eO', 0, 'Hombre', 'img/INNEXU1.png');

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
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `reportes_x_respuestas`
--
ALTER TABLE `reportes_x_respuestas`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `respuesta_mens`
--
ALTER TABLE `respuesta_mens`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `secretario`
--
ALTER TABLE `secretario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
