-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21-Ago-2017 às 21:56
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samartine`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `code` int(5) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`code`, `nome`, `descricao`) VALUES
(1, 'test', ''),
(2, 'tr', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fator_facilitador`
--

CREATE TABLE `fator_facilitador` (
  `code_fator` varchar(16) NOT NULL,
  `fk_code_meta` varchar(16) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fator_facilitador`
--

INSERT INTO `fator_facilitador` (`code_fator`, `fk_code_meta`, `descricao`) VALUES
('FF-P1-01', 'MAE-P1-02', 'Compromisso formal dos executivos de negócios na elaboração do planejamento estratégico de TI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fator_inibidor`
--

CREATE TABLE `fator_inibidor` (
  `code_fator` varchar(16) NOT NULL,
  `fk_meta_code` varchar(16) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fator_inibidor`
--

INSERT INTO `fator_inibidor` (`code_fator`, `fk_meta_code`, `descricao`) VALUES
('FI-P1-01', 'MAE-P1-02', 'Falta de parcerias e relações mais próximas dos gestores de negócios com os gestores de TI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `fk_email_user` varchar(150) NOT NULL,
  `MAEP101` int(11) NOT NULL,
  `MAEP102` int(11) NOT NULL,
  `MAEP103` int(11) NOT NULL,
  `MAEP104` int(11) NOT NULL,
  `MAEP105` int(11) NOT NULL,
  `MAEP201` int(11) NOT NULL,
  `MAEP202` int(11) NOT NULL,
  `MAEP203` int(11) NOT NULL,
  `MAEP204` int(11) NOT NULL,
  `MAEP205` int(11) NOT NULL,
  `MAEO101` int(11) NOT NULL,
  `MAEO102` int(11) NOT NULL,
  `MAEO103` int(11) NOT NULL,
  `MAEO104` int(11) NOT NULL,
  `MAEO105` int(11) NOT NULL,
  `MAEO201` int(11) NOT NULL,
  `MAEO202` int(11) NOT NULL,
  `MAEO203` int(11) NOT NULL,
  `MAEO204` int(11) NOT NULL,
  `MAEO205` int(11) NOT NULL,
  `MAEO301` int(11) NOT NULL,
  `MAEO302` int(11) NOT NULL,
  `MAEO303` int(11) NOT NULL,
  `MAEO304` int(11) NOT NULL,
  `MAEO305` int(11) NOT NULL,
  `MAEO401` int(11) NOT NULL,
  `MAEO402` int(11) NOT NULL,
  `MAEO403` int(11) NOT NULL,
  `MAEO404` int(11) NOT NULL,
  `MAEO405` int(11) NOT NULL,
  `MAEO501` int(11) NOT NULL,
  `MAEO502` int(11) NOT NULL,
  `MAEO503` int(11) NOT NULL,
  `MAEO504` int(11) NOT NULL,
  `MAEO505` int(11) NOT NULL,
  `MAED101` int(11) NOT NULL,
  `MAED102` int(11) NOT NULL,
  `MAED103` int(11) NOT NULL,
  `MAED104` int(11) NOT NULL,
  `MAED105` int(11) NOT NULL,
  `MAED201` int(11) NOT NULL,
  `MAED202` int(11) NOT NULL,
  `MAED203` int(11) NOT NULL,
  `MAED204` int(11) NOT NULL,
  `MAED205` int(11) NOT NULL,
  `MAED301` int(11) NOT NULL,
  `MAED302` int(11) NOT NULL,
  `MAED303` int(11) NOT NULL,
  `MAED304` int(11) NOT NULL,
  `MAED305` int(11) NOT NULL,
  `MAEC101` int(11) NOT NULL,
  `MAEC102` int(11) NOT NULL,
  `MAEC103` int(11) NOT NULL,
  `MAEC104` int(11) NOT NULL,
  `MAEC105` int(11) NOT NULL,
  `MAEC201` int(11) NOT NULL,
  `MAEC202` int(11) NOT NULL,
  `MAEC203` int(11) NOT NULL,
  `MAEC204` int(11) NOT NULL,
  `MAEC205` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`id`, `fk_email_user`, `MAEP101`, `MAEP102`, `MAEP103`, `MAEP104`, `MAEP105`, `MAEP201`, `MAEP202`, `MAEP203`, `MAEP204`, `MAEP205`, `MAEO101`, `MAEO102`, `MAEO103`, `MAEO104`, `MAEO105`, `MAEO201`, `MAEO202`, `MAEO203`, `MAEO204`, `MAEO205`, `MAEO301`, `MAEO302`, `MAEO303`, `MAEO304`, `MAEO305`, `MAEO401`, `MAEO402`, `MAEO403`, `MAEO404`, `MAEO405`, `MAEO501`, `MAEO502`, `MAEO503`, `MAEO504`, `MAEO505`, `MAED101`, `MAED102`, `MAED103`, `MAED104`, `MAED105`, `MAED201`, `MAED202`, `MAED203`, `MAED204`, `MAED205`, `MAED301`, `MAED302`, `MAED303`, `MAED304`, `MAED305`, `MAEC101`, `MAEC102`, `MAEC103`, `MAEC104`, `MAEC105`, `MAEC201`, `MAEC202`, `MAEC203`, `MAEC204`, `MAEC205`) VALUES
(1, 'root@roo', 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1),
(2, 'root@roo', 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1),
(3, 'root@roo', 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1),
(4, 'root@roo', 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1),
(5, 'root@roo', 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1),
(6, 'root@roo', 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1, 1, 2, 3, 4, 5, 5, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `metas`
--

CREATE TABLE `metas` (
  `code_meta` varchar(16) NOT NULL,
  `descricao` text NOT NULL,
  `criterio` varchar(200) NOT NULL,
  `dimensao` varchar(200) NOT NULL,
  `recurso` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `metas`
--

INSERT INTO `metas` (`code_meta`, `descricao`, `criterio`, `dimensao`, `recurso`) VALUES
('MAE-P1-01', 'Os gestores de negócios possuem capacidade/habilidades para participar da definição do\r\nCapacidade planejamento estratégico de TI.', 'Capacidade', 'Estratégica, cultura', 'Objetivos de TI, gestores de negócios'),
('MAE-P1-02', 'Os gestores de negócios são compromissados/motivados com a definição do planejamento estratégico de TI.', 'Compromisso', 'Estratégica, cultural', 'Objetivos de TI, gestores de negócios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `genero` int(1) NOT NULL,
  `nivel_academico` int(1) NOT NULL,
  `organizacao` int(1) NOT NULL,
  `tempo_organizacao` int(1) NOT NULL,
  `atuacao` int(1) NOT NULL,
  `tempo_experiencia` int(1) NOT NULL,
  `code_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`nome`, `email`, `password`, `genero`, `nivel_academico`, `organizacao`, `tempo_organizacao`, `atuacao`, `tempo_experiencia`, `code_fk`) VALUES
('rerer', 'root@roo', 'wqeqe', 1, 1, 1, 1, 1, 1, 1),
('tttt', 'root@root', '36392274', 1, 2, 2, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `fator_facilitador`
--
ALTER TABLE `fator_facilitador`
  ADD PRIMARY KEY (`code_fator`),
  ADD KEY `fk_code_meta` (`fk_code_meta`);

--
-- Indexes for table `fator_inibidor`
--
ALTER TABLE `fator_inibidor`
  ADD PRIMARY KEY (`code_fator`),
  ADD KEY `fk_meta_code` (`fk_meta_code`);

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`fk_email_user`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`code_meta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `code_fk` (`code_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fator_facilitador`
--
ALTER TABLE `fator_facilitador`
  ADD CONSTRAINT `fator_facilitador_ibfk_1` FOREIGN KEY (`fk_code_meta`) REFERENCES `metas` (`code_meta`);

--
-- Limitadores para a tabela `fator_inibidor`
--
ALTER TABLE `fator_inibidor`
  ADD CONSTRAINT `fator_inibidor_ibfk_1` FOREIGN KEY (`fk_meta_code`) REFERENCES `metas` (`code_meta`);

--
-- Limitadores para a tabela `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`fk_email_user`) REFERENCES `user` (`email`);

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `code_fk` FOREIGN KEY (`code_fk`) REFERENCES `empresa` (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
