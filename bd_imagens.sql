

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `teste_sql` (
  `ID` int(11) NOT NULL,
  `SRC` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `TAG` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `teste_sql` (`ID`, `SRC`, `Nome`, `TAG`) VALUES
(3, './Img_Strg/Varredura.png', 'Microscópio Varredura Esquema', 'Esquema');



ALTER TABLE `teste_sql`
  ADD PRIMARY KEY (`ID`);


--
ALTER TABLE `teste_sql`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

