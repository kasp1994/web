-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2016 a las 19:45:55
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `rut` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave1` varchar(15) NOT NULL,
  `clave2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`rut`, `nombre`, `email`, `clave1`, `clave2`) VALUES
('18867486-0', 'Katherine Sandoval', 'katty.asp@gmail.com', '1313', '1313'),
('209011769-6', 'Jonathan Betancur', 'katty_alejandrita@hotmail.com', '1212', '1212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deporte`
--

CREATE TABLE IF NOT EXISTS `deporte` (
`id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `deporte`
--

INSERT INTO `deporte` (`id`, `nombre`, `marca`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Hand Grip Harbinger Power', 'Harbinger', 9990, 'Desarrolla toda tu fuerza con este poderoso hand grip de Harbinger. De diseño ergonómico, está indicado para un entrenamiento intermedio y de tensión constante, ayudándote a desarrollar al máximo tu musculatura y fuerza.', 'd1.jpg'),
(2, 'Cinta de Agarre Harbinger Power', 'Harbinger', 9990, 'Esta cinta de agarre de Harbinger está elaborada en nylon y goma DuraGrip™, que te da máximo agarre de la barra que evitar su deslizamiento. Posee muñequeras de neopreno de 5mm, totalmente ajustables, que aseguran que la correa de levantamiento esté en la posición correcta, proporcionándote máxima amortiguación.', 'd2.jpg'),
(3, 'Barra de Ejercicios Live Up', 'Live Up', 12990, 'La barra de ejercicio multifuncional de Live Up es ideal para utilizarla en las comodidades del hogar. Está recomendado para realizar tu entrenamiento de brazos, ante brazos, pecho, abdomen y espalda. Muy fácil y cómodo para armar, desarmar y trasladar.', 'd3.jpg'),
(4, 'Cable de Vascularización Harbinger Super ', 'Harbinger', 19990, 'Especialmente diseñado para tonificar y aumentar la fuerza y resistencia de tu cuerpo, este cable elástico de vascularización será un complemento ideal para potenciar tu entrenamiento. De agarre seguro y cómodo, está fabricado en material basado en fibras de alta resistencia que te aseguran que no se romperán inesperadamente, facilitando tus rutinas de ejercicio. Con tecnologías PowerAmps™ y FlexFast™, poseen un diseño ergonómico, es de peso ligero y, además, es portátil.', 'd4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE IF NOT EXISTS `destacados` (
`id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(15) NOT NULL,
  `talla` varchar(15) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `nombre`, `marca`, `color`, `talla`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Vestido Flores Marquis', 'Marquis', 'Flores', 'M', 19990, 'Vestido primaveral 70% textil, 30% algodón', '4.jpg'),
(2, 'Blusa Opposite', 'Opposite', 'blanco', 'S', 14990, 'Blusa con flecos', '5.jpg'),
(3, 'Sombrero Alaniz', 'Alaniz', 'Azul Marino', 'XS', 3990, 'Sombrero amplio con protección UV', '6.jpg'),
(4, 'Bikinni Crochet Wados', 'Wados', 'Damasco', 'L', 25000, 'Bikinni tejido a crochet con protección UV', '7.jpg'),
(5, 'Jardinera Jeans Barbados', 'Barbados', 'Jeans', 'M', 21670, 'Jardinera temporada primavera-verano.', '8.jpg'),
(6, 'Polera Detalles Alaniz', 'Alaniz', 'blanco', 'XL', 20190, 'Polera con detalles.', '9.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoshombre`
--

CREATE TABLE IF NOT EXISTS `productoshombre` (
`id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `talla` varchar(5) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `productoshombre`
--

INSERT INTO `productoshombre` (`id`, `nombre`, `marca`, `color`, `talla`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Polerón Maui Beige', 'Maui', 'Beige', 'M', 'Algodón', 17490, '1h.jpg'),
(2, 'Polerón Maui Azul', 'Maui', 'Azul', 'S', 'algodón', 19990, '2h.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosmujer`
--

CREATE TABLE IF NOT EXISTS `productosmujer` (
`id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `color` varchar(15) NOT NULL,
  `talla` varchar(4) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `productosmujer`
--

INSERT INTO `productosmujer` (`id`, `nombre`, `marca`, `color`, `talla`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Pantalón Marquis Print', 'Marquis', 'Print', 'M', 7990, '97% Algodón / 3% Elastano', '1.jpg'),
(2, 'Pantalón Index Leg', 'Index', 'Negro', 'S', 3990, '97% algodón / 3% elastano', '2.jpg'),
(3, 'Leggins Marquis Print', 'Marquis', 'Gris', 'L', 7990, '95% Algodón / 5% Elastano', '3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologia`
--

CREATE TABLE IF NOT EXISTS `tecnologia` (
`id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tecnologia`
--

INSERT INTO `tecnologia` (`id`, `nombre`, `marca`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Cable Prolink Aux', 'Prolink', 2490, 'Para vivir una experiencia inigualable en sonido Prolink trae este cable de 3 metros que te permitirá conocer su alta calidad en audios', 't1.jpg'),
(2, 'Cable Prolink Audio/Video', 'Prolink', 3490, 'Para visualizar y escuchar todo lo que quieras en tu pantalla, cuentas con el cable audio/video de Prolink. Con 3 plugs RCA y un largo de 1,5 metros te entregará toda la calidad que buscabas.', 't2.jpg'),
(3, 'Cable Hdmi HdTek', 'HdTek', 3990, 'Mantén la calidad de imagen en estándares altos con los cables HDMI de HDtek. Cumplirás las exigencias de rendimiento y calidad que la tecnología requiere.Podrás disfrutar de la calidad de las imágenes Full HD, como además de la emocionalidad del 3D.', 't3.jpg'),
(4, 'Pilas Recargables Green-E', 'Green-E', 4990, 'Pack de 4 pilas listas para usar. La batería es pre-cargada en la fábrica y se encuentra en estado de carga completa. Puedes utilizarla de inmediato. Se puede cargar hasta 1000 veces. 1100 mAh. NI-MH recargables.', 't4.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `deporte`
--
ALTER TABLE `deporte`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productoshombre`
--
ALTER TABLE `productoshombre`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productosmujer`
--
ALTER TABLE `productosmujer`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deporte`
--
ALTER TABLE `deporte`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `productoshombre`
--
ALTER TABLE `productoshombre`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productosmujer`
--
ALTER TABLE `productosmujer`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
