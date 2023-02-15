-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2023 a las 22:23:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `nombre`, `email`, `clave`) VALUES
(1, 'Adrian', 'oswaldok14@gmail.com', 'Qwerty14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido1` varchar(100) NOT NULL,
  `apellido2` varchar(100) NOT NULL,
  `disciplina` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `nombre`, `apellido1`, `apellido2`, `disciplina`) VALUES
(1, 'cesar', 'diaz', 'resendiz', 'Musica'),
(2, 'Ricardo', 'Nieto', 'Garcia', 'Danza'),
(3, 'Vicente', 'Hernandez', 'Escamilla', 'Musica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `foto` longblob NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido1` varchar(100) NOT NULL,
  `apellido2` varchar(100) NOT NULL,
  `edad` varchar(100) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `curp` varchar(18) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `comunidad` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `institucion` varchar(200) NOT NULL,
  `domicilioins` varchar(200) NOT NULL,
  `municipioins` varchar(200) NOT NULL,
  `estadoins` varchar(200) NOT NULL,
  `ciclo` varchar(200) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `disciplinains` varchar(200) NOT NULL,
  `fechaingreso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `foto`, `nombre`, `apellido1`, `apellido2`, `edad`, `nacionalidad`, `genero`, `fecha_nacimiento`, `curp`, `domicilio`, `comunidad`, `municipio`, `correo`, `institucion`, `domicilioins`, `municipioins`, `estadoins`, `ciclo`, `matricula`, `disciplinains`, `fechaingreso`) VALUES
(10, 0x666f746f732f666f746f322e6a7067, 'Alexa', 'Hernandez', 'Matias', '17', 'mexicana', 'extranjera', '1995-12-27', 'ALH951227MQTRTS09', 'calle #12 Colonia Centro', 'PathÃ©', 'Cadereyta', '', '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
