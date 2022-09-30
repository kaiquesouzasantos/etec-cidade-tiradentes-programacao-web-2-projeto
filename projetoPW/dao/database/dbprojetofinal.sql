-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2022 às 17:48
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbprojetofinal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `codCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `codCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `CPFCliente` varchar(15) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `senhaCliente` varchar(100) NOT NULL,
  `logradouroCliente` varchar(100) NOT NULL,
  `numLogCliente` int(11) NOT NULL,
  `compCliente` varchar(15) NOT NULL,
  `bairroCliente` varchar(100) NOT NULL,
  `cidadeCliente` varchar(100) NOT NULL,
  `UFCliente` varchar(2) NOT NULL,
  `CEPCliente` varchar(10) NOT NULL,
  `atividadeCliente` int(11) NOT NULL,
  `fotoCliente` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `codItemvenda` int(11) NOT NULL,
  `codVenda` int(11) NOT NULL,
  `codProduto` int(11) NOT NULL,
  `qntdItemVenda` int(11) NOT NULL,
  `subTotalItemVenda` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `codProduto` int(11) NOT NULL,
  `nomeProduto` varchar(50) NOT NULL,
  `precoProduto` double NOT NULL,
  `descProduto` varchar(800) NOT NULL,
  `codCategoria` int(11) NOT NULL,
  `fotoProduto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `codVenda` int(11) NOT NULL,
  `dataVenda` date NOT NULL,
  `valorTotalvenda` double NOT NULL,
  `statusVenda` int(11) NOT NULL,
  `codCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`codCategoria`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Índices para tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD PRIMARY KEY (`codItemvenda`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`codProduto`);
--
-- Índices para tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`codVenda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `codCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `codItemvenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `codProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `codVenda` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
