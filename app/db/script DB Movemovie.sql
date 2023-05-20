SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `movemovie` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `movemovie`;

CREATE TABLE `boleta` (
  `Id_bol` int(10) NOT NULL,
  `FecPet` date NOT NULL,
  `EstBol` int(10) NOT NULL,
  `Id_usuario` int(10) NOT NULL,
  `Id_pelicula` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `categoria` (
  `Id_cate` int(10) NOT NULL,
  `DesCate` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `categoria` (`Id_cate`, `DesCate`) VALUES
(1, 'Aventuras'),
(2, 'Comedias'),
(3, 'Dramatica'),
(4, 'Terror'),
(5, 'Musicales'),
(6, 'Ciencia Ficcion'),
(7, 'Suspenso');


CREATE TABLE `infosnacks` (
  `Id_snack` int(10) NOT NULL,
  `Id_bol` int(10) NOT NULL,
  `CanSVen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `peliculas` (
  `Id_peli` int(10) NOT NULL,
  `NomPeli` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DesPeli` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CartelPeli` varbinary(2000) NOT NULL,
  `CanBolDis` int(10) NOT NULL,
  `HoraPeli` datetime NOT NULL,
  `PrecEnt` int(10) NOT NULL,
  `Id_categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `roles` (
  `Id_rol` int(10) NOT NULL,
  `DesRol` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `roles` (`Id_rol`, `DesRol`) VALUES
(1, 'Administrador'),
(2, 'Vendedor'),
(3, 'Cliente');


CREATE TABLE `snacks` (
  `Id_snack` int(10) NOT NULL,
  `NomSnack` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CanSnack` int(10) NOT NULL,
  `ImgAlim` varbinary(2000) NOT NULL,
  `Tipo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PreSnack` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `usuarios` (
  `Id_usu` int(10) NOT NULL,
  `NomUs` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApelUs` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelUs` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorUs` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContraUs` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FotUser` varbinary(2000) NULL,
  `Id_rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `boleta`
  ADD PRIMARY KEY (`Id_bol`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Id_pelicula` (`Id_pelicula`);

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_cate`);

ALTER TABLE `infosnacks`
  ADD KEY `Id_bol` (`Id_bol`),
  ADD KEY `Id_snack` (`Id_snack`);

ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`Id_peli`),
  ADD KEY `Id_categoria` (`Id_categoria`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id_rol`);

ALTER TABLE `snacks`
  ADD PRIMARY KEY (`Id_snack`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usu`),
  ADD KEY `Id_rol` (`Id_rol`);


ALTER TABLE `boleta`
  MODIFY `Id_bol` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `categoria`
  MODIFY `Id_cate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `peliculas`
  MODIFY `Id_peli` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `roles`
  MODIFY `Id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `snacks`
  MODIFY `Id_snack` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `Id_usu` int(10) NOT NULL AUTO_INCREMENT;


ALTER TABLE `boleta`
  ADD CONSTRAINT `boleta_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuarios` (`Id_usu`),
  ADD CONSTRAINT `boleta_ibfk_2` FOREIGN KEY (`Id_pelicula`) REFERENCES `peliculas` (`Id_peli`);

ALTER TABLE `infosnacks`
  ADD CONSTRAINT `infosnacks_ibfk_1` FOREIGN KEY (`Id_bol`) REFERENCES `boleta` (`Id_bol`),
  ADD CONSTRAINT `infosnacks_ibfk_2` FOREIGN KEY (`Id_snack`) REFERENCES `snacks` (`Id_snack`);

ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`Id_categoria`) REFERENCES `categoria` (`Id_cate`);

ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_rol`) REFERENCES `roles` (`Id_rol`);