-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 20:03:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `interestelar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `que le paso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `accion`, `que le paso`) VALUES
(1, 'tars', 'salvar la humanidad', 'se sacrifico por el endurence'),
(2, 'tars', 'salvar la humanidad', 'se sacrifico por el endurence'),
(3, 'case', 'salvar la tierra', 'murio a base de una explosion'),
(4, 'case', 'salvar la tierra', 'murio a base de una explosion'),
(5, 'murph', 'encontrar la respuesta', 'lo logro y murio de bejes'),
(6, 'murph', 'encontrar la respuesta', 'lo logro y murio de bejes'),
(7, 'cooper', 'salvar a su familia', 'se sacrifico por el endurence (logro sobrevivir)'),
(8, 'cooper', 'salvar a su familia', 'se sacrifico por el endurence (logro sobrevivir)'),
(9, 'brand', 'salvar la humanidad', 'logro repoblar un planeta'),
(10, 'brand', 'salvar la humanidad', 'logro repoblar un planeta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
