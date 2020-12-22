-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 14-Mar-2020 às 04:33
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `base`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `teclados`
--

DROP TABLE IF EXISTS `teclados`;
CREATE TABLE IF NOT EXISTS `teclados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `valor` decimal(6,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teclados`
--

INSERT INTO `teclados` (`id`, `nome`, `fabricante`, `peso`, `valor`) VALUES
(24, 'JUNO X', 'ROLAND', '5.00', '8.000'),
(16, 'PSR - S975', 'YAMAHA', '6.00', '8.000'),
(19, 'XPS-30', 'ROLAND', '4.00', '5.500'),
(20, 'MOTIF X61', 'YAMAHA', '5.00', '10.000'),
(21, 'PSR-S910', 'YAMAHA', '8.00', '4.000'),
(23, 'KORG KROSS', 'KORG', '6.00', '1.550'),
(25, 'NORD STAGE 3', 'NORD', '10.00', '10.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
