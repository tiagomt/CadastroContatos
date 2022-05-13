-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Maio-2022 às 16:29
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `data`
--

-- --------------------------------------------------------

CREATE DATABASE data;
--
-- Estrutura da tabela `usuarios`
--


CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL auto_increment,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `telefone2` varchar(14) DEFAULT NULL,
  CONSTRAINT PK_usuarios PRIMARY KEY(usuarios)
);

-- Extraindo dados da tabela `usuarios`


INSERT INTO `usuarios` (`id_usuario`, `nome`, `sobrenome`, `cpf`, `email`, `email2`, `telefone`, `telefone2`) VALUES
(1, 'Tiago', 'Teixeira', '123.456.789-09', 'tiago-tmt@hotmail.com', '', '(11)99718-4853', ''),
(2, 'aaaaaaa', 'aaaaaa', '123.456.789-09', 'aaaa@aaaaa.com', '', '(11)11111-1111', ''),
(3, 'Tiago', 'Teixeira', '123.456.789-09', 'tiago@gmail.com', '', '(11)11111-1111', '');


COMMIT;

