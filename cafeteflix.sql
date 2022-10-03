-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24-Set-2022 às 02:17
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

drop database if exists `cafeteflix`;
create database if not exists `cafeteflix`;
use `cafeteflix`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `idfilme` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sinopse` varchar(100) NOT NULL,
  `pais` varchar(11) NOT NULL,
  `linguagem` varchar(11) NOT NULL,
  `duracao` int(255) NOT NULL,
  `ano` date NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `idserie` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sinopse` varchar(100) NOT NULL,
  `pais` varchar(11) NOT NULL,
  `linguagem` varchar(11) NOT NULL,
  `duracao` int(255) NOT NULL,
  `ano` date NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Inserindo dados na tabela `filmes`
-- `titulo`, `sinopse`, `pais`, `linguagem`, `duracao`, `ano`, `imagem`, `video`

INSERT INTO `filmes` (`titulo`, `sinopse`, `pais`, `linguagem`, `duracao`, `ano`, `imagem`, `video`) VALUES
('Simpsons', 'the Simpsons', 'EUA', 'Inglês', '120min', '1997', './img/Simpsons.jpg', 'nenhum');

--
-- Inserindo dados na tabela `series`
-- `titulo`, `sinopse`, `pais`, `linguagem`, `duracao`, `ano`, `imagem`, `video`

INSERT INTO `series` (`titulo`, `sinopse`, `pais`, `linguagem`, `duracao`, `ano`, `imagem`, `video`) VALUES
('Simpsons', 'the Simpsons', 'EUA', 'Inglês', '120min', '1997', './img/Simpsons.jpg', 'nenhum');

--
-- Inserindo dados na tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `login`, `senha`) VALUES
(1, 'adm@contato.com', 'admin');

-- --------------------------------------------------------

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`idfilme`);

--
-- Índices para tabela `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`idserie`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

-- --------------------------------------------------------

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `idfilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

--
-- AUTO_INCREMENT de tabela `seires`
--
ALTER TABLE `series`
  MODIFY `idserie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;