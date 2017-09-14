-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 26-07-2017 a las 21:44:06
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `butxacat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(11) NOT NULL,
  `NOMBRE` text COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` text COLLATE utf8_spanish_ci NOT NULL,
  `FECHA` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`ID`, `NOMBRE`, `EMAIL`, `FECHA`) VALUES
(0, 'edu', 'edu@edu.com', '26/07/2017 20:28:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `PID` text COLLATE utf8_spanish_ci NOT NULL,
  `FECHA` text COLLATE utf8_spanish_ci NOT NULL,
  `AUTOR` text COLLATE utf8_spanish_ci NOT NULL,
  `TITULAR` text COLLATE utf8_spanish_ci NOT NULL,
  `TEXTO` text COLLATE utf8_spanish_ci NOT NULL,
  `IMAGEN` text COLLATE utf8_spanish_ci NOT NULL,
  `THUMB` text COLLATE utf8_spanish_ci NOT NULL,
  `CATEGORIA` text COLLATE utf8_spanish_ci NOT NULL,
  `TAGS` text COLLATE utf8_spanish_ci NOT NULL,
  `SHORT` text COLLATE utf8_spanish_ci NOT NULL,
  `PUBLICADO` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`ID`, `PID`, `FECHA`, `AUTOR`, `TITULAR`, `TEXTO`, `IMAGEN`, `THUMB`, `CATEGORIA`, `TAGS`, `SHORT`, `PUBLICADO`) VALUES
(1, 'ogq5cto21i', '25/07/2017 19:55:34', 'Caste', 'Cadaques', '<p>Nulla urna ipsum, tempus pretium tincidunt vel, convallis vitae nunc. Nullam luctus nisi magna, interdum iaculis justo sollicitudin ac. Donec vehicula mauris et odio sagittis laoreet. Phasellus vitae lorem a est fringilla vulputate a id mauris. Ut imperdiet fermentum quam, nec vulputate velit tincidunt eu. Duis volutpat odio est, quis lacinia arcu vestibulum nec. Suspendisse sagittis leo at velit laoreet faucibus eget ut orci. Nullam semper arcu non posuere convallis. Nulla urna ipsum, tempus pretium tincidunt vel, convallis vitae nunc. Nullam luctus nisi magna, interdum iaculis justo sollicitudin ac. Donec vehicula mauris et odio sagittis laoreet. Phasellus vitae lorem a est fringilla vulputate a id mauris. Ut imperdiet fermentum quam, nec vulputate velit tincidunt eu. Duis volutpat odio est, quis lacinia arcu vestibulum nec. Suspendisse sagittis leo at velit laoreet faucibus eget ut orci. Nullam semper arcu non posuere convallis.</p>\\r\\n', 'posts/ogq5cto21i/big_ogq5cto21i.jpg', 'posts/ogq5cto21i/thumb_ogq5cto21i.jpg', '1', 'mar,montaña,playa', 'Nulla urna ipsum, tempus pretium tincidunt vel, convallis vitae nunc. Nullam luctus nisi magna, interdum iaculis justo sollicitudin ac. Donec vehicula mauris et odio sagittis laoreet. Phasellus vitae lorem a est fringilla vulputate a id mauris. Ut imperdiet fermentum quam, nec vulputate velit tincidunt eu. Duis volutpat odio est, quis lacinia arcu vestibulum nec. Suspendisse sagittis leo at velit laoreet faucibus eget ut orci. Nullam semper arcu non posuere convallis. ', 1),
(2, '26n6gdx0xl', '25/07/2017 20:32:24', 'Caste', 'girona', '<p>Nullam ac risus congue, bibendum orci eget, sagittis tellus. Ut nulla arcu, bibendum id ante sit amet, placerat cursus mi. Maecenas sed velit consequat, tempus neque at, tincidunt libero. Praesent felis eros, auctor vitae rhoncus at, ullamcorper sit amet neque. Vestibulum sit amet finibus ipsum. In porta placerat rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam ac risus congue, bibendum orci eget, sagittis tellus. Ut nulla arcu, bibendum id ante sit amet, placerat cursus mi. Maecenas sed velit consequat, tempus neque at, tincidunt libero. Praesent felis eros, auctor vitae rhoncus at, ullamcorper sit amet neque. Vestibulum sit amet finibus ipsum. In porta placerat rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\\r\\n', 'posts/26n6gdx0xl/big_26n6gdx0xl.jpg', 'posts/26n6gdx0xl/thumb_26n6gdx0xl.jpg', '1', 'mar,montaña,cascohistorico', 'Nullam ac risus congue, bibendum orci eget, sagittis tellus. Ut nulla arcu, bibendum id ante sit amet, placerat cursus mi. Maecenas sed velit consequat, tempus neque at, tincidunt libero. Praesent felis eros, auctor vitae rhoncus at, ullamcorper sit amet neque. Vestibulum sit amet finibus ipsum. In porta placerat rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', 1),
(3, 'aebt4fj1aq', '25/07/2017 20:33:48', 'Caste', 'Fageda', '<p>Etiam elementum magna ullamcorper, bibendum eros mollis, sodales tellus. Sed nibh metus, fermentum a vehicula ac, hendrerit sit amet felis. Proin justo libero, molestie a mi ultricies, finibus scelerisque mi. Mauris ultrices mauris id quam lacinia, vel sodales justo consectetur. Etiam elementum magna ullamcorper, bibendum eros mollis, sodales tellus. Sed nibh metus, fermentum a vehicula ac, hendrerit sit amet felis. Proin justo libero, molestie a mi ultricies, finibus scelerisque mi. Mauris ultrices mauris id quam lacinia, vel sodales justo consectetur. Etiam elementum magna ullamcorper, bibendum eros mollis, sodales tellus. Sed nibh metus, fermentum a vehicula ac, hendrerit sit amet felis. Proin justo libero, molestie a mi ultricies, finibus scelerisque mi. Mauris ultrices mauris id quam lacinia, vel sodales justo consectetur. Etiam elementum magna ullamcorper, bibendum eros mollis, sodales tellus. Sed nibh metus, fermentum a vehicula ac, hendrerit sit amet felis. Proin justo libero, molestie a mi ultricies, finibus scelerisque mi. Mauris ultrices mauris id quam lacinia, vel sodales justo consectetur.</p>\\r\\n', 'posts/aebt4fj1aq/big_aebt4fj1aq.jpg', 'posts/aebt4fj1aq/thumb_aebt4fj1aq.jpg', '2', 'montaña,pirineos,fageda', 'Etiam elementum magna ullamcorper, bibendum eros mollis, sodales tellus. Sed nibh metus, fermentum a vehicula ac, hendrerit sit amet felis. Proin justo libero, molestie a mi ultricies, finibus scelerisque mi. Mauris ultrices mauris id quam lacinia, vel sodales justo consectetur. ', 1),
(4, 'alh3uulbk3', '25/07/2017 20:45:03', 'Caste', 'Sitges', '<p>Hay lugares que ya suenan lindos solo por su nombre,&nbsp;Sitges&nbsp;es uno de ellos. Este pueblo es conocido por muchas cosas, en especial por su excelente clima durante casi todo el a&ntilde;o, gracias a su excelente ubicaci&oacute;n geogr&aacute;fica en la costa mediterr&aacute;nea.<br />\\r\\nDispone de 4km de costa&nbsp;y de un encantador paseo mar&iacute;timo con palacetes frente al mar. Adem&aacute;s, Sitges es conocida por sus innumerables eventos como las vendimias, fiestas populares locales, conciertos, entre otros. Destacando: el Festival Internacional de Cine Fant&aacute;stico de Catalu&ntilde;a y el Carnaval de Sitges.</p>\\r\\n\\r\\n<p>Fui todo el trayecto escuchando canciones de Serrat y Sabina, mientras me perd&iacute;a en las vistas que ten&iacute;a frente a mi. Quise leer pero no pude: fue imposible despegar la nariz de la ventana del tren.<br />\\r\\nSal&iacute; de la estaci&oacute;n con el mapa y todos los datos que me hab&iacute;an dado en la ventanilla de informaci&oacute;n tur&iacute;stica. Llevaba una peque&ntilde;a mochila conmigo. En ella ten&iacute;a mi libro, una botella con agua, y un poco de fruta. Cruc&eacute; los estacionamientos y una larga avenida.</p>\\r\\n\\r\\n<p>Como parte del pueblo est&aacute; construido en lo alto de un pe&ntilde;asco, las calles no son rectas sino laber&iacute;nticas. As&iacute; que hice lo que casi siempre hago en lugares as&iacute; de encantadores: camin&eacute; sin pensar, dej&aacute;ndome llevar por la intuici&oacute;n y por las cosas bonitas que me encuentro en el camino.<br />\\r\\nAs&iacute; llegu&eacute; al casco antiguo de la ciudad y hermosas casitas de color blanco con ventanas y puertas de color azul empezaron a marcarme el camino. Las calles estaban totalmente empedradas e invitaban caminarlas.<br />\\r\\nEmpec&eacute; a perderme por ah&iacute; y por all&aacute;, mientras que la m&uacute;sica de Sabina y Serrat se colaba por mis aud&iacute;fonos.</p>\\r\\n\\r\\n<p>El olor de la brisa marina y del pescado fresco, empez&oacute; a guiarme por esas callejuelas hasta llegar a la Plaza del Baluard, donde se levanta la iglesia Sant Bartomeu y Santa Tecla. Desde ah&iacute; tuve la mejor vista del Mediterr&aacute;neo.<br />\\r\\nBaj&eacute; unas escaleras hasta llegar a la plaza de la Fragata desde donde pude acceder al paseo mar&iacute;timo del pueblo y a las playas.<br />\\r\\nMe recost&eacute; en la arena que se encontraba c&aacute;lida por el radiante sol que brillaba encima nuestro, a pesar de que est&aacute;bamos en pleno invierno. Me qued&eacute; un largo rato haciendo terapia de sol, llen&aacute;ndome de vitamina D.&nbsp;Abr&iacute; mi mochila, saqu&eacute; mi libro y continu&eacute; con la hoja que dej&eacute; de leer en mi cama de&nbsp;Barcelona&hellip;</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n', 'posts/alh3uulbk3/big_alh3uulbk3.jpg', 'posts/alh3uulbk3/thumb_alh3uulbk3.jpg', '2', 'mar,playa,gay', 'Hay lugares que ya suenan lindos solo por su nombre, Sitges es uno de ellos. Este pueblo es conocido por muchas cosas, en especial por su excelente clima durante casi todo el año, gracias a su excelente ubicación geográfica en la costa mediterránea.', 1),
(5, 'ygm1o9437s', '26/07/2017 18:54:57', 'Caste', 'Besalu', '<p>Hace unos cuantos s&aacute;bados estaba yo durmiendo tan a gusto cuando de repente apareci&oacute; Ra&uacute;l, me despert&oacute;, me dijo que me vistiera y que preparara el pijama para pasar una noche fuera, con lo que me gustan las sorpresas!!! No me dijo a d&oacute;nde &iacute;bamos hasta que no aparecimos en la plaza principal de&nbsp;Besal&uacute;.<br />\\r\\nHac&iacute;a mucho tiempo que ten&iacute;a ganas de visitar este peque&ntilde;o pueblo de la comarca de la Garrotxa, lo hab&iacute;a visto en infinidad de listas de los &ldquo;pueblos m&aacute;s bonitos de Espa&ntilde;a&rdquo; y la gente que hab&iacute;a pasado por all&iacute; me hab&iacute;a hablado maravillas sobre el lugar.</p>\\r\\n\\r\\n<p>Situado a unos 30 kil&oacute;metros de Girona, Besal&uacute; fue un importante n&uacute;cleo comercial durante la Edad Media, a su territorio acud&iacute;an comerciantes de todas partes de Europa para la compra de productos fabricados en el pueblo como zapatos, tejidos o madera. Su origen data del Siglo X con el establecimiento de un castillo-fortaleza en lo alto de un cerro que a medida del paso de los a&ntilde;os fue evolucionando y ampli&aacute;ndose con la construcci&oacute;n de iglesias, monasterios, murallas por los diferentes condes que habitaron el lugar. La distribuci&oacute;n de la ciudad que hoy en d&iacute;a podemos ver no tiene nada que ver con la original pero todav&iacute;a conserva numerosos edificios importantes que en 1966 llev&oacute; a la ciudad a ser declarada&nbsp;Conjunto Hist&oacute;rico Nacional.</p>\\r\\n\\r\\n<p>Nos dirigimos hacia nuestro alojamiento, el&nbsp;Hotel 3 Arcs, situado en pleno coraz&oacute;n de Besal&uacute;. Se trata de un peque&ntilde;o establecimiento con mucho encanto, las habitaciones son amplias y aunque son sencillas est&aacute; todo nuevo y muy limpio. Los due&ntilde;os del hotel son maj&iacute;simos y con el precio se incluye el desayuno, elaborado con productos t&iacute;picos de la zona.</p>\\r\\n\\r\\n<p>Tras dejar la maleta en el hotel fuimos direcci&oacute;n a la&nbsp;Oficina de Turismo, est&aacute; situada al otro lado del puente fortificado, por lo que bajamos por una callejuela hasta el r&iacute;o y atravesamos por una especie de maderas que hab&iacute;an puesto para tal efecto, all&iacute; cogimos un mapa e informaci&oacute;n sobre Besal&uacute; y alrededores. Nos informaron que hab&iacute;a una empresa que hac&iacute;a rutas guiadas:&nbsp;Ars Did&aacute;ctica, situada en el Carrer Major, 2 por lo que nos dirigimos hasta su oficina para contratar una. El precio es de&nbsp;4,50 &euro;&nbsp;por adulto y hab&iacute;a tanta gente en el pueblo que no ten&iacute;an hueco hasta las 7 de la tarde, suerte que todav&iacute;a no hab&iacute;an cambiado la hora y anochec&iacute;a m&aacute;s tarde. La visita incluye el Monasterio de Sant Pere, los antiguos ba&ntilde;os jud&iacute;os, los restos de la antigua sinagoga, la C&uacute;ria reial, la fachada del Hospital de Sant Juli&agrave; y el puente fortificado. Es posible hacer una visita solo al barrio jud&iacute;o y los ba&ntilde;os por solo&nbsp;2,20&euro;&nbsp;o incluso te pueden dise&ntilde;ar una ruta a tu gusto.<br />\\r\\nAprovechamos para dar una vuelta a nuestro aire por lo que fuimos caminando por la vereda del r&iacute;o, la ciudad est&aacute; toda amurallada y hay varios portales que permiten diferentes vistas de la ciudad o el puente. Nuestra primera parada la hicimos en el&nbsp;antiguo molino harinero, data del a&ntilde;o 1755 y estuvo en funcionamiento hasta el Siglo XX, aprovechaba la fuerza del agua de riego y estaba situado en una zona donde se cree que hab&iacute;a varios molinos m&aacute;s ya que est&aacute; cerca del Portal del Horts que antiguamente era conocido como Portal de los molinos por este motivo. Aunque estuvo lleno de escombros durante varios a&ntilde;os debido al derrumbe del tejado, al desescombrar se encontr&oacute; una muela y varias estructuras m&aacute;s que se utilizaban para moler el trigo.</p>\\r\\n\\r\\n<p>Seguimos caminando atravesando el&nbsp;Portal dels Horts, el mejor conservado de la muralla del Siglo XIV y fuimos a parar al&nbsp;Hospital de Sant Juli&agrave;, fundado por los Condes de Besal&uacute; en el Siglo XII para atender a los peregrinos y pobres que pasaban por la ciudad. Actualmente es un centro socio-cultural y tan solo se conserva la fachada de la antigua iglesia, de estilo rom&aacute;nico y con decoraci&oacute;n de flores y animales.</p>\\r\\n\\r\\n<p>Fuimos callejeando por las empedradas callejuelas hasta la&nbsp;Pujada de Santa Mar&iacute;a, el antiguo acceso al castillo de Besal&uacute;, m&aacute;s tarde fue reconvertido en la Iglesia de Santa Mar&iacute;a aunque diversos terremotos, guerras, saqueos y finalmente la desamortizaci&oacute;n en el Siglo XIX acabaron por destruir lo que quedaba del recinto.</p>\\r\\n\\r\\n<p>A escasos metros est&aacute; situada la&nbsp;Zona arqueol&oacute;gica de la Devesa&nbsp;donde se encontraron restos de la &eacute;poca romana y medieval que evidencian la ocupaci&oacute;n en Besal&uacute; desde los Siglos VI y VII a.C. Desde este lugar hay unas vistas espectaculares de la Iglesia de Sant Mart&iacute;.</p>\\r\\n\\r\\n<p>Seguimos andando por las calles del pueblo dejando de lado la muralla, nos dirigimos a la&nbsp;Pla&ccedil;a de la Llibertat, all&iacute; en una pasteler&iacute;a llamada &ldquo;Can Toset&rdquo; nos compramos una mega-magdalena de chocolate blanco con az&uacute;car y nos sentamos en una terraza para esperar la hora de la ruta guiada degustando tan rico manjar y tomando algo fresquito aunque sinceramente, empezaba a refrescar un poquillo y tampoco apetec&iacute;a mucho, jejejeje.</p>\\r\\n', 'posts/ygm1o9437s/big_ygm1o9437s.jpg', 'posts/ygm1o9437s/thumb_ygm1o9437s.jpg', '2', 'GARROCHA,PUENTE,EDAD MEDIA', 'Cruzar el puente románico de Besalú sobre el río Fluviá es imaginarte en una escena de la serie Juego de Tronos. Situado en la Garrotxa y declarado Conjunto Histórico-Artístico Nacional por su valor arquitectónico, Besalú está lleno de rincones en los que mezclan el pasado medieval y judío.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FECHA` text COLLATE utf8_spanish_ci NOT NULL,
  `UID` text COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRE` text COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` text COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` text COLLATE utf8_spanish_ci NOT NULL,
  `BIO` text COLLATE utf8_spanish_ci NOT NULL,
  `FOTO` text COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` text COLLATE utf8_spanish_ci NOT NULL,
  `TWITTER` text COLLATE utf8_spanish_ci NOT NULL,
  `NICK` text COLLATE utf8_spanish_ci NOT NULL,
  `PASS` text COLLATE utf8_spanish_ci NOT NULL,
  `TIPO` text COLLATE utf8_spanish_ci NOT NULL,
  `ACTIVO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `FECHA`, `UID`, `NOMBRE`, `APELLIDOS`, `EMAIL`, `BIO`, `FOTO`, `TELEFONO`, `TWITTER`, `NICK`, `PASS`, `TIPO`, `ACTIVO`) VALUES
(1, '20/07/2017 20:42:57', 'hi3mhe3ycw', 'sdsa', 'asasd', 'caste_acm@hh.com', '<p>Donec molestie arcu quis tellus luctus blandit. Donec sit amet urna eget felis interdum scelerisque. Ut sit amet luctus tellus, et maximus odio. Sed luctus posuere velit, et sollicitudin tortor commodo sit amet. Nunc vel ex vestibulum, mollis turpis et, posuere nisl. Morbi ut sollicitudin purus. Nullam non mauris id sapien tincidunt euismod vel sed leo. Nam eleifend dui quis urna pellentesque dapibus. Donec venenatis urna ut nunc tempor, quis dapibus metus blandit. Cras sed porttitor odio. Phasellus ac tellus non massa sollicitudin porttitor ut in neque. Nulla feugiat mi et consequat egestas.</p>\\r\\n', 'assets/img/users/hi3mhe3ycw/hi3mhe3ycw.jpg', '45654', '', 'asdas', '202cb962ac59075b964b07152d234b70', '1', 0),
(3, '20/07/2017 20:50:58', 'rqiv4kaocn', 'Paco', 'cascsa', 'dasc@gmail.com', '<p>Vestibulum porttitor id tellus at suscipit. Integer in fringilla arcu. Proin vestibulum quam tempus lacinia interdum. Curabitur id felis justo. Vivamus laoreet maximus lacus. Ut quis tristique nisi, id aliquam enim. Morbi facilisis libero in commodo ultrices.</p>\\r\\n', 'assets/img/users/rqiv4kaocn/rqiv4kaocn.jpg', '5698542', '', 'Pas', '81dc9bdb52d04dc20036dbd8313ed055', '3', 0),
(5, '20/07/2017 20:52:28', 'iim3dd00dn', 'sdf', 'sdf', 'sdcfsaf@sdfds.com', '<p>Vestibulum porttitor id tellus at suscipit. Integer in fringilla arcu. Proin vestibulum quam tempus lacinia interdum. Curabitur id felis justo. Vivamus laoreet maximus lacus. Ut quis tristique nisi, id aliquam enim. Morbi facilisis libero in commodo ultrices.</p>\\r\\n', 'assets/img/users/iim3dd00dn/iim3dd00dn.jpg', 'sdf', '', 'zdfs', '2b24d495052a8ce66358eb576b8912c8', '2', 1),
(8, '24/07/2017 20:18:49', 'w9vb5eu2a9', 'Caste', 'MArtinez', 'ma@gmail.com', ' maslfasdpsakdasj', 'assets/img/users/w9vb5eu2a9/w9vb5eu2a9.jpg', '45972', '', 'caste', '202cb962ac59075b964b07152d234b70', '1', 1),
(9, '26/07/2017 18:54:33', '9zav6bs7m5', 'Juan', 'Manoplas', 'juaplas@gmail.com', ' Proin hendrerit placerat augue, nec pharetra sapien pulvinar ut. Sed id eros sed arcu auctor feugiat. Nam sollicitudin libero at porttitor euismod. Sed in sollicitudin nisl. Cras hendrerit, neque in cursus suscipit, magna massa convallis ante, quis ultricies tortor leo sollicitudin tellus. Curabitur pharetra, massa in facilisis posuere, elit lacus vestibulum velit, semper mollis magna ipsum in nunc. Mauris congue sem ac diam gravida, ut consequat neque varius. ', 'assets/img/users/9zav6bs7m5/9zav6bs7m5.jpg', '649155622', '@juaplas1', 'Juaplas', '250cf8b51c773f3f8dc8b4be867a9a02', '3', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;