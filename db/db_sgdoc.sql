-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2017 às 14:32
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sgdoc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissaotipo`
--

CREATE TABLE `permissaotipo` (
  `ID` int(11) NOT NULL,
  `idPermissao` int(11) NOT NULL,
  `idTIpo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `ID_Permissao` int(2) NOT NULL,
  `Nome` int(100) NOT NULL,
  `Comentario` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipousuario`
--

CREATE TABLE `tipousuario` (
  `ID_Tipo` int(2) NOT NULL,
  `Nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `Cpf` int(11) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Senha` varchar(32) NOT NULL,
  `Tipo` int(2) NOT NULL,
  `Telefone` int(12) NOT NULL,
  `Endereco` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissaotipo`
--
ALTER TABLE `permissaotipo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idPermissao` (`idPermissao`),
  ADD KEY `idTIpo` (`idTIpo`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`ID_Permissao`);

--
-- Indexes for table `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`ID_Tipo`),
  ADD KEY `ID_Tipo` (`ID_Tipo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `Tipo` (`Tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissaotipo`
--
ALTER TABLE `permissaotipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `ID_Permissao` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `ID_Tipo` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `permissaotipo`
--
ALTER TABLE `permissaotipo`
  ADD CONSTRAINT `permissaotipo_ibfk_1` FOREIGN KEY (`idPermissao`) REFERENCES `permissoes` (`ID_Permissao`),
  ADD CONSTRAINT `permissaotipo_ibfk_2` FOREIGN KEY (`idTIpo`) REFERENCES `tipousuario` (`ID_Tipo`);

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Tipo`) REFERENCES `tipousuario` (`ID_Tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
