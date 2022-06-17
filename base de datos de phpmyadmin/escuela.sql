-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 05:21:17
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `licenciatura` varchar(20) NOT NULL,
  `cuatrimestre` int(10) NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `nombre`, `apellido`, `telefono`, `correo`, `licenciatura`, `cuatrimestre`, `estatus`) VALUES
(1, 'jose', 'ramon', '4554545', 'joseramon@gmail.com', 'sistemas', 9, '1'),
(2, 'chinji', 'ikari', '2113218', 'chinji@gmail.com', 'administracion', 5, '0'),
(3, 'asuka', 'langley', '84848383', 'asuka@gmail.com', 'contabilidad', 2, '1'),
(4, 'rei', 'ayanami', '151515151', 'rei@gmail.com', 'piloto', 6, '1'),
(5, 'maya', 'ibuki', '656565', 'maya@gmail.com', 'sistemas', 2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cuatrimestre` int(11) NOT NULL,
  `licenciatura` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `nombre`, `cuatrimestre`, `licenciatura`) VALUES
(1, 'bases de datos', 9, 'sistemas'),
(2, 'cltura politica', 2, 'sistemas'),
(3, 'matematica', 1, 'administracion'),
(4, 'español', 3, 'administracion'),
(5, 'historia', 1, 'contabilidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `estatus` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`ID`, `nombre`, `apellido`, `telefono`, `correo`, `estatus`) VALUES
(1, 'kozo', 'fuyutsuki', '4545454', 'kozo@gmail.com', b'00'),
(2, 'gendo', 'ikari', '566556', 'gendo@gmail.com', b'01'),
(3, 'ryoji', 'kaji', '78787878', 'ryoji@gmail.com', b'01'),
(4, 'ritsuko', 'akagi', '585858', 'ritsuko@gmail.com', b'01'),
(5, 'kaworu', 'nagisa', '232323', 'kaworu@gmail.com', b'01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
