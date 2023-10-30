-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 03:28:35
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
-- Base de datos: `diariodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `copete` text NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `id_usuario`, `titulo`, `copete`, `cuerpo`, `imagen`, `fecha`, `categoria`) VALUES
(22, 0, 'El deporte como herramienta social', '¿Cómo influye el deporte en el desarrollo social del ser humano? El ejercicio se asocia con mejoras en la salud, los procesos cognitivos, la sociabilidad, la productividad', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">Además de aportar múltiples beneficios físicos y psicológicos,&nbsp;</span><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">el deporte es una potente herramienta de transformación social y una actividad formadora</span><span style=\"color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">. El deporte desempeña un papel importante como promotor de la integración social y el desarrollo económico en diferentes contextos geográficos, culturales y políticos.</span><br></p>', '1697330767-deporte_herramienta_social.jpg', '2023-10-15', 'Deportes'),
(24, 1, 'Deporte y Yoga', 'bienestar personal', '<div><span style=\"color: rgb(77, 81, 86); font-family: \"Google Sans\", arial, sans-serif;\">El <b>yoga</b> </span><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40); font-family: \"Google Sans\", arial, sans-serif;\">se caracteriza por la búsqueda del equilibrio no solo entre la mente y el cuerpo, sino también en la relación humana con el mundo</span><span style=\"color: rgb(77, 81, 86); font-family: \"Google Sans\", arial, sans-serif;\">. A su vez, enfatiza los valores de atención plena, moderación, disciplina y perseverancia y ofrece un camino para una vida sostenible.</span><font color=\"#4d5156\" face=\"Google Sans, arial, sans-serif\"><br></font></div>', '1697383428-6704701.jpg', '2023-10-15', 'Deportes'),
(28, 1, 'Qué deporte elegís?', 'Hay infinidad de deportes hoy para desarrollarnos', '<p><br></p>', '1697511335-equipo-de-deporte-2-22802518.jpg', '2023-10-17', 'Deportes'),
(30, 2, '¿Cómo el deporte une a las comunidades?', 'Muchos deportes necesitan de una organización en grupos para realizarse', '<div data-hveid=\"CAQQAQ\" style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: medium;\"><div jsname=\"tJHJj\" class=\"dnXCYb\" aria-controls=\"_oTwzZeWXGZWt5OUPwa68uAo_2\" aria-expanded=\"true\" role=\"button\" tabindex=\"0\" jsaction=\"AWEk5c\" style=\"align-items: center; display: flex; max-height: none; position: relative; width: 652px; outline: 0px;\"><div jsname=\"lN6iy\" class=\"JlqpRe\" style=\"flex: 1 1 0%; margin: 12px 0px; overflow: hidden;\"><span class=\"JCzEY ZwRhJd\" style=\"font-size: 16px; line-height: 18px; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: unset !important;\"><span class=\"ILfuVd\" lang=\"es\" style=\"font-size: medium; line-height: 24px; color: rgb(77, 81, 86); font-family: \"Google Sans\", arial, sans-serif;\"><span class=\"hgKElc\" style=\"padding: 0px 8px 0px 0px;\">Es capaz de <b><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40);\">transmitir valores y unir a las personas hacia un objetivo común</span>.</b> Además de aportar múltiples beneficios físicos y psicológicos, el deporte es una potente herramienta de transformación social y una actividad formadora.</span></span></span></div><div jsname=\"lN6iy\" class=\"JlqpRe\" style=\"flex: 1 1 0%; margin: 12px 0px; overflow: hidden;\"><span class=\"JCzEY ZwRhJd\" style=\"font-size: 16px; line-height: 18px; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: unset !important;\"><span class=\"ILfuVd\" lang=\"es\" style=\"font-size: medium; line-height: 24px; color: rgb(77, 81, 86); font-family: \"Google Sans\", arial, sans-serif;\"><span class=\"hgKElc\" style=\"padding: 0px 8px 0px 0px;\"><div data-hveid=\"CAIQAQ\" style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\"><div jsname=\"tJHJj\" class=\"dnXCYb\" aria-controls=\"_qzwzZbK7DPzd5OUPwKWjiAM_6\" aria-expanded=\"true\" role=\"button\" tabindex=\"0\" jsaction=\"AWEk5c\" style=\"align-items: center; display: flex; max-height: none; position: relative; width: 652px; outline: 0px;\"><div jsname=\"lN6iy\" class=\"JlqpRe\" style=\"flex: 1 1 0%; margin: 12px 0px; overflow: hidden;\"><span class=\"JCzEY ZwRhJd\" style=\"font-size: 16px; line-height: 18px; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: unset !important;\"><br></span></div></div></div></span></span></span></div><div jsname=\"lN6iy\" class=\"JlqpRe\" style=\"flex: 1 1 0%; margin: 12px 0px; overflow: hidden;\"><span class=\"JCzEY ZwRhJd\" style=\"font-size: 16px; line-height: 18px; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: unset !important;\"><br></span></div></div></div>', '1697856981-deporteyunion.jpg', '2023-10-21', 'Deportes'),
(31, 2, 'Nutrición deportiva', '¿Qué hace la nutrición deportiva? El objetivo de la nutrición deportiva es aportar la cantidad de energía apropiada para cada actividad', '<p style=\"font-family: Gilroy;\">La nutrición deportiva indica que atletas requieren de un <a href=\"https://www.gundo.app/blog/guia-para-una-alimentacion-equilibrada/\">aporte suficiente en cantidad y calidad nutricional de macronutrientes,</a> para responder a las alta demandas energéticas de las diferentes modalidades deportivas. De todos modos, según la temporada del deporte, estas demandas pueden ser menores.</p><p style=\"font-family: Gilroy;\">Dichos<span style=\"font-weight: bolder;\"> requerimientos pueden satisfacerse a través de una dieta nutricionalmente completa e individualizada</span> y el uso de<span style=\"font-weight: bolder;\"> suplementos nutricionales debe ser evaluado</span> en caso exista un riego de deficiencia nutricional.</p><p style=\"font-family: Gilroy;\">Además, los carbohidratos y grasa cumplen con la función de brindar energía al cuerpo según la intensidad del ejercicio realizado, pero también son indispensables para el rendimiento deportivo y la recuperación.</p><p style=\"font-family: Gilroy;\">Por otro lado, el aporte de proteína puede ser distribuido a lo largo del día y es indispensable para mantener la masa muscular.</p><p style=\"font-family: Gilroy;\">Por último, la hidratación es indispensable antes, durante y después del ejercicio físico para reponer las pérdidas de agua y electrolitos.</p><p style=\"font-family: Gilroy;\"><span style=\"font-weight: bolder;\"><em>Entonces: cada recomendación debe ser individualizada y adaptada a cada individuo según su objetivo nutricional y deportivo.</em></span></p>', '1697857389-nutricion.jpg', '2023-10-21', 'Deportes'),
(32, 2, '¿Cuál es el deporte más extraño del mundo?', 'El buzkashi o kokpar es una actividad ecuestre practicada en Afganistán, donde es el deporte nacional, además de en otros países de Asia central como Uzbekistán, que es donde se originó.', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: Georgia, Times, &quot;Times New Roman&quot;, serif; text-align: justify;\"><span style=\"box-sizing: inherit;\">Un juego de niños como es el clásico pilla-pilla puede convertirse en una competición reconocida a nivel internacional. El auge de los deportes electrónicos, o&nbsp;<em style=\"box-sizing: inherit;\">e-sports</em>, está cambiando la definición de lo que se considera un deporte. En esta sociedad, caracterizada por tener un amplio abanico de posibilidades, está habiendo una tendencia a hacer aquello que realmente le llama a uno la atención. Ahora puedes profesionalizarte en actividades que antes no eran nada reconocidas, tienes la posibilidad de desarrollar y potenciar tus gustos de la manera que tú quieras y siempre vas a encontrar a más gente con la que compartir ciertas inquietudes. Esto afecta también, de una forma u otra, al mundo del deporte.</span></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: Georgia, Times, &quot;Times New Roman&quot;, serif; text-align: justify;\"><span style=\"box-sizing: inherit;\">Cada vez son más los deportes que se practican, así como las diferentes modalidades que surgen de los ya creados. De la mezcla de dos deportes aparentemente incompatibles puede surgir uno nuevo que requiera diferentes habilidades. La forma física de los jugadores y jugadoras sigue siendo importante, pero otras cualidades como la agilidad o tener reflejos ganan cada vez más importancia. Continúa habiendo deportes nacionales pero muy pocos se practican solamente en un país, para saber un poco más acerca de las competiciones deportivas más extrañas que se realizan de forma profesional es necesario, por lo tanto, recorrer todo el globo terráqueo. Acompáñenos a lo largo de esta selección de los deportes más extravagantes del mundo y elijan su favorito, o añadan en los comentarios los que crean convenientes.</span></p>', '1697857943-ciclobol.jpg', '2023-10-21', 'Deportes'),
(33, 2, '¿Qué pasa cuando un deportista se lesiona?', 'Las lesiones deportivas frecuentes incluyen fracturas, dislocaciones, esguinces, distensiones, tendinitis o bursitis.', '<p><span style=\"color: rgb(77, 81, 86); font-family: &quot;Google Sans&quot;, arial, sans-serif;\">Al sufrir una lesión&nbsp;</span><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40); font-family: &quot;Google Sans&quot;, arial, sans-serif;\">se</span><span style=\"color: rgb(77, 81, 86); font-family: &quot;Google Sans&quot;, arial, sans-serif;\">&nbsp;producen cambios y reajustes en la actividad diaria, cambiando la asistencia a entrenos y competiciones por intervenciones, reposo o rehabilitación. Esta interrupción genera un mayor aislamiento ya que&nbsp;</span><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40); font-family: &quot;Google Sans&quot;, arial, sans-serif;\">se</span><span style=\"color: rgb(77, 81, 86); font-family: &quot;Google Sans&quot;, arial, sans-serif;\">&nbsp;ve interrumpida la participación en la actividad social y de grupo.</span><br></p>', '1697858286-lesiones.png', '2023-10-21', 'Deportes'),
(34, 2, 'Nuevo récord batido', 'Armand Duplantis, sin límite: nuevo récord del mundo en salto con garrocha', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">El sueco&nbsp;</span><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">Armand Duplantis</span><span style=\"color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">&nbsp;se impuso en la Diamond League en el estadio Hayward Field de Eugene (Estados Unidos) y lo hizo batiendo con 6,23 metros el récord del mundo que él mismo poseía en&nbsp;</span><span jsaction=\"click:sKUsF\" role=\"tooltip\" tabindex=\"0\" style=\"outline: 0px; color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\"><g-bubble jscontroller=\"QVaUhf\" data-ci=\"\" data-du=\"200\" data-tp=\"5\" jsaction=\"R9S7w:VqIRre;\" jsshadow=\"\"><span jsname=\"d6wfac\" class=\"c5aZPb\" data-enable-toggle-animation=\"true\" data-extra-container-classes=\"ZLo7Eb\" data-hover-hide-delay=\"1000\" data-hover-open-delay=\"500\" data-send-open-event=\"true\" data-theme=\"0\" data-width=\"250\" role=\"button\" tabindex=\"0\" jsaction=\"vQLyHf\" jsslot=\"\" data-ved=\"2ahUKEwjszvCgl4aCAxUWILkGHcr8CBQQmpgGegQICxAD\" style=\"outline: 0px;\"><span jsname=\"ukx3I\" class=\"JPfdse\" data-bubble-link=\"\" data-segment-text=\"salto con garrocha\" style=\"border-bottom: 1px dashed rgba(4, 12, 40, 0.5);\">salto con garrocha</span></span></g-bubble></span><span style=\"color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">.</span><br></p>', '1697858469-record.jpg', '2023-10-21', 'Deportes'),
(35, 2, 'El Running crece día a día', 'El ejercicio cardiovascular puede crear nuevas células cerebrales y mejorar el rendimiento general', '<p>El ejercicio cardiovascular puede crear nuevas células cerebrales y mejorar el rendimiento general del cerebro<br></p>', '1697861919-running.jpg', '2023-10-21', 'Deportes'),
(36, 16, 'Hola! hoy...', '...Salimos a caminar?', '<p><span style=\"color: rgb(77, 81, 86); font-family: \"Google Sans\", arial, sans-serif;\">Está demostrado que caminar </span><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40); font-family: \"Google Sans\", arial, sans-serif;\">quema más grasa y calorías que otros ejercicios, ayuda a que el sistema cardiovascular se active y fortifique, y te ayuda a eliminar el colesterol perjudicial para el organismo</span><span style=\"color: rgb(77, 81, 86); font-family: \"Google Sans\", arial, sans-serif;\">. Caminar aumenta la resistencia a los esfuerzos, a cansarnos menos y más tarde.</span><br></p>', '1698432255-toalla-cerca-articulos-deportivos.jpg', '2023-10-27', 'Deportes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`, `tipo_usuario`, `fecha`) VALUES
(2, 'Lucila', 'Paiva', 'Lu', 'LuGK4ueEZaSY.', '', NULL),
(16, 'Maria', 'López', 'Maria', 'Ma5jnn/ZeRcrc', '', NULL),
(17, 'Coni', 'Sánchez', 'coni', 'coq2dBvmqUrR2', '', '2023-10-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
