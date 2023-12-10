-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 31-10-2023 a las 04:50:51
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
-- Base de datos: `todofitnessbd`
--

create database todofitnessbd;
use todofitnessbd;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `stock`, `precio`, `imagen`) VALUES
(1, 'Proteina Nutrilab Whey Pro 2.0 1KG', 'WHEY PRO NUTRILAB Excelente Proteina!', 10, 6500, 'assets/imagenes/1proteinanutrilab.jpg'),
(2, 'SHAKER XTRENGHT', 'SHAKER XTRENGHT A ROSCA', 403, 1700, 'assets/imagenes/2shaker.png'),
(3, 'Banco Essential Flat Bench - Adidas', 'Fuerte, cómodo y versátil con un diseño compacto, el banco Adidas es ideal para completar su gimnasio', 10, 50000, 'assets/imagenes/3banco.jpg'),
(4, 'CREATINA MONOHIDRATO 300 Grs - STAR NUTRITION', '300G | 60 SERV. | 5G CREATINA X SERV. | ULTRAMICRONIZED - La creatina monohidrato es recomendada durante un plan de entrenamiento para aumentar la fuerza, resistencia y recuperación', 5, 16500, 'assets/imagenes/4creatina.jpg'),
(5, 'BARRAS PROTEICAS: IRON BAR x CAJA 20 UNIDADES', 'Iron Bar es una barra nutricional con un importante aporte de proteínas de suero lácteo e hidratos de carbono.', 3, 8500, 'assets/imagenes/5ironbar.jpg'),
(6, ' Cinta motorizada para correr - Randers', 'Cinta de correr motorizada programable con pantalla LCD y consola de fondo de luz azul con tiempo, distancia, velocidad, calorías, inclinación y pulso y grasa corporal.', 5, 337590, 'assets/imagenes/6cinta.jpg'),
(7, 'Barra Olímpica 20 KG', 'BARRA OLIMPICA PROFESIONAL DE 2.20 MTS DE 20 KG – con rodamiento', 10, 185000, 'assets/imagenes/7barraolimpica.jpg'),
(8, 'Whey Protein Body Advance 3 kg', 'SUPLEMENTO DIETARIO A BASE DE SUERO LÁCTEO DE ALTA CALIDAD, CON AMINOÁCIDOS Y VITAMINA C, PARA SU MEJOR ASIMILACIÓN.', 10, 17500, 'assets/imagenes/8proteinabody.png'),
(9, 'Rueda de Abdominales Athletic AT-13476', 'Rueda Abdominal ancha.', 2, 5400, 'assets/imagenes/9rueda.jpg'),
(10, 'KIT MANCUERNAS 15KG', 'Excelentes mancuernas ideales para entrenar en casa', 11, 15000, 'assets/imagenes/10mancuerna.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nombre`, `apellido`, `dni`) VALUES
(1, 'admin', '', 1234),
(2, 'Mario', 'Castro', 37562873),
(3, 'Juan', 'Toledo', 41284990),
(4, 'Alex', 'Gutierrez', 44315563);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
