-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Jul-2023 às 16:49
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tres_cadastro`
--
CREATE DATABASE IF NOT EXISTS `tres_cadastro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `tres_cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `advogados`
--

DROP TABLE IF EXISTS `advogados`;
CREATE TABLE IF NOT EXISTS `advogados` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `advogados`
--

INSERT INTO `advogados` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_um`
--

DROP TABLE IF EXISTS `cliente_um`;
CREATE TABLE IF NOT EXISTS `cliente_um` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente_um`
--

INSERT INTO `cliente_um` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('61651651651651', 'cliente', 'da Familia', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `joaoalberto`
--

DROP TABLE IF EXISTS `joaoalberto`;
CREATE TABLE IF NOT EXISTS `joaoalberto` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `joaoalberto`
--

INSERT INTO `joaoalberto` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('026XXXX-31.2018.8.21.7000', 'Joao Alberto Silveira Freitas x Ministerio Publico', 'TJRS · Tribunal de Justiça do Estado do Rio Grande do Sul, RS', 'Andamento  RECEBIDOS OS AUTOS DE CARGA MINISTERIO PUBLICO AG INT DP PARECER');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lisandra`
--

DROP TABLE IF EXISTS `lisandra`;
CREATE TABLE IF NOT EXISTS `lisandra` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `lisandra`
--

INSERT INTO `lisandra` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('3437354', 'Lisandra da Silva', 'shjcwkch', 'dgwkfgwkeg'),
('lkjdqsljdkj', 'Lisandra', 'jdalkjskld', 'khdlakshd'),
('cdlkdklsajd', 'fsdhdoiahil', 'lfkdwkldfaj', 'dklsajdaklsjkl');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matheus`
--

DROP TABLE IF EXISTS `matheus`;
CREATE TABLE IF NOT EXISTS `matheus` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `matheus`
--

INSERT INTO `matheus` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('646468484846848-4684684...', 'Matheus da Silva', 'A minha', 'Atualizacao do processo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `novocliente`
--

DROP TABLE IF EXISTS `novocliente`;
CREATE TABLE IF NOT EXISTS `novocliente` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `novocliente`
--

INSERT INTO `novocliente` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('545375354', 'Cliente', 'da Familia', 'algo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `raquel`
--

DROP TABLE IF EXISTS `raquel`;
CREATE TABLE IF NOT EXISTS `raquel` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `raquel`
--

INSERT INTO `raquel` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('lhzwshsxwh', 'Raquel da Silva', 'xklwxklwhs', 'e3gkdge3kg1l');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reminho`
--

DROP TABLE IF EXISTS `reminho`;
CREATE TABLE IF NOT EXISTS `reminho` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `reminho`
--

INSERT INTO `reminho` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('2222.2526265-2023.2222', 'Reminho da Silva Lindao', 'Vara da Infancia', 'Castracao do gato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `login`, `senha`) VALUES
(0000000042, 'matheus', '123'),
(0000000043, 'vitor', '123'),
(0000000041, 'joaoalberto', '123'),
(0000000040, 'raquel', '123'),
(0000000039, 'lisandra', '123'),
(0000000038, 'novocliente', '123'),
(0000000037, 'reminho', 'fofo'),
(0000000036, 'cliente_um', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitor`
--

DROP TABLE IF EXISTS `vitor`;
CREATE TABLE IF NOT EXISTS `vitor` (
  `processo_um` varchar(150) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `vara` varchar(150) DEFAULT NULL,
  `procedimento` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `vitor`
--

INSERT INTO `vitor` (`processo_um`, `nome`, `vara`, `procedimento`) VALUES
('sdmpfjai', 'VITOR PEREIRA', 'pifnsinf', 'vsdfoi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
