-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2020 a las 16:54:24
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `softwareciis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sur_name` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `role` enum('ADMIN_ROLE','USER_ROLE','','') COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'USER_ROLE',
  `password` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `google` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `sur_name`, `email`, `role`, `password`, `google`) VALUES
(1, 'nain.acero24@gmail.com', 'Acero Mamani', 'nain.acero24@gmail.com', 'USER_ROLE', '$2y$10$VhFnJI.fy31FKuObbnZA9eI49AHB2weyVhEBr7SWjlhM3fchxw85q', 0),
(2, 'a_nacerom@unjbg.edu.pe', 'Acero Mamani', 'a_nacerom@unjbg.edu.pe', 'USER_ROLE', '$2y$10$qUqY259vtb/a7Ab9dX90TuVASiNXwYRTodGQ6nKIL2nEdTGipxPKi', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
