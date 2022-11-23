-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2022 às 15:25
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
-- Banco de dados: `bdteste`
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
            SET saida = (SELECT nomeCategoria FROM tbcategoria WHERE codCategoria = cod_Categoria);
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
            SET saida = (SELECT codCliente FROM tbcliente WHERE codCliente = cod_Cliente);
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
            SET saida = (SELECT codProduto FROM tbproduto WHERE codProduto = cod_Produto);
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spExcluirCategoria` (IN `cod_Categoria` INT, OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codCategoria FROM tbcategoria WHERE codCategoria = cod_Categoria)THEN
    	BEGIN
    		SET saida = 'CÓDIGO NÃO ENCONTRADO!';
        END;
    ELSE
    	BEGIN
        	DELETE FROM tbcategoria
            WHERE codCategoria = cod_Categoria;
            
            SET saida = 'CATEGORIA DELETADA COM SUCESSO!';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spExcluirCliente` (IN `cod_Cliente` INT, OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codCliente FROM tbcliente WHERE codCliente = cod_Cliente)THEN
    	BEGIN
    		SET saida = 'CÓDIGO NÃO ENCONTRADO!';
        END;
    ELSE
    	BEGIN
        	UPDATE tbcliente SET atividadeCliente = 0
            WHERE codCliente = cod_Cliente;
            
            SET saida = 'CLIENTE DELETADO COM SUCESSO!';
        END;
	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spExcluirProduto` (IN `cod_Produto` INT, OUT `saida` VARCHAR(50))   BEGIN
	IF NOT EXISTS (SELECT codProduto FROM tbproduto WHERE codProduto = cod_Produto)THEN
    	BEGIN
    		SET saida = 'CÓDIGO NÃO ENCONTRADO!';
        END;
    ELSE
    	BEGIN
        	DELETE FROM tbproduto
            WHERE codProduto = cod_Produto;
            
            SET saida = 'PROUDTO DELETADO COM SUCESSO!';
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `spRetornaVenda` (IN `cod_Cliente` INT, OUT `saida` VARCHAR(50))   IF EXISTS (SELECT * FROM  tbvenda WHERE codCliente = cod_Cliente AND statusVenda = 0)THEN
        BEGIN
            SET saida = (SELECT codVenda FROM tbvenda WHERE codCliente = cod_Cliente AND statusVenda = 0);
        END;
	ELSE 
    	BEGIN
        	INSERT INTO tbvenda(valorTotalVenda, statusVenda, codCliente)
            VALUES (0, 0, cod_Cliente);
            
            SET saida = (SELECT codVenda FROM tbvenda WHERE codCliente = cod_Cliente AND statusVenda = 0);
        END;
	END IF$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spTgSubTotalVenda` (IN `cod_Item_Venda` INT, OUT `valor` DOUBLE, OUT `produto` INT)   BEGIN

    SET produto = (SELECT codProduto FROM tbitemvenda WHERE codItemvenda = cod_Item_Venda);
    SET valor = (SELECT  precoProduto FROM tbproduto WHERE codProduto = produto);
    
	UPDATE tbitemvenda SET subTotalItemVenda = qntdItemVenda * valor WHERE codItemvenda = cod_Item_Venda;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `spVendasCliente` (IN `cod_Cliente` INT, OUT `saida` VARCHAR(50))   IF EXISTS (SELECT codCliente FROM tbcliente WHERE codCliente = cod_Cliente)THEN
    	BEGIN
        	IF EXISTS (SELECT * FROM tbvenda WHERE codCliente = cod_Cliente AND statusVenda =! 0)THEN
            	BEGIN
                	SET saida = (SELECT * FROM tbvenda WHERE codCliente = cod_Cliente);
                END;
			ELSE
            	BEGIN
                	SET saida = 'FINALIZE A COMPRA!';
                END;
			END IF;
        END;
    ELSE
    	BEGIN
        	SET saida = 'CÓDIGO DO CLIENTE NÃO ENCONTRADO!';
        END;
	END IF$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `codCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`codCategoria`, `nomeCategoria`) VALUES
(7, 'Metal'),
(8, 'Vintage'),
(10, 'Aviador'),
(11, 'Aquat'),
(12, 'Portofino');

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

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`codCliente`, `nomeCliente`, `CPFCliente`, `emailCliente`, `senhaCliente`, `logradouroCliente`, `numLogCliente`, `compCliente`, `bairroCliente`, `cidadeCliente`, `UFCliente`, `CEPCliente`, `atividadeCliente`, `fotoCliente`) VALUES
(1, 'rwrewrewrw', '51248547829', 'fdfdsfdfsderewr@dsadsad', 'ewqewqewqewq', 'ewqewqewqew', 213, '123123', '3123213', '312321', 'qe', '3123213213', 0, 'pro_04.png'),
(2, 'rwrewrewrw', '51248547829', 'fdfdsfdfsderewrdas@dsadsad', '2343243243', '23213123', 432432, 'rewrwerew', 'erewr', 'werwer', 're', 'werwerewrr', 1, 'pro_08.png'),
(3, 'testeOpa', '51248547829', 'fdfds321fdfsderewr@dsadsad', 'qwewqewq', 'teste teste', 123, 'rwerewrwerewr', 'wqewqewqe', 'Sao Paulo', 'SP', '08470-790', 0, 'IMG-20220425-WA0009.jpg'),
(4, 'rwrewrewrw', '51248547829', 'test@gmail', '123456789', 'Rua José Francisco Brandão', 548, 'casa 31', 'Cidade Tiradentes', 'São Paulo', 'SP', '08470790', 1, 'IMG-20220425-WA0009.jpg'),
(5, 'rwrewrewrw', '51248547829', 'teste@gmail', '123456', 'Rua José Francisco Brandão', 312, 'ewqe', 'Cidade Tiradentes', 'São Paulo', 'SP', '08470790', 1, 'imagem_2022-11-11_181006188.png');

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

--
-- Extraindo dados da tabela `tbitemvenda`
--

INSERT INTO `tbitemvenda` (`codItemvenda`, `codVenda`, `codProduto`, `qntdItemVenda`, `subTotalItemVenda`) VALUES
(1, 5, 43, 1, 2780000),
(2, 1, 43, 1, 2780000),
(3, 1, 43, 1, 2780000),
(4, 1, 43, 1, 2780000),
(5, 1, 43, 1, 2780000),
(6, 1, 43, 1, 2780000),
(7, 1, 43, 1, 2780000),
(8, 1, 24, 1, 3780000),
(9, 1, 24, 1, 3780000),
(11, 4, 26, 1, 7480000);

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

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`codProduto`, `nomeProduto`, `precoProduto`, `descProduto`, `qntdProduto`, `codCategoria`, `fotoProduto`) VALUES
(24, 'BIG PILOT 37', 3780000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 44 horas, indicaÃ§Ã£o da data e do dia da semana, caixa interior em ferro macio para isolamento contra campos magnÃ©ticos, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, gravura no fundo do aviÃ£o JU-52, mostrador preto, caixa em aÃ§o inoxidÃ¡vel, resistente Ã  Ã¡gua 6 bar, altura da caixa 15,2mm, diÃ¢metro 43mm e pulseira em aÃ§o.', 10, 7, 'pro_17.png'),
(25, 'AVIADOR 41', 4330000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 44 horas, indicaÃ§Ã£o da data e do dia da semana, caixa interior em ferro macio para isolamento contra campos magnÃ©ticos, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, gravura no fundo do aviÃ£o JU-52, mostrador preto, caixa em aÃ§o inoxidÃ¡vel, resistente Ã  Ã¡gua 6 bar, altura da caixa 15,2mm, diÃ¢metro 43mm e pulseira em aÃ§o.', 10, 7, 'pro_14.png'),
(26, 'BIG PILOT 13', 7480000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 44 horas, indicaÃ§Ã£o da data e do dia da semana, caixa interior em ferro macio para isolamento contra campos magnÃ©ticos, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, gravura no fundo do aviÃ£o JU-52, mostrador preto, caixa em aÃ§o inoxidÃ¡vel, resistente Ã  Ã¡gua 6 bar, altura da caixa 15,2mm, diÃ¢metro 43mm e pulseira em aÃ§o.', 10, 7, 'pro_16.png'),
(27, 'BIG PILOT 43', 5470000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 44 horas, indicaÃ§Ã£o da data e do dia da semana, caixa interior em ferro macio para isolamento contra campos magnÃ©ticos, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, gravura no fundo do aviÃ£o JU-52, mostrador preto, caixa em aÃ§o inoxidÃ¡vel, resistente Ã  Ã¡gua 6 bar, altura da caixa 15,2mm, diÃ¢metro 43mm e pulseira em aÃ§o.', 10, 7, 'pro_13.png'),
(28, 'AVIADOR 41 - MARK XVIII', 3150000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 44 horas, indicaÃ§Ã£o da data e do dia da semana, caixa interior em ferro macio para isolamento contra campos magnÃ©ticos, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, gravura no fundo do aviÃ£o JU-52, mostrador preto, caixa em aÃ§o inoxidÃ¡vel, resistente Ã  Ã¡gua 6 bar, altura da caixa 15,2mm, diÃ¢metro 43mm e pulseira em aÃ§o.', 10, 7, 'pro_15.png'),
(29, 'AVIADOR 39 - AMG', 2870000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 44 horas, indicaÃ§Ã£o da data e do dia da semana, caixa interior em ferro macio para isolamento contra campos magnÃ©ticos, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, gravura no fundo do aviÃ£o JU-52, mostrador preto, caixa em aÃ§o inoxidÃ¡vel, resistente Ã  Ã¡gua 6 bar, altura da caixa 15,2mm, diÃ¢metro 43mm e pulseira em aÃ§o.', 10, 7, 'pro_18.png'),
(30, 'PORTOFINO 37 - LSG', 3800000, 'Apresenta design clÃ¡ssico, perfeito para quem ama modelos de relÃ³gios tradicionais para o dia a dia. AlÃ©m da caixa em aÃ§o inoxidÃ¡vel em 40mm e dos algarismos romanos, este relÃ³gio conta tambÃ©m com pulseira em couro legÃ­timo com textura croco que veste de forma anatÃ´mica e confortÃ¡vel no pulso. Uma combinaÃ§Ã£o clÃ¡ssica e atemporal, perfeita para presentear quem procura por qualidade e estilo versÃ¡til.', 10, 8, 'pro_28.png'),
(31, 'PORTOFINO 37', 3260000, 'Apresenta design clÃ¡ssico, perfeito para quem ama modelos de relÃ³gios tradicionais para o dia a dia. AlÃ©m da caixa em aÃ§o inoxidÃ¡vel em 40mm e dos algarismos romanos, este relÃ³gio conta tambÃ©m com pulseira em couro legÃ­timo com textura croco que veste de forma anatÃ´mica e confortÃ¡vel no pulso. Uma combinaÃ§Ã£o clÃ¡ssica e atemporal, perfeita para presentear quem procura por qualidade e estilo versÃ¡til.', 10, 8, 'pro_29.png'),
(32, 'PORTOFINO AUTOMÃTICO ', 7480000, 'Apresenta design clÃ¡ssico, perfeito para quem ama modelos de relÃ³gios tradicionais para o dia a dia. AlÃ©m da caixa em aÃ§o inoxidÃ¡vel em 40mm e dos algarismos romanos, este relÃ³gio conta tambÃ©m com pulseira em couro legÃ­timo com textura croco que veste de forma anatÃ´mica e confortÃ¡vel no pulso. Uma combinaÃ§Ã£o clÃ¡ssica e atemporal, perfeita para presentear quem procura por qualidade e estilo versÃ¡til.', 10, 8, 'pro_30.png'),
(33, 'PORTOFINO 37 V2', 3600000, 'Apresenta design clÃ¡ssico, perfeito para quem ama modelos de relÃ³gios tradicionais para o dia a dia. AlÃ©m da caixa em aÃ§o inoxidÃ¡vel em 40mm e dos algarismos romanos, este relÃ³gio conta tambÃ©m com pulseira em couro legÃ­timo com textura croco que veste de forma anatÃ´mica e confortÃ¡vel no pulso. Uma combinaÃ§Ã£o clÃ¡ssica e atemporal, perfeita para presentear quem procura por qualidade e estilo versÃ¡til.', 10, 8, 'pro_25.png'),
(34, 'PORTOFINO 39', 3460000, 'Apresenta design clÃ¡ssico, perfeito para quem ama modelos de relÃ³gios tradicionais para o dia a dia. AlÃ©m da caixa em aÃ§o inoxidÃ¡vel em 40mm e dos algarismos romanos, este relÃ³gio conta tambÃ©m com pulseira em couro legÃ­timo com textura croco que veste de forma anatÃ´mica e confortÃ¡vel no pulso. Uma combinaÃ§Ã£o clÃ¡ssica e atemporal, perfeita para presentear quem procura por qualidade e estilo versÃ¡til.', 10, 8, 'pro_26.png'),
(35, 'PORTOFINO MANUAL', 5780000, 'Apresenta design clÃ¡ssico, perfeito para quem ama modelos de relÃ³gios tradicionais para o dia a dia. AlÃ©m da caixa em aÃ§o inoxidÃ¡vel em 40mm e dos algarismos romanos, este relÃ³gio conta tambÃ©m com pulseira em couro legÃ­timo com textura croco que veste de forma anatÃ´mica e confortÃ¡vel no pulso. Uma combinaÃ§Ã£o clÃ¡ssica e atemporal, perfeita para presentear quem procura por qualidade e estilo versÃ¡til.', 10, 8, 'pro_27.png'),
(36, 'CRONOGRAFO', 10890000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 42 horas, indicaÃ§Ã£o da data, ponteiro central dos segundos com dispositivo de paragem, vidro de safira, bombeado, antirreflexo de ambos os lados, caixa em aÃ§o inoxidÃ¡vel com 12 diamantes no mostrador, resistente Ã  Ã¡gua 3 bar, altura da caixa 9mm, diÃ¢metro 37mm, pulseira de couro italiana Santoni.', 10, 12, 'pro_09.png'),
(37, 'CRONOGRAFO - YC', 7650000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 42 horas, indicaÃ§Ã£o da data, ponteiro central dos segundos com dispositivo de paragem, vidro de safira, bombeado, antirreflexo de ambos os lados, caixa em aÃ§o inoxidÃ¡vel com 12 diamantes no mostrador, resistente Ã  Ã¡gua 3 bar, altura da caixa 9mm, diÃ¢metro 37mm, pulseira de couro italiana Santoni.', 10, 12, 'pro_11.png'),
(38, 'CALENDARIO PERPETUO', 24610000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 42 horas, indicaÃ§Ã£o da data, ponteiro central dos segundos com dispositivo de paragem, vidro de safira, bombeado, antirreflexo de ambos os lados, caixa em aÃ§o inoxidÃ¡vel com 12 diamantes no mostrador, resistente Ã  Ã¡gua 3 bar, altura da caixa 9mm, diÃ¢metro 37mm, pulseira de couro italiana Santoni.', 10, 12, 'pro_07.png'),
(39, 'CALENDARIO ANUAL', 180900, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 42 horas, indicaÃ§Ã£o da data, ponteiro central dos segundos com dispositivo de paragem, vidro de safira, bombeado, antirreflexo de ambos os lados, caixa em aÃ§o inoxidÃ¡vel com 12 diamantes no mostrador, resistente Ã  Ã¡gua 3 bar, altura da caixa 9mm, diÃ¢metro 37mm, pulseira de couro italiana Santoni.', 10, 12, 'pro_08.png'),
(40, 'CRONOGRAFO - EG', 4790000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 42 horas, indicaÃ§Ã£o da data, ponteiro central dos segundos com dispositivo de paragem, vidro de safira, bombeado, antirreflexo de ambos os lados, caixa em aÃ§o inoxidÃ¡vel com 12 diamantes no mostrador, resistente Ã  Ã¡gua 3 bar, altura da caixa 9mm, diÃ¢metro 37mm, pulseira de couro italiana Santoni.', 10, 12, 'pro_10.png'),
(41, 'CRONOGRAFO - LX', 7320000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, reserva de marcha de 42 horas, indicaÃ§Ã£o da data, ponteiro central dos segundos com dispositivo de paragem, vidro de safira, bombeado, antirreflexo de ambos os lados, caixa em aÃ§o inoxidÃ¡vel com 12 diamantes no mostrador, resistente Ã  Ã¡gua 3 bar, altura da caixa 9mm, diÃ¢metro 37mm, pulseira de couro italiana Santoni.', 10, 12, 'pro_12.png'),
(42, 'AVIADOR - MARK XVIII', 3890000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC32111, reserva de marcha de 120 horas, indicaÃ§Ã£o da data, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, caixa em aÃ§o inoxidÃ¡vel, mostrador preto com luminescÃªncia, pulseira em couro com sistema troca rÃ¡pida de pulseira IWC, resistente Ã  Ã¡gua 10 bar, altura da caixa 10,8mm e diÃ¢metro 40mm', 10, 11, 'pro_06.png'),
(43, 'EXPEDITION JACQUES', 2780000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC32111, reserva de marcha de 120 horas, indicaÃ§Ã£o da data, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, caixa em aÃ§o inoxidÃ¡vel, mostrador preto com luminescÃªncia, pulseira em couro com sistema troca rÃ¡pida de pulseira IWC, resistente Ã  Ã¡gua 10 bar, altura da caixa 10,8mm e diÃ¢metro 40mm', 10, 11, 'pro_04.png'),
(44, 'CRONOGRACO - IWC', 4320000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC32111, reserva de marcha de 120 horas, indicaÃ§Ã£o da data, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, caixa em aÃ§o inoxidÃ¡vel, mostrador preto com luminescÃªncia, pulseira em couro com sistema troca rÃ¡pida de pulseira IWC, resistente Ã  Ã¡gua 10 bar, altura da caixa 10,8mm e diÃ¢metro 40mm', 10, 11, 'pro_05.png'),
(45, 'CRONOGRAFO V2', 3150000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC32111, reserva de marcha de 120 horas, indicaÃ§Ã£o da data, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, caixa em aÃ§o inoxidÃ¡vel, mostrador preto com luminescÃªncia, pulseira em couro com sistema troca rÃ¡pida de pulseira IWC, resistente Ã  Ã¡gua 10 bar, altura da caixa 10,8mm e diÃ¢metro 40mm', 10, 11, 'pro_01.png'),
(46, 'CRONOGRAFO - EP', 4410000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC32111, reserva de marcha de 120 horas, indicaÃ§Ã£o da data, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, caixa em aÃ§o inoxidÃ¡vel, mostrador preto com luminescÃªncia, pulseira em couro com sistema troca rÃ¡pida de pulseira IWC, resistente Ã  Ã¡gua 10 bar, altura da caixa 10,8mm e diÃ¢metro 40mm', 10, 11, 'pro_03.png'),
(47, 'GALAPAGUS ISLANDS', 6290000, 'Movimento do relÃ³gio mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC32111, reserva de marcha de 120 horas, indicaÃ§Ã£o da data, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, caixa em aÃ§o inoxidÃ¡vel, mostrador preto com luminescÃªncia, pulseira em couro com sistema troca rÃ¡pida de pulseira IWC, resistente Ã  Ã¡gua 10 bar, altura da caixa 10,8mm e diÃ¢metro 40mm', 10, 11, 'pro_02.png'),
(48, 'TG - WOODLAND', 6070000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC 69385, reserva de marcha de 46 horas, indicaÃ§Ã£o da dada e dos dias da semana, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, resistente Ã  Ã¡gua 10 bar, caixa em Ceratanium, altura da caixa 14,5mm e diÃ¢metro 41mm, pulseira de borracha e tecido, mostrador preto.', 10, 10, 'pro_20.png'),
(49, 'TG - AVIADOR 41', 4790000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC 69385, reserva de marcha de 46 horas, indicaÃ§Ã£o da dada e dos dias da semana, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, resistente Ã  Ã¡gua 10 bar, caixa em Ceratanium, altura da caixa 14,5mm e diÃ¢metro 41mm, pulseira de borracha e tecido, mostrador preto.', 10, 10, 'pro_19.png'),
(50, 'TG - PERPETUO', 16500000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC 69385, reserva de marcha de 46 horas, indicaÃ§Ã£o da dada e dos dias da semana, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, resistente Ã  Ã¡gua 10 bar, caixa em Ceratanium, altura da caixa 14,5mm e diÃ¢metro 41mm, pulseira de borracha e tecido, mostrador preto.', 10, 10, 'pro_23.png'),
(51, 'TG - AVIADOR 39', 4140000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC 69385, reserva de marcha de 46 horas, indicaÃ§Ã£o da dada e dos dias da semana, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, resistente Ã  Ã¡gua 10 bar, caixa em Ceratanium, altura da caixa 14,5mm e diÃ¢metro 41mm, pulseira de borracha e tecido, mostrador preto.', 10, 10, 'pro_21.png'),
(52, 'TG - CERATANIUM', 9870000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC 69385, reserva de marcha de 46 horas, indicaÃ§Ã£o da dada e dos dias da semana, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, resistente Ã  Ã¡gua 10 bar, caixa em Ceratanium, altura da caixa 14,5mm e diÃ¢metro 41mm, pulseira de borracha e tecido, mostrador preto.UM', 10, 10, 'pro_24.png'),
(53, 'AVIADOR - ROYAL MACES', 7140000, 'Movimento do cronÃ³grafo mecÃ¢nico, corda automÃ¡tica, calibre manufaturado IWC 69385, reserva de marcha de 46 horas, indicaÃ§Ã£o da dada e dos dias da semana, coroa de rosca, vidro de safira, bombeado, antirreflexo de ambos os lados, fundo de safira, resistente Ã  Ã¡gua 10 bar, caixa em Ceratanium, altura da caixa 14,5mm e diÃ¢metro 41mm, pulseira de borracha e tecido, mostrador preto.', 10, 10, 'pro_22.png');

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
-- Extraindo dados da tabela `tbvenda`
--

INSERT INTO `tbvenda` (`codVenda`, `dataVenda`, `valorTotalvenda`, `statusVenda`, `codCliente`) VALUES
(2, '0000-00-00', 0, 0, 1),
(3, '0000-00-00', 0, 0, 2),
(4, '0000-00-00', 0, 0, 5);

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
  MODIFY `codCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `codItemvenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `codProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `codVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
