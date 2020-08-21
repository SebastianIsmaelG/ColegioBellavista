-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-08-2020 a las 17:34:57
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id10178841_db_colegiobellavista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` bigint(20) UNSIGNED NOT NULL,
  `nombre_actividad` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_actividad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividad`, `nombre_actividad`, `fecha_actividad`) VALUES
(1, 'Día de las Glorias Navales', '2019-05-21'),
(2, 'Día de la Virgen del Cármen', '2019-07-16'),
(3, 'Dia de la Madre', '2019-05-10'),
(4, 'Día de Todos los Santos', '2019-11-01'),
(5, 'Fiestas Patrias', '2019-09-18'),
(6, 'Día del Padre', '2019-06-18'),
(7, 'Día del niño', '2019-08-07'),
(8, 'Peña Folclórica', '2019-09-13'),
(9, 'Halloween', '2019-10-31'),
(10, 'Navidad', '2019-12-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `borradores`
--

CREATE TABLE `borradores` (
  `id_noticia` bigint(20) UNSIGNED NOT NULL,
  `usuario_autor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_noticia` date NOT NULL,
  `titulo_noticia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `intro_noticia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `foto_intro_noticia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cuerpo_noticia` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_formulario`
--

CREATE TABLE `contacto_formulario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_solicitud` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto_formulario`
--

INSERT INTO `contacto_formulario` (`id`, `nombre`, `telefono`, `email`, `fecha_solicitud`) VALUES
(7, 'Sebastian Gutierrez', 974802763, 'email@gmail.com', '2019-06-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_contacto`
--

CREATE TABLE `datos_contacto` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_contacto`
--

INSERT INTO `datos_contacto` (`id`, `email`, `telefono`, `ubicacion`) VALUES
(1, 'colegio.bellavista.coya@gmail.com', '(9) 93492280', 'Calle John Kennedy # 178. Coya, Machalí');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_galerias`
--

CREATE TABLE `datos_galerias` (
  `id_galeria` bigint(20) UNSIGNED NOT NULL,
  `codigo_galeria` bigint(20) UNSIGNED NOT NULL,
  `titulo_galeria` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `intro_galeria` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_galerias`
--

INSERT INTO `datos_galerias` (`id_galeria`, `codigo_galeria`, `titulo_galeria`, `intro_galeria`) VALUES
(1, 20190624021135376, 'Actividad Vida saludable 2018', 'Se realizan actividades fomentando el interés de los niños y niñas por el cuidado de su alimentación, salud e higiene personal.'),
(2, 20190624024129629, 'Charla Psicológica', 'Alumnos del octavo básico comparten y reflexionan sobre acontecimientos que ocurren durante la adolescencia.'),
(4, 20190624035825976, 'Aniversario Colegio Bellavista', 'Recuerdos del segundo aniversario Colegio Bellavista'),
(5, 20190624153840948, 'Actividades Recreos activos', 'Los niños y niñas se divierten realizando actividades que fomentan la actividad fisica y el comer sano.'),
(6, 20190624155339293, 'Campeonato Futsal', 'Campeonato Femenino de futbol'),
(8, 20190625182256392, 'Yo elijo mi PC', 'Introduccion o explicacion general de la galeria'),
(9, 20190628234320425, 'Visita al teatro regional', 'Lorem ipsum dolor atis atem isis calis'),
(25, 20190723155841401, 'Semana del libro ', 'Cierre de actividades semana del libro'),
(27, 20190803212341959, 'Actividad Caras de Mimos', 'Alumnos se pintan sus rostros e interpretan papel de mimos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_slider`
--

CREATE TABLE `datos_slider` (
  `id_slider` bigint(20) UNSIGNED NOT NULL,
  `imagen_slider` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_slider`
--

INSERT INTO `datos_slider` (`id_slider`, `imagen_slider`) VALUES
(1, '20190626203712246.jpg'),
(2, 'IMG_20181121_103445.jpg'),
(3, 'IMG_20190329_100645.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_trabajadores`
--

CREATE TABLE `equipo_trabajadores` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL COMMENT '1:administracion 2:funcionario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo_trabajadores`
--

INSERT INTO `equipo_trabajadores` (`id`, `nombre`, `tipo`) VALUES
(1, 'Giovanna Guajardo', 2),
(2, 'Maria Angélica Gonzales', 2),
(3, 'Marta Rodríguez', 2),
(4, 'Denisse Alarcón', 2),
(5, 'Karina Cortez', 2),
(6, 'Eva López', 2),
(7, 'Rocio Castillo', 2),
(8, 'Maria Alejandra Cabrera', 2),
(9, 'Marcela Vargas', 2),
(10, 'Bernardita Vásquez', 2),
(12, 'Gerardo Silva', 2),
(13, 'Sebastián Sepulveda', 2),
(14, 'Bernardo Castro', 2),
(15, 'Valeria Jara', 2),
(16, 'Vivianne Torres', 2),
(17, 'Eduardo Contreras', 1),
(18, 'Carolina Mollo', 1),
(19, 'Camila Meneses', 1),
(20, 'Alejandra Tamayo', 1),
(21, 'Rosa Guerrero', 2),
(22, 'Boris Muñoz', 2),
(23, 'Carola Duran', 1),
(24, 'Marilin Berrios', 2),
(25, 'Ángela Abarca', 2),
(26, 'Mirta Aranguiz', 2),
(27, 'Cecilia Zamorano', 2),
(28, 'Margarita Venegas', 1),
(29, 'Maria Isabel Valdivia', 2),
(30, 'Pablo Osorio', 2),
(31, 'Jorge Romero', 2),
(32, 'Carla Delso', 2),
(33, 'Valeria Vásquez', 2),
(34, 'Maria Pilar Lopez', 2),
(35, 'Karen Silva', 2),
(36, 'Jessica Rojas', 2),
(37, 'Nibaldo Moraga', 2),
(38, 'Janet Vergara', 2),
(39, 'Francisca Gonzáles', 2),
(40, 'Paula Pizzoleo', 2),
(42, 'Beatriz Acevedo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_galerias`
--

CREATE TABLE `imagenes_galerias` (
  `id_imagen` bigint(20) UNSIGNED NOT NULL,
  `id_galeria` bigint(20) UNSIGNED NOT NULL,
  `nombre_imagen` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes_galerias`
--

INSERT INTO `imagenes_galerias` (`id_imagen`, `id_galeria`, `nombre_imagen`) VALUES
(1, 1, '20190624021217655.jpg'),
(2, 1, '20190624021217363.jpg'),
(3, 1, '20190624021243170.jpg'),
(4, 1, '20190624021243246.jpg'),
(5, 1, '20190624021245653.jpg'),
(6, 1, '20190624021245696.jpg'),
(7, 1, '20190624021246819.jpg'),
(8, 1, '20190624021247655.jpg'),
(9, 1, '20190624021248513.jpg'),
(10, 1, '20190624021249295.jpg'),
(11, 1, '20190624021250587.jpg'),
(12, 1, '20190624021250222.jpg'),
(13, 1, '20190624021252289.jpg'),
(14, 1, '20190624021252278.jpg'),
(15, 2, '20190624024146559.jpg'),
(16, 2, '20190624024146571.jpg'),
(17, 2, '20190624024151798.jpg'),
(18, 2, '20190624024151460.jpg'),
(19, 2, '20190624024152868.jpg'),
(20, 2, '20190624024152953.jpg'),
(27, 4, '20190624035922243.jpg'),
(28, 4, '20190624035922773.jpg'),
(29, 4, '20190624035923751.jpg'),
(30, 4, '20190624035923200.jpg'),
(31, 4, '20190624035923727.jpg'),
(32, 4, '20190624035923908.jpg'),
(33, 4, '20190624035923784.jpg'),
(34, 4, '20190624035924233.jpg'),
(35, 4, '20190624035924362.jpg'),
(36, 4, '20190624035924336.jpg'),
(37, 4, '20190624035925939.jpg'),
(38, 4, '20190624035925786.jpg'),
(39, 4, '20190624035925886.jpg'),
(40, 4, '20190624035925883.jpg'),
(41, 4, '20190624035925980.jpg'),
(42, 4, '20190624035925230.jpg'),
(43, 4, '20190624035926367.jpg'),
(44, 4, '20190624035927701.jpg'),
(45, 4, '20190624035927663.jpg'),
(46, 4, '20190624035927319.jpg'),
(47, 4, '20190624035927649.jpg'),
(48, 4, '20190624035927973.jpg'),
(49, 4, '20190624035928775.jpg'),
(50, 4, '20190624035928136.jpg'),
(51, 4, '20190624035928563.jpg'),
(52, 5, '20190624153945879.jpg'),
(53, 5, '20190624153945264.jpg'),
(54, 5, '20190624153945578.jpg'),
(55, 5, '20190624153945777.jpg'),
(56, 5, '20190624153945143.jpg'),
(57, 5, '20190624153945776.jpg'),
(58, 5, '20190624153945731.jpg'),
(59, 5, '20190624153945828.jpg'),
(60, 5, '20190624153945750.jpg'),
(61, 5, '20190624153945587.jpg'),
(62, 5, '20190624153945776.jpg'),
(63, 5, '20190624153945261.jpg'),
(64, 5, '20190624153945453.jpg'),
(65, 5, '20190624153946160.jpg'),
(66, 5, '20190624153946864.jpg'),
(67, 5, '20190624153946945.jpg'),
(68, 5, '20190624153946862.jpg'),
(69, 5, '20190624153946686.jpg'),
(70, 5, '20190624153946652.jpg'),
(71, 5, '20190624153946669.jpg'),
(72, 5, '20190624153947149.jpg'),
(73, 5, '20190624153946384.jpg'),
(74, 5, '20190624153947688.jpg'),
(75, 5, '20190624153947774.jpg'),
(76, 5, '20190624153947218.jpg'),
(77, 5, '20190624153947696.jpg'),
(78, 5, '20190624153947616.jpg'),
(79, 5, '20190624153947937.jpg'),
(80, 5, '20190624153947355.jpg'),
(81, 6, '20190624155400566.jpg'),
(82, 6, '20190624155400257.jpg'),
(83, 6, '20190624155400257.jpg'),
(84, 6, '20190624155400194.jpg'),
(85, 6, '20190624155400480.jpg'),
(86, 6, '20190624155400459.jpg'),
(87, 6, '20190624155400933.jpg'),
(88, 6, '20190624155400835.jpg'),
(89, 6, '20190624155400693.jpg'),
(90, 6, '20190624155400705.jpg'),
(106, 8, '20190625182309940.jpg'),
(107, 8, '20190625182309281.jpg'),
(108, 8, '20190625182309769.jpg'),
(109, 8, '20190625182309584.jpg'),
(110, 8, '20190625182309872.jpg'),
(111, 8, '20190625182309541.jpg'),
(112, 8, '20190625182309242.jpg'),
(113, 8, '20190625182309868.jpg'),
(114, 8, '20190625182309955.jpg'),
(115, 8, '20190625182310415.jpg'),
(116, 8, '20190625182310862.jpg'),
(117, 8, '20190625182310742.jpg'),
(118, 8, '20190625182310106.jpg'),
(119, 8, '20190625182310101.jpg'),
(120, 8, '20190625182310181.jpg'),
(121, 9, '20190628234356960.jpg'),
(122, 9, '20190628234356166.jpg'),
(123, 9, '20190628234356330.jpg'),
(124, 9, '20190628234356932.jpg'),
(125, 9, '20190628234357222.jpg'),
(126, 9, '20190628234357153.jpg'),
(127, 9, '20190628234358857.jpg'),
(128, 9, '20190628234358645.jpg'),
(129, 9, '20190628234356934.jpg'),
(130, 9, '20190628234359585.jpg'),
(131, 9, '20190628234359151.jpg'),
(132, 9, '20190628234359563.jpg'),
(133, 9, '20190628234359175.jpg'),
(134, 9, '20190628234359281.jpg'),
(135, 9, '20190628234359346.jpg'),
(136, 9, '20190628234359953.jpg'),
(162, 25, '20190723155955274.jpg'),
(163, 25, '20190723155955798.jpg'),
(164, 25, '20190723155956885.jpg'),
(165, 25, '20190723155955387.jpg'),
(166, 25, '20190723155955904.jpg'),
(167, 25, '20190723155956967.jpg'),
(171, 27, '20190803212356545.jpg'),
(172, 27, '20190803212356118.jpg'),
(173, 27, '20190803212356396.jpg'),
(174, 27, '20190803212356521.jpg'),
(175, 27, '20190803212356918.jpg'),
(176, 27, '20190803212356493.jpg'),
(177, 27, '20190803212356783.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_utilidades`
--

CREATE TABLE `imagenes_utilidades` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `imagen` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `border` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes_utilidades`
--

INSERT INTO `imagenes_utilidades` (`id`, `imagen`, `border`) VALUES
(1, '20190722162140777.jpg', 'E01B1B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` bigint(20) UNSIGNED NOT NULL,
  `usuario_autor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_noticia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_noticia` date NOT NULL,
  `intro_noticia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `foto_intro_noticia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cuerpo_noticia` text COLLATE utf8_spanish_ci NOT NULL,
  `vistas` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `usuario_autor`, `titulo_noticia`, `fecha_noticia`, `intro_noticia`, `foto_intro_noticia`, `cuerpo_noticia`, `vistas`) VALUES
(1, 'Admin', 'Titulo de la noticia N4', '2019-06-11', 'get suscipit arcu. Fusce quis augue ac mi maximus posuere vel ut nisi. Morbi interdum, tortor ac elementum imperdiet, purus risus fermentum nisi, sed fringilla magna lorem nec diam. Ut molestie sagitt', '20190612204312553.jpg', '<p><img alt=\"\" src=\"/Proyectos/ColegioBellavista/images/noticias/images/IMG_20181121_103507.jpg\" style=\"height:450px; margin:5px; width:600px\" /></p>\r\n\r\n<p>Nam eget suscipit arcu. Fusce quis augue ac mi maximus posuere vel ut nisi. Morbi interdum, tortor ac elementum imperdiet, purus risus fermentum nisi, sed fringilla magna lorem nec diam. Ut molestie sagittis vestibulum. Cras sit amet ornare turpis. Quisque sed velit ac arcu pulvinar ornare. Fusce interdum, nulla ut pulvinar mattis, justo sapien tincidunt urna, sed tempus metus velit ac ex. Quisque sodales posuere tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Sed ac ipsum quis nisi faucibus fringilla. Nulla ultricies libero odio, vitae condimentum enim rhoncus eu. Etiam eu venenatis massa, posuere porta augue. Nam metus enim, pellentesque a aliquet a, efficitur nec risus. Duis elementum, ante non feugiat pellentesque, mauris quam suscipit eros, eu feugiat erat nibh ac orci. Quisque ut quam non urna tincidunt finibus. Suspendisse congue quam sed risus sagittis, nec volutpat sem faucibus. In vulputate tellus et nulla tincidunt fringilla. Suspendisse vehicula ullamcorper lectus, at commodo urna convallis non. Morbi et elit ut nunc auctor viverra a sit amet urna. Sed pellentesque dolor erat. Donec quis egestas nulla. Suspendisse commodo elit in dolor auctor, at euismod lectus porttitor. Donec auctor ullamcorper dolor vitae hendrerit. Aliquam erat volutpat.</p>\r\n\r\n<p>Nunc id facilisis erat. Sed id augue aliquet, aliquam mauris in, faucibus mi. Aliquam gravida sem ac luctus aliquet. Aenean vitae nunc pulvinar, tristique arcu ut, pretium diam. Mauris lectus leo, ullamcorper at scelerisque non, consequat quis magna. Proin dignissim quis justo vel faucibus. Aliquam convallis ipsum dui, nec placerat leo mattis eget. Vivamus vel lacinia nulla. Etiam ultrices lorem quam, id semper purus consequat vel.</p>\r\n', 0),
(3, 'Admin', 'Titulo de la Noticia N1', '2019-06-13', 'Le sagittis vestibulum. Cras sit amet ornare turpis. Quisque sed velit ac arcu pulvinar ornare. Fusce interdum, nulla ut pulvinar mattis, justo sapien tincidunt urna, sed tempus metus velit ac ex.', '20190612205941191.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan urna at lectus mollis ullamcorper. Nam ultricies ligula quis nunc pretium pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus scelerisque aliquam libero nec dignissim. Mauris viverra, nunc eu rhoncus aliquet, risus enim placerat massa, id varius lectus lectus vel lacus. Aenean finibus justo sed odio ornare eleifend. Quisque in sagittis magna. Quisque tincidunt cursus lectus in lacinia. Aenean malesuada ac sem sit amet gravida. Fusce tempus sem sed arcu efficitur aliquam. Integer eu luctus ligula. Maecenas augue massa, blandit in feugiat et, maximus vitae urna. Donec ac porttitor diam, non rutrum urna. Sed lacus eros, tincidunt ac eros nec, faucibus eleifend ante. Nullam vel metus quis urna ullamcorper efficitur quis id metus.</p>\r\n\r\n<p>Nam eget suscipit arcu. Fusce quis augue ac mi maximus posuere vel ut nisi. Morbi interdum, tortor ac elementum imperdiet, purus risus fermentum nisi, sed fringilla magna lorem nec diam. Ut molestie sagittis vestibulum. Cras sit amet ornare turpis. Quisque sed velit ac arcu pulvinar ornare. Fusce interdum, nulla ut pulvinar mattis, justo sapien tincidunt urna, sed tempus metus velit ac ex. Quisque sodales posuere tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n\r\n<p>Sed ac ipsum quis nisi faucibus fringilla. Nulla ultricies libero odio, vitae condimentum enim rhoncus eu. Etiam eu venenatis massa, posuere porta augue. Nam metus enim, pellentesque a aliquet a, efficitur nec risus. Duis elementum, ante non feugiat pellentesque, mauris quam suscipit eros, eu feugiat erat nibh ac orci. Quisque ut quam non urna tincidunt finibus. Suspendisse congue quam sed risus sagittis, nec volutpat sem faucibus. In vulputate tellus et nulla tincidunt fringilla. Suspendisse vehicula ullamcorper lectus, at commodo urna convallis non. Morbi et elit ut nunc auctor viverra a sit amet urna. Sed pellentesque dolor erat. Donec quis egestas nulla. Suspendisse commodo elit in dolor auctor, at euismod lectus porttitor. Donec auctor ullamcorper dolor vitae hendrerit. Aliquam erat volutpat.</p>\r\n', 1),
(4, 'Admin', 'Titulo de la noticia N3', '2019-06-10', 'áú@Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan urna at lectus mollis ullamcorper. Nam ultricies ligula quis nunc pretium pretium. Vestibulum ante ipsum primis in faucibus ', '20190701054554402.jpg', '<hr />\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan urna at lectus mollis ullamcorper. Nam ultricies ligula quis nunc pretium pretium. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus scelerisque aliquam libero nec dignissim. Mauris viverra, nunc eu rhoncus aliquet, risus enim placerat massa, id varius lectus lectus vel lacus. Aenean finibus justo sed odio ornare eleifend. Quisque in sagittis magna. Quisque tincidunt cursus lectus in lacinia. Aenean malesuada ac sem sit amet gravida. Fusce tempus sem sed arcu efficitur aliquam. Integer eu luctus ligula. Maecenas augue massa, blandit in feugiat et, maximus vitae urna. Donec ac porttitor diam, non rutrum urna. Sed lacus eros, tincidunt ac eros nec, faucibus eleifend ante. Nullam vel metus quis urna ullamcorper efficitur quis id metus&nbsp;&nbsp;&aacute;&uacute;@</p>\r\n', 0),
(5, 'Admin', 'Titulo de la Noticia N2', '2019-07-07', 'introduccion de la noticia', '20190707185558319.jpg', '<p>cuerpo</p>\r\n', 0),
(6, 'Admin', 'Cierre Semana del Libro', '2019-07-23', 'Introduccion a la noticia', '20190723162105700.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacinia eros id mauris cursus sollicitudin. Aliquam ex dolor, placerat non interdum sed, semper id massa. Curabitur lacinia, mauris vitae feugiat rutrum, elit augue scelerisque magna, in finibus eros neque ac libero. Nullam ac risus congue, euismod neque et, gravida libero. Cras sapien diam, posuere non metus in, tincidunt sollicitudin erat. Pellentesque ultrices eu enim sed sollicitudin. In tortor dui, blandit pellentesque efficitur tempus, pellentesque sit amet arcu. Etiam feugiat ipsum a augue bibendum varius.</p>\r\n\r\n<p>Suspendisse tempus augue sed libero dictum, eget dignissim ligula pharetra. Duis sodales cursus condimentum. Nulla varius nulla neque, at malesuada risus sagittis non. Morbi sit amet vehicula nunc. Morbi non congue dui, vel sollicitudin diam. Nulla ornare vitae justo non bibendum. Donec bibendum leo augue, rutrum tincidunt ligula euismod sed. Vestibulum ornare tortor sapien, ut facilisis odio imperdiet a. Phasellus pretium at erat sit amet viverra. Suspendisse ultricies mi leo. Fusce ullamcorper congue est id aliquam. Vivamus id eleifend dui, ac vehicula nisi. Quisque turpis ipsum, tincidunt eget venenatis ut, cursus vel diam.</p>\r\n\r\n<p><img alt=\"\" src=\"/images/noticias/images/Semana%20del%20libro/IMG-20180425-WA0010.jpg\" style=\"height:450px; width:600px\" /></p>\r\n\r\n<p>Phasellus venenatis, elit sed dictum vulputate, augue nulla interdum risus, et luctus leo urna ac eros. Ut tincidunt pellentesque risus vel convallis. Etiam lobortis nibh ut lacus ultricies convallis. Morbi et mauris augue. Nulla vitae nibh eu lectus commodo sodales. Sed placerat lorem diam, vel molestie mi sagittis eget. Duis pellentesque ornare dui eget euismod.</p>\r\n', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_usuario`, `password_usuario`, `nombre`, `apellido`, `email`) VALUES
('Admin', '$2y$10$Ea9U/OLEc.3wqHdOJzKCTeRxP.CgbvYejOj/j.pGvVYXAeBODTzly', 'Administración', 'Bellavista', 'gutierrezs.contacto@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes_alumnos`
--

CREATE TABLE `vacantes_alumnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cupos_disponibles` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vacantes_alumnos`
--

INSERT INTO `vacantes_alumnos` (`id`, `curso`, `cupos_disponibles`) VALUES
(1, 'Pre-Kinder', 3),
(2, 'Kinder', 0),
(4, '1° Básico', 0),
(5, '2° Básico', 0),
(6, '3° Básico', 0),
(7, '4° Básico', 0),
(8, '5° Básico', 0),
(9, '6° Básico', 0),
(10, '7° Básico', 1),
(11, '8° Básico', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `borradores`
--
ALTER TABLE `borradores`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `usuario_autor` (`usuario_autor`);

--
-- Indices de la tabla `contacto_formulario`
--
ALTER TABLE `contacto_formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indices de la tabla `datos_galerias`
--
ALTER TABLE `datos_galerias`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Indices de la tabla `datos_slider`
--
ALTER TABLE `datos_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `equipo_trabajadores`
--
ALTER TABLE `equipo_trabajadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes_galerias`
--
ALTER TABLE `imagenes_galerias`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_galeria` (`id_galeria`);

--
-- Indices de la tabla `imagenes_utilidades`
--
ALTER TABLE `imagenes_utilidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `usuario_autor` (`usuario_autor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre_usuario`);

--
-- Indices de la tabla `vacantes_alumnos`
--
ALTER TABLE `vacantes_alumnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `borradores`
--
ALTER TABLE `borradores`
  MODIFY `id_noticia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto_formulario`
--
ALTER TABLE `contacto_formulario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_galerias`
--
ALTER TABLE `datos_galerias`
  MODIFY `id_galeria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `datos_slider`
--
ALTER TABLE `datos_slider`
  MODIFY `id_slider` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipo_trabajadores`
--
ALTER TABLE `equipo_trabajadores`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `imagenes_galerias`
--
ALTER TABLE `imagenes_galerias`
  MODIFY `id_imagen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT de la tabla `imagenes_utilidades`
--
ALTER TABLE `imagenes_utilidades`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vacantes_alumnos`
--
ALTER TABLE `vacantes_alumnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `borradores`
--
ALTER TABLE `borradores`
  ADD CONSTRAINT `borradores_ibfk_1` FOREIGN KEY (`usuario_autor`) REFERENCES `usuarios` (`nombre_usuario`);

--
-- Filtros para la tabla `imagenes_galerias`
--
ALTER TABLE `imagenes_galerias`
  ADD CONSTRAINT `imagenes_galerias_ibfk_1` FOREIGN KEY (`id_galeria`) REFERENCES `datos_galerias` (`id_galeria`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`usuario_autor`) REFERENCES `usuarios` (`nombre_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
