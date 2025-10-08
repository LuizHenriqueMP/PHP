-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/10/2025 às 14:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `navegadores`
--

CREATE TABLE `navegadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `url_foto` varchar(255) NOT NULL,
  `votos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `navegadores`
--

INSERT INTO `navegadores` (`id`, `nome`, `url_foto`, `votos`) VALUES
(1, 'Firefox', 'https://www.firefox.com/media/protocol/img/logos/firefox/browser/logo.eb1324e44442.svg', 0),
(2, 'Chrome', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Google_Chrome_icon_%28February_2022%29.svg/2048px-Google_Chrome_icon_%28February_2022%29.svg.png', 0),
(4, 'Edge', 'https://images-eds-ssl.xboxlive.com/image?url=4rt9.lXDC4H_93laV1_eHM0OYfiFeMI2p9MWie0CvL99U4GA1gf6_kayTt_kBblFwHwo8BW8JXlqfnYxKPmmBUbEzDj92PeDmMEzd7ZShyg3pQwE2iRAmkXoQI1fFwGHXjNAx_z1FK1qagm1cWb7Sd.1BdKNNfMKX.JULuKI6_o-&format=source&h=210', 0),
(5, 'Opera', 'https://play-lh.googleusercontent.com/izAgZJl2jf9HOYMLn-iDt64jvKY9ldEK_CH4KnqqKW4wCMhcgDvN9wYfVfaeiQ51L5k1=w240-h480-rw', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'paul@lo.com', '$2y$10$TeRPwyz/xWQBv.fKThxiv.wy1Vu4T3DO6wovVFcoQmfJtyBGdJX0C'),
(2, 'luiz@luiz.com', '$2y$10$Hj7Bwe9LN7buq5hxLBymf.tMBlOAr0n0jecxkmTRpZbruDl8XOqdy'),
(3, 'luiz@gmail.com', '$2y$10$XoEXjz7gHSLCs22j2.T5gu.rbxKF8mUP7fWMLDxFHCymlR1Sf9gqK'),
(4, 'mateus@bino', '$2y$10$N7iApYduNy7Mf.v91qFJ4OBniGWROLxdTTx2ylFeIyBdToke1BC1C');

-- --------------------------------------------------------

--
-- Estrutura para tabela `votos`
--

CREATE TABLE `votos` (
  `idVoto` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idNav` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `votos`
--

INSERT INTO `votos` (`idVoto`, `idUsuario`, `idNav`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 3, 4),
(4, 4, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `navegadores`
--
ALTER TABLE `navegadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`idVoto`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idNav` (`idNav`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `navegadores`
--
ALTER TABLE `navegadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `votos`
--
ALTER TABLE `votos`
  MODIFY `idVoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `votos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `votos_ibfk_2` FOREIGN KEY (`idNav`) REFERENCES `navegadores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
