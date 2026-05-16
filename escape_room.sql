-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 16-05-2026 a las 16:20:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escape_room`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pistas`
--

CREATE TABLE `pistas` (
  `id` int(11) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` varchar(100) NOT NULL,
  `mensaje_exito` text NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pistas`
--

INSERT INTO `pistas` (`id`, `pregunta`, `respuesta`, `mensaje_exito`, `orden`) VALUES
(1, 'Soy la estructura principal de una página web. Sin mí, no hay etiquetas ni contenido ordenado. ¿Quién soy?', 'HTML', '¡Correcto! Has desbloqueado la estructura base del servidor.', 1),
(2, 'Soy el lenguaje que da color, forma y estilo a una página web. ¿Quién soy?', 'CSS', '¡Excelente! El servidor ahora tiene estilo y diseño.', 2),
(3, 'Trabajo del lado del cliente y puedo validar formularios, mostrar alertas o cambiar elementos de la página. ¿Quién soy?', 'JavaScript', '¡Muy bien! Has activado los scripts interactivos del sistema.', 3),
(4, 'Vivo en el servidor, proceso formularios y puedo conectarme a una base de datos. ¿Quién soy?', 'PHP', '¡Espectacular! Acceso al núcleo del servidor concedido.', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pistas`
--
ALTER TABLE `pistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pistas`
--
ALTER TABLE `pistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
