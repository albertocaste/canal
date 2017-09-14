-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 20-06-2017 a las 19:17:31
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `canal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `ID` int(11) NOT NULL,
  `FECHA` text COLLATE utf8_spanish_ci NOT NULL,
  `ARCHIVO` text COLLATE utf8_spanish_ci NOT NULL,
  `TITULO` text COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`ID`, `FECHA`, `ARCHIVO`, `TITULO`, `DESCRIPCION`) VALUES
(1, '00:00 15/11/2016', 'NCtzkaL2t_Y', 'The Beatles - Don\'t Let Me Down ', 'Los beatles en una azotea. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim risus rutrum dui facilisis rhoncus. Aliquam nec vehicula ipsum. Aenean congue libero eu vehicula suscipit. Sed sit amet magna at nisl lobortis interdum. Pellentesque elementum sodales lorem eu bibendum. Proin tincidunt sem ac hendrerit vulputate. Proin vulputate, leo vel feugiat consectetur, est odio venenatis sem, sed tincidunt lectus metus eget ex. '),
(2, '00:00 15/11/2016', 'u5CVsCnxyXg', 'Radiohead - No Surprises ', 'Thom Yorke y su ojo pipa. Maecenas ligula quam, suscipit vitae rutrum id, pulvinar ut risus. Ut laoreet posuere magna, sit amet consequat mauris maximus in. Quisque pulvinar convallis velit, sit amet malesuada neque dignissim id. Nam luctus in urna in pulvinar. Nunc finibus molestie ipsum nec semper.'),
(3, '00:00 15/11/2016', 'YyMi_itzgFs', 'Skins Cast Sing Cat Stevens: Wild World - April Pearson\'s Top 5 - Skins ', 'Protagonistas de skins cantando Wild World. Aenean ullamcorper, lorem sit amet varius mattis, enim nunc ullamcorper quam, non volutpat velit purus id sapien. In volutpat sagittis venenatis. Pellentesque finibus sapien quis vehicula aliquam. Etiam ac metus euismod nisl egestas dictum ac in nibh. Nunc condimentum condimentum sem sed tristique. Vestibulum iaculis iaculis sapien, id placerat lectus volutpat vel. Phasellus laoreet imperdiet ultrices. Vivamus venenatis massa id ligula porta ultricies convallis a leo. Nam commodo id justo sit amet sodales. Aenean pulvinar lorem non lorem cursus, et suscipit nisi commodo.'),
(4, '00:00 15/11/2016', 'TxRX1VGL1CY', 'Star Wars 2016 Empire Strikes Back Credit', 'Intro Star Wars al estilo 007.uis ut ex vel nulla pharetra bibendum. Fusce faucibus sodales risus, nec aliquam odio eleifend in. Fusce a semper est, vel sodales justo. Sed vel turpis ex. Fusce a tortor a tortor consectetur ornare. Vivamus cursus leo a justo venenatis, molestie dapibus ligula fringilla. Phasellus elementum, erat a semper iaculis, magna nisl lacinia dui, non suscipit diam augue sit amet quam. Fusce vestibulum orci id facilisis imperdiet. Aliquam posuere tellus sem, in aliquam ligula consectetur sit amet. Aliquam sit amet magna interdum, laoreet libero ut, finibus mauris.'),
(5, '00:00 15/11/2016', '55jtyAkaevI', 'Sandro Rey \"Que te den por el culo 2 veces....\" APM? ', 'Sandro Rey y sus genialidades. Proin quis sodales erat. Integer iaculis volutpat dui ac vestibulum. Curabitur faucibus purus sapien, sed convallis libero tempus nec. Fusce aliquet nulla et leo varius, ut facilisis erat suscipit. '),
(6, '00:00 15/11/2016', '7CzbXA53I24', 'Late Night \'Triumph at the Star Wars Premier! ', 'Triumph the dog y los frikis de star wars.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla condimentum felis id velit finibus mollis.'),
(7, '00:00 15/11/2016', 'MNpkSyryQz4', 'Marshawn Lynch and Rob Gronkowski Play \"Mortal Kombat X\" With Conan O\'Brien ', 'Conan Obrien descubriendo los videojuegos.Pellentesque urna justo, posuere id euismod et, gravida non nisl. Donec a tincidunt turpis, consectetur tempus risus. Donec nunc enim, feugiat eget est id, tempus fermentum neque. Nunc volutpat ipsum porttitor dui aliquet accumsan. Proin maximus enim ut dui porta, at vehicula orci cursus. '),
(8, '00:00 15/11/2016', 'RiL21-fouCo', 'EL RENO RENARDO - Crecí en los Ochenta', 'Mítico video del grupo El Reno Renardo homenajeando los 80'),
(9, '00:00 15/11/2016', 'FPVcjlUH6B8', 'APM? El rio una mierda! ', 'Que le parece a usted el rio?. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla condimentum felis id velit finibus mollis. Donec dictum erat nec mauris accumsan volutpat. '),
(10, '00:00 15/11/2016', 'czxGM5GcN_M', 'Las mejores frases y momentos de Mariano Rajoy', 'Duis auctor, augue ut rhoncus convallis, tortor diam aliquam erat, quis porttitor tortor augue nec metus. Donec at varius velit. Donec nulla tortor, sollicitudin id urna id, auctor ullamcorper nulla. Curabitur ac sapien mattis, tincidunt nibh eu, cursus lectus. '),
(11, '00:00 15/11/2016', 'ei7pz6axpxg', 'Thug Life Compilation', 'Lo mejor de lo mejor.Nam commodo id justo sit amet sodales. Aenean pulvinar lorem non lorem cursus, et suscipit nisi commodo. Phasellus erat turpis, feugiat eget rutrum aliquam, facilisis vel sapien. Duis fermentum, nulla eu commodo iaculis, tellus turpis pellentesque tortor, ut vestibulum odio est a lorem. '),
(12, '00:00 15/11/2016', 'q1NwrRaqflo', 'Messi\'s second goal at the Bernabeu (0-2) 27-04-11', 'El mejor gol.Aenean ullamcorper, lorem sit amet varius mattis, enim nunc ullamcorper quam, non volutpat velit purus id sapien. In volutpat sagittis venenatis. Pellentesque finibus sapien quis vehicula aliquam. Etiam ac metus euismod nisl egestas dictum ac in nibh. Nunc condimentum condimentum sem sed tristique. Vestibulum iaculis iaculis sapien, id placerat lectus volutpat vel.'),
(13, '00:00 15/11/2016', 'R6f_7G71p_w', 'Muse - Starlight - Live At Rome Olympic Stadium ', 'Muse en 4K en directo.Fusce sagittis egestas lacus sit amet tristique. Fusce gravida, massa lobortis ornare bibendum, quam purus varius arcu, at pellentesque purus metus et lorem. Vivamus mollis, dui eget mollis finibus, arcu urna porta odio, eget rutrum nunc velit a risus. Aliquam vel egestas sapien, vehicula viverra nibh. Aenean non nibh molestie, facilisis purus nec, vulputate diam. '),
(14, '00:00 15/11/2016', '2GYN7oAovA4', 'La Peor muerte de la historia del cine', 'Nunc finibus molestie ipsum nec semper. Nunc sit amet tempor lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consequat sem turpis, sed sagittis elit laoreet eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis, justo ac ultrices placerat, nunc ante efficitur velit, eget iaculis ligula arcu sed mi. '),
(15, '00:00 15/11/2016', 'SncapPrTusA', 'Bruce Lee- Ping Pong', 'To promote a cell phone from Nokia, Bruce Lee was sponsored by Nokia in a PIng Pong tournament. But as a twist, he plays with his nunchucks.Fusce gravida, massa lobortis ornare bibendum, quam purus varius arcu, at pellentesque purus metus et lorem. Vivamus mollis, dui eget mollis finibus, arcu urna porta odio, eget rutrum nunc velit a risus. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;