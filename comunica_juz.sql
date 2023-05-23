-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2021 às 09:54
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comunica_juz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `nome` varchar(50) NOT NULL,
  `emaiL` varchar(256) NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`nome`, `emaiL`, `mensagem`) VALUES
('', '', ''),
('teste', 'teste@gmail.com', 'teste'),
('teste', 'teste@gmail.com', 'teste'),
('Matheus Monteiro', 'montews@hotmail.com', 'Gostaria de contrar o plano ouro para meu escritório');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forms`
--

CREATE TABLE `forms` (
  `pergunta1` varchar(250) NOT NULL,
  `pergunta2` varchar(50) NOT NULL,
  `pergunta3` varchar(100) NOT NULL,
  `pergunta4` varchar(50) NOT NULL,
  `pergunta5` varchar(500) NOT NULL,
  `pergunta6` varchar(50) NOT NULL,
  `pergunta7` varchar(500) NOT NULL,
  `pergunta8` varchar(500) NOT NULL,
  `pergunta9` varchar(100) NOT NULL,
  `pergunta10` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forms`
--

INSERT INTO `forms` (`pergunta1`, `pergunta2`, `pergunta3`, `pergunta4`, `pergunta5`, `pergunta6`, `pergunta7`, `pergunta8`, `pergunta9`, `pergunta10`) VALUES
('dsaasd', 'RS', 'adsdasasd', '23213', 'Mais ou Menos', 'Mais de seis meses', 'dsaasd', 'dasasd', 'dasasd', 'asdasd'),
('Matheus Monteiro', 'RS', 'Direito Trabalhista', '3', 'Sim', 'Mais de um ano', 'Mudou muito', 'Facilitou na forma de mandar relatórios para meu clientes já que o próprio sistema mandar automaticamente e traduzido.', 'Conheci através do meu colega de trabalho.', 'Poderiam melhorar o sistema de login, já que para entrar no cadastro sempre tem que se logar e também poderiam melhorar a forma de cadastro de novos usuários para que nós mesmos possamos fazer.'),
('Teste', 'RS', 'teste1', '1', 'Sim', 'Mais de um ano', 'asd', 'asd', 'dsa', 'asd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `cliente` varchar(60) NOT NULL,
  `whats` bigint(11) NOT NULL,
  `emailC` varchar(60) NOT NULL,
  `pessoa` varchar(8) DEFAULT NULL,
  `cpfnj` int(14) DEFAULT NULL,
  `advogado` varchar(60) DEFAULT NULL,
  `emailA` varchar(60) DEFAULT NULL,
  `oab` int(10) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `nProcesso` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relatorio`
--

INSERT INTO `relatorio` (`cliente`, `whats`, `emailC`, `pessoa`, `cpfnj`, `advogado`, `emailA`, `oab`, `data`, `nProcesso`) VALUES
('Matheus Monteiro', 51985848422, 'doctormontews@gmail.com', 'fisica', 2147483647, 'Thomaz Adrian', 'thmadri@gmail.com', 456126458, '2016-04-03', 51),
('Guilherme Souza', 51959555633, 'guisouza@makadu.net', 'juridica', 2147483647, 'Eros Carrasco', 'eroscarrasco@makadu.net', 2147483647, '2018-05-15', 45454564654),
('Wagner Bergozza', 11565656, 'wagnerbergozza@poahub.com', 'juridica', 546546456, 'Vera Regina', 'veraregina@procempa.com.br', 23123213, '2016-04-06', 0),
('teste', 0, 'tested@asd.sda', 'juridica', 3423, 'teste', 'tested@asd.sda', 34234234, '0022-02-22', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(30) NOT NULL,
  `senha` varchar(120) DEFAULT NULL,
  `cpfnj` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`login`, `senha`, `cpfnj`) VALUES
('etet', '0fb1f824957d16d3d089e85a2ec7942c', NULL),
('teste', '698dc19d489c4e4db73e28a713eab07b', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
