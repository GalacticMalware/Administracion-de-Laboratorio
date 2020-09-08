-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2018 a las 09:27:32
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `Nombre_Materia` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Materia_idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `Nombre_Materia`, `Contrasena`, `Materia_idMateria`) VALUES
(1, 'fisica', 'fis2018', 1),
(2, 'quimica', 'qui2018', 2),
(3, 'principios electricos', 'prin2018', 3),
(4, 'arquitectura de computadora', 'arqui2018', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `idcalificacion` int(11) NOT NULL,
  `Tipo` varchar(200) DEFAULT NULL,
  `Tamaño` varchar(200) DEFAULT NULL,
  `Nombre_archivo` varchar(200) DEFAULT NULL,
  `Materia_calificacion_idcalificacion` int(11) NOT NULL,
  `Materia_idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idMateria`, `Nombre`) VALUES
(1, 'fisica'),
(2, 'quimica'),
(3, 'principios'),
(4, 'arquitectura de computadoras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdf`
--

CREATE TABLE `pdf` (
  `idPDF` int(100) NOT NULL,
  `idMateriaNumero` int(100) NOT NULL,
  `numero_unidad` int(200) NOT NULL,
  `numero_practica` int(200) NOT NULL,
  `Titulo` varchar(200) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Tamanio` varchar(200) NOT NULL,
  `Tipo` varchar(200) NOT NULL,
  `Nombre_Archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pdf`
--

INSERT INTO `pdf` (`idPDF`, `idMateriaNumero`, `numero_unidad`, `numero_practica`, `Titulo`, `Descripcion`, `Tamanio`, `Tipo`, `Nombre_Archivo`) VALUES
(1, 2, 1, 1, 'kjdsn', 'ksjhdfb', '780894', 'application/pdf', 'Cedula_MOGD970226HCSRMN04.pdf'),
(2, 2, 1, 1, 'adsas', 'sdasd', '90910', 'application/pdf', '6342583.pdf'),
(3, 1, 1, 1, 'HolaMundo', 'Traer bATA', '90910', 'application/pdf', '6342583.pdf'),
(4, 2, 2, 1, 'kajsndas', 'dlkjansdkjna', '90910', 'application/pdf', '6342583.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica`
--

CREATE TABLE `practica` (
  `idPractica` int(11) NOT NULL,
  `Numero_practica` int(11) NOT NULL,
  `Titulo` varchar(200) DEFAULT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Tamanio` int(200) UNSIGNED DEFAULT NULL,
  `Tipo` varchar(200) DEFAULT NULL,
  `Nombre_Archivo` varchar(200) NOT NULL,
  `Unidad_idUnidad` int(11) NOT NULL,
  `Unidad_Materia_idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `idUnidad` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Materia_idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Nombre_Materia` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Materia_idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre_Materia`, `Contrasena`, `Materia_idMateria`) VALUES
(1, 'fisica', 'fisica2018', 1),
(2, 'quimica', 'quimica2018', 2),
(3, 'principios electricos', 'principios2018', 3),
(4, 'arquitectura de computadora', 'arquitectura2018', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`,`Materia_idMateria`),
  ADD KEY `fk_Administrador_Materia1_idx` (`Materia_idMateria`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`idcalificacion`,`Materia_calificacion_idcalificacion`),
  ADD KEY `fk_calificacion_Materia1_idx` (`Materia_idMateria`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indices de la tabla `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`idPDF`),
  ADD KEY `idMateriaNumero` (`idMateriaNumero`);

--
-- Indices de la tabla `practica`
--
ALTER TABLE `practica`
  ADD PRIMARY KEY (`idPractica`,`Unidad_idUnidad`,`Unidad_Materia_idMateria`),
  ADD KEY `fk_Practica_Unidad1_idx` (`Unidad_idUnidad`,`Unidad_Materia_idMateria`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`idUnidad`,`Materia_idMateria`),
  ADD KEY `fk_Unidad_Materia_idx` (`Materia_idMateria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`,`Materia_idMateria`),
  ADD KEY `fk_Usuario_Materia1_idx` (`Materia_idMateria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `idcalificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pdf`
--
ALTER TABLE `pdf`
  MODIFY `idPDF` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `practica`
--
ALTER TABLE `practica`
  MODIFY `idPractica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_Administrador_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `fk_calificacion_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pdf`
--
ALTER TABLE `pdf`
  ADD CONSTRAINT `pdf_ibfk_1` FOREIGN KEY (`idMateriaNumero`) REFERENCES `materia` (`idMateria`);

--
-- Filtros para la tabla `practica`
--
ALTER TABLE `practica`
  ADD CONSTRAINT `fk_Practica_Unidad1` FOREIGN KEY (`Unidad_idUnidad`,`Unidad_Materia_idMateria`) REFERENCES `unidad` (`idUnidad`, `Materia_idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD CONSTRAINT `fk_Unidad_Materia` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
