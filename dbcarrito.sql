-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2020 a las 03:12:57
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbcarrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(6) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `fecha` varchar(8) NOT NULL,
  `correo_admin` varchar(60) NOT NULL,
  `codigo` int(6) NOT NULL,
  `correo_chofer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `correo`, `telefono`, `fecha`, `correo_admin`, `codigo`, `correo_chofer`) VALUES
(1, 'vergoni', 'vergoni@gmail.com', '963852741', '20/09/20', '', 2, ''),
(3, 'Admin', '', '923145693', '30/07/20', 'admin@gmail.com', 1, ''),
(4, 'Pedro C', 'pedro@gmail.com', '448948484', '24/09/20', '', 2, ''),
(5, 'fernando rojas', 'calu@hotmail.com', '944579322', '24/09/20', '', 2, ''),
(6, 'Alex C', 'alex@gmail.com', '18518144', '24/09/20', '', 2, ''),
(7, 'chofer', '', '123', '30/07/20', '', 3, 'chofer@reinplast');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_orden`
--

CREATE TABLE `factura_orden` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_total_before_tax` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_orden_producto`
--

CREATE TABLE `factura_orden_producto` (
  `item_id` int(11) NOT NULL,
  `nombre_usu` varchar(60) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  `subtotal` decimal(9,2) NOT NULL,
  `fecha` varchar(8) NOT NULL,
  `total` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura_orden_producto`
--

INSERT INTO `factura_orden_producto` (`item_id`, `nombre_usu`, `descripcion`, `cantidad`, `precio`, `subtotal`, `fecha`, `total`) VALUES
(131, 'David Mariñas Obregon', '31 AZUL', 708, '4.00', '2800.00', '17/08/20', '0.00'),
(132, 'David Mariñas Obregon', '80 COLORES', 700, '4.80', '3360.00', '17/08/20', '0.00'),
(133, 'David Mariñas Obregon', '40 BLANCO R1', 700, '5.00', '3500.00', '17/08/20', '0.00'),
(134, 'David Mariñas Obregon', '80 DOBLE CARA', 7400, '4.60', '34040.00', '17/08/20', '0.00'),
(135, 'David Mariñas Obregon', '40 DOBLE CARA', 6150, '4.60', '28290.00', '17/08/20', '0.00'),
(136, 'Rafael Chourio', '26 AZUL', 700, '4.20', '2940.00', '20/08/20', '0.00'),
(137, 'Rafael Chourio', '31 NEGRO', 2350, '4.00', '9400.00', '20/08/20', '0.00'),
(138, 'Rafael Chourio', '40 BLANCO R1', 3700, '5.00', '18500.00', '20/08/20', '0.00'),
(139, 'fernando rojas', '26 AZUL', 3700, '4.20', '15540.00', '20/08/20', '0.00'),
(140, 'fernando rojas', '40 BLANCO R1', 700, '5.00', '3500.00', '20/08/20', '0.00'),
(141, 'fernando rojas', '26 NEGRO', 700, '4.00', '2800.00', '20/08/20', '2800.00'),
(142, 'fernando rojas', '31 AZUL', 700, '4.00', '2800.00', '20/08/20', '5600.00'),
(143, 'fernando rojas', '60 COLORES', 350, '4.60', '1610.00', '20/08/20', '7210.00'),
(145, 'Marco Barazorda', '26 AZUL', 3850, '4.20', '16170.00', '08/09/20', '16170.00'),
(146, 'Marco Barazorda', '60 AZUL', 3350, '4.00', '13400.00', '08/09/20', '13400.00'),
(147, 'Marco Barazorda', '40 NEGRO', 250, '4.00', '1000.00', '08/09/20', '14400.00'),
(148, 'Marco Barazorda', '40 BLANCO R1', 150, '5.00', '750.00', '08/09/20', '750.00'),
(149, 'Marco Barazorda', '80 AZUL', 300, '4.20', '1260.00', '08/09/20', '2010.00'),
(150, 'Marco Barazorda', '60 BLANCO R1', 300, '5.00', '1500.00', '08/09/20', '3510.00'),
(151, 'Marco Barazorda', '80 DOBLE CARA', 300, '4.60', '1380.00', '08/09/20', '4890.00'),
(152, 'Marco Barazorda', '31 VIRGEN', 500, '7.00', '3500.00', '08/09/20', '8390.00'),
(153, 'Marco Barazorda', '100 DOBLE CARA', 600, '5.00', '3000.00', '08/09/20', '11390.00'),
(154, 'Marco Barazorda', '40 COLORES', 500, '4.60', '2300.00', '13/09/20', '2300.00'),
(155, 'Marco Barazorda', '40 AZUL', 500, '4.00', '2000.00', '16/09/20', '2000.00'),
(156, 'Marco Barazorda', '26 COLORES', 500, '4.60', '2300.00', '16/09/20', '2300.00'),
(157, 'Richard Leon', '26 AZUL', 250, '4.20', '1050.00', '17/09/20', '1050.00'),
(158, 'Pablo', '40 AZUL', 250, '4.00', '1000.00', '17/09/20', '1000.00'),
(159, 'Pablo', '31 NEGRO', 500, '4.00', '2000.00', '17/09/20', '3000.00'),
(160, 'vergoni', '40 AZUL', 500, '4.00', '2000.00', '20/09/20', '2000.00'),
(161, 'vergoni', '31 AZUL', 500, '4.00', '2000.00', '22/09/20', '2000.00'),
(162, 'vergoni', '26 COLORES', 600, '4.60', '2760.00', '22/09/20', '4760.00'),
(163, 'vergoni', '40 BLANCO R1', 600, '5.00', '3000.00', '22/09/20', '7760.00'),
(164, 'vergoni', '60 BLANCO R1', 600, '5.00', '3000.00', '22/09/20', '10760.00'),
(165, 'vergoni', '26 VIRGEN', 600, '7.00', '4200.00', '22/09/20', '14960.00'),
(166, 'Alex C', '26 NEGRO', 600, '4.00', '2400.00', '24/09/20', '2400.00'),
(167, 'renato', '26 COLORES', 600, '4.60', '2760.00', '25/09/20', '2760.00'),
(168, 'vergoni', '40 NEGRO', 500, '4.00', '2000.00', '25/09/20', '2000.00'),
(169, 'vergoni', '26 AZUL', 500, '4.20', '2100.00', '25/09/20', '2100.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  `precio_b` decimal(9,2) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `precio`, `precio_b`, `id_usu`) VALUES
(1, '26 AZUL', '4.20', '4.10', 0),
(11, '31 AZUL', '4.00', '3.90', 0),
(12, '40 AZUL', '4.00', '3.90', 0),
(13, '60 AZUL', '4.00', '3.90', 0),
(14, '80 AZUL', '4.20', '4.10', 0),
(16, '26 NEGRO', '4.00', '3.90', 0),
(17, '31 NEGRO', '4.00', '3.90', 0),
(18, '40 NEGRO', '4.00', '3.90', 0),
(19, '60 NEGRO', '4.00', '3.90', 0),
(20, '80 NEGRO', '4.20', '4.10', 0),
(21, '26 COLORES', '4.60', '4.50', 0),
(22, '31 COLORES', '4.60', '4.60', 0),
(23, '40 COLORES', '4.60', '4.60', 0),
(24, '60 COLORES', '4.60', '4.50', 0),
(25, '80 COLORES', '4.80', '4.70', 0),
(26, '40 BLANCO R1', '5.00', '5.00', 0),
(27, '60 BLANCO R1', '5.00', '5.00', 0),
(28, '80 BLANCO R1', '5.00', '5.00', 0),
(29, '26 VIRGEN', '7.00', '6.90', 0),
(30, '31 VIRGEN', '7.00', '6.90', 0),
(31, '40 VIRGEN', '7.00', '6.90', 0),
(32, '40 DOBLE CARA', '4.60', '4.50', 0),
(33, '60 DOBLE CARA', '4.60', '4.50', 0),
(34, '80 DOBLE CARA', '4.60', '4.50', 0),
(40, '26 COLORES', '4.60', '4.50', 0),
(41, '31 COLORES', '4.60', '4.60', 0),
(42, '40 COLORES', '4.60', '4.60', 0),
(43, '60 COLORES', '4.60', '4.50', 0),
(44, '80 COLORES', '4.80', '4.70', 0),
(45, '40 BLANCO R1', '5.00', '5.00', 0),
(46, '60 BLANCO R1', '5.00', '5.00', 0),
(47, '80 BLANCO R1', '5.00', '5.00', 0),
(48, '26 VIRGEN', '7.00', '6.90', 0),
(49, '31 VIRGEN', '7.00', '6.90', 0),
(50, '40 VIRGEN', '7.00', '6.90', 0),
(51, '40 DOBLE CARA', '4.60', '4.50', 0),
(52, '60 DOBLE CARA', '4.60', '4.50', 0),
(53, '80 DOBLE CARA', '4.60', '4.50', 0),
(54, '100 DOBLE CARA', '5.00', '4.90', 0),
(55, '120 DOBLE CARA', '5.40', '5.30', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `fecha` varchar(8) NOT NULL,
  `correo_admin` varchar(60) NOT NULL,
  `codigo` int(6) NOT NULL,
  `correo_chofer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `telefono`, `fecha`, `correo_admin`, `codigo`, `correo_chofer`) VALUES
(1, 'Admin', '', '923145693', '30/07/20', 'admin@gmail.com', 1, ''),
(3, 'Admin1', 'bourne_dmo@outlook.com', '944579322', '08/08/20', '', 2, ''),
(4, 'Rafael Chourio', 'chourio@gmail.com', '944579322', '11/08/20', '', 2, ''),
(9, 'chofer', '', '123', '30/07/20', '', 3, 'chofer@reinplast');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura_orden`
--
ALTER TABLE `factura_orden`
  ADD PRIMARY KEY (`order_id`);

--
-- Indices de la tabla `factura_orden_producto`
--
ALTER TABLE `factura_orden_producto`
  ADD PRIMARY KEY (`item_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`id_usu`),
  ADD KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `factura_orden`
--
ALTER TABLE `factura_orden`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_orden_producto`
--
ALTER TABLE `factura_orden_producto`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
