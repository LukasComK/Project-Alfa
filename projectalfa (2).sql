-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql831.umbler.com:3306
-- Tempo de geração: 25-Out-2022 às 02:37
-- Versão do servidor: 5.7.39
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projectalfa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `AdministradorForum`
--

CREATE TABLE `AdministradorForum` (
  `id_adm` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `NomeProduto` varchar(100) NOT NULL,
  `ValorProduto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_cliente`, `NomeProduto`, `ValorProduto`) VALUES
(15, 3, 'Dipirona', '8.71'),
(16, 3, 'Dipirona', '8.12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ClienteEnderecos`
--

CREATE TABLE `ClienteEnderecos` (
  `id_endereco` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `CEP` varchar(20) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Numero` varchar(5) NOT NULL,
  `Complemento` varchar(100) NOT NULL,
  `EnderecoCompleto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ClienteEnderecos`
--

INSERT INTO `ClienteEnderecos` (`id_endereco`, `id_cliente`, `Estado`, `Cidade`, `Bairro`, `CEP`, `Endereco`, `Numero`, `Complemento`, `EnderecoCompleto`) VALUES
(6, 3, 'Rio De Janeiro', 'Rio De Janeiro', 'Campo Grande', '23075-045', 'Rua Landulfo Alvez', '71', 'Apartamento 201 Fundos', 'Rio De Janeiro - Rio De Janeiro - Campo Grande - 23075-045 - Rua Landulfo Alvez 71 Apartamento 201 Fundos'),
(7, 3, 'Rio De Janeiro', 'Rio De Janeiro', 'Campo Grande', '23075-006', 'Estrada Do Tingui', '473', 'Bloco G', 'Rio De Janeiro - Rio De Janeiro - Campo Grande - 23075-006 - Estrada Do Tingui 473 Bloco G');

-- --------------------------------------------------------

--
-- Estrutura da tabela `FormRegisterAfilial`
--

CREATE TABLE `FormRegisterAfilial` (
  `id_afiliado` int(10) NOT NULL,
  `path_arquivo` varchar(100) NOT NULL,
  `NomeFantasia` varchar(70) NOT NULL,
  `RazaoSocial` varchar(70) NOT NULL,
  `Representante` varchar(70) NOT NULL,
  `CNPJ` varchar(30) NOT NULL,
  `NumeroContatoAfiliado` varchar(15) NOT NULL,
  `EmailAfiliado` varchar(70) NOT NULL,
  `SenhaAfiliado` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `FormRegisterAfilial`
--

INSERT INTO `FormRegisterAfilial` (`id_afiliado`, `path_arquivo`, `NomeFantasia`, `RazaoSocial`, `Representante`, `CNPJ`, `NumeroContatoAfiliado`, `EmailAfiliado`, `SenhaAfiliado`) VALUES
(1, 'FotosPerfil/63508ce8d34b2.jpg', 'Drogaria Do Povo', 'Drogaria Do Povo - RazÃ£o', 'Francisco JosÃ©', '211.920/00000.21', '21966568281', 'drograriadopovo@gmail.com', '123qwe.alfa'),
(2, 'FotosPerfil/6351dcee29ce0.png', 'Drogas Raia', 'Drogarias Raia - RazÃ£o', 'Febatista Craft', '211.920/00000.22', '21966568251', 'drograriasraia@gmail.com', '123qwe.alfa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `FormRegisterCliente`
--

CREATE TABLE `FormRegisterCliente` (
  `NomeCliente` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPFCliente` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumeroContatoCliente` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EnderecoCliente` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_arquivo` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailCliente` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SenhaCliente` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `FormRegisterCliente`
--

INSERT INTO `FormRegisterCliente` (`NomeCliente`, `CPFCliente`, `NumeroContatoCliente`, `EnderecoCliente`, `path_arquivo`, `EmailCliente`, `SenhaCliente`, `id`) VALUES
('Lukas Gabriel', '1231231231', '21966569534', 'Rua Sargento Manoel 11', 'FotosPerfil/634f4580069bb.png', 'projectalfa22@gmail.com', '123qwe.alfa', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `FormRegisterProfissional`
--

CREATE TABLE `FormRegisterProfissional` (
  `id_profissional` int(10) NOT NULL,
  `NomeProfissional` varchar(100) NOT NULL,
  `CPFProfissional` varchar(15) NOT NULL,
  `path_arquivo` varchar(100) NOT NULL,
  `ContatoProfissional` varchar(20) NOT NULL,
  `CRMProfissional` varchar(30) NOT NULL,
  `InstitutoProfissional` varchar(100) NOT NULL,
  `AreaProfissional` varchar(50) NOT NULL,
  `EmailProfissional` varchar(100) NOT NULL,
  `SenhaProfissional` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `FormRegisterProfissional`
--

INSERT INTO `FormRegisterProfissional` (`id_profissional`, `NomeProfissional`, `CPFProfissional`, `path_arquivo`, `ContatoProfissional`, `CRMProfissional`, `InstitutoProfissional`, `AreaProfissional`, `EmailProfissional`, `SenhaProfissional`) VALUES
(1, 'Sergio Busquets', '123-456-789-10', 'FotosPerfil/63561b13f283c.jpg', '123456789', '123456789', 'Peri', 'Urologista', '12@gmail.com', '123qwe.alfa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_q`
--

CREATE TABLE `forum_q` (
  `id` int(4) NOT NULL,
  `foto_perfil` varchar(200) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `imagem` varchar(100) DEFAULT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `AreaProfissional` varchar(100) DEFAULT NULL,
  `InstitutoProfissional` varchar(100) DEFAULT NULL,
  `CRMProfissional` varchar(100) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forum_q`
--

INSERT INTO `forum_q` (`id`, `foto_perfil`, `topic`, `imagem`, `detail`, `name`, `AreaProfissional`, `InstitutoProfissional`, `CRMProfissional`, `datetime`) VALUES
(1, 'FotosPerfil/634f4580069bb.png', 'a', NULL, 'a', 'Lukas Gabriel', NULL, NULL, NULL, '2022-10-24 01:05:29'),
(2, 'FotosPerfil/634f4580069bb.png', 'Mais um teste', NULL, 'asdasdasd', 'Lukas Gabriel', NULL, NULL, NULL, '2022-10-24 01:13:59'),
(3, 'FotosPerfil/634f4580069bb.png', 'Mais um teste', 'ImagensForum/635611cb718d5.jpg', 'eae', 'Lukas Gabriel', NULL, NULL, NULL, '2022-10-24 01:17:15'),
(4, 'FotosPerfil/63561b13f283c.jpg', 'a', NULL, 'a', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 04:24:15'),
(5, 'FotosPerfil/63561b13f283c.jpg', 'Mais um teste', NULL, 'asd', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 04:54:09'),
(6, 'FotosPerfil/63561b13f283c.jpg', 'asdasdasdasd', NULL, 'asdasd', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 04:59:10'),
(7, 'FotosPerfil/63561b13f283c.jpg', 'asd', NULL, 'asd', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 05:06:56'),
(8, 'FotosPerfil/63561b13f283c.jpg', 'a', NULL, 'a', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 05:08:34'),
(9, 'FotosPerfil/63561b13f283c.jpg', 'a', NULL, 'a', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 05:10:34'),
(10, 'FotosPerfil/63561b13f283c.jpg', 'asda', NULL, 'asdasd', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 05:17:09'),
(11, 'FotosPerfil/63561b13f283c.jpg', 'testedenovo', 'ImagensForum/63564af37828c.png', 'aaaa', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 05:21:07'),
(12, 'FotosPerfil/63561b13f283c.jpg', 'asadasd', NULL, 'gggg', 'Sergio Busquets', 'Urologista', 'Peri', '123456789', '2022-10-24 05:23:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_res`
--

CREATE TABLE `forum_res` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_imagem` varchar(100) DEFAULT NULL,
  `foto_perfil` varchar(200) NOT NULL,
  `a_answer` longtext NOT NULL,
  `a_area` varchar(100) DEFAULT NULL,
  `a_instituto` varchar(100) DEFAULT NULL,
  `a_crm` varchar(100) DEFAULT NULL,
  `a_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forum_res`
--

INSERT INTO `forum_res` (`question_id`, `a_id`, `a_name`, `a_imagem`, `foto_perfil`, `a_answer`, `a_area`, `a_instituto`, `a_crm`, `a_datetime`) VALUES
(3, 1, 'Lukas Gabriel', NULL, 'FotosPerfil/634f4580069bb.png', 'ea', NULL, NULL, NULL, '2022-10-24 01:47:04'),
(3, 2, 'Lukas Gabriel', 'ImagensForum/63561aa471d34.jpg', 'FotosPerfil/634f4580069bb.png', 'eae boboa', NULL, NULL, NULL, '2022-10-24 01:55:00'),
(3, 3, 'Sergio Busquets', 'ImagensForum/63561b2b6dbec.jpg', 'FotosPerfil/63561b13f283c.jpg', 'ABC', 'Urologista', 'Peri', '123456789', '2022-10-24 01:57:15'),
(3, 4, 'Sergio Busquets', 'ImagensForum/63561b2eb4b3e.jpg', 'FotosPerfil/63561b13f283c.jpg', 'ABC', 'Urologista', 'Peri', '123456789', '2022-10-24 01:57:18'),
(3, 5, 'Sergio Busquets', NULL, 'FotosPerfil/63561b13f283c.jpg', 'asdadasdads', 'Urologista', 'Peri', '123456789', '2022-10-24 01:57:57'),
(4, 1, 'Sergio Busquets', 'ImagensForum/63563fa6a4304.png', 'FotosPerfil/63561b13f283c.jpg', 'tudo bom', 'Urologista', 'Peri', '123456789', '2022-10-24 04:32:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id_pagamento` int(10) NOT NULL,
  `id_afiliado` int(10) NOT NULL,
  `Produtos` varchar(1000) NOT NULL,
  `TipoDePagamento` varchar(50) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `NomeCliente` varchar(100) NOT NULL,
  `Situacao` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id_pagamento`, `id_afiliado`, `Produtos`, `TipoDePagamento`, `Endereco`, `NomeCliente`, `Situacao`, `date`) VALUES
(1, 0, 'Dipirona', 'Dinheiro', 'Rua Sargento Manoel 11', 'Lukas Gabriel', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(10) NOT NULL,
  `id_Fornecedor` varchar(10) NOT NULL,
  `foto_perfil` varchar(100) NOT NULL,
  `NomeProduto` varchar(100) NOT NULL,
  `FornecedorProduto` varchar(60) NOT NULL,
  `DescricaoProduto` varchar(200) NOT NULL,
  `ValorProduto` varchar(10) NOT NULL,
  `QuantidadeProduto` int(20) NOT NULL,
  `path_arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_Fornecedor`, `foto_perfil`, `NomeProduto`, `FornecedorProduto`, `DescricaoProduto`, `ValorProduto`, `QuantidadeProduto`, `path_arquivo`) VALUES
(5, '1', 'FotosPerfil/63508ce8d34b2.jpg', 'Dipirona', 'Drogaria Do Povo', 'Remedio exelente para combater mal estar , como dor de cabeÃ§a colica e entre outros', '8.71', 20, 'FotosProdutos/6356e0d771095.jpg'),
(6, '2', 'FotosPerfil/6351dcee29ce0.png', 'Dipirona', 'Drogas Raia', 'Remedio exelente para combater mal estar , como dor de cabeÃ§a colica e entre outros', '8.12', 10, 'FotosProdutos/6356e1252788a.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `AdministradorForum`
--
ALTER TABLE `AdministradorForum`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices para tabela `ClienteEnderecos`
--
ALTER TABLE `ClienteEnderecos`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices para tabela `FormRegisterAfilial`
--
ALTER TABLE `FormRegisterAfilial`
  ADD PRIMARY KEY (`id_afiliado`);

--
-- Índices para tabela `FormRegisterCliente`
--
ALTER TABLE `FormRegisterCliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `FormRegisterProfissional`
--
ALTER TABLE `FormRegisterProfissional`
  ADD PRIMARY KEY (`id_profissional`);

--
-- Índices para tabela `forum_q`
--
ALTER TABLE `forum_q`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `forum_res`
--
ALTER TABLE `forum_res`
  ADD KEY `a_id` (`a_id`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `ClienteEnderecos`
--
ALTER TABLE `ClienteEnderecos`
  MODIFY `id_endereco` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `FormRegisterAfilial`
--
ALTER TABLE `FormRegisterAfilial`
  MODIFY `id_afiliado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `FormRegisterCliente`
--
ALTER TABLE `FormRegisterCliente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `FormRegisterProfissional`
--
ALTER TABLE `FormRegisterProfissional`
  MODIFY `id_profissional` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `forum_q`
--
ALTER TABLE `forum_q`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id_pagamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
