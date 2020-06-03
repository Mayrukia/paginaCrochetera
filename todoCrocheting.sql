-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-06-2020 a las 21:51:46
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todoCrocheting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(50) NOT NULL,
  `nombre` varchar(25) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='categoria a la que pertenece un determinado producto';

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Accesorios'),
(2, 'Amigurumis'),
(3, 'Decoracion'),
(4, 'Didacticos'),
(5, 'Indumentaria'),
(6, 'Ropas para bebés'),
(7, 'Ropa de cama'),
(8, 'Top y Bikini'),
(9, 'Vestidos'),
(10, 'Hombre'),
(11, 'Mujer'),
(12, 'Niños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(5) NOT NULL,
  `cantidadProductos` int(7) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(5) NOT NULL,
  `nombre` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(160) COLLATE latin1_spanish_ci NOT NULL,
  `precioUnitario` float NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `idCategoria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precioUnitario`, `visible`, `idCategoria`) VALUES
(1, 'Almohadon Decorativo', 'Almohadon decorativo Grany, varios colores', 700, 1, 3),
(2, 'Almohadon Decorativo', 'Almohadon decorativo, color natural y vino', 700, 1, 3),
(3, 'Almohadon Decorativo', 'Almohadon decorativo con mandalas, color verde agua', 450, 1, 3),
(4, 'Pantutiburon', 'Pantuflas con forma de tiburón, en hilo de algodón, talle 40', 600, 0, 5),
(5, 'Mitones', 'Mitones Grany, en hilo peruano, combinados rosa y negro, talle S', 300, 1, 5),
(6, 'Porta Vasos', 'Porta vasos cuadrado, color vino, con aplique de corazón color amarillo', 100, 1, 3),
(7, 'Porta Vasos', 'Porta vasos cuadrado, color amarillo, con aplique de corazón color vino', 100, 1, 3),
(8, 'Adorno de corazones', 'Adorno de corazones en hilo, blanco, vino y amarillo', 100, 1, 3),
(9, 'Porta Pava', 'Posa pava de hilo, en tiras de colores', 100, 1, 3),
(10, 'Doctora Juguetes', 'Amigurumi Doctora Juguetes con accesorio maleta', 890, 0, 2),
(11, 'Mono Hembra', 'Mono hembra color marrón', 600, 0, 2),
(12, 'Mono Macho', 'Mono Macho color marrón', 600, 0, 2),
(13, 'Pareja de Monos', 'Pareja de Monos color marron', 1000, 0, 2),
(14, 'Osito', 'Amigurumi Osito marrón', 800, 0, 2),
(15, 'Lobo Feroz', 'Amigurumi lobo feróz', 890, 0, 2),
(16, 'Totoro', 'Amigurumi Tototro', 600, 0, 2),
(17, 'Leon Kon', 'Leon Kon, Bleach', 600, 0, 2),
(18, 'Mickey', 'Amigurumi Mikey', 1200, 0, 2),
(19, 'Hongo Mario Bros', 'Hongo Mario Bros rojo', 150, 0, 2),
(20, 'Hongo Mario Bros', 'Hongo Mario Bros Verde', 150, 0, 2),
(21, 'Hongo Mario Bros', 'Hongo Mario Bros Marron', 150, 0, 2),
(22, 'Angry Bird Negro', 'Amigurumi Angry Bird', 250, 0, 2),
(23, 'Angry Bird', 'Amigurumi Angry Bird rojo', 250, 0, 2),
(24, 'Chancho Angry Bird', 'Amigurumi chancho Angry Bird', 250, 0, 2),
(25, 'Cactus Enano', 'Amigurumi Cactus en maseta de platico Fuccia', 300, 0, 2),
(26, 'Cactus Largo', 'Amigurumi Cactus, flor rosa en maseta de platico Amarilla', 300, 0, 2),
(27, 'Cactus Largo', 'Amigurumi Cactus, flor fuccia en maseta de platico Fuccia', 300, 0, 2),
(28, 'Cactus Y', 'Amigurumi Cactus, en maseta de platico Roja', 300, 0, 2),
(29, 'Top de verano amarillo', 'Top escote en v, terminado en pico, color amarillo, talle xs', 500, 1, 5),
(30, 'Top de verano Magenta', 'Top escotado, color Magenta, talle s', 500, 1, 5),
(31, 'Top de verano Rosa', 'Top escotado, color Rosa, talle s, taza tiangular Talle 85', 500, 1, 5),
(32, 'Top de verano Fuccia', 'Top escotado, color Fuccia, talle s, taza triangular Talle 90', 500, 1, 5),
(33, 'Top de verano Rosa Pastel', 'Top escotado, terminado con puntilla, color rosa pastel, taza 85', 500, 1, 5),
(34, 'Top de verano Blanco', 'Top tipo remera musculosa, color Blanco, talle s', 500, 1, 5),
(35, 'Top de verano Blanco', 'Top tipo triangulo, terminado con flecos, color Blanco, talle s,', 500, 1, 5),
(36, 'Top de verano Rojo', 'Top escote en v, terminado en pico, color rojo, talle s', 700, 1, 5),
(37, 'Top de verano Wine', 'Top escote en v, terminado en pico, color vino, talle s', 700, 1, 5),
(38, 'Top de verano Canario', 'Top escote en v, terminado en pico, color canario, talle m', 700, 1, 5),
(39, 'Top de verano Grany', 'Top escote en v, terminado con flecos, color amarillo y marron claro, talle s', 700, 1, 5),
(40, 'Top de verano Grany', 'Top escote en v, terminado con flecos, color verde claro y verde mate, talle M', 600, 1, 5),
(41, 'Top de verano Mary', 'Top escotado, terminado con flecos, color blanco, talle m, taza 95', 800, 1, 5),
(42, 'Top de verano Grany', 'Top escote en v, color natural, terminado con flecos color vino, talle m', 600, 1, 5),
(43, 'Top de verano Vede', 'Top escote en v, terminado en pico, color verde agua, talle xs', 500, 1, 5),
(44, 'Top de verano Mostaza', 'Top escote en v, terminado en pico, color mostaza, talle M', 700, 1, 5),
(45, 'Mitones', 'Mitones adultos, talle s, color negro y rosa', 300, 1, 5),
(46, 'Vestido', 'Vestido grany largo hasta los pies, multicolor, talle unico', 3500, 1, 5),
(47, 'Top de verano Multicolor', 'Top escote en v, terminado en pico, multicolor, talle xs', 500, 0, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `nombreUsuario` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `contrania` varchar(9) COLLATE latin1_spanish_ci NOT NULL,
  `infoContacto` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `idCompra` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCompra` (`idCompra`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
