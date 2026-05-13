-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2026 a las 03:54:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestioninsti`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_apoyos`
--

CREATE TABLE `catalogo_apoyos` (
  `cod_ref` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `nombre_doc` varchar(100) NOT NULL,
  `resumen` text DEFAULT NULL,
  `titular` varchar(100) DEFAULT NULL,
  `condiciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo_apoyos`
--

INSERT INTO `catalogo_apoyos` (`cod_ref`, `categoria`, `nombre_doc`, `resumen`, `titular`, `condiciones`) VALUES
(1, 'EJE ACADÉMICO', 'SINATA', 'Acompañamiento mediante tutorías individuales.', 'Oficina Escolar', 'Inscripción vigente y matrícula activa.'),
(2, 'EJE ACADÉMICO', 'PRONAFOLE', 'Iniciativas para el desarrollo de lectura.', 'Responsable Académico', 'Participación en grupos de análisis.'),
(3, 'SALUD INTEGRAL', 'FOMALASA', 'Promoción de hábitos de vida saludables.', 'Departamento Médico', 'Seguro facultativo o IMSS activo.'),
(4, 'SALUD INTEGRAL', 'ORIENTACIÓN SEXUAL', 'Talleres de responsabilidad y prevención.', 'Área de Salud', 'Registro en sesiones informativas.'),
(5, 'CULTURA Y ARTE', 'ECALE', 'Actividades de apreciación cinematográfica.', 'Coordinación Cultural', 'Ficha de inscripción al taller.'),
(6, 'MEDIO AMBIENTE', 'AMA DGETI', 'Proyectos de sustentabilidad y ecología.', 'Coordinación Técnica', 'Voluntariado en áreas comunes.'),
(7, 'INNOVACIÓN', 'MEEMS', 'Estructura para el desarrollo emprendedor.', 'Oficina de Vinculación', 'Presentación de idea de negocio.'),
(8, 'COMUNIDAD', 'PAEC', 'Integración de la escuela con el entorno.', 'Dirección', 'Proyecto de impacto social.'),
(9, 'EGRESADOS', 'TITULACIÓN', 'Gestión de documentos para título técnico.', 'Control Escolar', 'Servicio social y prácticas concluidas.'),
(10, 'TALENTO', 'ENAC', 'Certámenes de expresión artística.', 'Promotoría Cultural', 'Evaluación previa de habilidades.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo_apoyos`
--
ALTER TABLE `catalogo_apoyos`
  ADD PRIMARY KEY (`cod_ref`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_apoyos`
--
ALTER TABLE `catalogo_apoyos`
  MODIFY `cod_ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
