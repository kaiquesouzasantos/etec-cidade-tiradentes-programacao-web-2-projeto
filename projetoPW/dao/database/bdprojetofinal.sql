-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Out-2022 às 01:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdprojetofinal`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAtualizaCategoria` (IN `cod_Categoria` INT, IN `nome_Categoria` VARCHAR(20), OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codCategoria FROM tbcategoria WHERE codCategoria = cod_Categoria)THEN
    	BEGIN
    		SET saida = 'NÃO À REGISTROS';
        END;
    ELSE
    	BEGIN
        	UPDATE tbcategoria
   			SET nomeCategoria = nome_Categoria
    		WHERE codCategoria = cod_Categoria;
            
            SET saida = 'UPDATE REALIZADO!';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spAtualizaCliente` (IN `cod_Cliente` INT, IN `nome_Cliente` VARCHAR(100), IN `CPF_Cliente` VARCHAR(15), IN `email_Cliente` VARCHAR(100), IN `senha_Cliente` VARCHAR(100), IN `logradouro_Cliente` VARCHAR(100), IN `numLog_Cliente` INT, IN `comp_Cliente` VARCHAR(15), IN `bairro_Cliente` VARCHAR(100), IN `cidade_Cliente` VARCHAR(100), IN `UF_Cliente` VARCHAR(2), IN `CEP_Cliente` VARCHAR(10), IN `atividade_Cliente` INT, IN `foto_Cliente` VARCHAR(200), OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codCliente FROM tbcliente WHERE codCliente = cod_Cliente)THEN
    	BEGIN
    		SET saida = 'NÃO À REGISTROS';
        END;
    ELSE
    	BEGIN
        	UPDATE tbcliente
   			SET nomeCliente = nome_Cliente, CPFCliente = CPF_Cliente, emailCliente = email_Cliente, senhaCliente = senha_Cliente, logradouroCliente = logradouro_Cliente, numLogCliente = numLog_Cliente, compCliente = comp_Cliente, bairroCliente = bairro_Cliente, cidadeCliente = cidade_Cliente, UFCliente = UF_Cliente, CEPCliente = CEP_Cliente, atividadeCliente = atividade_Cliente, fotoCliente = foto_Cliente
    		WHERE codCliente = cod_Cliente;
            
            SET saida = 'UPDATE REALIZADO!';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spAtualizaProduto` (IN `cod_Produto` INT, IN `nome_Produto` VARCHAR(50), IN `preco_Produto` DOUBLE, IN `desc_Produto` VARCHAR(800), IN `qntd_Produto` INT, IN `cod_Categoria` INT, IN `foto_Produto` VARCHAR(200), IN `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codProduto FROM tbproduto WHERE codProduto = cod_Produto)THEN
    	BEGIN
    		SET saida = 'NÃO À REGISTROS';
        END;
    ELSE
    	BEGIN
        	UPDATE tbproduto
   			SET nomeProduto = nome_Produto, precoProduto = preco_Produto, descProduto = desc_Produto, qntdProduto = qntd_Produto, codCategoria = cod_Categoria, fotoProduto = foto_Produto
    		WHERE codProduto = cod_Produto;
            
            SET saida = 'UPDATE REALIZADO!';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCodigoCategoria` (IN `cod_Categoria` INT, OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codCategoria FROM tbcategoria WHERE codCategoria = cod_Categoria)THEN
    	BEGIN
    		SET saida = 'CÓDIGO NÃO ENCONTRADO';
        END;
    ELSE
    	BEGIN
        	SELECT nomeCategoria FROM tbcategoria WHERE codCategoria = cod_Categoria;
            SET saida = 'CÓDIGO ENCONTRADO';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCodigoCliente` (IN `cod_Cliente` INT, OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codCliente FROM tbcliente WHERE codCliente = cod_Cliente)THEN
    	BEGIN
    		SET saida = 'CÓDIGO NÃO ENCONTRADO';
        END;
    ELSE
    	BEGIN
        	SELECT nomeCliente FROM tbcliente WHERE codCliente = cod_Cliente;
            SET saida = 'CÓDIGO ENCONTRADO';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spCodigoProduto` (IN `cod_Produto` INT, OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codProduto FROM tbproduto WHERE codProduto = cod_Produto)THEN
    	BEGIN
    		SET saida = 'CÓDIGO NÃO ENCONTRADO';
        END;
    ELSE
    	BEGIN
        	SELECT nomeProduto FROM tbproduto WHERE codProduto = cod_Produto;
            SET saida = 'CÓDIGO ENCONTRADO';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInserirCategoria` (IN `nome_Categoria` VARCHAR(15), OUT `saida` VARCHAR(50))   BEGIN
    DECLARE codCategoria INT;
    IF EXISTS (SELECT nomeCategoria FROM tbCategoria WHERE nomeCategoria LIKE nome_Categoria) THEN
        BEGIN
            SET saida = 'CATEGORIA JÁ CADASTRADA!';
        END;
    ELSE
        BEGIN    
            INSERT INTO tbCategoria (nomeCategoria)
            VALUES(nome_Categoria);
            SET codCategoria = (SELECT MAX(codCategoria)FROM tbCategoria);
            SET saida = 'CADASTRO REALIZADO!';
        END;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInserirCliente` (IN `nome_Cliente` VARCHAR(100), IN `CPF_Cliente` VARCHAR(15), IN `email_Cliente` VARCHAR(100), IN `senha_Cliente` VARCHAR(100), IN `logradouro_Cliente` VARCHAR(100), IN `numLog_Cliente` INT, IN `comp_Cliente` VARCHAR(15), IN `bairro_Cliente` VARCHAR(100), IN `cidade_Cliente` VARCHAR(100), IN `UF_Cliente` VARCHAR(2), IN `CEP_Cliente` VARCHAR(10), IN `atividade_Cliente` INT, IN `foto_Cliente` VARCHAR(200), OUT `saida` VARCHAR(50))   BEGIN
	DECLARE CodCliente INT;
    IF EXISTS ( SELECT CPFCliente FROM tbcliente WHERE CPFCliente LIKE CPF_Cliente ) THEN
    	BEGIN
    		SET	saida = 'CLIENTE JÁ CADASTRADO';
		END;
	ELSE
		BEGIN
    		INSERT INTO tbcliente(nomeCliente, CPFCliente, emailCliente, senhaCliente, logradouroCliente, numLogCliente, compCliente, bairroCliente, cidadeCliente, UFCliente, CEPCliente, atividadeCliente, fotoCliente)
			VALUES(nome_Cliente, CPF_Cliente, email_Cliente, senha_Cliente, logradouro_Cliente, numLog_Cliente, comp_Cliente, bairro_Cliente, cidade_Cliente, UF_Cliente, CEP_Cliente, atividade_Cliente, foto_Cliente);
            SET CodCliente = (SELECT MAX(CodCliente) FROM tbcliente);
			SET saida = 'CADASTRO REALIZADO!';
		END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spInserirProduto` (IN `nome_Produto` VARCHAR(50), IN `preco_Produto` DOUBLE, IN `desc_Produto` VARCHAR(800), IN `qntd_Produto` INT, IN `cod_Categoria` INT, IN `foto_Produto` VARCHAR(200), IN `saida` VARCHAR(50))   BEGIN
	DECLARE codProduto INT;
    IF EXISTS ( SELECT nomeProduto FROM tbproduto WHERE nomeProduto LIKE nome_Produto ) THEN
    	BEGIN
    		SET	saida = 'PRODUTO JÁ CADASTRADO';
		END;
	ELSE
		BEGIN
    		INSERT INTO tbproduto( nomeProduto, precoProduto, descProduto, qntdProduto, codCategoria, fotoProduto)
			VALUES( nome_Produto, preco_Produto, desc_Produto, qntd_Produto, cod_Categoria, foto_Produto);
            SET codProduto = (SELECT MAX(codProduto) FROM tbproduto);
			SET saida = 'CADASTRO REALIZADO!';
		END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spTodasCategorias` ()   SELECT * FROM tbCategoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spTodosClientes` ()   SELECT * FROM tbcliente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spTodosProdutos` ()   SELECT * FROM tbproduto$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `codCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(20) NOT NULL
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
  `qntdProduto` int(11) NOT NULL,
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
  MODIFY `codCategoria` int(11) NOT NULL AUTO_INCREMENT;

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
