-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2023 a las 22:15:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla_actividad`
--

CREATE TABLE `planilla_actividad` (
  `unidad` int(4) NOT NULL,
  `destino` varchar(80) NOT NULL,
  `parada` varchar(80) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `planilla_actividad`
--

INSERT INTO `planilla_actividad` (`unidad`, `destino`, `parada`, `fecha`, `hora`) VALUES
(123, 'Av bolivar', 'Iuta', '2023-04-20', '23:56:00'),
(123, 'Av bolivar', 'Iuta', '2023-04-20', '23:57:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `asunto` varchar(80) NOT NULL,
  `reporte` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`nombre`, `correo`, `asunto`, `reporte`) VALUES
('nelson', 'soynelsond@gmail.com', 'prueba', 'pruebas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `parada` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `password`, `tipo_usuario`, `cedula`, `telefono`, `parada`, `email`, `nombre`, `apellido`) VALUES
(20, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, '29692406', '+5842437784', '9no ining', 'soynelsond@gmail.com', 'nelson', 'carrero'),
(711, 'c3696525db13da30135ee0c490556dc9539665d0', 1, '29692406', '+5842437784', 'Encrucijada de PaloNegro', 'soynelsond@gmail.com', 'Nelson Daniel', 'Carrero Rescigno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
