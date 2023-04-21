-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2023 a las 10:41:29
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aa2_jf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicis`
--

CREATE TABLE `bicis` (
                         `id` int(11) NOT NULL,
                         `nombre` varchar(30) NOT NULL,
                         `precio` decimal(10,0) NOT NULL,
                         `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
                             `id` int(11) NOT NULL,
                             `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
                                             (2, 'Prueba'),
                                             (3, 'Montaña'),
                                             (4, 'prueba'),
                                             (5, 'hoy'),
                                             (6, 'si?'),
                                             (7, 'looo'),
                                             (8, 'ooo'),
                                             (9, 'prueba redireccion'),
                                             (10, 'red'),
                                             (11, 'IIII'),
                                             (12, 'PPP'),
                                             (13, 'Joana'),
                                             (14, 'prueba4444'),
                                             (15, 'oooo'),
                                             (16, 'OOFHFJHSAG'),
                                             (17, '3333'),
                                             (18, '6666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
                           `id` int(11) NOT NULL,
                           `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                           `total` decimal(10,0) NOT NULL,
                           `id_usuario` int(11) NOT NULL,
                           `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
                          `id` int(11) NOT NULL,
                          `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                          `id_bici` int(11) NOT NULL,
                          `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
                           `id` int(11) NOT NULL,
                           `nombre` varchar(30) NOT NULL,
                           `email` varchar(50) NOT NULL,
                           `password` varchar(30) NOT NULL,
                           `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`, `admin`) VALUES
                                                                         (7, 'crip', 'c@c.com', 'f80812a241d2f679702f3608155569', 0),
                                                                         (8, 'joana', 'joana@joana.com', 'f80812a241d2f679702f3608155569', 0),
                                                                         (9, 'prueba re', 'e@e.com', 'f80812a241d2f679702f3608155569', 0),
                                                                         (10, 'Anna', '3@3.com', 'f80812a241d2f679702f3608155569', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bicis`
--
ALTER TABLE `bicis`
    ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
    ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
    ADD PRIMARY KEY (`id`),
  ADD KEY `id_bici` (`id_bici`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
    ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=11;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bicis`
--
ALTER TABLE `bicis`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bicis`
--
ALTER TABLE `bicis`
    ADD CONSTRAINT `bicis_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
    ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
    ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_bici`) REFERENCES `bicis` (`id`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
