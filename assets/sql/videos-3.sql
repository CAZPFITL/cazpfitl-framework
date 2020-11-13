-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-08-2020 a las 08:40:31
-- Versión del servidor: 8.0.15
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academiansphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `urlcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sistema` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subsistema` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `modalidad` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apartado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `nombre`, `urlcode`, `sistema`, `subsistema`, `modalidad`, `tipo`, `curso`, `nivel`, `apartado`) VALUES
(1, 'Funcionamiento del Menu QR', 'D4ZX_s_mCtw', 'E-Delivery', '', 'Gratuito', 'Guia de Funcionamiento', '', 'Principiante', 'Menu QR'),
(2, 'Proceso de activación de nuevas funcionalidades de E-Menu QR', '63FIb567pOA', 'E-Delivery', '', 'Gratuito', 'Guia de Funcionamiento', '', 'Intermedio', 'Menu QR'),
(3, '1. Recomendaciones iniciales Soft Restaurant® E-Delivery', 'bZU-a6m6Dwo', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante', ''),
(4, '2. Creación de cuenta Soft Restaurant® E-Delivery', 'tMlFaO3iFZ8', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante', ''),
(5, '3. Sincroniza correctamente Soft Restaurant® E-Delivery', 'ZDcDX8PgukY', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante', ''),
(6, '4. Conoce las funciones de Soft Restaurant ® E-Delivery', '9Cr7ddia5z0', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante', ''),
(7, '5. Crea tus perfiles y usuarios en Soft Restaurant® E-Delivery', 'B7YBsOc6haA', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante', ''),
(8, '6. Configura tu portal Soft Restaurant ® E-Delivery', 'cYm3fo7-7FQ', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante', ''),
(9, '7. Agrega promociones en Soft Restaurant ® E-Delivery', '6390WBSJ0Zc', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante', ''),
(10, 'NSPOS - Administración de inventarios en NS POS', 'QUzRu8Qso2s', 'NS Pos', '', 'Gratuito', 'Guia Funcionamiento', '', 'Principiante', 'Inventarios'),
(11, 'NSPOS - Generar facturas en NS POS', '49ch0DuCgA8', 'NS Pos', '', 'Gratuito', 'Guia Funcionamiento', '', 'Principiante', 'Facturación'),
(12, 'NSPOS - Creación y modificación de impuestos en NS POS', 'HyLFC4nWwl4', 'NS Pos', '', 'Gratuito', 'Guia Funcionamiento', '', 'Principiante', 'Configuración General'),
(13, 'NSPOS - Asignar descuentos a productos desde NS POS', '70HgcDTUlzc', 'NS Pos', '', 'Gratuito', 'Guia Configuración', '', 'Principiante', 'Configuración Productos'),
(14, 'NSPOS - Creación de productos compuestos en NS POS', 'BSINjYNTZqg', 'NS Pos', '', 'Gratuito', 'Guia Configuración', '', 'Principiante', 'Configuración Productos'),
(15, 'NSPOS - Crear productos en NS POS', 'u1TwOHelFE8', 'NS Pos', '', 'Gratuito', 'Guia Configuración', '', 'Principiante', 'Configuración General'),
(16, 'Conoce National Soft Hoteles 3.0', 'NcXSZ-YAAKk', 'NS Hoteles', '', 'Gratuito', 'Guia Funcionamiento', '', 'Principiante', 'Funcionamiento General'),
(17, 'Qué es el Booking Center de NS Hoteles Pt.1', '_gIw8sH70Rw', 'NS Hoteles', 'Booking Center', 'Gratuito', 'Guia Funcionamiento', '', 'Principiante', 'Funcionamiento General');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
