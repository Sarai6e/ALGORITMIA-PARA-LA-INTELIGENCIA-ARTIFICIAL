-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2024 a las 17:28:27
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
-- Base de datos: `el_tornillo_feliz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas_pago`
--

CREATE TABLE `formas_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formas_pago`
--

INSERT INTO `formas_pago` (`id`, `nombre`) VALUES
(1, 'Tarjeta de crédito'),
(2, 'Transferencia bancaria'),
(3, 'Pago en efectivo'),
(4, 'PayPal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `passwords`
--

CREATE TABLE `passwords` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `generated_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `passwords`
--

INSERT INTO `passwords` (`id`, `email`, `generated_password`, `created_at`) VALUES
(1, 'usuario1@example.com', 'contraseña1', '2024-02-26 17:18:27'),
(2, 'usuario2@example.com', 'contraseña2', '2024-02-26 17:18:27'),
(3, 'usuario3@example.com', 'contraseña3', '2024-02-26 17:18:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `stock`) VALUES
(1, 'Martillo', 15.99, 48),
(2, 'Destornillador', 9.50, 97),
(3, 'Sierra', 25.75, 28),
(4, 'Tornillos (100 unidades)', 5.99, 200),
(5, 'Pintura blanca (1 galón)', 19.99, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `full_name`, `username`, `email`, `phone_number`, `password`, `gender`) VALUES
(1, 'w', 'df', 'juan@example.com', '99999999', '$2y$10$xvYthH.ScZeAKbwcv34skOyw/GADvzjfquW0B.Rinv3hXTD2MMYie', 'Male'),
(2, 'w', 'dsfadf', 'sonserchimer@gmail.com', '23456789', '$2y$10$psp8ZSH9oRUtqcjRAQYP/eoxApnuWh3diNYcmTmVpPb3ryYgj0gZm', 'Female'),
(3, 'edf', 'dfvdf', 'giovanni1728@gmail.com', '123456789', '$2y$10$Se1WMTnUL0.c9lZ/5PnWguDplzp1Q6N5uX3maCrCqS3Z.CPAR/WEq', 'Female'),
(6, 'wefew', 'dfas', 'ergers@gmail.com', '43567890', '', 'Female'),
(7, 'dfvsdfb', 'fesss', 'esgffd@gmail.com', '2312345', '$2y$10$hWO7NuZeHBjxX98YrDiqWufcNvs6ST3tBtx83hODe1savM7gkoCby', 'Male');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(6, '1472173@senati.pe', '$2y$10$7bG047fK7ZOS363rXo12LeQ6yOLDgtl4j82rv6W/bUb9RLVbbumu.'),
(7, '1472173@senati.pe', '$2y$10$FV/1boeBFBH03YfvLGHhwe6ZpnvTeT3sVTUJg4UhGHws5.ubKR14a'),
(8, '147593@senati.pe', '$2y$10$zSq2ewnjXf2Gcl8z.tqbq.ybB/AnpLvlZSb1dLI4taY1U/NQsjmMi'),
(9, '1472173@senati.pe', '$2y$10$nMA9iFg3xHDxbtuWSzWOS.pHWhYTiZWFloLF1Vfly51hdUVbFhnbS'),
(11, 'dsfadf', '$2y$10$xBPQrGe9isTUfDrG0i9M0u3rjoYcsCG2xprxUi4K2NJUHwfkE005.'),
(12, 'eeee', '$2y$10$l8nlmL1txsYgzrsVWEg8LOoDrZ58ZGAZXlD.c.Qb4HIOJuZCClC16'),
(13, 'dds', '$2y$10$gBGbIBlEXMwlohtJ7aN6c.lHHb0bAmTCETZNqtKhsBDDu6U/.HAEK'),
(14, '', '$2y$10$v..J.i.cZeZV.Fm0dcnBqeuiflmejgHp21gngGjKixgBVZcDhQfWy'),
(15, '', '$2y$10$TIHBilSUIv/sQ92c09vxjutDJVqv7QgUrtcHx5IDiJU3/RFI2h3zW'),
(16, '', '$2y$10$cIgMR0PjScbBzrl/G7YaGeV83fGLwFJh6lVds/TVPUjF864x1iut6'),
(17, '', '$2y$10$dF.BEpjZQfFFqqov49eBjOdVXpgVjNLI8y72bSKp1JL5Kqt0mgBBi'),
(18, '', '$2y$10$fBIOgTBZy9LVqjkTijLfYeFT.kM7Bn2cuBZUfwcnY43NM4FHh7GOK'),
(19, '', '$2y$10$GFtYL2VPQ9YN.QO87gFEGOxOg5X8jWOnaW11gDg/JjCe.Op/ln3GS'),
(20, '', '$2y$10$jxMh29Lv2BPEUdhxZc9tNumQoLAwphXzsJ0cK5IjSqBeqQYBekg5y'),
(21, '', '$2y$10$QDbuTp/2cBHDfIhB9Y/ePektn57N9LycG7WnCBNZqEAri/BLWF5C2'),
(22, '', '$2y$10$iWEVBimE8Tt9DRpUM9tVKeXLTuNCOvMXeLSYrojKc1SO9sEdBJyYy'),
(23, '', '$2y$10$A3z5SWMQ0vOJ5gZiLp58/OjfjwQAAXr7.FYz5pzWs1QjaoDT5SQ1e'),
(24, 'dds', '$2y$10$nhxqYsfAhcVYjW7U/j.yFu4CQ69n8nXTxDFbjEtV.nI//8XkyVjo.'),
(25, '', '$2y$10$3mG/TlMNvXqeeye2mx/kveEXDjEmB2rDeVhNI4WDFgimsxx1TkIP6'),
(26, '', '$2y$10$oFkP6cXxUhSqtRlUfDBllO2UyqSRI0iDqHEgu0aHOHnYae2wdXPiK'),
(27, '', '$2y$10$yNnHDFAjaHf3toqKOUoC5Oprz0nhcntv2cKrBvzuQ1RuW8ewXKY3u'),
(28, '', '$2y$10$oiliqyMyHzwlipPr2LgekuqdHjA7ajnbmK5auMVb71zC6yBQb9zxW'),
(30, '', '$2y$10$VxB7wTT0u0KsTRxrF62zLuajCr/NIYrDqx.s32QgBwRWde6fVPZOW'),
(31, '', '$2y$10$vyb98JbKQLYrkee5XygjKeU2.VugDnv8d2kot6CMsEvAWKAaUVUwy'),
(32, '1472173@senati.pe', '$2y$10$/1DKLDJ0UB0FoqH2lwF5FuH0I0lbP4YaUwYYhT44UyZs4PvbZJPn6'),
(33, '', '$2y$10$viQBXYYjnBtadl6zWrTz5.YgF91VCUlhN3vHp4WUKKs7qZrqHaxoW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formas_pago`
--
ALTER TABLE `formas_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formas_pago`
--
ALTER TABLE `formas_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
