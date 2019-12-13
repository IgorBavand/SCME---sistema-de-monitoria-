-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13/12/2019 às 07:47
-- Versão do servidor: 5.7.28-0ubuntu0.18.04.4
-- Versão do PHP: 7.3.10-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `SCME`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nome_disciplina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome_disciplina`) VALUES
(1, 'Linguagens de programação'),
(2, 'Gerência de projetos de software'),
(3, 'Fundamentos de progamação'),
(4, 'Processos de software');

-- --------------------------------------------------------

--
-- Estrutura para tabela `monitoria`
--

CREATE TABLE `monitoria` (
  `id` int(11) NOT NULL,
  `id_tutor` int(11) NOT NULL,
  `foto_tutor` varchar(100) NOT NULL,
  `nome_disciplina` varchar(100) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `nome_tutor` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `bloco` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `monitoria`
--

INSERT INTO `monitoria` (`id`, `id_tutor`, `foto_tutor`, `nome_disciplina`, `assunto`, `nome_tutor`, `local`, `bloco`, `data`, `horario`) VALUES
(4, 35, '4ecc12296641a1bd9d9e74d97c0fc8a4jpeg', 'Fundamentos de progamaï¿½ï¿½o', 'LaÃ§os de repeticÃ£o', 'igor guerreiro', 'sala 1', 2, '2019-12-19', '15:30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `curso`, `imagem`) VALUES
(4, 'test da silva', 'igor2', '827ccb0eea8a706c4c34a16891f84e7b', 'eng', ''),
(11, 'qqqeee', 'igor3333', '827ccb0eea8a706c4c34a16891f84e7b', '333333', ''),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(16, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'bcf0a84d5779fd4373e7d76053fb36ff.png'),
(17, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '64cdd14d2c76ee89bf2cf2f6f107f5c6.png'),
(33, 'vgvvttttt', 'wqwqwqw', 'e774d0c698d83ca71014bf017d07cf1e', 'wwwwwwwwww', '6c59a193721307a1d09b5764be169574.png'),
(34, 'vgvvttttt', 'igor', '827ccb0eea8a706c4c34a16891f84e7b', 'wwwwwwwwww', 'b8f7788cdc2b226b4976f71cc504bdc7.png'),
(35, 'igor guerreiro', 'igor123', '827ccb0eea8a706c4c34a16891f84e7b', 'engenharia de software', '4ecc12296641a1bd9d9e74d97c0fc8a4jpeg'),
(36, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(37, 'igor nardenio', 'igorbvn', '827ccb0eea8a706c4c34a16891f84e7b', 'engenharia de software', '9ffce4cba9027a110b0299d1e923f2eb.png');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `monitoria`
--
ALTER TABLE `monitoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `monitoria`
--
ALTER TABLE `monitoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
