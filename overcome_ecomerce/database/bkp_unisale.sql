-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/05/2024 às 01:06
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unisale`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'camisas'),
(2, 'coletes'),
(3, 'chapeus'),
(4, 'meias');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `precofic` decimal(10,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `precofic`, `categoria_id`, `imagem`) VALUES
(1, 'Camisa Básica Branca', 60.00, 100.00, 1, 'uploads/camiseta1.jpg'),
(2, 'Camisa Básica Marrom', 60.00, 100.00, 1, 'uploads/camiseta2.jpg'),
(3, 'Camisa Básica Preta', 60.00, 100.00, 1, 'uploads/camiseta3.jpg'),
(4, 'Camisa Oversize koinobori ', 80.00, 120.00, 1, 'uploads/camiseta4.jpg'),
(5, 'Camisa Básica Azul', 60.00, 100.00, 1, 'uploads/camiseta5.jpg'),
(6, 'Camisa Oversize Phanton', 80.00, 120.00, 1, 'uploads/camiseta6.jpg'),
(7, 'Camisa Oversize Escorpião', 80.00, 120.00, 1, 'uploads/camiseta7.jpg'),
(8, 'Camisa Oversize Amarela', 80.00, 120.00, 1, 'uploads/camiseta8.jpg'),
(9, 'Bone Dad Hat Coração', 50.00, 70.00, 3, 'uploads/bone1.jpg'),
(10, 'Bone Dad Hat Preto', 50.00, 70.00, 3, 'uploads/bone2.jpg'),
(11, 'Bone Dad Hat Bege', 50.00, 70.00, 3, 'uploads/bone3.jpg'),
(12, 'Bone Dad Hat Preto', 50.00, 70.00, 3, 'uploads/bone4.jpg'),
(13, 'Bone Dad Hat Branco', 50.00, 70.00, 3, 'uploads/bone5.jpg'),
(14, 'Bone Dad Hat Colorido', 50.00, 70.00, 3, 'uploads/bone6.jpg'),
(15, 'Bone Dad Hat Branco', 50.00, 70.00, 3, 'uploads/bone7.jpg'),
(16, 'Bone Dad Hat Preto', 50.00, 70.00, 3, 'uploads/bone8.jpg'),
(17, 'Meia Preta', 80.00, 120.00, 4, 'uploads/mei1.jpg'),
(18, 'Meia Bege', 80.00, 120.00, 4, 'uploads/mei2.jpg'),
(19, 'Meia Branca', 80.00, 120.00, 4, 'uploads/mei3.jpg'),
(20, 'Meia Preta', 80.00, 120.00, 4, 'uploads/mei4.jpg'),
(21, 'Meia Camuflada', 80.00, 120.00, 4, 'uploads/mei5.jpg'),
(22, 'Meia Camuflada', 80.00, 120.00, 4, 'uploads/mei6.jpg'),
(23, 'Meia Verde Neon', 80.00, 120.00, 4, 'uploads/mei7.jpg'),
(24, 'Meia Amarelo Neon', 80.00, 120.00, 4, 'uploads/mei8.jpg'),
(25, 'Jaqueta Branca', 80.00, 120.00, 2, 'uploads/jaquet1.jpg'),
(26, 'Jaqueta Preta', 80.00, 120.00, 2, 'uploads/jaquet2.jpg'),
(27, 'Jaqueta Vermelha', 80.00, 120.00, 2, 'uploads/jaquet3.jpg'),
(28, 'Jaqueta Azul', 80.00, 120.00, 2, 'uploads/jaquet4.jpg'),
(29, 'Jaqueta Branca', 80.00, 120.00, 2, 'uploads/jaquet5.jpg'),
(30, 'Jaqueta Preta', 80.00, 120.00, 2, 'uploads/jaquet6.jpg'),
(31, 'Jaqueta Jens', 80.00, 120.00, 2, 'uploads/jaquet7.jpg'),
(32, 'Jaqueta Jens', 80.00, 120.00, 2, 'uploads/jaquet8.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `celular` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `cpf`, `nome`, `celular`, `email`, `login`, `senha`) VALUES
(9, '55480868802', 'Rafael Konscca', '17991709949', 'rafaeltrevizolidasilva@gmail.com', 'user_123', '25f9e794323b453885f5181f1b624d0b');
--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `documento` (`cpf`),
  ADD KEY `endemail` (`email`),
  ADD KEY `login_2` (`login`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
