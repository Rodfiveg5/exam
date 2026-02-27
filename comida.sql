-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2026 a las 18:25:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2026_02_27_021513_create_tb_tipo_comidas_table', 1),
(2, '2026_02_27_021536_create_tb_comidas_table', 1),
(3, '2026_02_27_050953_sessions', 1),
(4, '2026_02_27_051313_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bG8rflCbMx9OfnbhZzoD1hBwKS76cDY011eGLYaf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGlVS0pMbHBscFNFUjlydWtYS3U2QTZJNzc1TnQ0VXk5YWdSTHd3dSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb21pZGFzLzEvZWRpdCI7czo1OiJyb3V0ZSI7czoxMjoiY29taWRhcy5lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1772212942);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comidas`
--

CREATE TABLE `tb_comidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_comida` varchar(255) NOT NULL,
  `costo_comida` decimal(8,2) NOT NULL,
  `descripcion_comida` varchar(255) NOT NULL,
  `id_tb_tipo_comidas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_comidas`
--

INSERT INTO `tb_comidas` (`id`, `nombre_comida`, `costo_comida`, `descripcion_comida`, `id_tb_tipo_comidas`, `created_at`, `updated_at`) VALUES
(1, 'Agua de jamaica', 35.00, 'Agua de 355ml', 1, '2026-02-27 12:46:37', '2026-02-27 13:54:06'),
(12, 'Refresco', 22.00, 'Refresco de lata 355ml', 1, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(13, 'Licuado de Fresa', 35.00, 'Licuado natural con leche', 1, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(14, 'Flan Napolitano', 40.00, 'Flan casero tradicional', 2, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(15, 'Gelatina', 20.00, 'Gelatina de sabores variados', 2, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(16, 'Pastel de Chocolate', 45.00, 'Rebanada individual', 2, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(17, 'Milanesa de Pollo', 85.00, 'Incluye arroz y ensalada', 3, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(18, 'Carne Asada', 95.00, 'Acompañada de frijoles y tortillas', 3, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(19, 'Enchiladas Verdes', 80.00, 'Rellenas de pollo con crema', 3, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(20, 'Nachos', 55.00, 'Totopos con queso y jalapeño', 4, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(21, 'Quesadillas', 50.00, 'Orden de 3 quesadillas', 4, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(22, 'Guacamole', 60.00, 'Aguacate preparado con totopos', 4, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(23, 'Sopa de Fideos', 45.00, 'Sopa tradicional casera', 5, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(24, 'Caldo de Pollo', 70.00, 'Con verduras y arroz', 5, '2026-02-27 07:53:01', '2026-02-27 07:53:01'),
(25, 'Sopa Azteca', 65.00, 'Con tortilla frita y queso', 5, '2026-02-27 07:53:01', '2026-02-27 07:53:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_comidas`
--

CREATE TABLE `tb_tipo_comidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_categoria` enum('Bebidas','Postres','Platillos Fuertes','Entradas','Sopas') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_tipo_comidas`
--

INSERT INTO `tb_tipo_comidas` (`id`, `nombre_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Bebidas', '2026-02-27 12:46:37', '2026-02-27 12:46:37'),
(2, 'Postres', '2026-02-27 12:46:37', '2026-02-27 12:46:37'),
(3, 'Platillos Fuertes', '2026-02-27 12:46:37', '2026-02-27 12:46:37'),
(4, 'Entradas', '2026-02-27 12:46:37', '2026-02-27 12:46:37'),
(5, 'Sopas', '2026-02-27 12:46:37', '2026-02-27 12:46:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tb_comidas`
--
ALTER TABLE `tb_comidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_comidas_id_tb_tipo_comidas_foreign` (`id_tb_tipo_comidas`);

--
-- Indices de la tabla `tb_tipo_comidas`
--
ALTER TABLE `tb_tipo_comidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_comidas`
--
ALTER TABLE `tb_comidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tb_tipo_comidas`
--
ALTER TABLE `tb_tipo_comidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_comidas`
--
ALTER TABLE `tb_comidas`
  ADD CONSTRAINT `tb_comidas_id_tb_tipo_comidas_foreign` FOREIGN KEY (`id_tb_tipo_comidas`) REFERENCES `tb_tipo_comidas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
