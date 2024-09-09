-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/09/2024 às 02:22
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
-- Banco de dados: `projtest`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `adminlog` varchar(120) NOT NULL,
  `adminpass` varchar(120) NOT NULL,
  `adminimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `adminlog`, `adminpass`, `adminimage`) VALUES
(4, 'Julio', '1234', '82c025c34f54ef58ed46b7bb4908b8e0.jfif'),
(5, 'Willian Roberto', 'willian123', '97bf7ea2750453af5b7853bd767d9b70.jfif'),
(6, 'Roberta', '212121', 'a23c8a17e70e0d6d238887ea16bc0bdc.jfif'),
(7, 'Paulinho', 'oloco', '3b549eae5465a82a27e5b812908b1d82.jfif'),
(8, 'Eduardo', 'Saul', 'dd37caaf2ea02016cd8cfacb5576601e.jfif'),
(9, 'wilker', 'wilker123', 'c03b246b86f0a9561cc1b0d5351e6102.jfif'),
(10, 'Nélson', 'Semedo', '852d59b8a169f711a09f475f7df12a7e.jfif'),
(11, 'Erling', 'Haaland', '486f59615e7c1dbcf7cde43a9453df94.jfif'),
(12, 'Robson Bambu', 'etec', '92a0d59d202b6d49fb3bc5f2b446360c.jfif');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
