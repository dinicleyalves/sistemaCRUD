-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jul-2015 às 21:55
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tb_clientes_nome` varchar(255) NOT NULL,
  `tb_clientes_user` varchar(255) NOT NULL,
  `tb_clientes_pass` varchar(100) NOT NULL,
  `tb_clientes_cep` varchar(50) NOT NULL,
  `tb_clientes_endereco` varchar(255) NOT NULL,
  `tb_clientes_cidade` varchar(100) NOT NULL,
  `tb_clientes_bairro` varchar(100) NOT NULL,
  `tb_clientes_telefone` varchar(20) NOT NULL,
  `tb_clientes_email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `tb_clientes_nome`, `tb_clientes_user`, `tb_clientes_pass`, `tb_clientes_cep`, `tb_clientes_endereco`, `tb_clientes_cidade`, `tb_clientes_bairro`, `tb_clientes_telefone`, `tb_clientes_email`) VALUES
(14, 'Dinicley', '', '', '', '', '', '', '', 'contato@dnewsti.com.br'),
(15, 'JoÃ£o', '', '', '', '', '', '', '', 'joao@email.com.br');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
