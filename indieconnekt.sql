-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 06-Nov-2024 às 15:41
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indieconnekt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_idusuarios` int(8) NOT NULL,
  `id_idPosts` int(8) NOT NULL,
  `texto` varchar(360) CHARACTER SET utf8mb4 NOT NULL,
  `fotocomentario` varchar(50) DEFAULT NULL,
  `idcomentario` int(8) NOT NULL,
  `perfil_email` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_idusuarios`, `id_idPosts`, `texto`, `fotocomentario`, `idcomentario`, `perfil_email`) VALUES
(12345678, 0, 'cmoasndojasd', 'img_202122515039.png', 9, 'rafael@gmail.com'),
(12345678, 0, 'erick viado gay', 'pixil-frame-0(4).png', 11, 'rafael@gmail.com'),
(12345678, 0, 'Rafaelly bicha burra', 'Flores.jpg', 12, 'rafael@gmail.com'),
(12345678, 0, 'oiiii, migo...', 'unnamed.jpg', 13, 'rafael@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `idjogos` mediumint(5) NOT NULL,
  `nomeJogo` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `descricaojogo` varchar(360) CHARACTER SET utf8 NOT NULL,
  `fotoJogo` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `id_idusuarios` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`idjogos`, `nomeJogo`, `descricaojogo`, `fotoJogo`, `id_idusuarios`) VALUES
(1, 'the dark legends of the c', '? um jogo muito b?o pode baixa', 'darklegendsed.jpg', 0),
(5, 'dfsd', 'sdfsdfsdf', '_b0768e15-e1e7-4d88-b4d6-42164f188a54.jpeg', 12345678);

-- --------------------------------------------------------

--
-- Estrutura da tabela `listaDesejo`
--

CREATE TABLE `listaDesejo` (
  `idlista` int(6) NOT NULL,
  `id_idusuarios` int(6) NOT NULL,
  `id_idjogos` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `listaDesejo`
--

INSERT INTO `listaDesejo` (`idlista`, `id_idusuarios`, `id_idjogos`) VALUES
(1, 3, 12345678),
(9, 12345678, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `foto_fotouser` varchar(50) DEFAULT 'usericon.jpg',
  `nome_username` varchar(20) NOT NULL,
  `perfil_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`foto_fotouser`, `nome_username`, `perfil_email`) VALUES
('usericon.jpg', 'erick', 'erick@gmail.com'),
('usericon.jpg', 'jean', 'jean@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `nomePost` varchar(60) CHARACTER SET utf8 NOT NULL,
  `comentario` text CHARACTER SET utf8,
  `foto` varchar(50) DEFAULT NULL,
  `id_idusuarios` int(8) NOT NULL,
  `idPost` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`nomePost`, `comentario`, `foto`, `id_idusuarios`, `idPost`) VALUES
('post 6', 'aqui temos um post muito masssa demais', 'galega.jpg', 12345678, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `fotouser` varchar(50) DEFAULT 'usericon.jpg',
  `comentarios` int(6) DEFAULT NULL,
  `avaliacao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `username`, `email`, `senha`, `fotouser`, `comentarios`, `avaliacao`) VALUES
(12345678, 'rafael', 'rafael@gmail.com', 'rafael1234', 'usericon.jpg', NULL, NULL),
(12345714, 'erick', 'erick@gmail.com', 'erick1234', 'usericon.jpg', NULL, NULL),
(12345715, 'jean', 'jean@gmail.com', 'jean1234', 'usericon.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`idjogos`),
  ADD UNIQUE KEY `nome` (`nomeJogo`);

--
-- Indexes for table `listaDesejo`
--
ALTER TABLE `listaDesejo`
  ADD PRIMARY KEY (`idlista`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idPost`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentario` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `idjogos` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `listaDesejo`
--
ALTER TABLE `listaDesejo`
  MODIFY `idlista` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345716;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
