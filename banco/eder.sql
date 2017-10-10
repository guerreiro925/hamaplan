-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2017 às 15:53
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eder`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cidade` longtext NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `tipo` longtext NOT NULL,
  `endereco` longtext NOT NULL,
  `agencia` longtext NOT NULL,
  `numero` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `cidade`, `estado`, `cep`, `cpf`, `tipo`, `endereco`, `agencia`, `numero`, `deletar`) VALUES
(1, 'Teste pronamp custeio', 'Londrina', 'PR', '86086-080', '112.122.199-88', 'pronamp_custeio', 'Rua do Brasil NÂº20', 'Banco do Brasil', '1321-3', 0),
(2, 'Teste pronamp investimento', 'Londrina', 'PR', '86086-080', '121.212.121-21', 'pronamp_custeio', 'Rua do Brasil nÂº 29', 'Banco do Brasil', '2121-2', 0),
(3, 'Teste pronaf custeio', 'Londrina', 'PR', '86086-080', '121.122.121-21', 'pronaf_custeio', 'Rua do Brasil nÂº 29', 'Banco do Brasil', '2121-2', 0),
(4, 'Teste pronaf investimento', 'Londrina', 'PR', '86086-080', '121.212.121-21', 'pronaf_investimento', 'Rua do Brasil nÂº 29', 'Banco do Brasil', '1212-1', 0),
(5, 'OlÃ¡', 'Londrina', 'PR', '86086-080', '112.122.199-88', 'pronaf_custeio', 'Rua elias Daniel Hatti', 'Banco do Brasil', '1122-1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `senha`, `email`, `deletar`) VALUES
(1, 'matheus', '$P$B/A05b42930e7f101bbb3a339876bf607f0.915.26', 'matheus.henrique.25@hotmail.com', 1),
(2, 'henrique', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.436.43', 'matheus.henrique.25@hotmail.com', 1),
(3, 'ede', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.881.25', 'teste.henrique.25@outlook.com', 0),
(4, 'ponks', '$P$B/A2ffd1ecf2baeb7377b812dde14d6660f.217.11', 'matheus.henrique.25@hotmail.com', 1),
(5, 'vilar', '$P$B/A05b42930e7f101bbb3a339876bf607f0.959.16', 'timressler@gmail.com', 1),
(6, 'testedois', '$P$B/A05b42930e7f101bbb3a339876bf607f0.729.63', 'matheus.henrique.25@hotmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
