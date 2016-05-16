-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2016 a las 21:02:38
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acueducto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `cod` int(11) NOT NULL,
  `nom` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`cod`, `nom`) VALUES
(1, 'Administrador'),
(2, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `nom_cliente` varchar(15) NOT NULL,
  `ape_cliente` varchar(15) NOT NULL,
  `direccion` varchar(15) NOT NULL,
  `barrio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `fecha`, `nom_cliente`, `ape_cliente`, `direccion`, `barrio`) VALUES
('1', '2016-03-26', 'wilmer', 'daza', 'cra 5 19', 'prados'),
('2', '2016-03-26', 'jair', 'hote', 'calle', 'olaya'),
('4', '2016-03-25', 'polan', 'co', 'calle', 'jos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli_correo`
--

CREATE TABLE IF NOT EXISTS `cli_correo` (
  `cod_cliente` varchar(10) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cli_correo`
--

INSERT INTO `cli_correo` (`cod_cliente`, `correo`) VALUES
('2', 'pe@gmail.com'),
('4', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cli_tel`
--

CREATE TABLE IF NOT EXISTS `cli_tel` (
  `cod_cliente` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cli_tel`
--

INSERT INTO `cli_tel` (`cod_cliente`, `telefono`) VALUES
('2', '3214325434'),
('4', '232');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `cod` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `ape` varchar(32) NOT NULL,
  `cargo` int(11) NOT NULL,
  `acceso` int(11) NOT NULL,
  `pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cod`, `nom`, `ape`, `cargo`, `acceso`, `pass`) VALUES
(1, 'Wilmer', 'Daza', 1, 1, '202cb962ac59075b964b07152d234b70'),
(3, 'jose', 'pekerman', 3, 2, '616df5e759d96a1601294e712b057f71');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `nro_factura` int(11) NOT NULL,
  `fech_acutal` date NOT NULL,
  `consumo` int(11) NOT NULL,
  `cod_cliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`nro_factura`, `fech_acutal`, `consumo`, `cod_cliente`) VALUES
(1, '2016-03-09', 234, '1'),
(2, '2016-03-15', 432, '2'),
(3, '2016-03-15', 432, '2'),
(7, '2016-03-04', 3, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE IF NOT EXISTS `puesto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `sueldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id`, `nombre`, `sueldo`) VALUES
(1, 'Gerente General', 10000000),
(2, 'Asistente Gerencia', 3000000),
(3, 'Vendedor', 1000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indices de la tabla `cli_correo`
--
ALTER TABLE `cli_correo`
  ADD PRIMARY KEY (`cod_cliente`,`correo`);

--
-- Indices de la tabla `cli_tel`
--
ALTER TABLE `cli_tel`
  ADD PRIMARY KEY (`cod_cliente`,`telefono`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cargo` (`cargo`),
  ADD KEY `acceso` (`acceso`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`nro_factura`),
  ADD KEY `fk_cliente_factura` (`cod_cliente`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cli_correo`
--
ALTER TABLE `cli_correo`
  ADD CONSTRAINT `fk_CLIENTE_CLI_CORREO` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`);

--
-- Filtros para la tabla `cli_tel`
--
ALTER TABLE `cli_tel`
  ADD CONSTRAINT `fk_CLIENTE_CLI_TEL` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_cliente_factura` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
