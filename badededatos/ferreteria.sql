-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2019 at 11:47 AM
-- Server version: 10.1.41-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-13+0~20191128.24+debian9~1.gbp832d85

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ferreteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
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

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`id`, `id_categoria`, `codigo`, `nombre`, `slug`, `stock`, `descripcion`, `imagen`, `estado`, `condicion`, `created_at`, `updated_at`) VALUES
(1, 5, '78945', 'Higrómetro Delver HD-1023 Sin Impresora', '500', 550, 'El Humedimetro Delver HD1023 es un Medidor de Humedad Plantas de Almacenamiento de granos, tales como cooperativas y cerealistas de menor porte', 'higrometro-delver-hd1023-sin-impresora_2209_5611.jpg', 'Activo', 1, '2019-12-20 20:21:30', '2019-12-21 01:51:55'),
(2, 5, '32434', 'Sonda temperatura y humedad John Deere SW007320', '5000', 400, 'Es el primer y único medidor de humedad de heno que incluye un calibrador.', 'sonda-temperatura-y-humedad-john-deere-sw007320_740_1130.jpg', 'Activo', 1, '2019-12-21 01:51:32', '2019-12-21 01:51:32'),
(3, 5, '4554', 'Sonda humedad y temperatura John Deere SW16136', '350', 200, 'Sonda John Deere Ideal para controlar la humedad del forraje antes de la confección. Utilizado principalmente  en la elaboración de rollos y fardos.', 'sonda-humedad-y-temperatura-john-deere-sw16136_735_1159.jpg', 'Activo', 1, '2019-12-21 01:53:46', '2019-12-21 01:53:46'),
(4, 5, '8555', 'Humedimetro Draminsky HMM para heno, forraje y silo', '500', 380, 'Conocer el contenido de humedad en el heno y la paja es muy importante para el granjero por muchas razones.', 'humedimetro-draminsky-hmm-para-heno-forraje-y-silo_1725_4217.jpg', 'Activo', 1, '2019-12-21 02:04:50', '2019-12-21 02:04:50'),
(5, 5, '5866', 'Humedímetro Forraje WILE 25', '4000', 430, 'El Humedimetro, medidor de humedad en forrajes WILE 25, mide de la humedad, en lectura directa, del forraje en rollos, fardos, hileras, silos o en producto antes de ser empacado.', 'humedimetro-forraje-wile-25_97_1209.jpg', 'Activo', 1, '2019-12-21 02:06:28', '2019-12-21 02:06:28'),
(6, 5, '6457', 'Lanza Wile W651 L', '4535', 460, 'La Lanza Wile W651 L para Humedimetros Wile 65 y Wile 26 es una zonda que permite medir la temperatura de diferentes productos y sustancias como granos, forrajes, suelo, etc.', 'sonda-temperatura-y-humedad-john-deere-sw007320_740_1130.jpg', 'Activo', 1, '2019-12-21 02:08:49', '2019-12-21 02:08:49'),
(7, 5, '5854', 'Humedimetro WILE 26', '600', 500, 'Wile 26 es un medidor de humedad digital para heno seco, ensilaje y forrajes. Wile 26 mide la humedad ensilaje de hasta 70%.', 'humedimetro-wile-26_422_1213.jpg', 'Activo', 1, '2019-12-21 02:12:23', '2019-12-21 02:12:23'),
(8, 5, '5785', 'Humedímetro WILE 55', '580', 568, 'El humedimetro portátil Wile55 es una herramienta básica para todos los agricultores y ganaderos que mide con exactitud la humedad de granos y semillas.', 'humedimetro-wile-55_334_1165.jpg', 'Activo', 1, '2019-12-21 02:14:40', '2019-12-21 02:14:40'),
(9, 5, '5854', 'Humedímetro Tesma Campo 2', '700', 95, 'Con el Humedimetro Tesma Campo 2 necesita sólo tres pasos para realizar una medición. Esta diseñado para el trabajo en el campo, es robusto y totalmente portátil, incorpora lectura directa de la humedad de 18 granos diferentes.', 'humedimetro-tesma-campo-2_484_2057.jpg', 'Activo', 1, '2019-12-21 02:16:20', '2019-12-21 02:16:20'),
(10, 5, '5874', 'Humedímetro Delver HD-1000-DD', '400', 100, 'Todo el equipo del Humedimetro Delver HD-1000-DD (determinador de humedad, balanza y accesorios), están ubicados en una sólida caja que al ser cerrada se transforma en una cómoda valija.', 'humedimetro-delver-hd1000dd_13_2872.jpg', 'Activo', 1, '2019-12-21 02:17:17', '2019-12-20 23:17:38'),
(11, 5, '4554', 'Humedímetro Wile 200', '600', 60, 'Compensación automática de temperaturaSistema de nivelación integradoDiseño sin compactación', 'humedimetro-wile-200_1655_4018.jpg', 'Activo', 1, '2019-12-21 02:20:29', '2019-12-20 23:18:39'),
(12, 5, '1528', 'Humedímetro Delver 1021 ECO', '580', 76, 'El mas económico de la Línea DELVER, no por eso menos rápido y preciso que el HD1021.  Facil de utilizar y transportar, informa en pocos segundos humedad y temperatura de la muestra', 'humedimetro-delver-1021-eco_1092_2322.jpg', 'Activo', 1, '2019-12-21 02:22:25', '2019-12-20 23:20:54'),
(13, 5, '4545', 'Humedímetro John Deere SW30300', '563', 671, 'Humedimetro de granos GT 30300 el mas detacado de la linea John Deere, permite la lectura directa de 16 granos predeterminados de fábrica, teniendo espacio para 40 curvas mas.', 'humedimetro-john-deere-sw30300_741_1162.jpg', 'Activo', 1, '2019-12-21 02:24:48', '2019-12-21 02:24:48'),
(14, 6, '435', 'Penetrometro de suelos WILE', '345', 456, '- Largo: 95 cm.\r\n- Reloj de presion sumergido en glicerina para reducir las ocilaciones y aumentar su vida util.\r\n- Incluye 2 puntas diferentes intercambiables.\r\n- Marca: WILE.\r\n- Lanza de acero inoxidable.', 'penetrometro-de-suelos-wile_414_1261.jpg', 'Activo', 1, '2019-12-20 23:23:20', '2019-12-20 23:23:20'),
(15, 6, '4544', 'Martillo con Grillon para muestreadores', '678', 89, 'Martillo con Grillon para ayudar a insertar el muestreador en el suelo.\r\n\r\nPunta de teflon.\r\n\r\nDiseñado para no estropear el muestreador.', 'martillo-con-grillon-para-muestreadores_1723_4207.jpg', 'Activo', 1, '2019-12-20 23:24:40', '2019-12-20 23:24:40'),
(16, 6, '4544', 'Muestreador de suelos para tosca', '239', 59, 'marca: Berasueta.\r\n- Cuerpo de acero inoxidable.\r\n- Empuñadura de acero esmaltado.\r\n- Largo: 1.15 m.\r\n- Empuñaduras de goma.\r\n- Mango desmontable.\r\n- Marcas cada 10 cm.', 'muestreador-de-suelos-para-tosca_100_1259.jpg', 'Activo', 1, '2019-12-20 23:26:19', '2019-12-20 23:26:19'),
(17, 6, '6756', 'Prolongacion para Muestreador de suelos rotativo', '889', 85, 'Prolongación de 1 metro de largo para calador de suelos Rotativo o Helicoidal', 'prolongacion-para-muestreador-de-suelos-rotativo_1722_4206.jpg', 'Activo', 1, '2019-12-20 23:27:43', '2019-12-20 23:27:43'),
(18, 6, '4544', 'Muestreador Tubular de suelos SR 30', '98', 71, 'Características del calador tubular de suelos SR 30\r\n\r\nReforzado, prolongable para llegar a dos metros de profundidad y con cabezal de material duro para golpear en la manija', 'muestreador-tubular-de-suelos-sr-30_1971_4804.jpg', 'Activo', 1, '2019-12-20 23:29:05', '2019-12-20 23:29:05'),
(19, 6, '4566', 'Puntera de repuesto SR20', '954', 36, 'Puntera de repuesto para muestreador Tornomar SR20. Compatible con SR30.', 'puntera-de-repuesto-sr20_1972_4806.jpg', 'Activo', 1, '2019-12-20 23:30:41', '2019-12-20 23:30:41'),
(20, 6, '5545', 'Boquilla para calador SR20/SR30', '786', 67, 'Boquilla de corte para caño de 25.4 correspondiente a los caladores Tornomar SR20 /SR30\r\nRepuesto Original', 'boquilla-para-calador-sr20sr30_1970_4803.jpg', 'Activo', 1, '2019-12-20 23:32:00', '2019-12-20 23:32:00'),
(21, 6, '5645', 'Muestreador de Suelos con Pico y Tacho', '676', 90, 'El Muestreador de suelo con tacho es usado para realizar submuestras de 20 cm de profundidad.\r\nEste calador nos permite almacenar hasta 15 submuestras.', 'muestreador-de-suelos-con-pico-y-tacho_410_1096.jpg', 'Activo', 1, '2019-12-20 23:33:05', '2019-12-20 23:33:05'),
(22, 5, '7899', 'Anemometro para SmartPhone', '677', 78, 'El Medidor de viento o anemometro Vaavud y su App gratuita, transforma tu smartphone en una herramienta meteorologica de alta tecnologia.', 'anemometro-para-smartphone_2255_5816.jpg', 'Activo', 1, '2019-12-21 00:40:41', '2019-12-21 00:40:41'),
(23, 5, '3234', 'Anemometro Digital 3 en 1 TL300', '454', 67, 'La temperatura del aire y la humedad tienen un efecto pronunciado en la tasa de evaporación de las gotas, así como la actividad de algunos plaguicidas,', 'anemometro-digital-3-en-1-tl300_1573_3832.jpg', 'Activo', 1, '2019-12-21 00:41:49', '2019-12-21 00:42:03'),
(24, 5, '2334', 'Anemometro Digital TFA', '871', 123, 'Anemómetro portátil digital de hélice direccional con termómetro', 'anemometro-digital-tfa_1093_2328.jpg', 'Activo', 1, '2019-12-21 00:43:42', '2019-12-21 00:44:18'),
(25, 10, '3422', 'Hidrolavadora Dowen Piagio 140 BAR', '861', 98, 'Hidrolavadora Dowen Piagio 140 BAR \r\nFlujo de liquido: 6 litros / min\r\nModelo: P 140H\r\nAccesorios incluidos', 'hidrolavadora-dowen-piagio-140-bar_2248_5773.jpg', 'Activo', 1, '2019-12-21 00:47:15', '2019-12-21 00:47:15'),
(26, 10, '7564', 'Hidrolavadora Blue Clean 610 130 bar', '890', 568, 'La Hidrolavadora industrial AR Blue Clean AR610 tiene las siguientes características', 'hidrolavadora-blue-clean-610-130-bar_2325_6116.jpg', 'Activo', 1, '2019-12-21 00:48:43', '2019-12-21 00:48:43'),
(27, 4, '1233', 'Hidrolavadora Zongshen 180 BAR 7HP Nafta', '867', 765, 'Modelo: GQ9 / 18.5\r\nPresion: 180 BAR\r\nPotencia: 7HP\r\nLongitud de manguera: 7.5 mts\r\nCombustible: Nafta\r\nCapacidad de combustible: 2.6 Lts\r\nCapacidad de Aceite: 0.6  Lts\r\nSalida de agua regulable', 'hidrolavadora-zongshen-180-bar-7hp-nafta_2288_5955.jpg', 'Activo', 1, '2019-12-21 00:50:15', '2019-12-21 00:50:15'),
(28, 4, '561', 'Hidrolavadora a Explosion Logus GHL250 13 HP 250 BAR Nafta', '787', 789, 'Válvula by pass reguladora de presión\r\nmanguera alta presión con doble malla de acero r2 5/16 x 10 mts c/terminales \r\nlanza con pistola de corte y pico de lavado', 'hidrolavadora-a-explosion-logus-ghl250-13-hp-250-bar-nafta_1991_4867.jpg', 'Activo', 1, '2019-12-21 00:53:06', '2019-12-21 00:53:06'),
(29, 4, '6544', 'Afiladora manual CMC para cadenas de motosierras', '873', 971, 'Afiladora manual.\r\n    Facilidad y precisión para el afilado.\r\n    Eficiencia de corte y mayor duración en la cadena de aserrado.\r\n    Para todo tipo de cadenas de aserrado.\r\n    Sin necesidad de desmontar la cadena.\r\n    No incluye lima.', 'afiladora-manual-cmc-para-cadenas-de-motosierras_1780_4363.jpg', 'Activo', 1, '2019-12-21 00:54:53', '2019-12-21 00:54:53'),
(30, 4, '4563', 'Podador telescopico Oleo Mac PPX 270', '231', 712, 'El podador telescopico Oleo Mac PPX 270 es ideal para alcanzar ramas a grandes alturas desde suelo firme. Las caracteristicas del podador Oleo Mac PPX 270 son las siguientes', 'podador-telescopico-oleo-mac-ppx-270_1505_3619.jpg', 'Activo', 1, '2019-12-21 00:56:50', '2019-12-21 00:56:50'),
(31, 10, '4343', 'Soldadora Inverter 200 Amp Salkor IE 6200/7/220', '675', 876, 'Bajo consumo.Bajo peso y pequeño volumen.Facil soldabilidad.Fusible térmico de corte y reinicio automatico.Regulaciones de amperaje infinitas.', 'soldadora-inverter-200-amp-salkor-ie-62007220_2033_4989.jpg', 'Activo', 1, '2019-12-21 00:59:47', '2019-12-21 01:00:38'),
(32, 4, '3233', 'Motosoldador Toyama SGW 220 Amp 220v 5000w', '456', 654, 'Producto 	Grupo Electrogeno / Soldadora\r\nModelo 	Toyama SGW 220 5000 watts\r\nMotor 	15HP OHV Combustible Nafta\r\nCilindrada 	439cc / 3000 rpm\r\nArranque  	Manual\r\nAlternador  	CA', 'motosoldador-toyama-sgw-220-amp-220v-5000w_699_1658.jpg', 'Activo', 1, '2019-12-21 01:03:11', '2019-12-21 01:03:11'),
(33, 3, '6453', 'Electrificador Mandinga 12v 200Km 9.2jj', '654', 234, 'Los electrificadores MANDINGA ya conocidos por todos los productores de nuestro país, son fabricados con materias primas de excelente calidad cumpliendo con las Normas Internacionales I.E.C. 60335-2-76, brindando así un producto de prolongada vida útil.', 'electrificador-mandinga-12v-200km-92jj_2279_5906.jpg', 'Activo', 1, '2019-12-21 01:05:25', '2019-12-21 01:05:25'),
(34, 3, '3434', 'Electrificador portable a pilas Gallagher 12v 3km 0.11j', '566', 78, 'El Electrificador Gallagher B11 cuenta con 0.11 Joules de energía almacenada, es muy fácil de transportar y configurar.', 'electrificador-portable-a-pilas-gallagher-12v-3km-011j_1686_4114.jpg', 'Activo', 1, '2019-12-21 01:08:53', '2019-12-21 01:08:53'),
(35, 23, '565', 'Cajon de Herramientas 52x21x21cm', '943', 89, 'Cajon de herramientas plastico\r\nAncho: 52cm\r\nAlto: 21cm\r\nLargo: 21cm', 'cajon-de-herramientas-52x21x21_755_1317.jpg', 'Activo', 1, '2019-12-21 01:10:52', '2019-12-21 01:10:52'),
(36, 23, '3421', 'Baul Plastico 88x46x38cm', '786', 654, 'Ancho 88cm\r\nLargo 46cm\r\nAlto 38cm', 'baul-plastico_737_1124.jpg', 'Activo', 1, '2019-12-21 01:16:56', '2019-12-21 01:16:56'),
(37, 10, '4335', 'Sierra Sable de Mano Dowen Pagio 950w', '981', 670, 'Modelo: SS115SP\r\nPotencia: 950 W\r\nTensión: 220 V~ 50 Hz\r\nProfundidad de corte:\r\nMadera = 115 mm\r\nMetal = 15 mm\r\nPlastico o cobre: 31,7 mm\r\nVelocidad variable: 800 - 2700 rpm', 'sierra-sable-de-mano-dowen-pagio-950w_1680_4091.jpg', 'Activo', 1, '2019-12-21 01:21:32', '2019-12-21 01:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci,
  `condicion` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`, `condicion`, `created_at`, `updated_at`) VALUES
(1, 'Balanzas', 'Instrumento para pesar mediante la comparación del objeto que se quiere pesar con otro de peso conocido', 1, '2019-12-20 18:01:40', '2019-12-20 18:01:40'),
(2, 'Peladoras y Esquiladoras', 'Herramienta para pelar verduras y frutas con el que se aprovecha la mayor parte de ellas; su forma es similar a la de un cuchillo, pero con la hoja de cortar móvil.', 1, '2019-12-20 18:03:36', '2019-12-20 18:13:59'),
(3, 'Electrificadores Rurales', 'Este equipo genera una tensión de algunos miles de voltios pero de baja corriente.', 1, '2019-12-20 18:04:54', '2019-12-20 18:14:19'),
(4, 'Equipos a Explosión', 'Una explosión de polvo de azúcar refinado puede generar un exceso de presión de 100 psi dentro de un equipo de procesamiento cerrado en menos de 100.', 1, '2019-12-20 18:06:11', '2019-12-20 18:06:11'),
(5, 'Humedimetros', 'El humedímetro, una herramienta clave para guardar pasturas y granos a punto.', 1, '2019-12-20 18:07:49', '2019-12-20 18:07:49'),
(6, 'Muestreadores de Suelo', 'Se refiere a la muestra de suelo obtenida por la extracción de varias muestras simples o submuestras,', 1, '2019-12-20 18:09:26', '2019-12-20 18:09:26'),
(7, 'Medicion', 'La medición es un proceso básico de la ciencia que se basa en comparar una unidad de medida seleccionada con el objeto o fenómeno cuya magnitud física', 1, '2019-12-20 18:11:19', '2019-12-20 18:11:19'),
(8, 'Análisis de Granos', 'Los análisis para determinar la calidad de las semillas son diferentes a los que se realizan para la determinación de calidad en granos.', 1, '2019-12-20 18:12:01', '2019-12-20 18:12:01'),
(9, 'Energias Alternativas', 'las energías alternativas Hablamos de energías renovables y del reto global que suponen.', 1, '2019-12-20 18:12:49', '2019-12-20 18:12:49'),
(10, 'Herramientas Electricas', 'las herramientas eléctricas, las más usadas, los tipos que hay y sus normas de seguridad e higiene. Pero lo primero.', 1, '2019-12-20 18:28:19', '2019-12-20 18:28:19'),
(11, 'Alambrada', 'Una alambrada, también llamado alambrado, es una estructura de alambre, habitualmente de acero, separada por postes de madera o metal', 1, '2019-12-20 18:38:46', '2019-12-20 18:38:46'),
(12, 'Tranqueras', 'Tranqueras es una ciudad uruguaya del departamento de Rivera. Es además sede del municipio homónimo.', 1, '2019-12-20 18:39:18', '2019-12-20 18:39:18'),
(13, 'Mangas de Metal', 'Toda la linea metalica Mecano Ganadero y Clipex: Volteador de terneros, paneles, mangas de metal, cargador móvil, cepos, toriles. Envíos, Garantía, cuotas.', 1, '2019-12-20 18:42:54', '2019-12-20 18:42:54'),
(14, 'Mangas de Madera Dura', 'Encontrá de todo en instalaciones ganaderas de madera dura. Trabajamos Mangas, bretes, trancas, cepos, cargadores, casillas de operar, potros lecheros.', 1, '2019-12-20 18:48:45', '2019-12-20 18:48:45'),
(15, 'Molinos', 'Molino es todo ingenio, artefacto o maquinaria que sirve para moler utilizando una energía, sea la fuerza del viento o del agua; o un motor, sea térmico', 1, '2019-12-20 18:49:38', '2019-12-20 18:49:38'),
(16, 'Bebederos y Aguadas', 'Venta de bebederos de cemento, bebederos galvanizados, con flotante y cubre flotante. 3 cuotas sin interes! Entre Ahora!', 1, '2019-12-20 18:50:48', '2019-12-20 18:50:48'),
(17, 'Tanques Australianos', 'Como su nombre lo indica, estos tanques fueron diseñados originalmente en el país del hemisferio sur como alternativa para recolectar agua', 1, '2019-12-20 19:01:23', '2019-12-20 19:01:23'),
(18, 'Tanques de Agua', 'Los tanques de agua son un elemento fundamental en una red de abastecimiento de agua potable, para compensar las variaciones horarias de la demanda', 1, '2019-12-20 19:02:39', '2019-12-20 19:02:39'),
(19, 'Linea Animal', 'Ofrecemos insumos para la la producción de animales ovinos, caprinos, bovinos, porcinos y aves, así como las mascotas del hogar.', 1, '2019-12-20 19:04:37', '2019-12-20 19:04:37'),
(20, 'Linea Agricola', 'Una línea completa de equipos diseñados para analizar y ordenar su producción de cultivos de procesamiento de granos.', 1, '2019-12-20 19:05:20', '2019-12-20 19:05:20'),
(21, 'Surtidores de combustible', 'El surtidor de combustible es una máquina de una gasolinera que se utiliza para poner la gasolina en coches.', 1, '2019-12-20 19:10:25', '2019-12-20 19:10:25'),
(22, 'Instrumentos de Seguridad', 'La seguridad es sumamente importante dentro de las empresas, principalmente por el alto índice de accidentalidad laboral que se presenta actualmente', 1, '2019-12-20 19:13:38', '2019-12-20 19:13:38'),
(23, 'Accesorios para PickUp', 'EQUIPAMIENTOPARA CAMIONETAS. FORD ... Destacadas. Accesorios Cromados .... Este sitio puede contener material original y exclusivo de My PickUp.', 1, '2019-12-20 19:14:49', '2019-12-20 19:14:49'),
(24, 'Pulverización', 'Pulverización es el procedimiento de pulverizar y el resultado del mismo. El verbo pulverizar, que procede del vocablo latino pulverizāre, se refiere a difuminar', 1, '2019-12-20 19:15:31', '2019-12-20 19:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
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

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidoM`, `apellidoP`, `direccion`, `celular`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ana', 'choque', 'mamani', 'avenidad las que llega', 66778899, 'ana@gmail.com', '2019-12-21 08:28:11', '2019-12-21 08:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `detalle`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
(9, '2019_12_20_035656_create_cliente_table', 1),
(10, '2019_12_20_113839_create_proveedor_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_persona` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_documento` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_documento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-12-20 22:42:22', '2019-12-20 22:42:22'),
(2, 'user', 'Cliente', '2019-12-20 22:42:22', '2019-12-20 22:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `rol`, `password`, `created_at`, `updated_at`) VALUES
(1, 'juan', 'juan@gmail.com', NULL, 'user', '$2y$10$.1evp8POam.14KbihEbBmO0t9TvSRgVR24jkhGeBT5dliMhdc7Lze', '2019-12-20 22:42:22', '2019-12-20 22:42:22'),
(2, 'admin', 'admin@gmail.com', NULL, 'admin', '$2y$10$VD7hd9mJu2o4zM9j/BymD.wxorqfbFwk8Bh9pv4XCjAAbsbVu8nY2', '2019-12-20 22:42:23', '2019-12-20 22:42:23'),
(3, 'ana', 'ana@gmail.com', NULL, 'user', '$2y$10$3xsAXsPIcDsfI7iPnttfLe1mz32Om3zPWWFf0G29JSA1tQ1.hF.hO', '2019-12-21 08:08:39', '2019-12-21 08:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
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
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`id`, `nombreCliente`, `nombreProducto`, `precio`, `cantidad`, `subtotal`, `total`, `created_at`, `updated_at`) VALUES
(1, 'ana', 'Sierra Sable de Mano Dowen Pagio 950w', 670, 2, '1340.00', '1340.00', '2019-12-21 08:09:15', '2019-12-21 08:09:15'),
(2, 'ana', 'Sierra Sable de Mano Dowen Pagio 950w', 670, 1, '670.00', '670.00', '2019-12-21 08:34:39', '2019-12-21 08:34:39'),
(3, 'ana', 'Cajon de Herramientas 52x21x21cm', 89, 2, '89.00', '759.00', '2019-12-21 08:41:42', '2019-12-21 08:41:42'),
(4, 'ana', 'Cajon de Herramientas 52x21x21cm', 89, 1, '89.00', '1429.00', '2019-12-21 08:42:19', '2019-12-21 08:42:19'),
(5, 'ana', 'Muestreador de suelos para tosca', 59, 2, '118.00', '2306.00', '2019-12-21 08:43:32', '2019-12-21 08:43:32'),
(6, 'ana', 'Muestreador de suelos para tosca', 59, 2, '118.00', '2306.00', '2019-12-21 08:43:35', '2019-12-21 08:43:35'),
(7, 'ana', 'Muestreador de suelos para tosca', 59, 2, '118.00', '2306.00', '2019-12-21 08:43:38', '2019-12-21 08:43:38'),
(8, 'ana', 'Boquilla para calador SR20/SR30', 67, 2, '134.00', '134.00', '2019-12-21 08:51:18', '2019-12-21 08:51:18'),
(9, 'ana', 'Boquilla para calador SR20/SR30', 67, 2, '134.00', '134.00', '2019-12-21 08:53:56', '2019-12-21 08:53:56'),
(10, 'ana', 'Boquilla para calador SR20/SR30', 67, 2, '134.00', '134.00', '2019-12-21 08:56:51', '2019-12-21 08:56:51'),
(11, 'ana', 'Boquilla para calador SR20/SR30', 67, 2, '134.00', '134.00', '2019-12-21 09:02:13', '2019-12-21 09:02:13'),
(12, 'ana', 'Muestreador de suelos para tosca', 59, 2, '118.00', '118.00', '2019-12-21 09:05:49', '2019-12-21 09:05:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulo_id_categoria_foreign` (`id_categoria`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_id_users_foreign` (`id_users`),
  ADD KEY `detalle_id_articulo_foreign` (`id_articulo`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_id_articulo_foreign` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
