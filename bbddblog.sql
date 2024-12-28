-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-12-2024 a las 16:03:04
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
-- Base de datos: `bbddblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `ID` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`ID`, `foto`, `descripcion`) VALUES
(1, '1.png', 'Una perrita mestiza de 2 años, juguetona y cariñosa. Ideal para familias con niños. Le encanta correr en el parque y es muy obediente.'),
(2, '2.png', 'Un gato europeo de 1 año, con un pelaje atigrado precioso. Es independiente pero disfruta de las caricias en las tardes tranquilas.'),
(3, '3.png', 'Un conejito de 8 meses, de orejas caídas y muy mimoso. Perfecto para quienes buscan un compañero tranquilo y adorable.'),
(4, '4.png', 'Una tortuga terrestre de 3 años. Necesita un espacio amplio y soleado para explorar. Muy fácil de cuidar.'),
(5, '5.png', 'Un periquito australiano de colores vivos. Sociable y muy curioso. Aprende rápido sonidos y silbidos.'),
(6, '6.png', 'Un hurón juguetón de 1 año y medio. Le encanta explorar y jugar. Perfecto para hogares que buscan una mascota poco convencional.'),
(7, '7.png', 'Una cobaya de pelo largo y sedoso. Tranquila y muy cariñosa, le encanta comer frutas y verduras frescas.'),
(8, '8.png', 'Un caballo joven de 4 años, dócil y apto para principiantes. Ideal para paseos tranquilos o tareas ligeras en el campo.'),
(9, '9.png', 'Un pez betta de colores iridiscentes. Fácil de cuidar, solo necesita un acuario pequeño y agua limpia.'),
(10, '10.png', 'Un gecko leopardo de 2 años. Amigable y fácil de mantener, perfecto para los amantes de los reptiles.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `comentario` text NOT NULL,
  `imagen` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`ID`, `titulo`, `fecha`, `comentario`, `imagen`) VALUES
(30, '1. Blog: \"Cómo Cultivar un Huerto Urbano en Casa\"', '2024-12-25 15:47:57', 'En este blog te enseñamos a crear un pequeño huerto urbano en tu hogar, sin importar el espacio disponible. Aprenderás a cultivar hierbas, verduras y pequeños frutos, desde la selección de macetas hasta el cuidado de las plantas.', 'huerto2.jpg'),
(31, '2. Blog: \"Los Mejores Consejos para Viajar Solo por el Mundo\"', '2024-12-25 15:49:13', 'Viajar solo es una experiencia transformadora. En este artículo exploramos las mejores recomendaciones para quienes desean embarcarse en una aventura en solitario, desde la seguridad hasta cómo disfrutar de la soledad.', 'viaje.jpeg'),
(32, '3. Blog: \"Tendencias en Decoración para 2024\"', '2024-12-25 15:50:23', 'Descubre las tendencias más populares en decoración para este año. Desde colores vibrantes hasta el uso de materiales reciclados, aprenderás cómo hacer de tu hogar un lugar único, moderno y acogedor.', 'home.jpeg'),
(33, '4. Blog: \"La Ciencia Detrás de los Sueños: ¿Por qué Soñamos?\"', '2024-12-25 15:51:26', '¿Alguna vez te has preguntado por qué soñamos? En este blog, exploramos la ciencia del sueño y las teorías detrás de los sueños más comunes. Descubre cómo afectan a nuestro cerebro y emociones.', 'dream.jpeg'),
(34, '5. Blog: \"Recetas Saludables para el Desayuno: Energía para Comenzar el Día\"', '2024-12-25 15:52:28', 'Comienza tus mañanas con energía y buen sabor. Te ofrecemos recetas fáciles y saludables para el desayuno, ideales para llenar de vitalidad tu jornada desde temprano. ¡Olvídate de las opciones procesadas y apuesta por lo natural!', 'food.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `usuario`, `password`) VALUES
(1, 'animalia', '$2a$12$dKREb/TOwkm.dF.VNz54Quxs5OHvSCqiGkNpbKQvRcOEf66j/4U9W');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
