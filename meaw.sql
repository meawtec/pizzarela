-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2022 às 14:36
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meaw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ingredientes` text NOT NULL,
  `preco` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pizzas`
--

INSERT INTO `pizzas` (`id`, `nome`, `ingredientes`, `preco`) VALUES
(1, 'calabresa', 'aaa', '1000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `nome`, `email`, `senha`, `adm`) VALUES
(257, 'asasdsafsf', 'sadfasdfsdfasdfasdfasdfasdfsd', 'assdfsadfsd', 0),
(258, 'testando', 'testando', 'TESTANDO', 0),
(259, 'nn', 'nn', 'nn', 0),
(260, 'mmmmm', 'mmmmm', 'mmmmm', 0),
(261, 'eeee', 'eeee', 'eeee', 0),
(262, 'xxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxxxxxxxx', 0),
(263, 'lllllllllllllllllllllllllllL', 'LLLLLLLLLLLLL', 'LLLL', 0),
(264, 'aaaa', 'asasdsdasdad@gmail.com', 'aa', 0),
(265, 'ademiro', 'ademiro@gmail.com', 'aaa', 1),
(266, 'Leandroooooooooooooooo', 'leandro@gmail.com', '123456', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
