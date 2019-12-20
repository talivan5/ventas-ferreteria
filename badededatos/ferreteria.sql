-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-12-2019 a las 16:58:05
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`, `condicion`, `created_at`, `updated_at`) VALUES
(1, 'Balanzas', 'Instrumento para pesar mediante la comparación del objeto que se quiere pesar con otro de peso conocido', 1, '2019-12-20 14:01:40', '2019-12-20 14:01:40'),
(2, 'Peladoras y Esquiladoras', 'Herramienta para pelar verduras y frutas con el que se aprovecha la mayor parte de ellas; su forma es similar a la de un cuchillo, pero con la hoja de cortar móvil.', 1, '2019-12-20 14:03:36', '2019-12-20 14:13:59'),
(3, 'Electrificadores Rurales', 'Este equipo genera una tensión de algunos miles de voltios pero de baja corriente.', 1, '2019-12-20 14:04:54', '2019-12-20 14:14:19'),
(4, 'Equipos a Explosión', 'Una explosión de polvo de azúcar refinado puede generar un exceso de presión de 100 psi dentro de un equipo de procesamiento cerrado en menos de 100.', 1, '2019-12-20 14:06:11', '2019-12-20 14:06:11'),
(5, 'Humedimetros', 'El humedímetro, una herramienta clave para guardar pasturas y granos a punto.', 1, '2019-12-20 14:07:49', '2019-12-20 14:07:49'),
(6, 'Muestreadores de Suelo', 'Se refiere a la muestra de suelo obtenida por la extracción de varias muestras simples o submuestras,', 1, '2019-12-20 14:09:26', '2019-12-20 14:09:26'),
(7, 'Medicion', 'La medición es un proceso básico de la ciencia que se basa en comparar una unidad de medida seleccionada con el objeto o fenómeno cuya magnitud física', 1, '2019-12-20 14:11:19', '2019-12-20 14:11:19'),
(8, 'Análisis de Granos', 'Los análisis para determinar la calidad de las semillas son diferentes a los que se realizan para la determinación de calidad en granos.', 1, '2019-12-20 14:12:01', '2019-12-20 14:12:01'),
(9, 'Energias Alternativas', 'las energías alternativas Hablamos de energías renovables y del reto global que suponen.', 1, '2019-12-20 14:12:49', '2019-12-20 14:12:49'),
(10, 'Herramientas Electricas', 'las herramientas eléctricas, las más usadas, los tipos que hay y sus normas de seguridad e higiene. Pero lo primero.', 1, '2019-12-20 14:28:19', '2019-12-20 14:28:19'),
(11, 'Alambrada', 'Una alambrada, también llamado alambrado, es una estructura de alambre, habitualmente de acero, separada por postes de madera o metal', 1, '2019-12-20 14:38:46', '2019-12-20 14:38:46'),
(12, 'Tranqueras', 'Tranqueras es una ciudad uruguaya del departamento de Rivera. Es además sede del municipio homónimo.', 1, '2019-12-20 14:39:18', '2019-12-20 14:39:18'),
(13, 'Mangas de Metal', 'Toda la linea metalica Mecano Ganadero y Clipex: Volteador de terneros, paneles, mangas de metal, cargador móvil, cepos, toriles. Envíos, Garantía, cuotas.', 1, '2019-12-20 14:42:54', '2019-12-20 14:42:54'),
(14, 'Mangas de Madera Dura', 'Encontrá de todo en instalaciones ganaderas de madera dura. Trabajamos Mangas, bretes, trancas, cepos, cargadores, casillas de operar, potros lecheros.', 1, '2019-12-20 14:48:45', '2019-12-20 14:48:45'),
(15, 'Molinos', 'Molino es todo ingenio, artefacto o maquinaria que sirve para moler utilizando una energía, sea la fuerza del viento o del agua; o un motor, sea térmico', 1, '2019-12-20 14:49:38', '2019-12-20 14:49:38'),
(16, 'Bebederos y Aguadas', 'Venta de bebederos de cemento, bebederos galvanizados, con flotante y cubre flotante. 3 cuotas sin interes! Entre Ahora!', 1, '2019-12-20 14:50:48', '2019-12-20 14:50:48'),
(17, 'Tanques Australianos', 'Como su nombre lo indica, estos tanques fueron diseñados originalmente en el país del hemisferio sur como alternativa para recolectar agua', 1, '2019-12-20 15:01:23', '2019-12-20 15:01:23'),
(18, 'Tanques de Agua', 'Los tanques de agua son un elemento fundamental en una red de abastecimiento de agua potable, para compensar las variaciones horarias de la demanda', 1, '2019-12-20 15:02:39', '2019-12-20 15:02:39'),
(19, 'Linea Animal', 'Ofrecemos insumos para la la producción de animales ovinos, caprinos, bovinos, porcinos y aves, así como las mascotas del hogar.', 1, '2019-12-20 15:04:37', '2019-12-20 15:04:37'),
(20, 'Linea Agricola', 'Una línea completa de equipos diseñados para analizar y ordenar su producción de cultivos de procesamiento de granos.', 1, '2019-12-20 15:05:20', '2019-12-20 15:05:20'),
(21, 'Surtidores de combustible', 'El surtidor de combustible es una máquina de una gasolinera que se utiliza para poner la gasolina en coches.', 1, '2019-12-20 15:10:25', '2019-12-20 15:10:25'),
(22, 'Instrumentos de Seguridad', 'La seguridad es sumamente importante dentro de las empresas, principalmente por el alto índice de accidentalidad laboral que se presenta actualmente', 1, '2019-12-20 15:13:38', '2019-12-20 15:13:38'),
(23, 'Accesorios para PickUp', 'EQUIPAMIENTOPARA CAMIONETAS. FORD ... Destacadas. Accesorios Cromados .... Este sitio puede contener material original y exclusivo de My PickUp.', 1, '2019-12-20 15:14:49', '2019-12-20 15:14:49'),
(24, 'Pulverización', 'Pulverización es el procedimiento de pulverizar y el resultado del mismo. El verbo pulverizar, que procede del vocablo latino pulverizāre, se refiere a difuminar', 1, '2019-12-20 15:15:31', '2019-12-20 15:15:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoM` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_articulo` int(10) UNSIGNED NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` decimal(11,2) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_20_121434_create_categoria_table', 1),
(4, '2017_12_20_124047_create_articulo_table', 1),
(5, '2017_12_20_133303_create_detalle_table', 1),
(6, '2017_12_20_134426_create_venta_table', 1),
(7, '2019_12_02_070508_create_roles_table', 1),
(8, '2019_12_02_070826_create_role_user_table', 1),
(9, '2019_12_20_035656_create_cliente_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-12-20 13:57:12', '2019-12-20 13:57:12'),
(2, 'user', 'Cliente', '2019-12-20 13:57:12', '2019-12-20 13:57:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `rol` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `rol`, `password`, `created_at`, `updated_at`) VALUES
(1, 'juan', 'juan@gmail.com', NULL, 'user', '$2y$10$fVbBPVy/J/6lTUGdLtyguebDomkIFKiENrpLsiOAFOQp/I/5EoTA.', '2019-12-20 13:57:12', '2019-12-20 13:57:12'),
(2, 'admin', 'admin@gmail.com', NULL, 'admin', '$2y$10$L7YT8UEtOBjYgA5Zn0ZIf.fkk.7Umg9osRpWrr6mvcJLKK2.6YZEq', '2019-12-20 13:57:12', '2019-12-20 13:57:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombreCliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreProducto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` decimal(11,2) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulo_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_id_users_foreign` (`id_users`),
  ADD KEY `detalle_id_articulo_foreign` (`id_articulo`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_id_articulo_foreign` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
