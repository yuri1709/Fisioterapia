-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Abr-2022 às 08:53
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fisiorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `codigo` int(10) NOT NULL,
  `cep` int(12) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`codigo`, `cep`, `rua`, `bairro`, `cidade`, `uf`) VALUES
(1, 22080010, 'Rua Francisco Sá', 'Copacabana', 'Rio de Janeiro', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fisioterapeuta`
--

CREATE TABLE `fisioterapeuta` (
  `idFisio` int(10) NOT NULL,
  `cpf` int(13) NOT NULL,
  `crefito` int(12) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` enum('h','f') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fisioterapeuta`
--

INSERT INTO `fisioterapeuta` (`idFisio`, `cpf`, `crefito`, `nascimento`, `sexo`) VALUES
(1, 2147483647, 154789874, '2022-04-12', 'f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `IdUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `cpf`, `IdUser`) VALUES
(2, 2147483647, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `perfil` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUser`, `nome`, `sobrenome`, `login`, `senha`, `email`, `perfil`) VALUES
(2, 'Administrador', '', 'admin', 'admin123', 'admin@hotmail.com', '0'),
(3, 'bruna', 'maher', 'bruna', 'bruna123', 'bruh@hotmail.com', '2'),
(16, 'yuri', 'conder roliz sabbagh', 'yuri7', '123', 'yuri@hotmail.com', '1'),
(36, 'Luiz', 'Guilherme', 'luiz', '123', 'luiz@hotmail.com', '1'),
(46, 'Bella', '123', 'bella123', '123', 'bella123@hotmail.com', '1'),
(48, 'Karla', 'santos', 'karla1', '123', 'karla@hotmail.com', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Índices para tabela `fisioterapeuta`
--
ALTER TABLE `fisioterapeuta`
  ADD PRIMARY KEY (`idFisio`),
  ADD UNIQUE KEY `crefito` (`crefito`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `fk_usuarioPaciente` (`IdUser`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fisioterapeuta`
--
ALTER TABLE `fisioterapeuta`
  MODIFY `idFisio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `fk_usuarioPaciente` FOREIGN KEY (`IdUser`) REFERENCES `usuario` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
