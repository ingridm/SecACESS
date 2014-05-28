-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 28-Maio-2014 às 16:00
-- Versão do servidor: 5.6.11
-- versão do PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `secacess`
--
CREATE DATABASE IF NOT EXISTS `secacess` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `secacess`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `nome` varchar(100) NOT NULL,
  `rg` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `veiculo` varchar(9) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `usuario_Nivel` varchar(50) NOT NULL,
  `cpf` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `moradia` varchar(100) NOT NULL,
  `foto` mediumblob NOT NULL,
  PRIMARY KEY (`id_Usuario`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`nome`, `rg`, `email`, `veiculo`, `senha`, `id_Usuario`, `login`, `usuario_Nivel`, `cpf`, `status`, `moradia`, `foto`) VALUES
('maria', 98763532, 'maira@maiaias', '9876790', '123', 1, 'mariazinha', 'admin', 987654, 'ativo', 'kkkk', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
