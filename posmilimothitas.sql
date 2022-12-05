
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `posmilimothitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado`
--

CREATE TABLE `apartado` (
  `Id` int(11) NOT NULL,
  `fechaApartado` datetime NOT NULL,
  `fechaSalida` datetime NOT NULL,
  `Valor` float NOT NULL,
  `Observacion` text COLLATE utf8_spanish_ci NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdEmbajador` int(11) NOT NULL,
  `Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `Correo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id` int(11) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Id`, `Nombre`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bogotá'),
(6, 'Bolívar'),
(7, 'Boyacá'),
(9, 'Caldas'),
(10, 'Caquetá'),
(11, 'Casanare'),
(12, 'Cauca'),
(13, 'Cesar'),
(14, 'Chocó'),
(15, 'Córdoba'),
(16, 'Cundinamarca'),
(17, 'Guainía'),
(18, 'Guaviare'),
(19, 'Huila'),
(20, 'La Guajira'),
(21, 'Magdalena'),
(22, 'Meta'),
(23, 'Nariño'),
(24, 'Norte de Santander'),
(25, 'Putumayo'),
(26, 'Quindío'),
(27, 'Risaralda'),
(28, 'San Andrés y Providencia'),
(29, 'Santander'),
(30, 'Sucre'),
(31, 'Tolima'),
(32, 'Valle del Cauca'),
(33, 'Vaupés'),
(34, 'Vichada');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embajadora`
--

CREATE TABLE `embajadora` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` text COLLATE utf8_spanish_ci NOT NULL,
  `Municipio` text COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `FechaIngreso` datetime NOT NULL,
  `FechaNacimiento` datetime NOT NULL,
  `Banco` text COLLATE utf8_spanish_ci NOT NULL,
  `TipoCuenta` text COLLATE utf8_spanish_ci NOT NULL,
  `NumeroCuenta` text COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL,
  `CantidadHijos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `Id` int(11) NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `valor` float NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `Id` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `IdDepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`Id`, `Nombre`, `IdDepartamento`) VALUES
(1, 'Duitama', 7),
(2, 'Medellín	', 2),
(3, 'Bello', 2),
(4, 'Itagüí', 2),
(5, 'Envigado', 2),
(6, 'Rionegro', 2),
(7, 'Turbo', 2),
(8, 'Apartadó', 2),
(9, 'Caucasia', 2),
(10, 'Sabaneta', 2),
(11, 'Caldas', 2),
(12, 'Copacabana', 2),
(13, 'La Estrella', 2),
(14, 'La Ceja', 2),
(15, 'Marinilla', 2),
(16, 'El Carmen de Viboral', 2),
(17, 'Chigorodó', 2),
(18, 'Guarne', 2),
(19, 'Girardota', 2),
(20, 'Barbosa', 2),
(21, 'El Bagre', 2),
(22, 'Carepa', 2),
(23, 'Barranquilla', 4),
(24, 'Soledad', 4),
(25, 'Malambo', 4),
(26, 'Sabanalarga', 4),
(27, 'Baranoa', 4),
(28, 'Galapa', 4),
(29, 'Puerto Colombia', 4),
(30, 'Arauca', 3),
(31, 'Saravena', 3),
(32, 'Arauquita', 3),
(33, 'Cartagena', 6),
(34, 'Magangué', 6),
(35, 'Turbaco', 6),
(36, 'Arjona', 6),
(37, 'El Carmen de Bolívar', 6),
(38, 'Manizales', 9),
(39, 'La Dorada', 9),
(40, 'Villamaría', 9),
(41, 'Chinchiná', 9),
(42, 'Riosucio', 9),
(43, 'Popayán', 12),
(44, 'Santander de Quilichao', 12),
(45, 'El Tambo', 12),
(46, 'Valledupar', 13),
(47, 'Aguachica', 13),
(48, 'Agustín Codazzi', 13),
(49, 'La Jagua de Ibirico', 13),
(50, 'Montería', 15),
(51, 'Lorica', 15),
(52, 'Sahagún', 15),
(53, 'Cereté', 15),
(54, 'Tierralta', 15),
(55, 'Montelíbano', 15),
(56, 'Planeta Rica', 15),
(57, 'Ciénaga de Oro', 15),
(58, 'Tuchín', 15),
(59, 'San Pelayo', 15),
(60, 'Bogotá D.C', 5),
(61, 'Soacha', 16),
(62, 'Facatativá', 16),
(63, 'Fusagasugá', 16),
(64, 'Mosquera', 16),
(65, 'Chía', 16),
(66, 'Zipaquirá', 16),
(67, 'Madrid', 16),
(68, 'Girardot', 16),
(69, 'Funza', 16),
(70, 'Cajicá', 16),
(71, 'Neiva', 19),
(72, 'Pitalito', 19),
(73, 'Garzón', 19),
(74, 'La Plata', 19),
(75, 'Riohacha', 20),
(76, 'Uribia', 20),
(77, 'Maicao', 20),
(78, 'Manaure', 20),
(79, 'Santa Marta', 21),
(80, 'Ciénaga', 21),
(81, 'Zona Bananera', 21),
(82, 'Fundación', 21),
(83, 'El Banco', 21),
(84, 'Plato', 21),
(85, 'Villavicencio', 22),
(86, 'Acacías', 22),
(87, 'Granada', 22),
(88, 'Pasto', 23),
(89, 'Tumaco', 23),
(90, 'Ipiales', 23),
(91, 'Barbacoas', 23),
(92, 'Cúcuta', 24),
(93, 'Ocaña', 24),
(94, 'Villa del Rosario', 24),
(95, 'Los Patios', 24),
(96, 'Tibú', 24),
(97, 'Pamplona', 24),
(98, 'Armenia', 26),
(99, 'Calarcá', 26),
(100, 'Pereira', 27),
(101, 'Dosquebradas', 27),
(102, 'Santa Rosa de Cabal', 27),
(103, 'Bucaramanga', 29),
(104, 'Floridablanca', 29),
(105, 'Barrancabermeja', 29),
(106, 'Piedecuesta', 29),
(107, 'Girón', 29),
(108, 'San Gil', 29),
(109, 'Jamundí', 32),
(110, 'Cartago', 32),
(111, 'Buga', 32),
(112, 'Yumbo', 32),
(113, 'Candelaria', 32),
(114, 'Florida', 32),
(115, 'El Cerrito', 32),
(116, 'Sincelejo', 30),
(117, 'Corozal', 30),
(118, 'San Marcos', 30),
(119, 'San Onofre', 30),
(120, 'Ibagué', 31),
(121, 'Espinal', 31),
(122, 'Chaparral', 31),
(123, 'Tunja', 7),
(124, 'Sogamoso', 7),
(125, 'Chiquinquirá', 7),
(126, 'Florencia', 10),
(127, 'San Vicente del Caguán', 10),
(128, 'Yopal', 11),
(129, 'Quibdó', 14),
(130, 'Riosucio', 14),
(131, 'Baranoa', 4),
(132, 'Galapa', 4),
(133, 'Puerto Colombia', 4),
(134, 'San José del Guaviare', 18),
(135, 'Mocoa', 25),
(136, 'Puerto Asís', 25),
(137, 'San Andrés', 28),
(138, 'Cumaribo', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Id` int(11) NOT NULL,
  `Valor Pedido` float NOT NULL,
  `fechaPedido` datetime NOT NULL,
  `IdProvedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Stock` int(11) NOT NULL,
  `PrecioCompra` float NOT NULL,
  `PrecioVenta` float NOT NULL,
  `Bono` float NOT NULL,
  `Puntos` int(11) NOT NULL,
  `Ventas` int(11) NOT NULL,
  `Imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `IdCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Cedula` int(11) NOT NULL,
  `NombreEmpresa` text COLLATE utf8_spanish_ci NOT NULL,
  `Nit` text COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` text COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Banco` text COLLATE utf8_spanish_ci NOT NULL,
  `TipoCuenta` text COLLATE utf8_spanish_ci NOT NULL,
  `NumeroCuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` text COLLATE utf8_spanish_ci NOT NULL,
  `Perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `Foto` text COLLATE utf8_spanish_ci NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Banco` text COLLATE utf8_spanish_ci NOT NULL,
  `TipoCuenta` text COLLATE utf8_spanish_ci NOT NULL,
  `NumeroCuenta` text COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Celular` text COLLATE utf8_spanish_ci NOT NULL,
  `TelefonoFamiliar` text COLLATE utf8_spanish_ci NOT NULL,
  `FechaIngreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UltimoLogin` datetime NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Id` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Producto` text COLLATE utf8_spanish_ci NOT NULL,
  `Impuesto` float NOT NULL,
  `Neto` float NOT NULL,
  `Total` float NOT NULL,
  `MetodoPago` text COLLATE utf8_spanish_ci NOT NULL,
  `FechaVenta` datetime NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdEmbajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartado`
--
ALTER TABLE `apartado`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `embajadora`
--
ALTER TABLE `embajadora`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Departamento` (`Departamento`(1024)),
  ADD KEY `Municipio` (`Municipio`(1024));

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdMunicipio` (`IdDepartamento`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartado`
--
ALTER TABLE `apartado`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `embajadora`
--
ALTER TABLE `embajadora`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
