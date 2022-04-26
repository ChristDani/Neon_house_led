-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2022 a las 16:49:28
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `neohouseled`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_categoria`
--

CREATE TABLE `tab_categoria` (
  `id` tinyint(4) NOT NULL,
  `cat_nombre` varchar(40) NOT NULL,
  `cat_activo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_categoria`
--

INSERT INTO `tab_categoria` (`id`, `cat_nombre`, `cat_activo`) VALUES
(1, 'Personajes', '1'),
(2, 'Texto', '1'),
(4, 'Otros', '1'),
(5, 'Objetos', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_cliente`
--

CREATE TABLE `tab_cliente` (
  `id` int(11) NOT NULL,
  `cli_nombre` varchar(120) DEFAULT NULL,
  `cli_apellidos` varchar(120) DEFAULT NULL,
  `cli_email` varchar(120) DEFAULT NULL,
  `cli_clave` varchar(255) DEFAULT NULL,
  `cli_estado` char(1) DEFAULT NULL,
  `cli_telefono` varchar(10) NOT NULL,
  `cli_rol` int(11) NOT NULL,
  `cli_verificado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_cliente`
--

INSERT INTO `tab_cliente` (`id`, `cli_nombre`, `cli_apellidos`, `cli_email`, `cli_clave`, `cli_estado`, `cli_telefono`, `cli_rol`, `cli_verificado`) VALUES
(1, 'Edgar2', 'Poma', 'lenonpoma@gmail.com', '$2y$10$d6DkTg0tYzRlhULhxRP55uxGZdEG2lyl.O03nY1Du/5x2vQ4DG1SW', '1', '14156', 2, '2'),
(2, 'Isabella ', 'Montoya ', 'isabellam.montoya.im@gmail.com ', '123', '1', '14523', 2, NULL),
(3, 'MelissaeditCLAVE', 'Dumas', 'mdumas@gmail.com', '12345', '0', '1545', 2, NULL),
(4, 'Edgar4', 'Poma', 'lenonaaa@gmail.com', '123', '0', '114456', 1, NULL),
(7, 'asas', 'dasdasd', 'adminNLS@', '$2y$10$xSMqNH7LGFqXwCr5AGUsae5rbKTEsDjrdRcD8MbhLoAWrUA3F1d8e', '0', '12', 1, NULL),
(10, 'adminNLS', 'adminNLS', 'adminNLS', '$2y$10$0DC79GuXRJVqnAGVuXk3AO2vRoMaeltcgUGqe9pJa0Ildd60/lRFK', '1', '12345', 1, ''),
(11, 'para cambiar', 'para cambiar ape', '12345', '$2y$10$cTtWRWJihjEGKA4G7/cvuev/NZ4iyWqpZAjHw14ZQ8Ze39u3CQNRS', '1', '11111', 1, NULL),
(12, 'ADMINCONTRA898nombre', 'ADMINCONTRA898apellido', 'ADMINCONTRA898email', '$2y$10$4Rpb0TSb1Or/M2H37bSVoOqrwg.R5zpKo7U7tVyp5fCfVCWBIRRhm', '1', '123456', 2, '2'),
(13, 'CLIENTECONTRA123', 'CLIENTECONTRA123ape', 'CLIENTECONTRA123@gmail.com', '$2y$10$vabNeweKcpY/XVQnnfr/XeiAca9bdB8g9BRYeIyFc.cTFyRtJ4gUC', '1', '123456', 2, NULL),
(40, 'asdasd', '123aaa', '12345678945', '$2y$10$n0.L.jKaYirYcA1t7682LuwmNcrqt1yivG5bSCC9nY90vH8EsGzzO', '0', '123', 2, '1'),
(41, '1', 'creacionborrar', 'creacionborrar', '$2y$10$KPPUaTgSzW5v1ymlaLezduYkJc.7FxhiMSanCWRiIosfNY/sI/u8K', '0', '123', 2, ''),
(42, 'abcdValidad', 'Poma', '123456789123456', '$2y$10$CasRwDAdMMSHUGf43EBR0eX05MD5BmzZ0hUaHifaFnaxqF8ipuQB.', '0', '123456789', 2, '2'),
(43, 'pureba1', 'Prueba1', 'lennnnon@gmail.com', '$2y$10$Wi0L5OorCwibHDQjNssPgeo1dGz3m1HbMEOU1./FK8egF9hdsZUMy', '0', '1323456565', 2, '2'),
(44, 'asdasd', 'asdsd', 'asdasd', '$2y$10$6ovtgjSjfTuA2I2CNkXXBuRDuIJIJAGtDC3UswGYY73W1qywB/hTu', '1', '123456788', 2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_compra`
--

CREATE TABLE `tab_compra` (
  `id` int(11) NOT NULL,
  `com_fecha` datetime DEFAULT NULL,
  `precio_total` float DEFAULT NULL,
  `cli_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_compra`
--

INSERT INTO `tab_compra` (`id`, `com_fecha`, `precio_total`, `cli_id`) VALUES
(1, '2022-02-01 00:00:00', 5500, 2),
(2, '2022-02-01 00:00:00', 2000, 3),
(5, '2022-02-11 00:00:00', 2000, 1),
(6, '2022-03-17 00:00:00', 5000, 12),
(7, '2022-03-29 00:00:00', 2000, 12),
(8, '2022-03-01 00:00:00', 1500, 12),
(9, '2022-04-14 10:43:00', 4002, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_compra_detalle`
--

CREATE TABLE `tab_compra_detalle` (
  `id` int(11) NOT NULL,
  `cod_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `det_cantidad` int(11) DEFAULT NULL,
  `det_color` varchar(30) DEFAULT NULL,
  `det_precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_compra_detalle`
--

INSERT INTO `tab_compra_detalle` (`id`, `cod_id`, `pro_id`, `det_cantidad`, `det_color`, `det_precio`) VALUES
(1, 1, 12, 2, 'verde', 100),
(2, 1, 10, 3, 'rojo', 150),
(5, 1, 10, 5, 'azul', 150),
(6, 2, 11, 3, 'rojo', 500),
(7, 1, 8, 1, 'azul', 50),
(8, 6, 11, 3, 'multicolor', 150),
(9, 6, 1, 1, 'verde', 1020),
(10, 7, 12, 10, 'azul', 560),
(11, 8, 10, 2, 'blanco', 500),
(12, 8, 11, 2, 'azul', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_direcciones`
--

CREATE TABLE `tab_direcciones` (
  `id` int(11) NOT NULL,
  `url_tiktok` varchar(200) NOT NULL,
  `url_instagram` varchar(200) NOT NULL,
  `url_pinterest` varchar(200) NOT NULL,
  `url_facebook` varchar(200) NOT NULL,
  `url_whatsap` varchar(200) NOT NULL,
  `url_correoempresa` varchar(200) NOT NULL,
  `url_correoemisor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_producto`
--

CREATE TABLE `tab_producto` (
  `id` int(11) NOT NULL,
  `cat_id` tinyint(4) DEFAULT NULL,
  `pro_nombre` varchar(100) DEFAULT NULL,
  `pro_descripcion` varchar(255) DEFAULT NULL,
  `pro_precio` float DEFAULT NULL,
  `pro_tamano` varchar(20) DEFAULT NULL,
  `pro_activo` char(1) DEFAULT NULL,
  `pro_imagen1` blob NOT NULL,
  `pro_imagen2` varchar(35) DEFAULT NULL,
  `pro_imagen3` varchar(35) DEFAULT NULL,
  `pro_precioMulti` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_producto`
--

INSERT INTO `tab_producto` (`id`, `cat_id`, `pro_nombre`, `pro_descripcion`, `pro_precio`, `pro_tamano`, `pro_activo`, `pro_imagen1`, `pro_imagen2`, `pro_imagen3`, `pro_precioMulti`) VALUES
(1, 4, 'Corazones de angel y diablo', 'Corazones de ángel y diablo de neon', 349, '30cmx40cmx', '0', 0x756e646566696e6564, 'undefined', 'undefined', 550),
(2, 4, 'Diamante', 'Diamante en neón', 239, '30cmx40cmx', '0', 0x756e646566696e6564, 'undefined', 'undefined', 124.9),
(3, 2, 'DO NOT ENTER', 'Letrero de DO NOT ENTER en neón ', 339, '40cmX40cm', '0', 0x30, NULL, NULL, NULL),
(4, 1, 'Flamenco', 'Flamenco en neón', 299, '40cmx40cmxxx', '0', 0x30, NULL, NULL, NULL),
(8, 2, 'TIK TOK', 'Letrero TIK TOK en neón ', 349, '35cmX30cm', '0', 0x30, NULL, NULL, NULL),
(10, 4, 'OJOS', 'Letrero OJOS  en neón', 299, '40cmx30cm', '0', 0x756e646566696e6564, 'undefined', 'undefined', 125),
(11, 4, 'PESTAÑAS', 'Letrero de PESTAÑAS  en neón ', 229, '40cmX20cm', '1', 0x30, NULL, NULL, NULL),
(12, 4, 'HELADO', 'Paleta de helado en neón ', 219, '30cmX20cm', '0', 0x30, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_roles`
--

CREATE TABLE `tab_roles` (
  `id` int(11) NOT NULL,
  `rol_nombre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tab_roles`
--

INSERT INTO `tab_roles` (`id`, `rol_nombre`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_visitantes`
--

CREATE TABLE `tab_visitantes` (
  `id` int(11) NOT NULL,
  `vis_nombre` varchar(120) DEFAULT NULL,
  `vis_apellidos` varchar(120) DEFAULT NULL,
  `vis_email` varchar(120) DEFAULT NULL,
  `vis_telefono` varchar(10) NOT NULL,
  `vis_pregunta` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tab_visitantes`
--

INSERT INTO `tab_visitantes` (`id`, `vis_nombre`, `vis_apellidos`, `vis_email`, `vis_telefono`, `vis_pregunta`) VALUES
(1, 'Visitante1edit', 'Visitapellido', 'visita@gmail.com', '151515', NULL),
(6, 'Visitante3', 'Visitapellido', 'visita3@gmail.com', '12121', NULL),
(7, 'Edgar', 'Poma Chavez', 'lenonpoma@gmail.com', '', ''),
(8, 'asdasd', 'asdasd', 'asdasdasd', '1212', NULL),
(9, 'Usuario12', 'Poma Chavez', 'adddddddffg@gmail.com', '922574117', NULL),
(12, 'Pregunta1', 'Pregunta2', 'visita232@gmail.com', '123', '¿Estoy arreglado?'),
(13, 'Preuba1111', 'Preuba111', 'pruebavis111@gmail.com', '123456', '¿Funciono?'),
(14, 'asd', 'sad', 'asd', '454', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_categoria`
--
ALTER TABLE `tab_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cli_rol` (`cli_rol`);

--
-- Indices de la tabla `tab_compra`
--
ALTER TABLE `tab_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cliente` (`cli_id`);

--
-- Indices de la tabla `tab_compra_detalle`
--
ALTER TABLE `tab_compra_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_com` (`cod_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indices de la tabla `tab_direcciones`
--
ALTER TABLE `tab_direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_producto`
--
ALTER TABLE `tab_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indices de la tabla `tab_roles`
--
ALTER TABLE `tab_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_visitantes`
--
ALTER TABLE `tab_visitantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_categoria`
--
ALTER TABLE `tab_categoria`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `tab_compra`
--
ALTER TABLE `tab_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tab_compra_detalle`
--
ALTER TABLE `tab_compra_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tab_producto`
--
ALTER TABLE `tab_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tab_visitantes`
--
ALTER TABLE `tab_visitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  ADD CONSTRAINT `fk_cli_rol` FOREIGN KEY (`cli_rol`) REFERENCES `tab_roles` (`id`);

--
-- Filtros para la tabla `tab_compra`
--
ALTER TABLE `tab_compra`
  ADD CONSTRAINT `fk_cli_id` FOREIGN KEY (`cli_id`) REFERENCES `tab_cliente` (`id`);

--
-- Filtros para la tabla `tab_compra_detalle`
--
ALTER TABLE `tab_compra_detalle`
  ADD CONSTRAINT `fk_cod_id` FOREIGN KEY (`cod_id`) REFERENCES `tab_compra` (`id`),
  ADD CONSTRAINT `fk_pro_id` FOREIGN KEY (`pro_id`) REFERENCES `tab_producto` (`id`);

--
-- Filtros para la tabla `tab_producto`
--
ALTER TABLE `tab_producto`
  ADD CONSTRAINT `fk_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `tab_categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
