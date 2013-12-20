-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2013 a las 23:52:18
-- Versión del servidor: 5.1.70-cll
-- Versión de PHP: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `francis2_cantoneslibres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantones`
--

CREATE TABLE IF NOT EXISTS `cantones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET latin1 NOT NULL,
  `provincia` text CHARACTER SET latin1 NOT NULL,
  `libre` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Volcado de datos para la tabla `cantones`
--

INSERT INTO `cantones` (`id`, `nombre`, `provincia`, `libre`, `fecha`) VALUES
(1, 'Alajuela', 'alajuela', 1, '2013-04-12'),
(2, 'Alfaro Ruiz', 'alajuela', 1, '2013-08-12'),
(3, 'Atenas', 'Alajuela', 1, '2013-02-19'),
(4, 'Grecia', 'alajuela', 1, '0000-00-00'),
(5, 'Guatuso', 'alajuela', 1, '0000-00-00'),
(6, 'Los Chiles', 'alajuela', 0, '2013-08-15'),
(7, 'Naranjo', 'alajuela', 1, '0000-00-00'),
(8, 'Orotina', 'alajuela', 0, '0000-00-00'),
(9, 'Palmares', 'alajuela', 1, '0000-00-00'),
(10, 'Poas', 'alajuela', 1, '2013-03-12'),
(11, 'San Ramón', 'alajuela', 1, '0000-00-00'),
(12, 'San Carlos', 'alajuela', 1, '2013-04-15'),
(13, 'San Mateo', 'alajuela', 0, '0000-00-00'),
(14, 'Upala', 'alajuela', 1, '2013-03-01'),
(15, 'Valverdevega', 'alajuela', 1, '2013-03-09'),
(16, 'Alvarado', 'cartago', 1, '0000-00-00'),
(17, 'Cartago', 'cartago', 0, '0000-00-00'),
(18, 'El Guarco', 'cartago', 1, '2013-02-14'),
(19, 'Jiménez', 'cartago', 0, '2013-08-15'),
(20, 'La Unión', 'cartago', 1, '2013-02-19'),
(21, 'Oreamuno', 'cartago', 1, '0000-00-00'),
(22, 'Paraíso', 'cartago', 1, '0000-00-00'),
(23, 'Turrialba', 'cartago', 1, '0000-00-00'),
(24, 'Abangares', 'guanacaste', 1, '0000-00-00'),
(25, 'Bagaces', 'guanacaste', 0, '0000-00-00'),
(26, 'Canas', 'guanacaste', 0, '0000-00-00'),
(27, 'Carrillo', 'guanacaste', 0, '2013-08-15'),
(28, 'Hojancha', 'guanacaste', 1, '0000-00-00'),
(29, 'La Cruz', 'guanacaste', 1, '2013-06-27'),
(30, 'Liberia', 'guanacaste', 1, '2013-02-26'),
(31, 'Nandayure', 'guanacaste', 1, '0000-00-00'),
(32, 'Tilarán', 'guanacaste', 1, '2013-06-10'),
(33, 'Nicoya', 'guanacaste', 1, '0000-00-00'),
(34, 'Santa Cruz', 'guanacaste', 1, '0000-00-00'),
(35, 'Barva', 'heredia', 1, '0000-00-00'),
(36, 'Belén', 'heredia', 1, '0000-00-00'),
(37, 'Flores', 'heredia', 1, '2013-02-19'),
(38, 'Heredia', 'heredia', 1, '2013-02-25'),
(39, 'San Isidro', 'heredia', 1, '0000-00-00'),
(40, 'San Rafael', 'heredia', 1, '2013-07-25'),
(41, 'Santa Bárbara', 'heredia', 1, '2013-03-06'),
(42, 'Santo Domingo', 'heredia', 1, '0000-00-00'),
(43, 'Sarapiquí', 'heredia', 0, '0000-00-00'),
(44, 'Guácimo', 'limon', 1, '2013-02-19'),
(45, 'Limón', 'limon', 1, '2013-06-13'),
(46, 'Matina', 'limon', 1, '2013-10-31'),
(47, 'Pococí', 'limon', 0, '0000-00-00'),
(48, 'Siquirres', 'limon', 0, '0000-00-00'),
(49, 'Talamanca', 'limon', 1, '0000-00-00'),
(50, 'Aguirre', 'puntarenas', 1, '0000-00-00'),
(51, 'Buenos Aires', 'puntarenas', 1, '0000-00-00'),
(52, 'Corredores', 'puntarenas', 1, '0000-00-00'),
(53, 'Coto Brus', 'puntarenas', 1, '0000-00-00'),
(54, 'Esparza', 'puntarenas', 1, '0000-00-00'),
(55, 'Golfito', 'puntarenas', 0, '0000-00-00'),
(57, 'Montes de Oro', 'puntarenas', 0, '0000-00-00'),
(58, 'Osa', 'puntarenas', 1, '0000-00-00'),
(59, 'Parrita', 'puntarenas', 1, '2013-11-07'),
(60, 'Acosta', 'sanjose', 1, '2013-03-19'),
(61, 'Alajuelita', 'sanjose', 0, '0000-00-00'),
(62, 'Aserri', 'sanjose', 1, '0000-00-00'),
(63, 'Coronado', 'sanjose', 1, '2013-08-12'),
(64, 'Curridabat', 'sanjose', 0, '0000-00-00'),
(65, 'Desamparados', 'sanjose', 1, '0000-00-00'),
(66, 'Dota', 'sanjose', 1, '0000-00-00'),
(67, 'Escazú', 'sanjose', 1, '2013-02-12'),
(68, 'Goicoechea', 'sanjose', 1, '2013-02-19'),
(69, 'León Cortés', 'sanjose', 1, '2013-03-20'),
(70, 'Montes de Oca', 'sanjose', 1, '0000-00-00'),
(71, 'Mora', 'sanjose', 1, '2013-09-03'),
(72, 'Moravia', 'sanjose', 1, '0000-00-00'),
(73, 'Perez Zeledón', 'sanjose', 1, '0000-00-00'),
(74, 'Puriscal', 'sanjose', 1, '2013-02-14'),
(75, 'San José', 'sanjose', 1, '0000-00-00'),
(76, 'Santa Ana', 'sanjose', 1, '0000-00-00'),
(77, 'Tarrazú', 'sanjose', 1, '2013-04-12'),
(78, 'Tibás', 'sanjose', 1, '0000-00-00'),
(79, 'Turrubares', 'sanjose', 0, '0000-00-00'),
(80, 'Puntarenas', 'puntarenas', 1, '2013-02-27'),
(81, 'Garabito', 'puntarenas', 1, '0000-00-00'),
(83, 'San Pablo', 'heredia', 1, '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
