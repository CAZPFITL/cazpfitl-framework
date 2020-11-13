

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `urlcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sistema` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subsistema` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `modalidad` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nivel` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `videos` (`id`, `nombre`, `urlcode`, `sistema`, `subsistema`, `modalidad`, `tipo`, `curso`, `nivel`) VALUES
(1, 'Funcionamiento del Menu QR', 'D4ZX_s_mCtw', 'E-Delivery', '', 'Gratuito', 'Guia de Funcionamiento', '', 'Principiante' ),
(2, 'Proceso de activación de nuevas funcionalidades de E-Menu QR', '63FIb567pOA', 'E-Delivery', '', 'Gratuito', 'Guia de Funcionamiento', '', 'Intermedio'),
(3, '2. Creación de cuenta Soft Restaurant® E-Delivery', 'tMlFaO3iFZ8', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante' ),
(4, '4. Conoce las funciones de Soft Restaurant ® E-Delivery', '9Cr7ddia5z0', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Principiante' ),
(5, '6. Configura tu portal Soft Restaurant ® E-Delivery', 'cYm3fo7-7FQ', 'E-Delivery', '', 'Gratuito', 'Curso', 'E-Delivery desde 0', 'Intermedio');


ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);


ALTER TABLE `sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;



--------------------------------------------------------------------

CREATE TABLE `subsistema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sistema` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;