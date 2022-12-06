-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Dez-2022 às 09:26
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_armas`
--

DROP TABLE IF EXISTS `tb_armas`;
CREATE TABLE IF NOT EXISTS `tb_armas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `armas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `preco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_armas`
--

INSERT INTO `tb_armas` (`codigo`, `armas`, `descricao`, `preco`, `foto`) VALUES
(31, 'CAL .22', 'PISTOLA TAURUS TX22 CAL. 22LR OXIDADA', '2.899,00', 'img-armas/25de008e93c9bf8cb64e8d17743de0e1.jpg'),
(51, 'CAL .22', 'PISTOLA TAURUS TX22 CAL. 22LR BEGE', '3.299,00', 'img-armas/5a437c6be663c2e941ac4d7be0db71f8.jpg'),
(32, 'CAL .22', 'PISTOLA TAURUS TX22 CAL. 22LR VERDE', '2.559,00', 'img-armas/020f3d2f4aa4224d929f2f01820cf996.jpg'),
(33, 'CAL .40', 'PISTOLA TAURUS G2C CAL. 40 INOX', '3.599,00', 'img-armas/5dbc8d954a4935351669673a76ba34cb.jpg'),
(34, 'CAL .40', 'PISTOLA TAURUS G2C CAL. 40 OXIDADA', '5.599.00', 'img-armas/bf6e8fe2afac8a86c8375e32626f2154.jpg'),
(35, 'CAL .40', 'PISTOLA TAURUS PT100 CAL. 40', '5.699,00', 'img-armas/c8a062c61c67262b1d6e14b803905830.jpg'),
(36, 'CAL .40', 'PISTOLA TAURUS TH40 COMPACTA CAL. 40', '5.799,00', 'img-armas/78a892465a7e13b5fa57979ccb48d7e9.jpg'),
(37, 'CAL .40', 'PISTOLA TAURUS TH40 FULL CAL. 40', '5.799,00', 'img-armas/20988c0b4f88a44fd36c778e3a412c07.jpg'),
(38, 'CAL .45', 'PISTOLA TAURUS PT845 CAL. 45 ACP', '6.499,00', 'img-armas/aa280a57e6a686fa1df5b5b699e0c2eb.jpg'),
(39, 'CAL .45', 'PISTOLA TAURUS PT1911 CLÁSSICA CAL. 45', '4.399,00', 'img-armas/6131e660b6e5525d343f5c00b6888643.jpg'),
(40, 'CAL .45', 'PISTOLA TAURUS PT1911 OFFICER CAL. 45', '4.799,00', 'img-armas/3fd7ac4e54f50259f001e3051867b695.jpg'),
(41, 'CAL .45', 'PISTOLA TAURUS PT1911 TATICAL CAL. 45', '4.899,00', 'img-armas/2d41701e8b155d8602e94036d73bfa76.jpg'),
(42, 'CAL .380', 'PISTOLA GLOCK G25 CAL. 380', '2.799,00', 'img-armas/fb98e5371a8090d649e10caa4b2fda36.jpg'),
(43, 'CAL .380', 'PISTOLA TAURUS PT58 HC PLUS CAL. 380', '3.599,00', 'img-armas/3a6a0668188a800896326893ca32e935.jpg'),
(44, 'CAL .380', 'PISTOLA TAURUS PT838 COMPACTA CAL. 380', '3.299,00', 'img-armas/c1706c53e2844ce02afb8392d1bd05af.jpg'),
(45, 'CAL .380', 'PISTOLA TAURUS TH380 CAL.380', '2.699,00', 'img-armas/ed6de8805bbf6ede484d74c5fb44fdee.jpg'),
(46, 'CAL 9MM', 'PISTOLA TAURUS 917C CAL. 9MM', '5.399,00', 'img-armas/8638088716bf940ba874f11c13cf2a63.jpg'),
(47, 'CAL 9MM', 'PISTOLA TAURUS G2C BEGE CAL. 9MM', '3.399,00', 'img-armas/131e01dfa0466f9ce8549cf384b44212.jpg'),
(48, 'CAL 9MM', 'PISTOLA TAURUS G2C VERDE CAL. 9MM', '3.499,00', 'img-armas/aa8df8982d1bae29e93940ad28dba97b.jpg'),
(49, 'CAL 9MM', 'PISTOLA TAURUS G3C TORO CAL. 9MM', '3.599,00', 'img-armas/6526dcb8b57c3dc93ae721f1c876df79.jpg'),
(50, 'CAL 9MM', 'PISTOLA TAURUS GX4 GRAPHENE CAL. 9MM', '5.999,00', 'img-armas/7dbe5c3110d715f462626e55730be249.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

DROP TABLE IF EXISTS `tb_cadastro`;
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`codigo`, `nome`, `email`, `cpf`, `funcao`, `senha`) VALUES
(8, 'gustavo', 'gustavo@gmail.com', '111', 'cli', '202cb962ac59075b964b07152d234b70'),
(7, 'vitor', 'hugo@01.com', '12212', 'admin', '202cb962ac59075b964b07152d234b70'),
(9, 'Rodrigo', 'rodrigo@pereira.com', '22233355594', 'cli', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Mendonça', 'mendonca@pereira.com', '12345679891', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(11, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
