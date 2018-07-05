-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2018 a las 12:41:53
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuxgamer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `ID_Comunidad` int(11) NOT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_Categoria`, `Nombre`, `ID_Comunidad`, `B_Logico`) VALUES
(1, 'Shooter', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `ID_Comunidad` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Maximo_Integrantes` int(11) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`ID_Comunidad`, `Nombre`, `Maximo_Integrantes`, `B_Logico`) VALUES
(1, 'TuxLandia', 1500, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `ID_Estado` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`ID_Estado`, `Nombre`, `B_Logico`) VALUES
(1, 'Activo', 1),
(2, 'Pasivo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `ID_Genero` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ID_Genero`, `Nombre`, `B_Logico`) VALUES
(324, 'Shooter', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrante`
--

CREATE TABLE `integrante` (
  `Nick` varchar(20) NOT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Pass` varchar(100) DEFAULT NULL,
  `ID_Rango` int(11) DEFAULT NULL,
  `ID_Estado` int(11) DEFAULT NULL,
  `Puntos` int(11) DEFAULT NULL,
  `V_Positivos` int(11) DEFAULT NULL,
  `V_Negativos` int(11) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL,
  `ID_Comunidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `integrante`
--

INSERT INTO `integrante` (`Nick`, `Correo`, `Pass`, `ID_Rango`, `ID_Estado`, `Puntos`, `V_Positivos`, `V_Negativos`, `B_Logico`, `ID_Comunidad`) VALUES
('nombre', 'correo', 'pass', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('osman', 'osman_ahumada@hotmail.com', 'osman123', NULL, 1, NULL, NULL, NULL, NULL, 1),
('raul', 'raul@raul.com', 'raul666', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('zepe', 'zepe@zepeda.com', 'z1p23e', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `ID_Juego` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `ID_Genero` int(11) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`ID_Juego`, `Nombre`, `ID_Genero`, `B_Logico`) VALUES
(300, 'Carlos duty', 324, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID_Mensajes` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Nick` varchar(20) DEFAULT NULL,
  `Mensaje` varchar(1000) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL,
  `ID_Tema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_torneo`
--

CREATE TABLE `puntos_torneo` (
  `ID_Punto` int(11) NOT NULL,
  `Ptos_Primero` int(11) DEFAULT NULL,
  `Ptos_Segundo` int(11) DEFAULT NULL,
  `Ptos_Tercero` int(11) DEFAULT NULL,
  `Ptos_Top100` int(11) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rango`
--

CREATE TABLE `rango` (
  `ID_Rango` int(11) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL,
  `Ptos_Necesarios` int(11) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `ID_Tema` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ID_Categoria` int(11) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `Nick` varchar(20) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
  `ID_Torneo` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Fecha_Inicio` datetime DEFAULT NULL,
  `Fecha_Termino` datetime DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL,
  `ID_Juego` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo_inte`
--

CREATE TABLE `torneo_inte` (
  `ID_TI` int(11) NOT NULL,
  `ID_Torneo` int(11) NOT NULL,
  `Nick` varchar(20) DEFAULT NULL,
  `Puntos_Obtenidos` int(11) DEFAULT NULL,
  `B_Logico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`),
  ADD KEY `ID_Comunidad` (`ID_Comunidad`);

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`ID_Comunidad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_Estado`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`ID_Genero`);

--
-- Indices de la tabla `integrante`
--
ALTER TABLE `integrante`
  ADD PRIMARY KEY (`Nick`),
  ADD KEY `ID_Rango` (`ID_Rango`),
  ADD KEY `ID_Estado` (`ID_Estado`),
  ADD KEY `ID_Comunidad` (`ID_Comunidad`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`ID_Juego`),
  ADD KEY `ID_Genero` (`ID_Genero`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID_Mensajes`),
  ADD KEY `Nick` (`Nick`),
  ADD KEY `ID_Tema` (`ID_Tema`);

--
-- Indices de la tabla `puntos_torneo`
--
ALTER TABLE `puntos_torneo`
  ADD PRIMARY KEY (`ID_Punto`);

--
-- Indices de la tabla `rango`
--
ALTER TABLE `rango`
  ADD PRIMARY KEY (`ID_Rango`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`ID_Tema`),
  ADD KEY `ID_Categoria` (`ID_Categoria`),
  ADD KEY `Nick` (`Nick`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`ID_Torneo`),
  ADD KEY `ID_Juego` (`ID_Juego`);

--
-- Indices de la tabla `torneo_inte`
--
ALTER TABLE `torneo_inte`
  ADD PRIMARY KEY (`ID_TI`),
  ADD KEY `ID_Torneo` (`ID_Torneo`),
  ADD KEY `Nick` (`Nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `ID_Genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `ID_Juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
  MODIFY `ID_Torneo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`ID_Comunidad`) REFERENCES `comunidad` (`ID_Comunidad`);

--
-- Filtros para la tabla `integrante`
--
ALTER TABLE `integrante`
  ADD CONSTRAINT `integrante_ibfk_1` FOREIGN KEY (`ID_Rango`) REFERENCES `rango` (`ID_Rango`),
  ADD CONSTRAINT `integrante_ibfk_2` FOREIGN KEY (`ID_Estado`) REFERENCES `estado` (`ID_Estado`),
  ADD CONSTRAINT `integrante_ibfk_3` FOREIGN KEY (`ID_Comunidad`) REFERENCES `comunidad` (`ID_Comunidad`);

--
-- Filtros para la tabla `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `juego_ibfk_1` FOREIGN KEY (`ID_Genero`) REFERENCES `genero` (`ID_Genero`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`Nick`) REFERENCES `integrante` (`Nick`),
  ADD CONSTRAINT `mensajes_ibfk_2` FOREIGN KEY (`ID_Tema`) REFERENCES `tema` (`ID_Tema`);

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`),
  ADD CONSTRAINT `tema_ibfk_2` FOREIGN KEY (`Nick`) REFERENCES `integrante` (`Nick`);

--
-- Filtros para la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD CONSTRAINT `torneo_ibfk_1` FOREIGN KEY (`ID_Juego`) REFERENCES `juego` (`ID_Juego`);

--
-- Filtros para la tabla `torneo_inte`
--
ALTER TABLE `torneo_inte`
  ADD CONSTRAINT `torneo_inte_ibfk_1` FOREIGN KEY (`ID_Torneo`) REFERENCES `torneo` (`ID_Torneo`),
  ADD CONSTRAINT `torneo_inte_ibfk_2` FOREIGN KEY (`Nick`) REFERENCES `integrante` (`Nick`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
