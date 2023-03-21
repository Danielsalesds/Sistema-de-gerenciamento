-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Mar-2023 às 01:04
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meu_database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuidade_cadastro`
--

CREATE TABLE `anuidade_cadastro` (
  `id` int(11) NOT NULL,
  `ano` varchar(220) NOT NULL,
  `valor` varchar(220) NOT NULL,
  `flag_pagamento` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `anuidade_cadastro`
--

INSERT INTO `anuidade_cadastro` (`id`, `ano`, `valor`, `flag_pagamento`) VALUES
(39, '2023', '50', ''),
(40, '2023', '100', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_afiliados`
--

CREATE TABLE `cadastro_afiliados` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `dataAfiliacao` varchar(220) NOT NULL,
  `flag_anuidade` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro_afiliados`
--

INSERT INTO `cadastro_afiliados` (`id`, `nome`, `email`, `cpf`, `dataAfiliacao`, `flag_anuidade`) VALUES
(63, 'FRANCISCO DANIEL DE SALES', 'danielsales3@gmail.com', '10896689450', '2023-03-13', ''),
(64, 'FRANCISCO DANIEL DE SALES', 'danielsales3@gmail.com', '10896689450', '2023-03-20', ''),
(65, 'joão nunes de lima', 'joaonunes3@hotmail.com', '10965589470', '2023-03-14', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuidade_cadastro`
--
ALTER TABLE `anuidade_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastro_afiliados`
--
ALTER TABLE `cadastro_afiliados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuidade_cadastro`
--
ALTER TABLE `anuidade_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `cadastro_afiliados`
--
ALTER TABLE `cadastro_afiliados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
