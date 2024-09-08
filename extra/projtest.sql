-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/09/2024 às 22:30
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
(4, 'julio', '1234', '1488326f700a61d486dc9a7a24f3e295.jfif'),
(5, 'Willian', '112211', 'b9b67fa010e7b6050317ed8a025409ad.jfif'),
(6, 'Roberta', '212121', '18d4cd91c99a42531c57acde95565f56.jfif'),
(7, 'Pedrinho', 'oloco', '3b549eae5465a82a27e5b812908b1d82.jfif'),
(8, 'Eduardo', 'Saul', 'dd37caaf2ea02016cd8cfacb5576601e.jfif'),
(9, 'wilker', 'wilker123', 'c03b246b86f0a9561cc1b0d5351e6102.jfif'),
(10, 'Thiago', 'Semedo', '9041633f017de22cd55a7ae430420ca1.jfif'),
(11, 'Erling', 'Haaland', '486f59615e7c1dbcf7cde43a9453df94.jfif'),
(12, 'Robson Bambu', 'etec', '92a0d59d202b6d49fb3bc5f2b446360c.jfif');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_post`
--

CREATE TABLE `tb_post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `materia` varchar(250) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_post`
--

INSERT INTO `tb_post` (`id`, `titulo`, `materia`, `imagem`) VALUES
(27, 'Landim será CEO do Flamengo em caso de vitória de Dunshee', 'Presidente ia concorrer ao comando do CD, mas aceitou convite', '6b851803d9f33fa5beb344df93a9424f.webp'),
(29, 'Léo Pereira volta, e Fla corre para ter De la Cruz, Arrasca e Gabigol', 'Zagueiro é o primeiro dos atuais lesionados a ser reintegrado', '446a6eac6b67f73e5719b99ea3c2da37.avif'),
(30, 'Corinthians, Flamengo, jogadores e até gandulas são denunciados no STJD por confusão em jogo', 'Tribunal fez longa denúncia após episódio ocorrido no duelo do domingo passado na Neo Química Arena', '15e3da5816c18bd464b7d440c36e5be3.avif'),
(31, ' Wesley investe em fisioterapia e análise de desempenho para decolar.', 'Lateral direito valorizou-se com duas propostas na janela.', '09b12d879bf107918f0c3006ed5154ef.avif');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
