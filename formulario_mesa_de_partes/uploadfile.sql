-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 17:17:01
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `uploadfile`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `estado` enum('PENDIENTE','ACTIVO') CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'PENDIENTE',
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id`, `nombres`, `apellidos`, `correo`, `celular`, `title`, `description`, `url`, `estado`, `type`) VALUES
(12, 'Sandro', 'Porras ', 'sandrojavierporrasoroche@gmail', '921612896', 'tesina', 'zzz', 'files/plan-de-trabajo-pdf.pdf', 'ACTIVO', NULL),
(13, 'raul', 'raul', 'sandrojavierporrasoroche@gmail', '921612896', 'El uso ', 'x', 'files/pagina-web-cnipdf.pdf', 'ACTIVO', NULL),
(14, 'Anggie', 'Llamocca', 'anggie@gmail.com', '921612896', 'tesis', 'd', 'files/plan-de-trabajo-pdf.pdf', 'ACTIVO', NULL),
(15, 'llamocca', 'Llamocca', 'anggie@gmail.com', '123', 'tesina', 's', 'files/cuestionario-de-razonamiento-moral-de-kohlbergpdf.pdf', 'ACTIVO', NULL),
(16, 'pavel', 'Porras ', 'sandrojavierporrasoroche@gmail', '921612896', NULL, NULL, 'files/ensayo-sobre-la-etica-del-diseador-web-en-el-uso-de-plantillas-web-1pdf.pdf', 'ACTIVO', NULL),
(17, 'JESUS', 'jesus', 'sandrojavierporrasoroche@gmail', '921612896', NULL, NULL, 'files/filesplan-de-trabajo-pdfpdf.pdf', 'PENDIENTE', NULL),
(18, 'llamoccaaaaaa', 'Porras ', 'sandrojavierporrasoroche@gmail', '921612896', NULL, NULL, 'files/filesporras-oroche-sandro-javierexamen-parcialauditoriamaanapdfpdf.pdf', '', NULL),
(22, 'prro', 'Porras ', 'sandrojavierporrasoroche@gmail', '1234', NULL, NULL, 'files/inventarios-de-librospdf.pdf', '', NULL),
(23, 'gato', 'Porras ', 'sandrojavierporrasoroche@gmail', '921612896', NULL, NULL, 'files/filessolicitudes-de-librospdfpdf.pdf', 'PENDIENTE', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
