-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 01-Out-2024 às 12:42
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
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `idGenero` int(10) NOT NULL,
  `nomeGenero` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`idGenero`, `nomeGenero`, `descricao`) VALUES
(1, 'aventura', 'navegue por mundos extraordinarios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `idjogos` mediumint(5) NOT NULL,
  `nome` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `idGenero` varchar(20) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`idjogos`, `nome`, `idGenero`, `foto`) VALUES
(1, 'the dark legends of the c', '1', 'darklegendsed.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `listaDesejo`
--

CREATE TABLE `listaDesejo` (
  `idlista` int(6) NOT NULL,
  `idusuarios` int(6) NOT NULL,
  `idjogos` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `nomePost` varchar(60) CHARACTER SET utf8 NOT NULL,
  `id_jogos` int(8) NOT NULL,
  `comentario` text CHARACTER SET utf8,
  `foto` varchar(50) DEFAULT NULL,
  `id_idusuarios` int(8) NOT NULL,
  `idPost` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`nomePost`, `id_jogos`, `comentario`, `foto`, `id_idusuarios`, `idPost`) VALUES
('jogo 1', 0, 'pipipipipipipipopopopopopopop', 'pixilart-drawing.png', 0, 1),
('jogo 2', 0, 'pipipipipipipipipipipipip', 'hollowknighted.jpg', 0, 7),
('jogo 3', 0, 'gigigiigigigigi', 'conscripted.jpg', 0, 10),
('jogo 4', 0, 'jogo perfeito', 'darklegendsed.jpg', 0, 11),
('jogo 5', 0, 'jogo merda', 'f1fa58f80ab1e08981a6a1e436de39a10e4bcc245785b303af', 0, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `fotouser` longblob,
  `comentarios` int(6) DEFAULT NULL,
  `avaliacao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `username`, `email`, `senha`, `fotouser`, `comentarios`, `avaliacao`) VALUES
(12345678, 'rafael', 'rafael@gmail.com', 'rafael1234', '', NULL, NULL),
(12345682, 'erick', 'erick@gmail.com', 'erick1234', '', NULL, NULL),
(12345696, 'edineia', 'edineia@gmail.com', 'edineiaprof', '', NULL, NULL),
(12345697, 'pedro', 'pedro@gmail.com', 'pedro1234', NULL, NULL, NULL),
(12345698, 'gemeos', 'gemeos@gmail.com', 'gemeos1234', NULL, NULL, NULL),
(12345699, 'viadogames', 'viadogames@gmail.com', 'viadogames', NULL, NULL, NULL),
(12345700, 'fulano', 'fulano@gmail.com', '1234', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`idjogos`),
  ADD UNIQUE KEY `nome` (`nome`);

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
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `idGenero` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `idjogos` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `listaDesejo`
--
ALTER TABLE `listaDesejo`
  MODIFY `idlista` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idPost` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345701;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
