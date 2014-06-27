--
-- Base de datos: `kubin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paste`
--

CREATE TABLE IF NOT EXISTS `paste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `creado_at` datetime NOT NULL,
  `paste_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
