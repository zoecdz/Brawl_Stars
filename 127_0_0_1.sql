-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-06-2023 a las 01:22:02
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cromatico`
--
CREATE DATABASE IF NOT EXISTS `cromatico` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `cromatico`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cromatico`
--

DROP TABLE IF EXISTS `cromatico`;
CREATE TABLE IF NOT EXISTS `cromatico` (
  `ID_brawler` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `img_top` varchar(100) DEFAULT NULL,
  `img_down` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_brawler`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cromatico`
--

INSERT INTO `cromatico` (`ID_brawler`, `nombre`, `descripcion`, `img_top`, `img_down`) VALUES
(1, 'Gale', 'Por ahora no hay información...', '../IMG2/gale.webp', '../IMG2/galepin.gif'),
(2, 'Surge', 'Por ahora no hay información...', '../IMG2/surge.webp', '../IMG2/surgepin.gif'),
(3, 'Colettte', 'Por ahora no hay información...', '../IMG2/colette.webp', '../IMG2/colettepin.gif'),
(4, 'Lou', 'Por ahora no hay información...', '../IMG2/lou.webp', '../IMG2/loupin.gif'),
(5, 'Buzz', 'Por ahora no hay información...', '../IMG2/buzz.webp', '../IMG2/buzzpin.gif'),
(6, 'Lola', 'Por ahora no hay información...', '../IMG2/lola.webp', '../IMG2/lolapin.gif'),
(7, 'Eve', 'Por ahora no hay información...', '../IMG2/eve.webp', '../IMG2/evepin.gif'),
(8, 'Janet', 'Por ahora no hay información...', '../IMG2/janet.webp', '../IMG2/janetpin.gif');
--
-- Base de datos: `cuenta`
--
CREATE DATABASE IF NOT EXISTS `cuenta` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `cuenta`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE IF NOT EXISTS `cuenta` (
  `ID_Cuenta` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(15) DEFAULT NULL,
  `Gmail` tinytext,
  `Contraseña` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_Cuenta`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`ID_Cuenta`, `Nombre`, `Gmail`, `Contraseña`) VALUES
(1, 'ZOE', 'zcarvajaldiaz@gmail.com', '2068798'),
(2, 'TRON', 'tronsoftware@gmail.com', '2068'),
(3, 'RAFA', 'trafasspelle@gmail.com', '123456'),
(4, 'pepe', 'pepe@gmail.com', '12456');
--
-- Base de datos: `epico`
--
CREATE DATABASE IF NOT EXISTS `epico` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `epico`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epico`
--

DROP TABLE IF EXISTS `epico`;
CREATE TABLE IF NOT EXISTS `epico` (
  `ID_brawler` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `img_top` varchar(100) DEFAULT NULL,
  `img_down` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_brawler`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `epico`
--

INSERT INTO `epico` (`ID_brawler`, `nombre`, `descripcion`, `img_top`, `img_down`) VALUES
(1, 'Pam', 'Por ahora no hay información...', '../IMG2/pam.webp', '../IMG2/pampin.gif'),
(2, 'Frank', 'Por ahora no hay información...', '../IMG2/frank.webp', '../IMG2/frankpin.gif'),
(3, 'Bibi', 'Por ahora no hay información...', '../IMG2/bibi.webp', '../IMG2/bibipin.gif'),
(4, 'Bea', 'Por ahora no hay información...', '../IMG2/bea.webp', '../IMG2/beapin.gif'),
(5, 'Nani', 'Por ahora no hay informacón...', '../IMG2/nani.webp', '../IMG2/nanipin.gif'),
(6, 'Edgar', 'Por ahora no hay información...', '../IMG2/edgar.webp', '../IMG2/edgarpin.gif'),
(7, 'Griff', 'Por ahora no hay información...', '../IMG2/griff.webp', '../IMG2/griffpin.gif');
--
-- Base de datos: `fetch_crud_app`
--
CREATE DATABASE IF NOT EXISTS `fetch_crud_app` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `fetch_crud_app`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Sahil', 'Kumar', 'sahil4rock@gmail.com', '07896541235', '2020-11-02 16:28:06', NULL),
(2, 'Harry', 'Potter', 'harry@gmail.com', '789654135', '2020-11-02 16:31:35', NULL),
(3, 'Ron', 'Weasly', 'ron@gmail.com', '741258963', '2020-11-02 16:33:55', NULL);
--
-- Base de datos: `legendario`
--
CREATE DATABASE IF NOT EXISTS `legendario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `legendario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `legendario`
--

DROP TABLE IF EXISTS `legendario`;
CREATE TABLE IF NOT EXISTS `legendario` (
  `ID_brawler` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `img_top` varchar(100) DEFAULT NULL,
  `img_down` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_brawler`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `legendario`
--

INSERT INTO `legendario` (`ID_brawler`, `nombre`, `descripcion`, `img_top`, `img_down`) VALUES
(1, 'Spike', '     Por ahora no hay información...', '../IMG2/spike.webp', '../IMG2/spikepin.gif'),
(2, 'Crow', ' Por ahora no hay información...', '../IMG2/crow.webp', '../IMG2/crowpin.gif'),
(3, 'Amber', '  Por ahora no hay información...', '../IMG2/amber.webp', '../IMG2/amberpin.gif'),
(4, 'Sandy', '  Por ahora no hay información...', '../IMG2/sandy.webp', '../IMG2/sandypin.gif');
--
-- Base de datos: `mitico`
--
CREATE DATABASE IF NOT EXISTS `mitico` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mitico`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mitico`
--

DROP TABLE IF EXISTS `mitico`;
CREATE TABLE IF NOT EXISTS `mitico` (
  `ID_brawler` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `img_top` varchar(100) DEFAULT NULL,
  `img_down` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_brawler`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `mitico`
--

INSERT INTO `mitico` (`ID_brawler`, `nombre`, `descripcion`, `img_top`, `img_down`) VALUES
(1, 'Mortis', 'Por ahora no se ingresó información...', '../IMG2/mortis.webp', '../IMG2/mortispin.gif'),
(2, 'Tara', 'Por ahora no se ingresó información...', '../IMG2/tara.webp', '../IMG2/tarapin.gif'),
(3, 'Genio', 'Por ahora no se ingresó información...', '../IMG2/genio.webp', '../IMG2/geniopin.gif'),
(4, 'Max', 'Por ahora no se ingresó información...', '../IMG2/max.webp', '../IMG2/maxpin.gif'),
(5, 'Sprout', 'Por ahora no se ingresó información...\r\n    \r\n\r\n\r\n    \r\n        \r\n', '../IMG2/sprout.webp', '../IMG2/sproutpin.gif'),
(6, 'Byron', 'Por ahora no se ingresó información...', '../IMG2/byron.webp', '../IMG2/byronpin.gif'),
(7, 'Squeak', 'Por ahora no se ingresó información...', '../IMG2/squeak.webp', '../IMG2/squeakpin.gif');
--
-- Base de datos: `raro`
--
CREATE DATABASE IF NOT EXISTS `raro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `raro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raro`
--

DROP TABLE IF EXISTS `raro`;
CREATE TABLE IF NOT EXISTS `raro` (
  `ID_brawler` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `img_top` varchar(100) DEFAULT NULL,
  `img_down` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_brawler`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `raro`
--

INSERT INTO `raro` (`ID_brawler`, `nombre`, `descripcion`, `img_top`, `img_down`) VALUES
(1, 'Barley', 'Barley es un robot mesero de rareza Especial \r\nque lanza botellas sobre todo a distancia. \r\nSu super es lanzar 5 botellas a la misma vez. \r\nSu primer gadget, Mejunje pegajoso, crea un charco\r\npegajoso a su alrededor que ralentiza a los enemigos\r\nen el area de efecto. Su segundo gadget Tonicos \r\nherbales, arroja botellas a su alrededor y a sus \r\ncompañeros de equipo que los curan si se paran en \r\nlos charcos. Su primer poder estelar, Licor \r\ncurativo, lo cura un poco cuando lanza su botella \r\ncon su ataque. Su segundo poder estelar, Licor \r\nextranocivo, aumenta el daño de su ataque \r\nprincipal por segundo. Barley y su aspecto \r\nde mago se pueden desbloquear de forma gratuita \r\nregristandose a Supercell ID.', '../IMG2/barley.webp', '../IMG2/barleypin.gif'),
(2, 'El Primo', 'El Primo es un Brawler Especial que ataca con \r\nsus puños, causando un daño importante a los enemigos\r\na los que puede acercarse lo suficiente. El Primo \r\ntambién tiene una salud muy alta, lo que le permite \r\nsoportar mucho daño. Con su Súper, puede saltar \r\nuna gran distancia y caer encima de los oponentes, \r\ncausando daño. Su primera Habilidad estelar puede \r\nprender fuego a los luchadores enemigos, \r\ninfligiendo 1200 de daño en 4 segundos cuando \r\nsu Súper golpea a los luchadores, objetos o \r\nrobots enemigos. Y su segunda Habilidad estelar \r\nle otorga un aumento de velocidad del 25% durante \r\n4 segundos después de usar su Super.', '../IMG2/primo.webp', '../IMG2/primopin.gif'),
(3, 'Poco', 'Poco es un Brawler Especial que tiene una salud \r\nmoderadamente alta y la capacidad de proporcionar \r\nuna curación inmensa a sus compañeros de equipo, \r\npero un daño muy bajo. Para su ataque, Poco toca \r\nsu guitarra, disparando notas musicales dañinas \r\ndentro de un amplio alcance. Su súper dispara \r\nuna onda musical más grande y más rápida, \r\ncurándose a sí mismo y a cualquier aliado \r\ndentro de su rango. Su primer Gadget, \"Diapasón\",\r\nemite una onda musical circular a su alrededor que \r\nle permite a él y a sus aliados sanar en unos segundos. \r\nSu segundo Gadget, \"Canción Protectora\", cura a los \r\naliados de cualquier efecto de estado y protege a los \r\naliados de esos efectos momentáneamente en un gran \r\nradio a su alrededor. Su primer Habilidad estelar, \r\n\"Musicoterapia\", permite que el ', '../IMG2/poco.webp', '../IMG2/pocopin.gif'),
(4, 'Rosa', 'Rosa es una brawler Especial que tiene mucha salud \r\ny una que hace una gran cantidad de daño. Su ataque \r\nes una ráfaga de tres golpes de corto alcance con \r\nsus guantes de boxeo. Su Super le otorga un escudo \r\nde reducción de daño momentáneo pero significativo. \r\nSu primer gadget, \"Arbustos robustos\", genera arbustos \r\na su alrededor. Su segundo Gadget, \"Ortigas\", \r\nralentiza instantáneamente y daña levemente a todos \r\nlos enemigos dentro de los arbustos. Su primer Habilidad \r\nEstelar, \"Naturaleza viva\", la cura con el tiempo cuando \r\nestá dentro de los arbustos. Su segunda Habilidad Estelar, \r\n\"Guantes punzantes\", agrega daño adicional a su ataque \r\nmientras su Super está activo.', '../IMG2/rosa.webp', '../IMG2/rosapin.gif');
--
-- Base de datos: `superraro`
--
CREATE DATABASE IF NOT EXISTS `superraro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `superraro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superraro`
--

DROP TABLE IF EXISTS `superraro`;
CREATE TABLE IF NOT EXISTS `superraro` (
  `ID_brawler` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `img_top` varchar(100) DEFAULT NULL,
  `img_down` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_brawler`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `superraro`
--

INSERT INTO `superraro` (`ID_brawler`, `nombre`, `descripcion`, `img_top`, `img_down`) VALUES
(1, 'Penny', 'Penny es una Brawler parte de los Brawlers Superespeciales\r\nque puede colocar un mortero cuando usas su Super que tiene\r\nuna salud media, un daño muy alto y puede golpear a los \r\nenemigos detrás de las paredes. Penny tiene una salud media \r\ny su ataque de largo alcance puede golpear a los enemigos \r\ndetrás del objetivo original para causar daño adicional. \r\nSu primer Habilidad estelar, \"Explosion final\", le permite a \r\nsu cañón disparar 4 balas de cañón que apuntan a \r\nobjetos / luchadores dentro de un rango enorme después de \r\nser destruidas o reaparecidas, haciendo 1680 de daño a los \r\nenemigos que son golpeados y su segunda Habilidad estelar, \r\n\"Bolas de fuego\", permite que sus balas de cañón incendien \r\nel suelo durante 3 segundos, lo que inflige 400 de daño por \r\nsegundo a los enemigo', '../IMG2/penny.webp', '../IMG2/pennypin.gif'),
(2, 'Carl', 'Carl es un robot minero parte de los Brawlers Superespeciales. \r\nTiene una salud moderadamente alta y una producción de daño moderada. \r\nCuando ataca, Carl golpea con su pico, dañando y atravesan a \r\ncualquier enemigo golpeado mientras el pico vuela hacia adelante \r\no regresa a Carl, y consume su única munición que se recarga \r\ncuando el pico regresa. Su Súper lo hace girar como un loco \r\ncon su pico, duplicando su velocidad de movimiento y permitiéndole \r\ndañar a los enemigos a los que se acerca durante su duración.\r\n Su primer Gadget, \"Rocas volcánicas\", suelta un rastro de \r\n rocas calientes detrás de él que incendia a los enemigos \r\n que las tocan. Su segundo Gadget, \"Gancho remolcador\", \r\n hace que el próximo ataque de Carl lo lleve al punto más \r\n lejano de su alcance. Su primer Habi', '../IMG2/carl.webp', '../IMG2/carlpin.gif'),
(3, 'Rico', 'Rico es un Brawler parte de los brawlers Superespeciales \r\nrobot que se asemeja a una maquina expendedora de chicles. \r\nPosee un largo alcance, un potencial de daño alto y vida baja, \r\nparecido a Colt, pero con la particularidad que sus balas \r\nrebotan en las paredes y siguen viajando. Su primer Gadget, \r\n\"Parque de Bolas\", dispara dos ráfagas rápida de bolas \r\nhacia 8 direcciones. Su segundo Gadget, \"Castillo inflable\", \r\nhace que su siguiente ataque lo cure cada vez que rebote. \r\nSu primera Habilidad Estelar, \"Superrebote\", permite a las \r\nbalas de Rico hacer más daño cuando estas rebotan en un muro. \r\nSu segunda Habilidad Estelar, \"Retirada Robótica\", \r\npermite a Rico moverse rápidamente cuando tiene poca vida.', '../IMG2/rico.webp', '../IMG2/ricopin.gif'),
(4, 'Darryl', 'Darryl es un Brawler Superespeciales que tiene mucha salud \r\ny una producción de daño alta pero inconsistente. \r\nSu Atributo ayuda a que su Súper se cargue automáticamente \r\ncon el tiempo. Ataca dando escopetazos que causan un daño muy \r\nalto a corta distancia. Su Super le permite rodar una \r\ndistancia corta, dañar a los enemigos, rebotar en las \r\nparedes y obtener un importante escudo de reducción de \r\ndaño mientras rueda. Su primer Gadget, \"Disparos 360\", \r\nle permite a Darryl girar y disparar una ráfaga de \r\ntiros en todas las direcciones a su alrededor. \r\nSu segundo Gadget, \"Barril de Alquitrán\", ralentiza a \r\nlos enemigos. Su primer Habilidad estelar, \r\n\"Aros de acero\", le otorga un pequeño escudo durante \r\nun par de segundos después de usar su super. \r\nSu segundo Habilidad estelar, \"', '../IMG2/darryl.webp', '../IMG2/darrylpin.gif'),
(5, 'Jacky', 'Jacky es una Brawler parte de los Brawlers Superespeciales\r\nque se puede conseguir en las Cajas Brawl. Tiene una salud \r\nalta y una producción de daño moderadamente alta pero inconsistente. \r\nTiene un rasgo que le permite cargar su Super de los \r\nenemigos que la dañan. Ataca con su martillo neumático, \r\nque rompe el suelo e instantáneamente inflige daño en un \r\nárea circular a su alrededor. Su Súper atrae enemigos \r\nen un gran radio. Su Gadget, \"Subidón neumático\", \r\naumenta brevemente su velocidad de movimiento. \r\nSu primer Habilidad Estelar, \"No hay de qué\", refleja una \r\nparte del daño que recibe en un rango mediano a su alrededor. \r\nSu segunda Habilidad Estelar, \"Casco blindado\", \r\nreduce pasiva y levemente todo el daño que recibe \r\ndurante toda la duración de la partida.', '../IMG2/jacky.webp', '../IMG2/jackypin.gif');
--
-- Base de datos: `trofeos`
--
CREATE DATABASE IF NOT EXISTS `trofeos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `trofeos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trofeos`
--

DROP TABLE IF EXISTS `trofeos`;
CREATE TABLE IF NOT EXISTS `trofeos` (
  `ID_brawler` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `img_top` varchar(100) DEFAULT NULL,
  `img_down` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_brawler`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `trofeos`
--

INSERT INTO `trofeos` (`ID_brawler`, `nombre`, `descripcion`, `img_top`, `img_down`) VALUES
(1, 'Nita', 'Nita es una Brawler Común que se desbloquea como \r\nrecompensa del Camino de Trofeos al llegar a los 15 trofeos.\r\nTiene una salud moderada y ataques con ondas\r\n de choque que tienen un alcance moderado y \r\npuede golpear a múltiples enemigos. Ella es más \r\nnotable por la habilidad de su Súper de invocar a un oso.\r\nEste oso tiene alta salud y ataques cuerpo a \r\ncuerpo rápidos y peligrosos. Su Gadget, \"Garras de oso\", \r\naturdirá a todos los enemigos en un área alrededor de su oso.\r\n Su segundo Gadget, \"Piel Protectora\" le proporciona\r\na su oso un escudo que reduce el 30% del daño recibido.\r\n Su primera Habilidad estelar, \"Hermano oso\",\r\ncura a su oso por 500 de salud cuando ella misma ataca \r\nal enemigo, y el oso cura a Nita por 500 cuando ataca al enemigo, \r\n y su segunda Habilidad estelar, \"', '../IMG2/nita.webp', '../IMG2/nitapin.gif'),
(2, 'Colt', 'Colt es un luchador común que se desbloquea como\r\nrecompensa de Trophy Road  al alcanzar los 60 \r\ntrofeos. Tiene poca salud pero una gran cantidad \r\nde daño. Su ataque es una andanada de seis balas \r\nde largo alcance. Su Súper es una descarga de mayor \r\nalcance de doce balas penetrantes que pueden destruir \r\nobstáculos. Su primer Gadget, Speedloader, recarga\r\ninstantáneamente 2 de sus municiones. Su segundo Gadget,\r\nSilver Bullet, convierte su próximo ataque en una sola bala\r\nperforante que destruye obstáculos y causa el daño de dos de \r\nlas balas de su ataque principal. Su primer Star Power, Slick\r\nBoots, aumenta pasivamente su velocidad de movimiento. \r\nSu segundo Star Power, Magnum Special, aumenta el alcance \r\ny la velocidad de la bala de su ataque principal.', '../IMG2/colt.webp', '../IMG2/coltpin.gif'),
(3, 'Bull', 'Bull es un Brawler común que se desbloquea como \r\nrecompensa de Trophy Road al alcanzar los 250 trofeos.\r\nBull tiene mucha salud, una velocidad de movimiento \r\nrápida y una gran cantidad de daño a corta distancia. \r\nSu Rasgo le permite cargar su Súper de los enemigos \r\nque lo dañan. Su ataque es un disparo de múltiples \r\ncartuchos de escopeta que infligen un gran daño de cerca. \r\nSu Súper lo hace cargar en cierta dirección, dañando a \r\nlos enemigos y destruyendo obstáculos en su camino, lo\r\nque le permite acercarse o escapar de los enemigos.\r\nSu primer Gadget, T-Bone Injector, lo cura \r\ninstantáneamente por una cantidad considerable. \r\nSu segundo Gadget, Stomper, detiene su Super y \r\npisotea el suelo, ralentizando a los enemigos dentro del alcance. \r\nSu primer Star Power, Berserker, duplic', '../IMG2/bull.webp', '../IMG2/bullpin.gif'),
(5, 'Jessie', 'Jessie es una Brawler común que se desbloquea \r\ncomo recompensa de Trophy Road al alcanzar los \r\n500 trofeos. Tiene salud moderadamente baja, daño \r\nmoderado y una velocidad de recarga bastante lenta. \r\nSu ataque es un orbe eléctrico que rebota entre los \r\nenemigos. Su Súper coloca a Scrappy, una torreta con \r\nsalud y daño moderados que sobresale en el ataque, la \r\ndistracción y la defensa. Su primer Gadget, Spark Plug, \r\ncrea una onda de choque alrededor de Scrappy que ralentiza \r\na los enemigos. Su segundo Gadget, Recoil Spring, duplica \r\nla velocidad de ataque de Scrappy durante 5 segundos. Su primer \r\nStar Power, Energize, le permite curar su torreta atacándola y su \r\nsegundo Star Power, Shocky, le permite a su torreta disparar mini \r\norbes de energía que pueden rebotar entre los enemi', '../IMG2/jessie.webp', '../IMG2/jessiepin.gif'),
(6, 'Brock', 'Brock es un Brawler común que se desbloquea como \r\nrecompensa de Trophy Road al alcanzar los 1000 trofeos. \r\nTiene poca salud pero una gran cantidad de daño. Su ataque \r\ndispara cohetes de largo alcance que explotan y causan daño \r\nde área en un radio corto. Su Super dispara una andanada \r\nde cohetes en un área grande. Su primer artilugio, Rocket Laces,\r\nle permite disparar a sus pies, dañar a los enemigos cercanos\r\ny derribarlos, y lanzar a Brock por los aires. \r\nSu segundo artilugio, Rocket Fuel, convierte el próximo \r\nataque de Brock en un megacohete que tiene un radio de \r\nexplosión más grande, destruye paredes y viaja más rápido. \r\nSu primer Star Power, ¡Más cohetes!, aumenta la cantidad de \r\ncohetes disparados desde su Súper. Su segundo Star Power, \r\nRocket No. Four, aumenta la capac', '../IMG2/brock.webp', '../IMG2/brockpin.gif'),
(7, 'Dynamike', 'Dynamike es un Brawler común que se desbloquea como\r\nrecompensade Trophy Road al alcanzar los 2000 trofeos. \r\nTiene poca salud pero una gran cantidad de daño. \r\nAtaca lanzando cartuchos de dinamita sobre obstáculos \r\nque explotan y causan un gran daño en un radio medio. \r\nPara su Súper, lanza un gran barril de dinamita que \r\ninflige un daño muy alto y derriba a los enemigos \r\nsobrevivientes en un gran radio mientras también \r\ndestruye obstáculos. Su primer Gadget, Fidget Spinner, \r\nle permite girar con un impulso de velocidad y disparar \r\nrápidamente cartuchos de dinamita en un gran radio a \r\nsu alrededor. Su segundo Gadget, Satchel Charge, hace \r\nque el próximo ataque principal de Dynamike aturda a \r\nlos enemigos brevemente. Su primer Star Power, Dyna-Jump, \r\npermite que su ataque y Super', '../IMG2/dynamike.webp', '../IMG2/dynamikepin.gif'),
(8, 'Tick', 'Tick es un luchador común que se desbloquea como \r\nrecompensa de Trophy Road al alcanzar los 4000 trofeos. \r\nTiene la salud más baja de cualquier Brawler pero tiene\r\n un alto potencial de daño. Ataca lanzando tres \r\n minas sobre obstáculos que explotan al entrar en \r\n contacto con un objetivo opuesto o después de \r\n un retraso. Su Súper se separa y lanza su cabeza, \r\n que persigue al enemigo más cercano y explota, \r\n infligiendo un gran daño y derribando a los \r\n enemigos mientras también destruye obstáculos. \r\n Su primer Gadget, Mine Mania, duplica la cantidad \r\n de minas que dispara su próximo ataque. \r\n Su segundo Gadget, Last Hurrah, le otorga un \r\n escudo temporal antes de que explote, \r\n infligiendo daño y derribando a los enemigos. \r\n Su primer Star Power, Well Oiled, le permite \r\n ', '../IMG2/tick.webp', '../IMG2/tickpin.gif'),
(9, 'Bo', 'Bo es un peleador común desbloqueado como \r\nrecompensa de Trophy Road al alcanzar los \r\n3000 trofeos. Tiene una salud moderada, una \r\ninmensa utilidad con su Súper y una producción \r\nde daño potencialmente alta pero inconsistente. \r\nAtaca disparando tres flechas de largo alcance \r\nque explotan en un pequeño radio al final de \r\nsu alcance. Su Súper coloca tres trampas que \r\npueden activarse para explotar un momento \r\ndespués al ser pisadas por un enemigo, \r\ndañando y derribando a los enemigos al explotar. \r\nSu primer Gadget, Super Totem, coloca un tótem \r\nque carga lentamente contra los Supers de Bo y \r\nsus aliados mientras se encuentra dentro de su \r\nárea de efecto. Su segundo Gadget, Tripwire, \r\ndetona manualmente sus trampas. Su primer Star Power, \r\nCircling Eagle, aumenta su campo de vi', '../IMG2/bo.webp', '../IMG2/bopin.gif'),
(10, '8-Bit', '8-Bit es un Brawler común que se desbloquea como \r\nrecompensa de Trophy Road al alcanzar los 6000 trofeos. \r\nTiene mucha salud y una gran cantidad de daño, \r\npero sufre al tener la velocidad de movimiento más \r\nlenta de cualquier Brawler. Ataca disparando \r\nrayos láser de largo alcance y muy dañinos. \r\nSu Super genera un refuerzo de daño que aumenta \r\nel daño de él y sus aliados dentro de su radio. \r\nSu primer Gadget, Cheat Cartridge, lo teletransporta \r\ninstantáneamente a su Damage Booster. Su segundo \r\nGadget, Extra Credits, triplica la cantidad de \r\nláseres que dispara su próximo ataque. Su primer Star Power, \r\nBoosted Booster, aumenta significativamente su rango de \r\nDamage Booster y el aumento de daño. Su segundo Star Power, \r\nPlugged In, aumenta su velocidad de movimiento dentro \r\nde', '../IMG2/8bit.webp', '../IMG2/8bitpin.gif'),
(11, 'EMZ', 'Emz es un luchador común que se desbloquea como \r\nrecompensa de Trophy Road al alcanzar los 8000 trofeos. \r\nElla tiene una salud moderada pero un alto potencial de daño. \r\nSu ataque es un disparo amplio de laca para el \r\ncabello que inflige daño con el tiempo y causa el \r\nmayor daño si el enemigo está en medio del ataque. \r\nSu Súper crea una nube temporal en un gran radio a \r\nsu alrededor que se ralentiza y causa daño con el \r\ntiempo a los enemigos dentro de ella. Su primer Gadget, \r\nFriendzoner, hace retroceder a todos los enemigos \r\ncercanos al mismo tiempo que los daña. Su segundo Gadget, \r\nAcid Spray, permite que su próximo ataque atraviese las \r\nparedes pero hace un poco menos de daño. Su primer \r\nStar Power, Bad Karma, hace que cada tic de su ataque \r\naumente el daño de manera adicio', '../IMG2/emz.webp', '../IMG2/emzpin.gif'),
(12, 'Stu', 'Stu es un peleador común que se desbloquea como \r\nrecompensa de Trophy Road al alcanzar 10000 trofeos. \r\nStu tiene poca salud pero un alto potencial de daño explosivo, \r\ngran movilidad con su Súper y la habilidad única \r\nde cargar su Súper de un solo golpe. \r\nAtaca con dos fuegos artificiales, y su Súper es \r\nuna carrera corta que deja un rastro de goma quemada \r\ndetrás de él, que quema a los enemigos si lo tocan. \r\nSu primer Gadget, Speed Zone, deja caer un refuerzo \r\nque aumenta la velocidad de movimiento de él y sus \r\naliados en una gran área de efecto a su alrededor. \r\nSu segundo Gadget, Breakthrough, permite que su próximo \r\nSuper destruya obstáculos y envíe los escombros de los \r\nobstáculos destruidos para dañar a los enemigos. \r\nSu primer Star Power, Zero Drag, aumenta el alcance de', '../IMG2/stu.webp', '../IMG2/stupin.gif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
