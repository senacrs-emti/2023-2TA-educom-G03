-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2023 às 04:57
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
-- Banco de dados: `banco_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste_sql`
--

CREATE TABLE `teste_sql` (
  `ID` int(11) NOT NULL,
  `SRC` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `TAG` varchar(45) NOT NULL,
  `Descri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `teste_sql`
--

INSERT INTO `teste_sql` (`ID`, `SRC`, `Nome`, `TAG`, `Descri`) VALUES
(3, './Img_Strg/ImgsBD/Varredura.png', 'Microscópio Varredura Esquema', 'Esquema*Varredura', 'Esquema de microscópio de varredura por sonda.'),
(4, './Img_Strg/ImgsBD/Optico.png', 'Microscópio Óptico Esquema', 'Esquema*Óptico', 'Esquema de microscópio óptico.'),
(5, './Img_Strg/ImgsBD/Eletro.png', 'Microscópio Eletrônico Esquema', 'Esquema*Eletrônico', 'Esquema de microscópio eletrônico.'),
(6, './Img_Strg/ImgsBD/Fluor.png', 'Microscópio Fluorescência Esquema', 'Esquema*Fluor', 'Esquema de microscópio de fluorescência.'),
(7, './Img_Strg/ImgsBD/41823.jpg', 'Desmid Micrasterias Divisão Celular', 'Óptico*Vegetal', 'Alga verde em divisão. Simetria Bilateral.'),
(8, './Img_Strg/ImgsBD/desmidlarge.jpg', 'Desmid Micrasterias Microscópio Óptico', 'Óptico*Vegetal', 'Alga verde observada por microscópio óptico.'),
(9, './Img_Strg/ImgsBD/paramecium.jpg', 'Protozoário Paramecium Óptico', 'Óptico*Protozoários', 'Protozoário do gênero Paramecium observado em microscópio óptico.'),
(10, './Img_Strg/ImgsBD/38950.jpg', 'Fungi Aspergillus Óptico', 'Fungo*Óptico', 'Fungo do gênero Aspergillus observado em microscópio óptico.'),
(11, './Img_Strg/ImgsBD/35381.jpg', 'Cromossomo Humano Feminino', 'Humano*Eletrônico', 'Cromossomo humano feminino observado por microscópio eletrônico.'),
(12, './Img_Strg/ImgsBD/40986.jpg', 'Protozoário Paramecium Osmose Óptico', 'Óptico*Protozoário', 'Protozoário do gênero Paramecium transportando água, absorvida por osmose, por vacúolos.'),
(13, './Img_Strg/ImgsBD/54773.jpg', 'Células Humanas Fluorescência', 'Humano*Fluor', 'Células humanas com corantes fluorescentes.'),
(14, './Img_Strg/ImgsBD/38915.jpg', 'Cromossomo Humano Varredura', 'Varredura*Humano', 'Cromossomo humano observado por microscópio de varredura.'),
(15, './Img_Strg/ImgsBD/38987.jpg', 'Cromossomos Humanos Varredura', 'Varredura*Humano', 'Cromossomos humanos observados por microscópio de varredura.'),
(16, './Img_Strg/ImgsBD/10276.jpg', 'Fibroblastos Roedor Fluorescente', 'Tecido*Fluor*Animal', 'Fibroblastos de rato observados coloridos com corante fluorescente.'),
(17, './Img_Strg/ImgsBD/15810.jpg', 'Embriões Ouriço Mitose', 'Óptico*Célula*Animal', 'Embrião de ouriço-do-mar em processo de mitose observado por microscópio óptico.'),
(18, './Img_Strg/ImgsBD/41_512v.jpg', 'Dendrito Roedor Fluorescente', 'Fluor*Célula*Animal', 'Dendrito sistema nervoso de um rato observado por microscópio fluorescente.'),
(19, './Img_Strg/ImgsBD/48501.jpg', 'Herpetosiphon aurantiacus Eletrônico', 'Eletrônico*Bactéria', 'Bactérias da família Herpetosiphonaceae observadas por microscópio eletrônico.'),
(20, './Img_Strg/ImgsBD/40657.jpg', 'Diatomácea Eletrônico', 'Estrutura*Animal', 'Estrutura da superfície de uma diatomácea.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `teste_sql`
--
ALTER TABLE `teste_sql`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `teste_sql`
--
ALTER TABLE `teste_sql`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
