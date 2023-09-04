-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Set-2023 às 14:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `prato_id` int(11) NOT NULL,
  `prato_restaurante_id` int(11) NOT NULL,
  `prato_nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `prato_descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `prato_preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`prato_id`, `prato_restaurante_id`, `prato_nome`, `prato_descricao`, `prato_preco`) VALUES
(2, 1, 'Lanche 20', 'Pão, Carne, Queijo, Salada', '9.00'),
(3, 2, 'Marmita 1', 'Arroz, Feijão, Carne Bovina, Salada', '13.00'),
(4, 2, 'Marmita 2', 'Arroz, Feijão, Frango, Salada', '12.00'),
(5, 3, 'Sushi 1', 'Sushi de Salmão com Cream Cheese', '3.00'),
(6, 3, 'Sushi 2', 'Sushi de Salmão Hot Roll', '3.50'),
(7, 4, 'Pizza 1', 'Massa de tomate, Queijo, Calabresa', '20.00'),
(8, 4, 'Pizza 2', 'Massa de tomate, Queijo, Frango e Catupiry', '22.00'),
(10, 1, 'Lanche 4', 'Pão, Carne, Queijo, Salada, Bacon, Calabresa', '17.00'),
(11, 2, 'Marmita 3', 'Arroz, Feijão, Pernil, Salada', '13.00'),
(12, 5, 'Nachos 1', 'Nachos, Cheddar', '15.00'),
(13, 5, 'Taco 1', 'Taco de Chilli com molho apimentado', '15.00'),
(14, 6, 'Coxinha 1', 'Coxinha de Peito de Franco com Catupiry', '5.00'),
(15, 6, 'Coxinha 2', 'Coxinha de Coxa de Frango com Cheddar', '6.00'),
(16, 7, 'Bolo 1', 'Bolo de Floresta Negra', '15.00'),
(17, 7, 'Bolo 2', 'Bolo de Morango com Creme Branco', '15.00'),
(18, 7, 'Bolo 3', 'Bolo de Brigadeiro e Beijinho', '17.00'),
(22, 1, 'Lanche 5', 'Pão, Frango, Queijo, Salada', '10.00'),
(26, 1, 'Lanche 6', 'Pão, Linguiça, Queijo, Salada', '15.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurantes`
--

CREATE TABLE `restaurantes` (
  `restaurante_id` int(11) NOT NULL,
  `restaurante_nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `restaurante_descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `restaurante_endereco` varchar(255) COLLATE utf8_bin NOT NULL,
  `restaurante_telefone` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `restaurantes`
--

INSERT INTO `restaurantes` (`restaurante_id`, `restaurante_nome`, `restaurante_descricao`, `restaurante_endereco`, `restaurante_telefone`) VALUES
(1, 'Lanches da Vovó', 'Lanches', 'R. Artur Machado, 410 - Estados Unidos', '(34) 3346-9966'),
(2, 'Restaurante Coma Bem', 'Brasileira', 'Av. Gabriela Castro Cunha, 450 - Vila Olimpica', '(34) 3317-2044'),
(3, 'Japa\'s Bar', 'Japonesa', 'Rua Trinidad, 125 - Boa Vista', '(34) 3313-5207'),
(4, 'Hot Pizza', 'Pizzaria', 'Av. Leopoldino de Oliveira, 4113 - Estados Unidos', '(34) 3312-1594'),
(5, 'Nachos do Neto', 'Comida Mexicana', 'R. Cap. Batista Machado, 582 - Boa Vista', '(34) 3312-1388'),
(6, 'Coxinha Divina', 'Frituras e Lanches', 'Av. Parque Das Laranjeiras, 507 - Parque das Laranjeiras', '(34) 3334-7250'),
(7, 'Maria\'s Cake', 'Bolos e Tortas', 'Av. Leopoldino de Oliveira, 4113 - Estados Unidos', '(34) 3321-6400');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_senha` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_senha`, `user_tipo`) VALUES
(1, 'Administrador', 'adm@email.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Cliente', 'cliente@email.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`prato_id`);

--
-- Índices para tabela `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`restaurante_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `prato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `restaurante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
