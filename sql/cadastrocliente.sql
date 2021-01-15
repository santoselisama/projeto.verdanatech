-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jan-2021 às 21:49
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastrocliente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CPF` varchar(11) DEFAULT NULL,
  `Categoria` int(100) NOT NULL DEFAULT '0',
  `Nome` varchar(40) DEFAULT NULL,
  `Endereco` varchar(40) DEFAULT NULL,
  `Contato` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CPF`, `Categoria`, `Nome`, `Endereco`, `Contato`) VALUES
('11111111111', 0, 'MARIA JOSE', 'RUA BROMELIA', '81911111111'),
('22222222222', 0, 'MARIA GABRIELA', 'RUA ROSA', '81922222222'),
('33333333333', 0, 'JHONATA BRITO', 'RUA AZUL', '81933333333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nomeProduto` varchar(50) NOT NULL,
  `precoProduto` varchar(40) DEFAULT NULL,
  `dataProduto` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nomeProduto`, `precoProduto`, `dataProduto`) VALUES
('Boneca', '35,00', '2021-01-14'),
('carro', '50', '2021-01-13'),
('Pipa', '10,40', '2021-02-14'),
('Bola', '5,00', '2021-01-18'),
('Bambole', '12,99', '2120-02-15'),
('Moto', '50,00', '2120-04-23'),
('Pipa Grande', '12,00', '2021-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`nomeProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
