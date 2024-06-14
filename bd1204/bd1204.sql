-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/04/2024 às 22:41
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd1204`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbator`
--

CREATE TABLE `tbator` (
  `codAtor` int(11) NOT NULL,
  `nomeAtor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbator`
--

INSERT INTO `tbator` (`codAtor`, `nomeAtor`) VALUES
(1, 'Jim Carrey'),
(2, 'Ed Murphy'),
(3, 'Anne Hathaway'),
(4, 'Andrew Garfield'),
(5, 'Margot Robbie');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbatorfilme`
--

CREATE TABLE `tbatorfilme` (
  `codAtorFilme` int(11) NOT NULL,
  `codAtor` int(11) NOT NULL,
  `codFilme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbatorfilme`
--

INSERT INTO `tbatorfilme` (`codAtorFilme`, `codAtor`, `codFilme`) VALUES
(1, 3, 4),
(3, 4, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdiretorfilme`
--

CREATE TABLE `tbdiretorfilme` (
  `codDiretor` int(11) NOT NULL,
  `nomeDiretor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdiretorfilme`
--

INSERT INTO `tbdiretorfilme` (`codDiretor`, `nomeDiretor`) VALUES
(1, 'James Gunn'),
(2, 'Marc Webb'),
(3, 'Christopher Nolan');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfilme`
--

CREATE TABLE `tbfilme` (
  `codFilme` int(11) NOT NULL,
  `filme` varchar(50) DEFAULT NULL,
  `codGenero` int(11) NOT NULL,
  `codDiretor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbfilme`
--

INSERT INTO `tbfilme` (`codFilme`, `filme`, `codGenero`, `codDiretor`) VALUES
(2, 'Guardiões da Galáxia', 1, 1),
(3, '500 dias com ela', 2, 2),
(4, 'Interestelar', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbgenerofilme`
--

CREATE TABLE `tbgenerofilme` (
  `codGenerofilme` int(11) NOT NULL,
  `generoFilme` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbgenerofilme`
--

INSERT INTO `tbgenerofilme` (`codGenerofilme`, `generoFilme`) VALUES
(1, 'Ação'),
(2, 'Romance'),
(3, 'Ficção Cientifica');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbator`
--
ALTER TABLE `tbator`
  ADD PRIMARY KEY (`codAtor`);

--
-- Índices de tabela `tbatorfilme`
--
ALTER TABLE `tbatorfilme`
  ADD PRIMARY KEY (`codAtorFilme`),
  ADD KEY `codAtor` (`codAtor`),
  ADD KEY `codFilme` (`codFilme`);

--
-- Índices de tabela `tbdiretorfilme`
--
ALTER TABLE `tbdiretorfilme`
  ADD PRIMARY KEY (`codDiretor`);

--
-- Índices de tabela `tbfilme`
--
ALTER TABLE `tbfilme`
  ADD PRIMARY KEY (`codFilme`),
  ADD KEY `codGenero` (`codGenero`),
  ADD KEY `codDiretor` (`codDiretor`);

--
-- Índices de tabela `tbgenerofilme`
--
ALTER TABLE `tbgenerofilme`
  ADD PRIMARY KEY (`codGenerofilme`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbator`
--
ALTER TABLE `tbator`
  MODIFY `codAtor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbatorfilme`
--
ALTER TABLE `tbatorfilme`
  MODIFY `codAtorFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbdiretorfilme`
--
ALTER TABLE `tbdiretorfilme`
  MODIFY `codDiretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbfilme`
--
ALTER TABLE `tbfilme`
  MODIFY `codFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbgenerofilme`
--
ALTER TABLE `tbgenerofilme`
  MODIFY `codGenerofilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbatorfilme`
--
ALTER TABLE `tbatorfilme`
  ADD CONSTRAINT `tbatorfilme_ibfk_1` FOREIGN KEY (`codAtor`) REFERENCES `tbator` (`codAtor`),
  ADD CONSTRAINT `tbatorfilme_ibfk_2` FOREIGN KEY (`codFilme`) REFERENCES `tbfilme` (`codFilme`);

--
-- Restrições para tabelas `tbfilme`
--
ALTER TABLE `tbfilme`
  ADD CONSTRAINT `tbfilme_ibfk_1` FOREIGN KEY (`codGenero`) REFERENCES `tbgenerofilme` (`codGenerofilme`),
  ADD CONSTRAINT `tbfilme_ibfk_2` FOREIGN KEY (`codDiretor`) REFERENCES `tbdiretorfilme` (`codDiretor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
