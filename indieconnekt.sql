-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/11/2024 às 12:05
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `indieconnekt`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_idusuarios` int(8) NOT NULL,
  `id_idPosts` int(8) NOT NULL,
  `texto` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fotocomentario` varchar(50) DEFAULT NULL,
  `idcomentario` int(8) NOT NULL,
  `perfil_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `comentarios`
--

INSERT INTO `comentarios` (`id_idusuarios`, `id_idPosts`, `texto`, `fotocomentario`, `idcomentario`, `perfil_email`) VALUES
(12345682, 0, 'comentario do krl', 'sapo do krl.png', 9, 'erick@gmail.com'),
(12345701, 0, 'novo comentario', 'graga.jpeg', 11, 'eleandro@gmail.com'),
(12345678, 0, 'yffghg', 'graga.jpeg', 12, 'rafael@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `idjogos` mediumint(5) NOT NULL,
  `nomeJogo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricaojogo` varchar(360) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fotoJogo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_idusuarios` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`idjogos`, `nomeJogo`, `descricaojogo`, `fotoJogo`, `id_idusuarios`) VALUES
(2, 'jogo 2', 'é um jogo muito do bão baixe ai que você vai fica feliz', '_b0768e15-e1e7-4d88-b4d6-42164f188a54.jpeg', 12345697),
(5, 'jogo de terro amendtronta', 'esse aqui dá medo mesmo ein', 'bento.webp', 12345682),
(8, 'jogo mais destruitivo do ', 'acabou com o mundo esse aqui', 'images.jpeg', 12345682),
(10, 'league of legends', 'o jogo mais de terror da vida', 'graga.jpeg', 12345701),
(12, 'league of legend', 'asd', 'logo.png', 12345678);

-- --------------------------------------------------------

--
-- Estrutura para tabela `listadesejo`
--

CREATE TABLE `listadesejo` (
  `idlista` int(6) NOT NULL,
  `id_idusuarios` int(6) NOT NULL,
  `id_idjogos` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `listadesejo`
--

INSERT INTO `listadesejo` (`idlista`, `id_idusuarios`, `id_idjogos`) VALUES
(2, 12345678, 1),
(12, 12345678, 0),
(13, 12345678, 0),
(14, 12345678, 0),
(21, 5, 5),
(22, 12345678, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `nomePost` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentario` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `id_idusuarios` int(8) NOT NULL,
  `idPost` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`nomePost`, `comentario`, `foto`, `id_idusuarios`, `idPost`) VALUES
('post 7', 'post novo novissimo pra testa os coisa\r\n', 'images.png', 12345697, 16),
('gente acabei de postar um jogo massa lá', 'sadasdw', 'graga.jpeg', 12345701, 19),
('porque o matheus é vacilão e quase fez a gente tetr que ir n', 'maskdm', 'Black Oranye Archetype Inspired Logo.png', 12345682, 21),
('viva a xexeca', 'xexeca', 'logo.png', 12345678, 22);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `fotouser` varchar(50) DEFAULT 'usericon.jpg',
  `comentarios` int(6) DEFAULT NULL,
  `avaliacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `username`, `email`, `senha`, `fotouser`, `comentarios`, `avaliacao`) VALUES
(12345678, 'rafael', 'rafael@gmail.com', 'rafael1234', 'graga.jpeg', NULL, NULL),
(12345682, 'erick', 'erick@gmail.com', 'erick1234', 'WhatsApp Image 2024-10-06 at 20.25.48.jpeg', NULL, NULL),
(12345718, 'samuel', 'samu@gmail.com', 'samuel', 'usericon.jpg', NULL, NULL),
(12345719, 'fabio', 'fabio@gmail.com', 'fabio', 'usericon.jpg', NULL, NULL),
(12345720, 'rafaela', 'rafaela@gmail.com', 'rafaela', 'usericon.jpg', NULL, NULL),
(12345722, 'jijo', 'jiji@gmail.com', 'ijij', 'usericon.jpg', NULL, NULL),
(12345727, 'julio', 'julio@gmail.com', 'julio1234', 'usericon.jpg', NULL, NULL),
(12345728, 'edineia', 'edineia@gmail.com', 'edineia', 'usericon.jpg', NULL, NULL),
(12345729, 'pafuncio', 'paf@mail.com', '123456', 'usericon.jpg', NULL, NULL),
(12345730, 'ezio', 'auditore@mail.com', '123456', 'usericon.jpg', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`idjogos`),
  ADD UNIQUE KEY `nome` (`nomeJogo`);

--
-- Índices de tabela `listadesejo`
--
ALTER TABLE `listadesejo`
  ADD PRIMARY KEY (`idlista`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idPost`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `idjogos` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `listadesejo`
--
ALTER TABLE `listadesejo`
  MODIFY `idlista` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345731;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
