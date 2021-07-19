-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2021 a las 04:01:14
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vv_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `Id` int(11) NOT NULL,
  `Primer` varchar(200) NOT NULL,
  `Segundo` varchar(200) NOT NULL,
  `Paterno` varchar(200) NOT NULL,
  `Materno` varchar(200) NOT NULL,
  `Fono` varchar(15) NOT NULL,
  `Mail` varchar(400) NOT NULL,
  `Cargo_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Id` int(11) NOT NULL,
  `Rut` varchar(15) NOT NULL,
  `Razon_Social` varchar(400) NOT NULL,
  `Giro_Comercial` varchar(400) NOT NULL,
  `Fono` varchar(20) NOT NULL,
  `Direccion` varchar(400) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Comuna` varchar(200) NOT NULL,
  `Ciudad` varchar(200) NOT NULL,
  `Representante_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_ctrlroll`
--

CREATE TABLE `empresas_ctrlroll` (
  `Id` int(11) NOT NULL,
  `CtrlRoll_Id` varchar(400) NOT NULL,
  `Rut_Emp` varchar(15) NOT NULL,
  `Nombre_Fantasia` varchar(300) NOT NULL,
  `R_Social` varchar(300) NOT NULL,
  `Giro` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

CREATE TABLE `extras` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Obervaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_cotizante`
--

CREATE TABLE `matriz_cotizante` (
  `Id` int(11) NOT NULL,
  `Empresa_Id` int(11) NOT NULL,
  `Contacto_Id` int(11) NOT NULL,
  `Natural_Id` int(11) NOT NULL,
  `Servicio_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_requerimientos`
--

CREATE TABLE `matriz_requerimientos` (
  `Id` int(11) NOT NULL,
  `EmpresaCtrlRoll_Id` int(11) NOT NULL,
  `Requerimiento_Id` int(11) NOT NULL,
  `Estado_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_servicio`
--

CREATE TABLE `matriz_servicio` (
  `Id` int(11) NOT NULL,
  `Ubicacion` varchar(150) NOT NULL,
  `Duracion` varchar(20) NOT NULL,
  `Referencia_Ubi` text NOT NULL,
  `Jornada` varchar(20) NOT NULL,
  `Turno` int(11) NOT NULL,
  `HorarioLaboral` int(11) NOT NULL,
  `TipoServicio_Id` int(11) DEFAULT NULL,
  `ServicioBasicos_Id` int(11) DEFAULT NULL,
  `Extras_Id` int(11) DEFAULT NULL,
  `Referencias_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_natural`
--

CREATE TABLE `persona_natural` (
  `Id` int(11) NOT NULL,
  `Rut` varchar(15) NOT NULL,
  `Primer` varchar(100) NOT NULL,
  `Segundo` varchar(100) NOT NULL,
  `Paterno` varchar(100) NOT NULL,
  `Materno` varchar(100) NOT NULL,
  `Clave` varchar(500) NOT NULL,
  `Fono` varchar(20) NOT NULL,
  `Direccion` varchar(500) NOT NULL,
  `Numero` varchar(50) NOT NULL,
  `Comuna` varchar(150) NOT NULL,
  `Ciudad` varchar(150) NOT NULL,
  `Mail` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE `referencia` (
  `Id` int(11) NOT NULL,
  `Nombre_Persona` varchar(100) NOT NULL,
  `Depto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante_legal`
--

CREATE TABLE `representante_legal` (
  `Id` int(11) NOT NULL,
  `Rut` varchar(15) NOT NULL,
  `Primero` varchar(400) NOT NULL,
  `Segundo` varchar(400) NOT NULL,
  `Paterno` varchar(400) NOT NULL,
  `Materno` varchar(400) NOT NULL,
  `Fono` varchar(20) NOT NULL,
  `Mail` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento`
--

CREATE TABLE `requerimiento` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Observacion` text NOT NULL,
  `Fecha_Ing` date NOT NULL,
  `Fecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_basicos`
--

CREATE TABLE `servicios_basicos` (
  `Id` int(11) NOT NULL,
  `Agua` int(11) NOT NULL,
  `Luz` int(11) NOT NULL,
  `Bano` int(11) NOT NULL,
  `Casino` int(11) NOT NULL,
  `Caseta` int(11) NOT NULL,
  `Internet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Rut` varchar(15) NOT NULL,
  `Primero` varchar(200) NOT NULL,
  `Segundo` varchar(200) NOT NULL,
  `Paterno` varchar(200) NOT NULL,
  `Materno` varchar(200) NOT NULL,
  `Mail` varchar(200) NOT NULL,
  `Departamento_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Contacto_Cargo_Id` (`Cargo_Id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Empresa_Representante_Id` (`Representante_Id`);

--
-- Indices de la tabla `empresas_ctrlroll`
--
ALTER TABLE `empresas_ctrlroll`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `matriz_cotizante`
--
ALTER TABLE `matriz_cotizante`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Matriz_Cotizante_Empresa_Id` (`Empresa_Id`),
  ADD KEY `fk_Matriz_Cotizante_Contacto_Id` (`Contacto_Id`),
  ADD KEY `fk_Matriz_Cotizante_Natural_Id` (`Natural_Id`),
  ADD KEY `fk_Matriz_Cotizante_Servicio_Id` (`Servicio_Id`);

--
-- Indices de la tabla `matriz_requerimientos`
--
ALTER TABLE `matriz_requerimientos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Matriz_Requerimientos_EmpresaCtrlRoll_Id` (`EmpresaCtrlRoll_Id`),
  ADD KEY `fk_Matriz_Requerimientos_Requerimiento_Id` (`Requerimiento_Id`),
  ADD KEY `fk_Matriz_Requerimientos_Estado_Id` (`Estado_Id`);

--
-- Indices de la tabla `matriz_servicio`
--
ALTER TABLE `matriz_servicio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_Servicio_TipoServicio_Id` (`TipoServicio_Id`),
  ADD KEY `fk_Servicio_ServicioBasicos_Id` (`ServicioBasicos_Id`),
  ADD KEY `fk_Servicio_Extras_Id` (`Extras_Id`),
  ADD KEY `fk_Servicio_Referencias_Id` (`Referencias_Id`);

--
-- Indices de la tabla `persona_natural`
--
ALTER TABLE `persona_natural`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `representante_legal`
--
ALTER TABLE `representante_legal`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `servicios_basicos`
--
ALTER TABLE `servicios_basicos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_user_Departamento_Id` (`Departamento_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresas_ctrlroll`
--
ALTER TABLE `empresas_ctrlroll`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `extras`
--
ALTER TABLE `extras`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matriz_cotizante`
--
ALTER TABLE `matriz_cotizante`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matriz_requerimientos`
--
ALTER TABLE `matriz_requerimientos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matriz_servicio`
--
ALTER TABLE `matriz_servicio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona_natural`
--
ALTER TABLE `persona_natural`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `representante_legal`
--
ALTER TABLE `representante_legal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios_basicos`
--
ALTER TABLE `servicios_basicos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_Contacto_Cargo_Id` FOREIGN KEY (`Cargo_Id`) REFERENCES `cargos` (`Id`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_Empresa_Representante_Id` FOREIGN KEY (`Representante_Id`) REFERENCES `representante_legal` (`Id`);

--
-- Filtros para la tabla `matriz_cotizante`
--
ALTER TABLE `matriz_cotizante`
  ADD CONSTRAINT `fk_Matriz_Cotizante_Contacto_Id` FOREIGN KEY (`Contacto_Id`) REFERENCES `contacto` (`Id`),
  ADD CONSTRAINT `fk_Matriz_Cotizante_Empresa_Id` FOREIGN KEY (`Empresa_Id`) REFERENCES `empresa` (`Id`),
  ADD CONSTRAINT `fk_Matriz_Cotizante_Natural_Id` FOREIGN KEY (`Natural_Id`) REFERENCES `persona_natural` (`Id`),
  ADD CONSTRAINT `fk_Matriz_Cotizante_Servicio_Id` FOREIGN KEY (`Servicio_Id`) REFERENCES `matriz_servicio` (`Id`);

--
-- Filtros para la tabla `matriz_requerimientos`
--
ALTER TABLE `matriz_requerimientos`
  ADD CONSTRAINT `fk_Matriz_Requerimientos_EmpresaCtrlRoll_Id` FOREIGN KEY (`EmpresaCtrlRoll_Id`) REFERENCES `empresas_ctrlroll` (`Id`),
  ADD CONSTRAINT `fk_Matriz_Requerimientos_Estado_Id` FOREIGN KEY (`Estado_Id`) REFERENCES `estados` (`Id`),
  ADD CONSTRAINT `fk_Matriz_Requerimientos_Requerimiento_Id` FOREIGN KEY (`Requerimiento_Id`) REFERENCES `requerimiento` (`Id`);

--
-- Filtros para la tabla `matriz_servicio`
--
ALTER TABLE `matriz_servicio`
  ADD CONSTRAINT `fk_Servicio_Extras_Id` FOREIGN KEY (`Extras_Id`) REFERENCES `extras` (`Id`),
  ADD CONSTRAINT `fk_Servicio_Referencias_Id` FOREIGN KEY (`Referencias_Id`) REFERENCES `referencia` (`Id`),
  ADD CONSTRAINT `fk_Servicio_ServicioBasicos_Id` FOREIGN KEY (`ServicioBasicos_Id`) REFERENCES `servicios_basicos` (`Id`),
  ADD CONSTRAINT `fk_Servicio_TipoServicio_Id` FOREIGN KEY (`TipoServicio_Id`) REFERENCES `tipo_servicio` (`Id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_user_Departamento_Id` FOREIGN KEY (`Departamento_Id`) REFERENCES `departamento` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
