-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Out-2021 às 23:16
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ra211512755`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `nameCourse` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateStart` date NOT NULL,
  `dateFinish` date NOT NULL,
  `status` varchar(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `course`
--

INSERT INTO `course` (`id`, `nameCourse`, `description`, `dateStart`, `dateFinish`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Sistemas para Internet', 'Durante o curso, você irá ver como são construídos sites, interfaces, plataformas, aplicativos e muito mais. As possibilidades são infinitas, o que abre um grande ramo de atuação para quem se forma Tecnólogo em Sistemas para Internet. ', '2022-02-07', '2024-07-31', 'ni', '2021-10-04 00:27:41', '2021-10-04 00:40:02'),
(5, 'Análise e Desenvolvimento de Sistemas', 'Ao se formar em Análise e Desenvolvimento de Sistemas, você poderá ser responsável por contribuir, diagnosticar, aplicar e dar suporte aos sistemas de informação em diversas setores.', '2021-08-02', '2023-12-08', 'i', '2021-10-04 00:31:56', '2021-10-04 00:33:07'),
(7, 'Engenharia de Software', 'Ao cursar Bacharelado em Engenharia de Software na EAD Unicesumar, você estará apto a propor melhorias e inovações no planejamento, construção, gestão e manutenção de processos, serviços e produtos computacionais, baseados nas técnicas da Engenharia de Software: sistemas de software corretos, completos, seguros, amigáveis, usáveis, com qualidade, fáceis de manter e custo justo.', '2021-02-08', '2025-12-01', 'i', '2021-10-04 00:37:47', '2021-10-04 00:37:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(8) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `course` varchar(255) NOT NULL,
  `status` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `phone`, `course`, `status`, `created_at`, `updated_at`) VALUES
(41, 'Samuel Fenili Longo', 'sami.eu@gmail.com', '12345678', '48 98802-0215', 'Sistemas para Internet', 'ativo', '2021-10-04 00:38:55', '2021-10-04 22:35:53'),
(44, 'Aline Beling Ghizoni', 'aline_nutr@hotmail.com', '14785236', '48 98963-9568', 'Engenharia de Software', 'ativo', '2021-10-04 22:22:07', '2021-10-04 22:36:13'),
(45, 'Stefania Fenili Longo', 'stefania@outlook.com', '85296374', '48 98523-8745', 'Análise e Desenvolvimento de Sistemas', 'inativo', '2021-10-04 22:36:56', '2021-10-04 22:36:56'),
(46, 'Andréia Beling Ghizoni', 'deiagb@hotmail.com', '12345678', '48 99999-4114', 'Sistemas para Internet', 'ativo', '2021-10-05 00:55:26', '2021-10-05 00:55:26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
