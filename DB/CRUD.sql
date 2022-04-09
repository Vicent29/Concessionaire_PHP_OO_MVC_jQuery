-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2022 a las 13:16:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coches2mano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `id` int(6) UNSIGNED NOT NULL,
  `num_bastidor` varchar(18) NOT NULL,
  `matricula` varchar(8) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `Km` int(8) NOT NULL,
  `color` varchar(20) NOT NULL,
  `num_puertas` varchar(20) NOT NULL,
  `motor` varchar(20) NOT NULL,
  `cambio_marchas` varchar(20) NOT NULL,
  `precio` int(8) NOT NULL,
  `fechamatricula` varchar(10) NOT NULL,
  `e_confort` varchar(200) NOT NULL,
  `e_seguridad` varchar(200) NOT NULL,
  `imagenes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`id`, `num_bastidor`, `matricula`, `marca`, `modelo`, `Km`, `color`, `num_puertas`, `motor`, `cambio_marchas`, `precio`, `fechamatricula`, `e_confort`, `e_seguridad`, `imagenes`) VALUES
(365, 'ALOEGLSEO34782341', '1393ABC', 'Hyundai', 'Kona', 1000, '#F3F3F3', '5', 'Hibrido', 'automatico', 25000, '10/01/2015', 'Asientos calefactables,Control de crucero,Asistencia de estacionamiento,', 'Sensor de distancia,Control de traccion,Asistencia de frenada,Sensor de carril,', NULL),
(366, 'BOOEGLSEO34122342', '2393HJC', 'BMW', 'i3', 3000, '#0A61F9', '5', 'Electrico', 'automatico', 13500, '12/05/2017', 'Control de crucero,Asistencia de estacionamiento,', 'Sensor de distancia,Control de traccion,Asistencia de frenada,', NULL),
(367, 'CEOEGLSEO34742343', '3393NRO', 'Tesla', 'Model3', 100, '#4ef109', '5', 'Electrico', 'automatico', 70000, '23/07/2016', 'Asientos calefactables,Control de crucero,', 'Sensor de distancia,Control de traccion,Asistencia de frenada,', NULL),
(368, 'SUSEGLSEO12782344', '4393LOL', 'Renault', 'ZOE', 2300, '#0D0E0E', '5', 'Electrico', 'automatico', 9500, '09/08/2019', 'Control de crucero,Asistencia de estacionamiento,', 'Sensor de distancia,Control de traccion,Asistencia de frenada,', NULL),
(369, 'ZLOEGLSEO34782345', '5393ARA', 'Nissan', 'Leaf', 500, '#FA9A0A', '5', 'Hibrido', 'automatico', 19000, '21/11/2020', 'Asientos calefactables,Control de crucero,Asistencia de estacionamiento,', 'Control de traccion,Asistencia de frenada,Sensor de carril,', NULL),
(370, 'UCOEGLSEO34782346', '6393KFC', 'Kia', 'Eniro', 12250, '#0dce84', '5', 'Electrico', 'automatico', 13000, '14/12/2015', 'Asientos calefactables,Control de crucero,', 'Asistencia de frenada,Sensor de carril,', NULL),
(371, 'NLOEGLSEO54782347', '7393YAC', 'Smart', 'Fortwo', 10321, '#0D0D0D', '3', 'Hibrido', 'automatico', 15500, '19/10/2016', 'Control de crucero,Asistencia de estacionamiento,', 'Asistencia de frenada,Sensor de carril,', NULL),
(372, 'SOOEGLSEO34712348', '8393JBL', 'Peugeot', 'E208', 9000, '#F50404', '5', 'Electrico', 'automatico', 10000, '05/07/2020', 'Asientos calefactables,Control de crucero,Asistencia de estacionamiento,', 'Sensor de distancia,Control de traccion,Sensor de carril,', NULL),
(373, 'HTOEGLSEO34782349', '9393SOS', 'Citroen', 'EC4', 40000, '#107F29', '3', 'Electrico', 'automatico', 11500, '30/09/2019', 'Ninguna,', 'Ninguna,', NULL),
(374, 'RMAEGLSEO34782340', '0393CAR', 'Opel', 'CorsaE', 30000, '#0316FC', '3', 'Hibrido', 'automatico', 12000, '22/04/2018', 'Ninguna,', 'Ninguna,', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exceptions`
--

CREATE TABLE `exceptions` (
  `type_error` int(10) DEFAULT NULL,
  `spot` varchar(100) DEFAULT NULL,
  `current_date_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `exceptions`
--

INSERT INTO `exceptions` (`type_error`, `spot`, `current_date_time`) VALUES
(505, 'Register_car', '2022-01-10 17:12:09'),
(404, 'Register_car', '2022-01-10 17:15:49'),
(503, 'DAO_car Read', '2022-01-11 19:19:31'),
(503, 'DAO_car Read', '2022-01-11 19:46:01'),
(503, 'DAO_car List', '2022-01-12 14:59:29'),
(503, 'Valid_car Modal Read', '2022-01-19 12:05:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coches`
--
ALTER TABLE `coches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_bastidor` (`num_bastidor`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coches`
--
ALTER TABLE `coches`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
