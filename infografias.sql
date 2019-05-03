-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2019 a las 15:24:57
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movyrute`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infografias`
--

CREATE TABLE `infografias` (
  `id` int(2) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `infografias`
--

INSERT INTO `infografias` (`id`, `foto`, `titulo`, `texto`) VALUES
(1, 'img/velocipedo.jpg', 'Velocipedo', 'La primera bicicleta fue inventada por el herrero \r\nescocés Kirk Patrick Macmillan y fue llamada velocípedo \r\ny con esta se celebró la primera carrera.'),
(2, 'img/leman.jpg', 'Vuelta al Lago Leman', 'En 1879 en Suiza se creó una carrera ciclista por etapas, diputada alrededor del lago Leman. El ciclista suizo Henri Suter posee el record de cuatro victorias en esta prueba.'),
(3, 'img/italia.jpg', 'Giro a Italia', 'El 13 de mayo de 1909 se realizo el primer giro a Italia en la plaza Di Loreto de Milán, fue organizado por el periódico deportivo “La Gazela dello sport”, que en 1931 adopto el color rosa de sus paginas al igual que \r\n“L´auto”, que identificaba al líder de la carrera.\r\nEl dominador del giro fue Carlo Galetti, campeón desde 1910 hasta 1912.'),
(4, 'img/espana.jpg', 'Vuelta a España', 'En 1935, Clemente López Doriga con Juan Pujol, director del diario “Informaciones”, organizaron la I vuelta a España, el recorrido consto de 3431 kilómetros y 14 etapas. \r\nSe disputaron cuatro ediciones más hasta 1950, cuando el diario decidió renunciar a organizar la vuelta a España.'),
(5, 'img/espana2.jpg', 'Vuelta a España', 'En 1979 la empresa Unipublic se hizo a cargo de la vuelta.'),
(6, 'img/olimpicos.jpg', 'Ciclismo a Olímpicos', 'El ciclismo apareció en los olímpicos en 1896 en la ciudad de Atenas, con las modalidades de ruta y pista. Solo participaron hombres hasta 1980 en Moscú, en ambas modalidades.'),
(7, 'img/mujeres.jpg', 'Mujeres en Olímpicos', 'Las mujeres empezaron en la modalidad de ruta en los olímpicos de los Ángeles en 1984 y en pista compitieron en la ciudad de Seúl en 1984.'),
(8, 'img/montana2.jpg', 'Ciclismo de montaña', 'El ciclismo de montaña apareció en los olímpicos de Atlanta en el año de 1988, con una prueba de campo.'),
(9, 'img/bmxOlimpico.jpg', 'BMX', 'En los juegos de 2008 apareció BMX en la ciudad de Pekín.'),
(10, 'img/tour1.jpg', 'Tour de Francia', 'Se disputó en 1903; la carrera se interrumpió dos veces por causa de las guerras mundiales.'),
(11, 'img/tour2Mapa.jpg', 'Tour de Francia', 'El primer Tour de Francia comenzó en Montgeron, cerca de París, donde tomaron la salida 60 ciclistas que cubrieron la etapa inaugural de 467 km hasta Lyon.'),
(12, 'img/tour3Nairo.jpg', 'Tour de Francia', 'El colombiano Nairo Quintana ganó el tour de Francia del 2018, con una etapa de 67 Km y 3 puertos de montaña.'),
(13, 'img/tour4Rigo.jpg', 'Tour de Francia', 'El colombiano Rigoberto Urán quedó subcampeón en el tour de Francia del 2017, en su cuarta participación.'),
(14, 'img/rutaColombia.jpg', 'Ciclismo de Ruta en Colombia', 'En 1950 nace la vuelta a Colombia \"Café Pasaje\". Efrain Forero \"El Zipa\" con Enrique Santos Castillo, organizaron esta competición y el campeón fue Forero.'),
(15, 'img/pistaColombia.jpg', 'Ciclismo de Pista en Colombia', 'En 1948 se conformó el primer equipo de persecución por el sacerdote Efraín Rozo, el cual se desarrolló en los juegos centro Americanos del Caribe y ganaron la primera medalla de oro de pista para Colombia.'),
(16, 'img/montanaColombia.jpg', 'Ciclismo de Montaña en Colombia', 'Tuvo sus inicios en los años ochenta, en esta época llego la bicicleta todo terreno y sus inicios fueron como actividad recreativa en la ciudades de Bogotá, Medellín y Cali.\r\nCali se destacó por sus montañas, ya que se divisaban todos sus increíbles paisajes y grandes grupos de personas salían recorrerlas.'),
(17, 'img/bmxColombia.jpg', 'BMX en Colombia', 'En 1975 llego el BMX a Colombia con la representación de Ricardo Arango, por la influencia de la revista de BMX-Action, en la pista de moto cross de Furesa.\r\nEl 20 de junio de 1979 nació la liga Antioqueña de Ciclocross Americano como una entidad sinánimo de lucro y con personería jurídica.'),
(18, 'img/esteban.jpg', 'Esteban Chavez', 'Esteban Chavez es un ciclista de ruta colombiano, profesional desde 2009 y se encuentra en el equipo australiano Mitchelton-Scott. Ha quedado en segundo puesto en el giro a Italia y tercero en la vuelta a España.'),
(19, 'img/martha.jpg', 'Martha Bayona', 'Martha Bayona Pineda es una ciclista colombiana de pista.\r\nHa participado en el campeonato nacional de ciclismo en pista y en los juegos Centroamericanos y del Caribe ganando medalla de bronce.'),
(20, 'img/jeronimo.jpg', 'Jerónimo Bedoya', 'Jerónimo Bedoya es un colombiano que participó en los juegos Suramericanos juveniles de Chile con la competencia de montainbike.'),
(21, 'img/mariana.jpg', 'Mariana Pajón', 'Mariana Pajón es una ciclista colombiana y ha ganado en dos ocasiones medalla de oro en los olmpicos. Posee la Orden de Boyacá (Condecoración de la república de Colombia).');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `infografias`
--
ALTER TABLE `infografias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `infografias`
--
ALTER TABLE `infografias`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
