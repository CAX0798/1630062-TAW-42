

DROP DATABASE IF EXISTS ejercicio2;

CREATE DATABASE IF NOT EXISTS ejercicio2;

USE ejercicio2;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `carrera` (
  `id_carrera` int(3) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `carrera` (`id_carrera`, `nombre`) VALUES
(2, 'TI');

CREATE TABLE `estudiante` (
  `id` int(3) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `promedio` int(4) NOT NULL,
  `edad` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_uni` int(3) NOT NULL,
  `id_carrera` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `universidad` (
  `id_uni` int(3) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `universidad` (`id_uni`, `nombre`) VALUES
(1, 'tec');

ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);


ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_uni` (`id_uni`),
  ADD KEY `id_carrera` (`id_carrera`);


ALTER TABLE `universidad`
  ADD PRIMARY KEY (`id_uni`);


ALTER TABLE `carrera`
  MODIFY `id_carrera` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `estudiante`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `universidad`
  MODIFY `id_uni` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`),
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`id_uni`) REFERENCES `universidad` (`id_uni`);
COMMIT;
