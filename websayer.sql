

CREATE TABLE `admin` (
  `usu` varchar(20) DEFAULT NULL,
  `comtra` varchar(20) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL
) 

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usu`, `comtra`, `nombre`, `apellido`, `edad`, `fecha`, `correo`) VALUES
('1234', '1234', NULL, NULL, NULL, NULL, NULL),
('admin', 'admin', 'Andy Robers', 'Javier Reyes', 19, '1997-08-27', 'andyrobersjavierreyes@gmail.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `mensaje` text NOT NULL
) 

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `usuario`, `mensaje`) VALUES
(1, 'sdsd', 'hola				   	\n				   '),
(2, 'sdsd', 'como estas ?				   	\n				   '),
(3, 'sdsd', 'yo bien y tu			   	\n				   '),
(4, 'sdsd', 'ya llegue grupo	   '),
(5, 'sdsd', 'no me importa		   	\n				   '),
(6, '<?php echo $usu; ?>', 'que haciendo				   	\n				   '),
(7, 'weqweq', 'aSasAS			   	\n				   '),
(8, '<?php echo $usu ;?>', 'asadadad				   	\n				   '),
(9, '<?php echo $usu ;?>', 'asasasasa				   	\n				   '),
(10, '<?php echo "".$usu."" ;?>', 'asasas				   	\n				   '),
(11, 'Andy Robers', 'hola				   	\n				   '),
(12, 'Andy Robers', 'asas				   	\n				   '),
(13, 'Andy Robers', 'hola como estan				   	\n				   '),
(14, 'Andy Robers', '				   	\nasas				   '),
(15, 'Andy Robers', 'aasaasadadada		   '),
(16, 'Andy Robers', 'asassaasa				   	\n				   '),
(17, 'Andy Robers', 'esa gente				   	\n				   '),
(18, 'Mathias ', 'hola amigo				   	\n				   '),
(19, 'Mathias ', 'hola				   	\n				   '),
(20, 'furgensio', 'que fue			   	\n				   '),
(21, 'Mathias ', 'habla		   	\n				   '),
(22, 'Andy Robers', '	qwqwq			   	\n				   '),
(23, 'Andy Robers', 'qwqwq				   	\n				   '),
(24, 'Andy Robers', 'asasadaddad			   	\n				   '),
(25, 'Andy Robers', 'gyduvvvvvvvgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg				   	\n				   '),
(26, 'Andy Robers', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg				   	\n				   '),
(27, 'Andy Robers', 'gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggffffffffffffffffffffffffff				   	\n				   '),
(28, 'Mathias ', 'asdsadasda	sad			   	\n				   ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `edad` int(11) NOT NULL,
  `nick` varchar(25) NOT NULL,
  `comtra` varchar(25) NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) 

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `nombre`, `apellido`, `edad`, `nick`, `comtra`, `telefono`, `fecha`, `email`, `foto`) VALUES
(2, 'Andy Robers', 'Javier Reyes', 18, 'reaper', 'reaper', '987456532', '1997-09-27', 'andyrobersjavierreyes@gmail.com', 'Artilusionista_fuegofelpa.jpg'),
(51, 'Mathias ', 'Javier Reyes', 8, 'matias', 'matias', '984563217', '1997-10-31', 'andyvirgo_13@hotmail.com', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `profesor`
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

