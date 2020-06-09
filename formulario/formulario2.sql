-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/06/2020 às 19:26
-- Versão do servidor: 8.0.17
-- Versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios2`
--

CREATE TABLE `usuarios2` (
  `nome` varchar(220) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `observacoes` varchar(900) NOT NULL,
  `datatime` datetime NOT NULL,
  `datamodif` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios2`
--

INSERT INTO `usuarios2` (`nome`, `cpf`, `cnpj`, `observacoes`, `datatime`, `datamodif`) VALUES
('RENAN ALVES DOS SANTOS', '15561849299', '', 'mal atendimento ao cliente', '2020-06-06 14:17:52', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios2`
--
ALTER TABLE `usuarios2`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
