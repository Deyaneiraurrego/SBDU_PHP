-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2021 a las 00:52:03
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sbdu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `IdCargo` int(11) NOT NULL,
  `NombreCargo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`IdCargo`, `NombreCargo`) VALUES
(1, 'administrador'),
(2, 'tecnico'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `IdContacto` int(11) NOT NULL,
  `CedulaContacto` int(11) NOT NULL,
  `NombreContacto` varchar(50) NOT NULL,
  `CelContacto` int(11) NOT NULL,
  `CorreoContacto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `nitEmpresa` varchar(40) NOT NULL,
  `nombreEmpresa` varchar(40) NOT NULL,
  `VentasRealizadas` int(11) NOT NULL,
  `Cantidadpedidos` int(11) NOT NULL,
  `TelefonoEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `nitEmpresa`, `nombreEmpresa`, `VentasRealizadas`, `Cantidadpedidos`, `TelefonoEmpresa`) VALUES
(1, '11225000', 'ETB2', 121, 2, 311253239);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradasalida`
--

CREATE TABLE `entradasalida` (
  `IdEntradaSalida` int(11) NOT NULL,
  `FechaEntradaSalida` varchar(30) DEFAULT NULL,
  `FechaSalidaEntradaSalida` varchar(30) DEFAULT NULL,
  `IdUsuarioEntradaSalida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entradasalida`
--

INSERT INTO `entradasalida` (`IdEntradaSalida`, `FechaEntradaSalida`, `FechaSalidaEntradaSalida`, `IdUsuarioEntradaSalida`) VALUES
(2, '2021-07-15', '2021-07-15', 1031818460),
(3, '2021-07-13', '2021-07-13', 1031818465);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `IdEquipo` int(11) NOT NULL,
  `TipoComputadorEquipo` varchar(50) NOT NULL,
  `MarcaBoardEquipo` varchar(50) NOT NULL,
  `ProcesadorEquipo` varchar(50) NOT NULL,
  `MarcaMemoriaRAMEquipo` varchar(50) NOT NULL,
  `MemoriaRAMEquipo` varchar(50) NOT NULL,
  `DiscoDuroEquipo` varchar(50) NOT NULL,
  `UnidadCDDVDEquipo` varchar(50) NOT NULL,
  `LectoraTarjetasEquipo` varchar(50) NOT NULL,
  `PuertosEquipo` varchar(50) NOT NULL,
  `MonitorEquipo` varchar(50) NOT NULL,
  `TarjetaredEquipo` varchar(50) NOT NULL,
  `TarjetavideoEquipo` varchar(50) NOT NULL,
  `TarjetaSonidoEquipo` varchar(50) NOT NULL,
  `MarcaTecladoEquipo` varchar(50) NOT NULL,
  `EstadoTecladoEquipo` varchar(50) NOT NULL,
  `MarcaSerialMouseEquipo` varchar(50) NOT NULL,
  `EstadoMouseEquipo` varchar(50) NOT NULL,
  `AlimentacionEquipo` varchar(100) NOT NULL,
  `CamaraEquipo` varchar(100) NOT NULL,
  `CablesAlimentacionTorreEquipo` varchar(100) NOT NULL,
  `CablesAlimentacionPantallaEquipo` varchar(50) NOT NULL,
  `SistemaOperativoEquipo` varchar(50) NOT NULL,
  `SistemaOperativoMultipleEquipo` varchar(100) NOT NULL,
  `controladoresEquipo` varchar(50) NOT NULL,
  `ParticionesHDDEquipo` varchar(50) NOT NULL,
  `MicrosoftOfficeTieneEquipo` varchar(50) NOT NULL,
  `MicrosoftOfficeLicenciaEquipo` varchar(50) NOT NULL,
  `NavegadoresEquipo` varchar(50) NOT NULL,
  `NavegadorPoseeEquipo` varchar(50) NOT NULL,
  `LectorPDFPoseeEquipo` varchar(50) NOT NULL,
  `LectorPDFLicenciaEquipo` varchar(50) NOT NULL,
  `CompresorArchivosPoseeEquipo` varchar(50) NOT NULL,
  `CompresorArchivosLicenciaEquipo` varchar(50) NOT NULL,
  `AntivirusPoseeEquipo` varchar(50) NOT NULL,
  `AntivirusLicenciaEquipo` varchar(50) NOT NULL,
  `CongeladorDDEquipo` varchar(50) NOT NULL,
  `UtilidadesGrabacionEquipo` varchar(100) NOT NULL,
  `IdEntradaSalidaFK` int(11) DEFAULT NULL,
  `IdRedFK` int(11) DEFAULT NULL,
  `IdLicenciaFK` int(11) DEFAULT NULL,
  `IdServicioFK` int(11) DEFAULT NULL,
  `IdIncidenciaFK` int(11) DEFAULT NULL,
  `IdUsuarioFK` int(11) DEFAULT NULL,
  `IdEstadoFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`IdEquipo`, `TipoComputadorEquipo`, `MarcaBoardEquipo`, `ProcesadorEquipo`, `MarcaMemoriaRAMEquipo`, `MemoriaRAMEquipo`, `DiscoDuroEquipo`, `UnidadCDDVDEquipo`, `LectoraTarjetasEquipo`, `PuertosEquipo`, `MonitorEquipo`, `TarjetaredEquipo`, `TarjetavideoEquipo`, `TarjetaSonidoEquipo`, `MarcaTecladoEquipo`, `EstadoTecladoEquipo`, `MarcaSerialMouseEquipo`, `EstadoMouseEquipo`, `AlimentacionEquipo`, `CamaraEquipo`, `CablesAlimentacionTorreEquipo`, `CablesAlimentacionPantallaEquipo`, `SistemaOperativoEquipo`, `SistemaOperativoMultipleEquipo`, `controladoresEquipo`, `ParticionesHDDEquipo`, `MicrosoftOfficeTieneEquipo`, `MicrosoftOfficeLicenciaEquipo`, `NavegadoresEquipo`, `NavegadorPoseeEquipo`, `LectorPDFPoseeEquipo`, `LectorPDFLicenciaEquipo`, `CompresorArchivosPoseeEquipo`, `CompresorArchivosLicenciaEquipo`, `AntivirusPoseeEquipo`, `AntivirusLicenciaEquipo`, `CongeladorDDEquipo`, `UtilidadesGrabacionEquipo`, `IdEntradaSalidaFK`, `IdRedFK`, `IdLicenciaFK`, `IdServicioFK`, `IdIncidenciaFK`, `IdUsuarioFK`, `IdEstadoFK`) VALUES
(4, 'f1', 'f1', 'f1', 'f1', '', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 'f1', 2, 3, 3, 1, 7, 1031818465, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IdEstado` int(11) NOT NULL,
  `NombreEstado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `NombreEstado`) VALUES
(1, 'Activo'),
(2, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `IdIncidencia` int(11) NOT NULL,
  `FechaRecibido` varchar(30) NOT NULL,
  `FechaEntrega` varchar(30) NOT NULL,
  `NombreTecnico` varchar(50) NOT NULL,
  `IdUsuarioFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`IdIncidencia`, `FechaRecibido`, `FechaEntrega`, `NombreTecnico`, `IdUsuarioFK`) VALUES
(7, '2021-07-16', '2021-07-20', '1031818469', 1031818470);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE `licencia` (
  `IdLicencia` int(11) NOT NULL,
  `TipoProgramaLicencia` varchar(30) NOT NULL,
  `NombreLicencia` varchar(30) NOT NULL,
  `AutorLicencia` varchar(30) NOT NULL,
  `VersionLicencia` varchar(30) NOT NULL,
  `DesarrolladorLicencia` varchar(30) NOT NULL,
  `ModeloDesarrolloLicencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `licencia`
--

INSERT INTO `licencia` (`IdLicencia`, `TipoProgramaLicencia`, `NombreLicencia`, `AutorLicencia`, `VersionLicencia`, `DesarrolladorLicencia`, `ModeloDesarrolloLicencia`) VALUES
(3, 'Office 3', 'Office 2019 2 ', 'brayan', '14.5', 'Lyan 4', 'MVC 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `red`
--

CREATE TABLE `red` (
  `IdRed` int(11) NOT NULL,
  `TipoConectividadRed` varchar(50) NOT NULL,
  `DireccionIpRed` varchar(30) NOT NULL,
  `MascaraRed` varchar(30) NOT NULL,
  `DHCPRed` varchar(30) NOT NULL,
  `DNSRed` varchar(30) NOT NULL,
  `DireccionFisicaRed` varchar(30) NOT NULL,
  `DescripcionRed` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `red`
--

INSERT INTO `red` (`IdRed`, `TipoConectividadRed`, `DireccionIpRed`, `MascaraRed`, `DHCPRed`, `DNSRed`, `DireccionFisicaRed`, `DescripcionRed`) VALUES
(3, 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `IdServicio` int(11) NOT NULL,
  `MantenimientoServicio` varchar(50) NOT NULL,
  `BasesDatosServicio` varchar(50) NOT NULL,
  `DisenoImplementacionServicio` varchar(50) NOT NULL,
  `DirectorioActivoServicio` varchar(50) NOT NULL,
  `OptimizacionServicio` varchar(50) NOT NULL,
  `IdUsuarioFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`IdServicio`, `MantenimientoServicio`, `BasesDatosServicio`, `DisenoImplementacionServicio`, `DirectorioActivoServicio`, `OptimizacionServicio`, `IdUsuarioFK`) VALUES
(1, 'Correctivo3', 'No se que va aca jjjj', 'arquitectura MVC', 'SI', 'SI', 1031818460);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `CelContacto` varchar(40) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL,
  `IdCargoFK` int(11) DEFAULT NULL,
  `IdEstadoFK` int(11) DEFAULT NULL,
  `contrasenaUsuario` varchar(50) NOT NULL,
  `NumeroIdentificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `NombreUsuario`, `Apellido`, `CelContacto`, `correoUsuario`, `IdCargoFK`, `IdEstadoFK`, `contrasenaUsuario`, `NumeroIdentificacion`) VALUES
(1031818460, 'Deyaneira', 'Urrego', '311253239', 'deya@gmail.com', 1, 1, '123', 1001118174),
(1031818465, 'Brayan ', 'Zanabria', '3112532354', 'brayan@gmail.com', 1, 2, '123', 1001118137),
(1031818469, 'Manuel', 'sandoval', '3112532391', 'sandoval@gmail.com', 2, 1, '123', 100225),
(1031818470, 'luis', 'perez', '325458974', 'perez@gmail.com', 3, 1, '123', 1001118137),
(1031818471, 'Samuel', 'Bustos', '32154988778', 'samu@gmail.com', 1, 1, '123', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`IdCargo`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`IdContacto`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `entradasalida`
--
ALTER TABLE `entradasalida`
  ADD PRIMARY KEY (`IdEntradaSalida`),
  ADD KEY `userSalidaFk` (`IdUsuarioEntradaSalida`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`IdEquipo`),
  ADD KEY `EqEstaFk` (`IdEstadoFK`),
  ADD KEY `EqLicenFk` (`IdLicenciaFK`),
  ADD KEY `EqServiciFk` (`IdServicioFK`),
  ADD KEY `EqUsuFk` (`IdUsuarioFK`),
  ADD KEY `IdEntradaSalidaFK` (`IdEntradaSalidaFK`),
  ADD KEY `IdRedFK` (`IdRedFK`),
  ADD KEY `IdIncidenciaFK` (`IdIncidenciaFK`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`IdIncidencia`),
  ADD KEY `InciUsuaFk` (`IdUsuarioFK`);

--
-- Indices de la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD PRIMARY KEY (`IdLicencia`);

--
-- Indices de la tabla `red`
--
ALTER TABLE `red`
  ADD PRIMARY KEY (`IdRed`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`IdServicio`),
  ADD KEY `ServiUsuaFk` (`IdUsuarioFK`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `fkCargo` (`IdCargoFK`),
  ADD KEY `fkEstado` (`IdEstadoFK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `IdCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entradasalida`
--
ALTER TABLE `entradasalida`
  MODIFY `IdEntradaSalida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IdEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `IdIncidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `IdLicencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `red`
--
ALTER TABLE `red`
  MODIFY `IdRed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `IdServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031818472;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradasalida`
--
ALTER TABLE `entradasalida`
  ADD CONSTRAINT `userSalidaFk` FOREIGN KEY (`IdUsuarioEntradaSalida`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `EqEntraSaleFk` FOREIGN KEY (`IdEntradaSalidaFK`) REFERENCES `entradasalida` (`IdEntradaSalida`),
  ADD CONSTRAINT `EqEstaFk` FOREIGN KEY (`IdEstadoFK`) REFERENCES `estado` (`IdEstado`),
  ADD CONSTRAINT `EqIncideFk` FOREIGN KEY (`IdIncidenciaFK`) REFERENCES `incidencia` (`IdIncidencia`),
  ADD CONSTRAINT `EqLicenFk` FOREIGN KEY (`IdLicenciaFK`) REFERENCES `licencia` (`IdLicencia`),
  ADD CONSTRAINT `EqRedFk` FOREIGN KEY (`IdRedFK`) REFERENCES `red` (`IdRed`),
  ADD CONSTRAINT `EqServiciFk` FOREIGN KEY (`IdServicioFK`) REFERENCES `servicio` (`IdServicio`),
  ADD CONSTRAINT `EqUsuFk` FOREIGN KEY (`IdUsuarioFK`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `IdEntradaSalidaFK` FOREIGN KEY (`IdEntradaSalidaFK`) REFERENCES `entradasalida` (`IdEntradaSalida`),
  ADD CONSTRAINT `IdIncidenciaFK` FOREIGN KEY (`IdIncidenciaFK`) REFERENCES `incidencia` (`IdIncidencia`),
  ADD CONSTRAINT `IdRedFK` FOREIGN KEY (`IdRedFK`) REFERENCES `red` (`IdRed`);

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `InciUsuaFk` FOREIGN KEY (`IdUsuarioFK`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `ServiUsuaFk` FOREIGN KEY (`IdUsuarioFK`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fkCargo` FOREIGN KEY (`IdCargoFK`) REFERENCES `cargo` (`IdCargo`),
  ADD CONSTRAINT `fkEstado` FOREIGN KEY (`IdEstadoFK`) REFERENCES `estado` (`IdEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
