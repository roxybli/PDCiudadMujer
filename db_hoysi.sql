-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-01-2019 a las 15:26:03
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_hoysi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anuncios`
--

CREATE TABLE IF NOT EXISTS `tbl_anuncios` (
  `pk_Id_Anuncio` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_Id_Institucion` int(11) NOT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  `Titulo` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Descripcion_Noticia` text COLLATE utf8_spanish2_ci,
  `Estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`pk_Id_Anuncio`),
  KEY `FK_Id_Institucion` (`Fk_Id_Institucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `tbl_anuncios`
--

INSERT INTO `tbl_anuncios` (`pk_Id_Anuncio`, `Fk_Id_Institucion`, `Contenido`, `Titulo`, `Imagen`, `Fecha`, `FK_Id_Usuaria`, `Descripcion_Noticia`, `Estado`) VALUES
(10, 1, 'Rosa Maribel Rivera, representante de las graduadas, recibió un \r\ntaller de alta costura, pero también atención sicológica por ser \r\nsobreviviente de violencia de género, formación en Emprendedurismo y \r\nGénero; igualmente aprovechó los servicios del módulo de Salud Sexual y \r\nReproductiva donde se le practicaron exámenes ginecológicos. “Me he \r\nconvertido en una mujer diferente, sensibilizada y empoderada en mis \r\nderechos, he mejorado mi autoestima como mujer y adulta mayor, ejerzo mi\r\n autonomía económica plenamente porque ha iniciado un emprendimiento de \r\nelaboración de ropa con mi hija”, recalcó.\r\nLa Directora Morales, además de felicitar a las graduadas por haber \r\nfinalizado sus cursos y talleres de capacitación, señaló que es \r\nnecesario estar conscientes que las mujeres somos más del 53% de la \r\npoblación del país, por lo que deben empoderarse en sus derechos, y \r\naprovechar los servicios y oportunidades que Ciudad Mujer pone a \r\ndisposición para ello.\r\nLas graduadas se capacitaron en alta costura, técnicas agrícolas, \r\nestilismo; marroquinería, elaboración artesanal de sandalias, arreglos \r\nflorales y decoración de eventos, piñatería; panadería, helado \r\nartesanal, pastelería, producción de champús y jabones, entre otros.<br>', 'CIUDAD MUJER COLÓN GRADÊA 290 USUARIAS CAPACITADAS EN CURSOS TÉCNICO-VOCACIONALES', 'a1.jpg', '2018-09-30', 2, '                                                                                                                                                        Colón, La Libertad. Martes, 18 de septiembre de 2018. La Directora de Ciudad Mujer Colón, Bárbara Romero, presidió este día la ceremonia de graduación de 298 usuarias capacitadas por esta sede en diferentes cursos y talleres técnico-vocacionales que son de gran importancia para su desarrollo y empoderamiento.                                                                                                                                                                                                                  ESTA ES LA DESCRIPCION DE UNA NOTICIA                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'Publicado'),
(11, 2, '<p>Rosa Maribel Rivera, representante de las graduadas, recibi&oacute; un taller de alta costura, pero tambi&eacute;n atenci&oacute;n sicol&oacute;gica por ser sobreviviente de violencia de g&eacute;nero, formaci&oacute;n en Emprendedurismo y G&eacute;nero; igualmente aprovech&oacute; los servicios del m&oacute;dulo de Salud Sexual y Reproductiva donde se le practicaron ex&aacute;menes ginecol&oacute;gicos. &ldquo;Me he convertido en una mujer diferente, sensibilizada y empoderada en mis derechos, he mejorado mi autoestima como mujer y adulta mayor, ejerzo mi autonom&iacute;a econ&oacute;mica plenamente porque ha iniciado un emprendimiento de elaboraci&oacute;n de ropa con mi hija&rdquo;, recalc&oacute;. La Directora Morales, adem&aacute;s de felicitar a las graduadas por haber finalizado sus cursos y talleres de capacitaci&oacute;n, se&ntilde;al&oacute; que es necesario estar conscientes que las mujeres somos m&aacute;s del 53% de la poblaci&oacute;n del pa&iacute;s, por lo que deben empoderarse en sus derechos, y aprovechar los servicios y oportunidades que Ciudad Mujer pone a disposici&oacute;n para ello. Las graduadas se capacitaron en alta costura, t&eacute;cnicas agr&iacute;colas, estilismo; marroquiner&iacute;a, elaboraci&oacute;n artesanal de sandalias, arreglos florales y decoraci&oacute;n de eventos, pi&ntilde;ater&iacute;a; panader&iacute;a, helado artesanal, pasteler&iacute;a, producci&oacute;n de champ&uacute;s y jabones, entre otros.</p>', 'VELERISTA MEXICANA, GALIA MOSS, CONOCE MODELO CIUDAD MUJER.', 'a2.jpg', '2018-09-19', 1, 'Santa Ana. Lunes 1 de octubre de 2018. La velerista, reconocida por ser la primera mexicana y latinoamericana en cruzar el Océano Atlántico a vela en solitario, Galia Moss, conoció esta tarde el funcionamiento del modelo Ciudad Mujer, un programa del Gobierno de El Salvador                                                                                                                                                                                                                      ', 'Publicado'),
(12, 4, '<p>Rosa Maribel Rivera, representante de las graduadas, recibi&oacute; un taller de alta costura, pero tambi&eacute;n atenci&oacute;n sicol&oacute;gica por ser sobreviviente de violencia de g&eacute;nero, formaci&oacute;n en Emprendedurismo y G&eacute;nero; igualmente aprovech&oacute; los servicios del m&oacute;dulo de Salud Sexual y Reproductiva donde se le practicaron ex&aacute;menes ginecol&oacute;gicos. &ldquo;Me he convertido en una mujer diferente, sensibilizada y empoderada en mis derechos, he mejorado mi autoestima como mujer y adulta mayor, ejerzo mi autonom&iacute;a econ&oacute;mica plenamente porque ha iniciado un emprendimiento de elaboraci&oacute;n de ropa con mi hija&rdquo;, recalc&oacute;. La Directora Morales, adem&aacute;s de felicitar a las graduadas por haber finalizado sus cursos y talleres de capacitaci&oacute;n, se&ntilde;al&oacute; que es necesario estar conscientes que las mujeres somos m&aacute;s del 53% de la poblaci&oacute;n del pa&iacute;s, por lo que deben empoderarse en sus derechos, y aprovechar los servicios y oportunidades que Ciudad Mujer pone a disposici&oacute;n para ello. Las graduadas se capacitaron en alta costura, t&eacute;cnicas agr&iacute;colas, estilismo; marroquiner&iacute;a, elaboraci&oacute;n artesanal de sandalias, arreglos florales y decoraci&oacute;n de eventos, pi&ntilde;ater&iacute;a; panader&iacute;a, helado artesanal, pasteler&iacute;a, producci&oacute;n de champ&uacute;s y jabones, entre otros.</p>', 'EMPRENDEDORAS DE CIUDAD MUJER SON CAPACITADAS EN ORGANIZACIN DE EVENTOS  ', '3_ROXY.jpg', '2018-09-26', 1, 'San Martn. San Salvador. Viernes, 7 de septiembre de 2018. Este da dio inicio la capacitacin en Atencin y Organizacin de Eventos, impartida por la Secretara de Inclusin Social SIS a emprendedoras apoyadas por Ciudad Mujer San Martn con el fin de que adquieran ms conocimientos y habilidades para impulsar el desarrollo de sus emprendimientos.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ', 'Publicado'),
(16, 4, '<p>&nbsp;San Mart&iacute;n. Martes 24 de abril de 2018. La Secretaria de Inclusi&oacute;n Social, Vanda Pignato, junto a la Presidenta del Banco de Fomento Agropecuario (BFA), Ana <br />Rosa Maribel Rivera, representante de las graduadas, recibi&oacute; un taller de alta costura, pero tambi&eacute;n atenci&oacute;n sicol&oacute;gica por ser sobreviviente de violencia de g&eacute;nero, formaci&oacute;n en Emprendedurismo y G&eacute;nero; igualmente aprovech&oacute; los servicios del m&oacute;dulo de Salud Sexual y Reproductiva donde se le practicaron ex&aacute;menes ginecol&oacute;gicos. &ldquo;Me he convertido en una mujer diferente, sensibilizada y empoderada en mis derechos, he mejorado mi autoestima como mujer y adulta mayor, ejerzo mi autonom&iacute;a econ&oacute;mica plenamente porque ha iniciado un emprendimiento de elaboraci&oacute;n de ropa con mi hija&rdquo;, recalc&oacute;. La Directora Morales, adem&aacute;s de felicitar a las graduadas por haber finalizado sus cursos y talleres de capacitaci&oacute;n, se&ntilde;al&oacute; que es necesario estar conscientes que las mujeres somos m&aacute;s del 53% de la poblaci&oacute;n del pa&iacute;s, por lo que deben empoderarse en sus derechos, y aprovechar los servicios y oportunidades que Ciudad Mujer pone a disposici&oacute;n para ello. Las graduadas se capacitaron en alta costura, t&eacute;cnicas agr&iacute;colas, estilismo; marroquiner&iacute;a, elaboraci&oacute;n artesanal de sandalias, arreglos florales y decoraci&oacute;n de eventos, pi&ntilde;ater&iacute;a; panader&iacute;a, helado artesanal, pasteler&iacute;a, producci&oacute;n de champ&uacute;s y jabones, entre otros.<br /><br /></p>', 'LANZAMIENTO DE LíNEA DE CRÉDITO PARA USUARIAS DE CIUDAD MUJER', '2_ROXY.jpg', '2018-12-10', 1, '                                                                                                                                                                                                                                     San Martín. Martes 24 de abril de 2018. La Secretaria de Inclusión Social, Vanda Pignato, junto a la Presidenta del Banco de Fomento Agropecuario (BFA), Ana Lilian Vega, realizaron el lanzamiento este día de una innovadora línea de crédito para las usuarias del programa Ciudad Mujer.                                                                                                                                                                                                                                                                                                ', 'Publicado'),
(17, 3, '<p>Con esta nueva graduaci&oacute;n el programa Ciudad Mujer suma ya 68 mil 116 usuarias capacitadas en diferentes &aacute;reas t&eacute;cnico-vocacionales en todo el pa&iacute;s, tal y como precis&oacute; la Subsecretaria Hern&aacute;ndez, quien tambi&eacute;n felicit&oacute; a las graduadas por su dedicaci&oacute;n para llevar a buen t&eacute;rmino sus cursos y talleres; algo que sin duda es una herramienta importante para su desarrollo y empoderamiento econ&oacute;mico.&ldquo;El desarrollo de una mujer tiene un efecto multiplicador, pues con ella progresan sus familias, sus comunidades y todo el pa&iacute;s&rdquo;, agreg&oacute; la funcionaria.</p>\r\n<p>Por su parte, la representante de las graduadas, Gilma Batres, capacitada en elaboraci&oacute;n de bolsos y carteras; empresarialidad femenina y derechos de las mujeres, as&iacute; como en un diplomado de telares y elaboraci&oacute;n de hamacas, agradeci&oacute; todo el apoyo recibido por Ciudad Mujer, pues gracias a eso ha podido asociarse con otras 16 mujeres con las que ha conformado una cooperativa dedicada a la confecci&oacute;n de diferentes productos en telares en el municipio de Jucuar&aacute;n. &ldquo;Ahora tenemos telares e hilos que han fortalecido el sue&ntilde;o de tener nuestro propio negocio, cosas que no pens&aacute;bamos tener en tan poco tiempo&rdquo;, subray&oacute;.</p>\r\n<p>Programadora de Windows y Microsoft Office, t&eacute;cnicas agr&iacute;colas, elaboraci&oacute;n de productos de limpieza, producci&oacute;n de sandalias, arreglos y decoraci&oacute;n de eventos; cosmetolog&iacute;a, bolsos y carteras, estilismo; producci&oacute;n de sandalias, bisuter&iacute;a, confecci&oacute;n de alta costura; panader&iacute;a, pasteler&iacute;a, reposter&iacute;a, comida t&iacute;pica y comida mexicana, son los cursos y talleres de los que se graduaron las usuarias este d&iacute;a.</p>', 'CIUDAD MUJER GRADúA 769 USUARIAS CAPACITADAS EN CURSOS Y TALLERES TéCNICO-VOCACIONALES', '045E4E9A-125D-4CF0-9A1D-D08FDC556959-1140x641.jpeg', '2019-01-11', 2, 'Usulután. Viernes, 5 de diciembre de 2018. La formación técnica y vocacional de las mujeres es una prioridad que el programa Ciudad Mujer realiza a diario en todo el país para promover su empoderamiento económico. Este día, 769 usuarias de Ciudad Mujer, provenientes de los departamentos de Usulután y La Paz, recibieron sus diplomas de manos de la Subsecretaria de Inclusión Social, Guadalupe Hernández de Espinoza, tras haber finalizado satisfactoriamente sus respectivos cursos y talleres de capacitación.', 'Publicado'),
(18, 4, '<p>ebido a la lejan&iacute;a y la falta de recursos econ&oacute;micos a muchas residentes de Joateca se les dificulta movilizarse, por ello aprovecharon la oportunidad para llegar hasta el Complejo Educativo &ldquo;General Manuel Jos&eacute; Arce&rdquo;, donde se llev&oacute; a cabo Ciudad Mujer Comunitaria para conocer mejor los servicios que estaban disponibles.</p>\r\n<p>J&oacute;venes y adultas mayores llegaron movidas por diferentes razones, entre ellas la realizaci&oacute;n de ex&aacute;menes ginecol&oacute;gicos y la informaci&oacute;n sobre acceso a micro cr&eacute;ditos para iniciar sus negocios; ese es el caso de Ver&oacute;nica Chicas, &nbsp;madre de un ni&ntilde;o y una ni&ntilde;a que solicit&oacute; asesor&iacute;a sobre cr&eacute;ditos, ya que quiere abrir una cafeter&iacute;a.</p>\r\n<p>Otras mujeres como Juana Argueta, llegaron a Ciudad Mujer Comunitaria aprovechando la ocasi&oacute;n, pues ella es usuaria de Ciudad Mujer Moraz&aacute;n desde hace un par de a&ntilde;os, all&iacute; ha recibido consulta y ex&aacute;menes ginecol&oacute;gicos, y destaca la atenci&oacute;n y amabilidad de las funcionarias. &ldquo;Escuch&eacute; que iban a estar ac&aacute; cerca y vine porque deb&iacute;a hacerme un examen que me tocaba; ahora ya me lo hizo la doctora y solo me quedo esperando el resultado&rdquo;, dijo con satisfacci&oacute;n.</p>\r\n<p>Durante la jornada tambi&eacute;n se brindaron servicios como la atenci&oacute;n sicol&oacute;gica a v&iacute;ctimas de violencia de g&eacute;nero, asesor&iacute;a legal para procesos de solicitud de alimentos para hijos e hijas, as&iacute; como el cuidado de ni&ntilde;os y ni&ntilde;as.</p>\r\n<p>Ciudad Mujer desarrolla permanentemente este tipo de jornadas comunitarias en diferentes municipios, cantones y caser&iacute;os de todo el territorio nacional, con el objetivo de acercar la oferta de servicios que este programa del Gobierno de El Salvador, brinda a las salvadore&ntilde;as y a sus familias.</p>', 'CIUDAD MUJER LLEVA SERVICIOS Y OPORTUNIDADES A MUJERES DE JOATECA, EN MORAZáN', 'WIL_4843-1140x641.jpg', '2019-01-02', 1, 'Joateca, Morazán. Viernes, 18 de enero de 2019. Cientos de mujeres de Joateca y municipios vecinos acudieron este día a la jornada de Ciudad Mujer Comunitaria, realizada en dicha localidad por la sede de Ciudad Mujer Morazán.', 'Publicado'),
(19, 7, '<p><strong>En 2015, la poblaci&oacute;n LGBTI celebr&oacute;</strong> que el C&oacute;digo Penal salvadore&ntilde;o fuese reformado para incluir el odio hacia la orientaci&oacute;n sexual y/o expresi&oacute;n de g&eacute;nero como agravante de un homicidio (cuya pena m&aacute;xima puede ser de 50 a&ntilde;os). &ldquo;Ha existido una displicencia para investigar este tipo de casos debido a los prejuicios que existen hacia la poblaci&oacute;n LGBTI; con la reforma al C&oacute;digo Penal se busc&oacute; darle relevancia a estos casos, por eso un primer paso fue lograr que se investiguen&rdquo;, apunta el Director de Diversidad Sexual de la SIS, Cruz Torres.</p>\r\n<p>El funcionario agrega que a la SIS le interesa que las reformas aprobadas al C&oacute;digo Penal se implementen, y para eso es importante fortalecer el trabajo de la Fiscal&iacute;a y la Polic&iacute;a, de ah&iacute; la importancia y el inter&eacute;s de que Argentina brinde su experiencia en esta materia.</p>\r\n<p>Desde 2015 a la fecha decenas de personas LGBTI han sido asesinadas y muchos de esos casos son susceptibles de haber sido motivados por las razones ac&aacute; mencionadas; no obstante no existe ninguna condena de crimen por odio. Para hacer efectiva la reforma del C&oacute;digo Penal es determinante que en la fase de investigaci&oacute;n se recojan pruebas contundentes de parte de polic&iacute;as y fiscales; esa informaci&oacute;n y procedimientos que ayuden a tipificar los cr&iacute;menes por odio son los que a la FGR m&aacute;s le interesa que le transmita el Gobierno argentino.</p>\r\n<p>La Coordinadora para la poblaci&oacute;n LGBTI y otros grupos en condici&oacute;n de vulnerabilidad de la FGR, Viviana Bonilla, reconoci&oacute; el apoyo que ha encontrado en la Direcci&oacute;n de Diversidad Sexual de la SIS para fortalecer su trabajo, as&iacute; como el primer acercamiento entre el funcionariado de la FGR y la PNC con la Direcci&oacute;n de Pol&iacute;ticas Integrales en Diversidad Sexual de la Secretar&iacute;a de Derechos Humanos de la Rep&uacute;blica Argentina y representantes de la &nbsp;Federaci&oacute;n Argentina de Lesbianas, Gays, Bisexuales y Trans (FALGBT), quienes visitaron recientemente El Salvador. En esa ocasi&oacute;n la SIS desarroll&oacute; la conferencia denominada &ldquo;Cr&iacute;menes por Odio y Transfeminicidio, la experiencia en El Salvador y Argentina&rdquo;. En la actividad tambi&eacute;n particip&oacute; personal de la Academia Nacional de Seguridad P&uacute;blica (ANSP).</p>\r\n<p>Posterior a esa conferencia, la Coordinaci&oacute;n LGBTI de la FGR ha sostenido reuniones con la SIS para recopilar todas las consultas que har&aacute;n al referente del Gobierno argentino a trav&eacute;s de una videoconferencia que realizar&aacute;n en los pr&oacute;ximos d&iacute;as. M&aacute;s adelante habr&aacute; una nueva reuni&oacute;n cuando el funcionario sudamericano visite por segunda vez El Salvador antes de que finalice el presente a&ntilde;o.</p>\r\n<p>Argentina <em>tiene una experiencia</em> valiosa porque ha avanzado incluso en la investigaci&oacute;n del transfeminicidio, una figura m&aacute;s compleja del crimen por odio, ya que son casos en los que est&aacute;n presentes diferentes formas de violencia que sufren las mujeres, pero que son infringidas a mujeres trans, quienes no est&aacute;n contempladas -legalmente- como v&iacute;ctimas de feminicidio. Las mujeres trans son personas cuyo sexo biol&oacute;gico es masculino, pero su identidad y expresi&oacute;n de g&eacute;nero es femenina.</p>\r\n<p>La Coordinadora para la poblaci&oacute;n LGBTI y otros grupos en condici&oacute;n de vulnerabilidad de la FGR fue creada a mediados del a&ntilde;o 2018, y gracias a su estrecha relaci&oacute;n con la SIS, &eacute;sta ha capacitado y sensibilizado a su personal en atenci&oacute;n a v&iacute;ctimas LGBTI.</p>\r\n<p>El mismo Fiscal General de la Rep&uacute;blica, Douglas Mel&eacute;ndez, ha resaltado el trabajo que se realiza de manera interinstitucional con la SIS en favor de los derechos humanos de la poblaci&oacute;n LGBTI, especialmente en lo relacionado a los cr&iacute;menes por odio.</p>', 'SIS IMPULSA PROCESOS FORMATIVOS PARA CONTRIBUIR AL FORTALECIMIENTO DE INVESTIGACIONES DE CRíMENES POR ODIO', 'WIL_4843-1140x641.jpg', '2019-01-22', 1, 'La Dirección de Diversidad Sexual de la Secretaría de Inclusión Social SIS facilita el acercamiento entre personal de la Fiscalía General de la República FGR y de la Policía Nacional Civil PNC con funcionarios y funcionarias del Gobierno de la República Argentina en materia de Diversidad Sexual, para capacitar a instancias de ambas dependencias del Estado, sobre cómo mejorar las investigaciones cuando se cometen crímenes por odio motivados por la orientación sexual, identidad y/o expresión de género de personas Lesbianas, Gais, Bisexuales, Transexuales e Intersexuales LGBTI. Argentina tiene una experiencia más avanzada en esa temática y ha mostrado su interés en compartirla con El Salvador.', 'Publicado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_balance`
--

CREATE TABLE IF NOT EXISTS `tbl_balance` (
  `PK_Id_Balance` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Fecha_Balance` date NOT NULL,
  `Total_Ingreso` float NOT NULL,
  PRIMARY KEY (`PK_Id_Balance`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `tbl_balance`
--

INSERT INTO `tbl_balance` (`PK_Id_Balance`, `FK_Id_Usuario`, `Fecha_Balance`, `Total_Ingreso`) VALUES
(25, 1, '2018-08-31', 800),
(26, 1, '2018-08-31', 1100),
(27, 1, '2018-08-31', 1000),
(28, 1, '2018-09-01', 1100),
(29, 1, '2018-08-30', 1000.5),
(30, 1, '2018-09-30', 250),
(31, 1, '2018-10-31', 795),
(32, 2, '2018-08-31', 500.99),
(33, 1, '2018-07-31', 883),
(34, 1, '2018-09-04', 870),
(35, 24, '2019-01-04', 55),
(36, 24, '2018-12-05', 26),
(44, 24, '2019-01-01', 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_elementos`
--

CREATE TABLE IF NOT EXISTS `tbl_categoria_elementos` (
  `Pk_Id_Categoria_Elemento` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Pk_Id_Categoria_Elemento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_categoria_elementos`
--

INSERT INTO `tbl_categoria_elementos` (`Pk_Id_Categoria_Elemento`, `Nombre_Categoria`) VALUES
(1, 'Equipamiento'),
(2, 'Insumos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos`
--

CREATE TABLE IF NOT EXISTS `tbl_contactos` (
  `PK_Id_Contacto` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Id_User_Contacto` int(11) NOT NULL,
  `Nombre_Contacto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto_Contacto` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Estado_Contacto` int(11) NOT NULL,
  PRIMARY KEY (`PK_Id_Contacto`),
  KEY `FK_Id_Usuaria` (`FK_Id_Usuaria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `tbl_contactos`
--

INSERT INTO `tbl_contactos` (`PK_Id_Contacto`, `FK_Id_Usuaria`, `Id_User_Contacto`, `Nombre_Contacto`, `Foto_Contacto`, `Estado_Contacto`) VALUES
(12, 2, 1, 'Roxana Blanco', 'Roxana Blanco1/f3.jpg', 0),
(20, 1, 23, 'Liliam Mendoza', 'Liliam Mendoza23/1_LILY.jpg', 0),
(21, 1, 25, 'Fernanda Ulloa', 'Fernanda  Ulloa25/1_FRESH.jpg', 0),
(24, 1, 34, 'Camila Ramirez', 'Camila  Ramirez34/1_bisuteria.jpg', 0),
(25, 1, 27, 'VanessaRodriguez', 'Vanessa Rodriguez27/1_BONITA.jpg', 0),
(26, 1, 26, 'CarolinaHerrera', 'Carolina Herrera26/1_CARO.jpg', 0),
(27, 24, 25, 'Fernanda Ulloa', 'Fernanda  Ulloa25/1_FRESH.jpg', 0),
(28, 24, 34, 'Camila Ramirez', 'Camila  Ramirez34/1_bisuteria.jpg', 0),
(29, 27, 23, 'LiliamMendoza', 'Liliam Mendoza23/1_LILY.jpg', 0),
(30, 24, 27, 'VanessaRodriguez', 'Vanessa Rodriguez27/1_BONITA.jpg', 0),
(31, 23, 25, 'Fernanda Ulloa', 'Fernanda  Ulloa25/1_FRESH.jpg', 0),
(32, 24, 23, 'LiliamMendoza', 'Liliam Mendoza23/1_LILY.jpg', 0),
(33, 24, 26, 'CarolinaHerrera', 'Carolina Herrera26/1_CARO.jpg', 0),
(34, 24, 28, 'RubiParada', 'Rubi Parada28/1_TECNO.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_egresos`
--

CREATE TABLE IF NOT EXISTS `tbl_egresos` (
  `Pk_Id_Egreso` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Nombre_Egreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Egreso` float NOT NULL,
  `Fecha_Egreso` date NOT NULL,
  PRIMARY KEY (`Pk_Id_Egreso`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=247 ;

--
-- Volcado de datos para la tabla `tbl_egresos`
--

INSERT INTO `tbl_egresos` (`Pk_Id_Egreso`, `FK_Id_Usuario`, `Nombre_Egreso`, `Cantidad_Egreso`, `Fecha_Egreso`) VALUES
(112, 1, 'Compras en efectivo', 400, '2018-10-01'),
(113, 1, 'Efectivo pagado por compras al credito', 200, '2018-10-01'),
(114, 1, 'Salarios', 250, '2018-10-01'),
(115, 1, 'Renta', 100, '2018-10-01'),
(116, 1, 'Pago de préstamos', 0, '2018-10-01'),
(117, 1, 'Otros', 0, '2018-10-01'),
(118, 1, 'Pago de Luz', 50, '2018-10-01'),
(119, 1, 'Compras en efectivo', 500, '2018-11-01'),
(120, 1, 'Efectivo pagado por compras al credito', 100, '2018-11-01'),
(121, 1, 'Otros', 50, '2018-11-01'),
(122, 1, 'Pago de Luz', 50, '2018-11-01'),
(123, 1, 'Pago de préstamos', 0, '2018-11-01'),
(124, 1, 'Renta', 100, '2018-11-01'),
(125, 1, 'Salarios', 250, '2018-11-01'),
(126, 15, 'Compras en efectivo', 72, '2018-10-16'),
(127, 15, 'Efectivo pagado por compras al credito', 12, '2018-10-16'),
(128, 15, 'Salarios', 100, '2018-10-16'),
(129, 15, 'Renta', 10, '2018-10-16'),
(130, 15, 'Pago de préstamos', 0, '2018-10-16'),
(131, 15, 'Otros', 0, '2018-10-16'),
(132, 1, 'Compras en efectivo', 11, '2018-10-18'),
(133, 1, 'Efectivo pagado por compras al credito', 1, '2018-10-18'),
(134, 1, 'Otros', 10, '2018-10-18'),
(135, 1, 'Pago de Luz', 1, '2018-10-18'),
(136, 1, 'Pago de préstamos', 1, '2018-10-18'),
(137, 1, 'Renta', 1, '2018-10-18'),
(138, 1, 'Salarios', 1, '2018-10-18'),
(139, 1, 'Compras en efectivo', 100, '2018-10-24'),
(140, 1, 'Efectivo pagado por compras al credito', 10, '2018-10-24'),
(141, 1, 'Otros', 10, '2018-10-24'),
(142, 1, 'Pago de Luz', 1, '2018-10-24'),
(143, 1, 'Pago de préstamos', 10, '2018-10-24'),
(144, 1, 'Renta', 10, '2018-10-24'),
(145, 1, 'Salarios', 10, '2018-10-24'),
(146, 15, 'Compras en efectivo', 60, '2018-10-23'),
(147, 15, 'Efectivo pagado por compras al credito', 255, '2018-10-23'),
(148, 15, 'Otros', 10, '2018-10-23'),
(149, 15, 'Pago de préstamos', 150, '2018-10-23'),
(150, 15, 'Renta', 40, '2018-10-23'),
(151, 15, 'Salarios', 100, '2018-10-23'),
(152, 15, 'empleada', 150, '2018-10-23'),
(153, 24, 'Compras en efectivo', 100, '2018-12-04'),
(154, 24, 'Efectivo pagado por compras al credito', 12, '2018-12-04'),
(155, 24, 'Salarios', 100, '2018-12-04'),
(156, 24, 'Renta', 50, '2018-12-04'),
(157, 24, 'Pago de préstamos', 0, '2018-12-04'),
(158, 24, 'Otros', 0, '2018-12-04'),
(159, 34, 'Compras en efectivo', 100, '2018-12-04'),
(160, 34, 'Efectivo pagado por compras al credito', 25, '2018-12-04'),
(161, 34, 'Salarios', 100, '2018-12-04'),
(162, 34, 'Renta', 50, '2018-12-04'),
(163, 34, 'Pago de préstamos', 100, '2018-12-04'),
(164, 34, 'Otros', 0, '2018-12-04'),
(165, 24, 'Compras en efectivo', 100, '2018-12-01'),
(166, 24, 'Efectivo pagado por compras al credito', 12, '2018-12-01'),
(167, 24, 'Otros', 0, '2018-12-01'),
(168, 24, 'Pago de préstamos', 100, '2018-12-01'),
(169, 24, 'Renta', 100, '2018-12-01'),
(170, 24, 'Salarios', 100, '2018-12-01'),
(171, 1, 'Compras en efectivo', 200, '2018-12-05'),
(172, 1, 'Efectivo pagado por compras al credito', 12, '2018-12-05'),
(173, 1, 'Otros', 123, '2018-12-05'),
(174, 1, 'Pago de Luz', 11, '2018-12-05'),
(175, 1, 'Pago de préstamos', 12, '2018-12-05'),
(176, 1, 'Renta', 123, '2018-12-05'),
(177, 1, 'Salarios', 200, '2018-12-05'),
(178, 24, 'Compras en efectivo', 100, '2019-01-04'),
(179, 24, 'Efectivo pagado por compras al credito', 125, '2019-01-04'),
(180, 24, 'Otros', 22, '2019-01-04'),
(181, 24, 'Pago de préstamos', 200, '2019-01-04'),
(182, 24, 'Renta', 25, '2019-01-04'),
(183, 24, 'Salarios', 100, '2019-01-04'),
(184, 24, 'Compras en efectivo', 100, '2018-12-05'),
(185, 24, 'Efectivo pagado por compras al credito', 125, '2018-12-05'),
(186, 24, 'Otros', 125, '2018-12-05'),
(187, 24, 'Pago de préstamos', 25, '2018-12-05'),
(188, 24, 'Renta', 100, '2018-12-05'),
(189, 24, 'Salarios', 250, '2018-12-05'),
(190, 24, 'Compras en efectivo', 300, '2019-01-14'),
(191, 24, 'Efectivo pagado por compras al credito', 100, '2019-01-14'),
(192, 24, 'Otros', 10, '2019-01-14'),
(193, 24, 'Pago de préstamos', 100, '2019-01-14'),
(194, 24, 'Renta', 100, '2019-01-14'),
(195, 24, 'Salarios', 125, '2019-01-14'),
(196, 24, 'colegiatura', 200, '2019-01-14'),
(197, 24, 'colegiatura', 100, '2019-01-22'),
(198, 24, 'Compras en efectivo', 125, '2019-01-22'),
(199, 24, 'Efectivo pagado por compras al credito', 100, '2019-01-22'),
(200, 24, 'Otros', 23, '2019-01-22'),
(201, 24, 'Pago de préstamos', 100, '2019-01-22'),
(202, 24, 'Renta', 50, '2019-01-22'),
(203, 24, 'Salarios', 100, '2019-01-22'),
(204, 24, 'colegiatura', 100, '2019-01-10'),
(205, 24, 'Compras en efectivo', 125, '2019-01-10'),
(206, 24, 'Efectivo pagado por compras al credito', 100, '2019-01-10'),
(207, 24, 'Otros', 100, '2019-01-10'),
(208, 24, 'Pago de préstamos', 125, '2019-01-10'),
(209, 24, 'Renta', 100, '2019-01-10'),
(210, 24, 'Salarios', 100, '2019-01-10'),
(211, 24, 'pago de recargas', 15, '2019-01-10'),
(212, 24, 'colegiatura', 100, '2019-01-01'),
(213, 24, 'Compras en efectivo', 150, '2019-01-01'),
(214, 24, 'Efectivo pagado por compras al credito', 55, '2019-01-01'),
(215, 24, 'Otros', 15, '2019-01-01'),
(216, 24, 'Pago de préstamos', 100, '2019-01-01'),
(217, 24, 'Renta', 0, '2019-01-01'),
(218, 24, 'Salarios', 0, '2019-01-01'),
(219, 24, 'colegiatura', 123, '2019-01-22'),
(220, 24, 'Compras en efectivo', 100, '2019-01-22'),
(221, 24, 'Efectivo pagado por compras al credito', 22, '2019-01-22'),
(222, 24, 'Otros', 44, '2019-01-22'),
(223, 24, 'Pago de préstamos', 33, '2019-01-22'),
(224, 24, 'Renta', 55, '2019-01-22'),
(225, 24, 'Salarios', 55, '2019-01-22'),
(226, 24, 'colegiatura', 100, '2018-11-11'),
(227, 24, 'Compras en efectivo', 200, '2018-11-11'),
(228, 24, 'Efectivo pagado por compras al credito', 300, '2018-11-11'),
(229, 24, 'Otros', 123, '2018-11-11'),
(230, 24, 'Pago de préstamos', 11, '2018-11-11'),
(231, 24, 'Renta', 111, '2018-11-11'),
(232, 24, 'Salarios', 10, '2018-11-11'),
(233, 24, 'colegiatura', 100, '2018-10-01'),
(234, 24, 'Compras en efectivo', 100, '2018-10-01'),
(235, 24, 'Efectivo pagado por compras al credito', 125, '2018-10-01'),
(236, 24, 'Otros', 156, '2018-10-01'),
(237, 24, 'Pago de préstamos', 13, '2018-10-01'),
(238, 24, 'Renta', 16, '2018-10-01'),
(239, 24, 'Salarios', 19, '2018-10-01'),
(240, 24, 'colegiatura', 125, '2019-01-01'),
(241, 24, 'Compras en efectivo', 50, '2019-01-01'),
(242, 24, 'Efectivo pagado por compras al credito', 55, '2019-01-01'),
(243, 24, 'Otros', 35, '2019-01-01'),
(244, 24, 'Pago de préstamos', 22, '2019-01-01'),
(245, 24, 'Renta', 111, '2019-01-01'),
(246, 24, 'Salarios', 100, '2019-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_elementos_subrubros`
--

CREATE TABLE IF NOT EXISTS `tbl_elementos_subrubros` (
  `Pk_Id_Elemento_Subrubro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Elemento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Elemento` int(11) DEFAULT NULL,
  `Precio_Elemento` float NOT NULL,
  `Medida_Elemento` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fk_Id_Categoria_Elemento` int(11) NOT NULL,
  `Fk_Id_Subrubro` int(11) NOT NULL,
  PRIMARY KEY (`Pk_Id_Elemento_Subrubro`),
  KEY `id_categoria_elemeto` (`Fk_Id_Categoria_Elemento`),
  KEY `Fk_Id_Subrubro` (`Fk_Id_Subrubro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `tbl_elementos_subrubros`
--

INSERT INTO `tbl_elementos_subrubros` (`Pk_Id_Elemento_Subrubro`, `Nombre_Elemento`, `Cantidad_Elemento`, `Precio_Elemento`, `Medida_Elemento`, `Fk_Id_Categoria_Elemento`, `Fk_Id_Subrubro`) VALUES
(1, 'Harina', 10, 1, 'Libras ', 2, 18),
(2, 'Agua', 12, 4, 'Litros ', 2, 18),
(9, 'café', 13, 2, 'Libras ', 2, 20),
(11, 'tortillas de maiz', 100, 1, 'Litros ', 2, 21),
(12, 'chile', 10, 1, 'Litros ', 2, 21),
(13, 'tomates', 10, 1, 'Litros ', 2, 21),
(14, 'cebolla', 2, 0.25, 'Litros ', 2, 21),
(15, 'aceite', 1, 1.5, 'Litros ', 2, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_eventos`
--

CREATE TABLE IF NOT EXISTS `tbl_eventos` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date NOT NULL,
  `titulo_evento` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_fin` date NOT NULL,
  `contenido_evento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Estado_Evento` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tbl_eventos`
--

INSERT INTO `tbl_eventos` (`id_evento`, `fecha_inicio`, `titulo_evento`, `fecha_fin`, `contenido_evento`, `ubicacion`, `Estado_Evento`) VALUES
(1, '2019-01-28', 'Feria de Emprendedoras', '2019-01-29', 'Es una feria de emprendimientos para todas las usurias de ciudad mujer san miguel.', 'Parque Gúzman San Miguel.', ''),
(2, '2019-01-09', 'Graduación de cursos de electricidad de todas las sedes de Ciudad Mujer ', '2019-01-09', 'Será la cuarta graducion de electricistas a las 10:00 am de todas las sedes de ciudad mujer     ', 'Hotel Presindente, San Salvador ', ''),
(6, '2018-12-18', 'inicio de curso de panaderia', '2018-12-18', 'sera a las 10:00 pm ', 'san miguel, cancha Alvarez', ''),
(7, '2018-12-10', 'Inicio de curso de pasteleria', '2018-12-11', 'solo es para usuarias registradas a las 10:00 am', 'Sede santa ana', ''),
(8, '2019-01-13', 'inicio de curso de 4ta categoria electricidad', '2019-01-13', 'Inicio de curso de instalaciones electricas de 4ta categoria a las 8:00 am. en el ITCA San Miguel, Requisitos Saber leer y escribir', 'Itca Fepade San Miguel', ''),
(9, '2019-01-17', 'Capacitación de Marketing Digital', '2019-01-17', 'Paras emprendedoras que estan inscritas en Conamype. a las 10:00 am en las oficinas de la institución en Ciudad Mujer Santa Ana\r\n', 'Sede Santa Ana', ''),
(10, '2019-01-25', 'Presentación de nueva institución de ciudad mujer', '2019-01-25', 'se mostrará al publico que servicios brindará en las sedes de ciudad mujer', 'san salvador, Hotel Presidente', ''),
(11, '2019-02-03', 'Feria de emprendedoras', '2019-02-05', 'para las emprendedoras de ciudad mujer, acercarse un dia antes para más información', 'Parque de Usulután', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_guias_multimedia`
--

CREATE TABLE IF NOT EXISTS `tbl_guias_multimedia` (
  `pk_Id_Guia` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Titulo_Guia` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `Tipo_publicacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Video_Multimedia` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Documento_Guia` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci,
  `Descripcion_Guia` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`pk_Id_Guia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `tbl_guias_multimedia`
--

INSERT INTO `tbl_guias_multimedia` (`pk_Id_Guia`, `FK_Id_Usuaria`, `Titulo_Guia`, `Fecha_Publicacion`, `Tipo_publicacion`, `Video_Multimedia`, `Documento_Guia`, `Contenido`, `Descripcion_Guia`, `Imagen`) VALUES
(19, 1, 'El uso de redes sociales en las empresas', '2018-11-15', 'Video', 'yhKY9HdOGaQ', '', '<p style="text-align: justify;">Cada vez m&aacute;s empresas de todos los sectores usan las redes sociales pues las consideran canales de comunicaci&oacute;n valiosos ya que a trav&eacute;s de ellas pueden promocionarse de manera sencilla y efectiva en la nube, obteniendo de ese modo importantes beneficios en t&eacute;rminos de negocio. En efecto, seg&uacute;n datos estad&iacute;sticos, alrededor de 6 cada 10 empresas espa&ntilde;olas utilizan actualmente los medios de comunicaci&oacute;n social con el prop&oacute;sito de promover sus marcas, optimizar la comunicaci&oacute;n y fomentar la participaci&oacute;n de los consumidores para conocerlos mejor. As&iacute;, por ejemplo, podemos hacer Re-Tuits en el hastag <a href="https://twitter.com/AlarmasSpain" target="_blank" rel="nofollow noopener">Securitas Direct Twitter</a> y acceder al contenido que provee esta empresa l&iacute;der en sistemas de alarmas. Otro caso es el de Remica, compa&ntilde;&iacute;a dedicada a la eficiencia energ&eacute;tica, que a trav&eacute;s del <a href="http://www.youtube.com/user/remicaES" target="_blank" rel="nofollow noopener">Canal de Remica </a>da a conocer mediante videos subidos a Youtube sus servicios y todas las novedades referidas al sector. Esto es solo una muestra del enorme poder que poseen los Social Media para promocionar una marca y fidelizar clientes.<br />M&aacute;s oportunidades</p>\r\n<p style="text-align: justify;"><br />Potenciar la imagen de una marca o empresa y conocer m&aacute;s a sus clientes, son algunas de las cuestiones que explican el aumento del uso de las redes sociales a nivel empresarial. Aunque tambi&eacute;n son consideradas una excelente y enriquecedora herramienta para mejorar el servicio que brindan, no s&oacute;lo a los consumidores sino adem&aacute;s al p&uacute;blico interno de las organizaciones. De este modo, las comunidades virtuales posibilitan estar en contacto con los p&uacute;blicos relacionados con la empresa, aprovechando m&aacute;s y mejor las oportunidades.<br />Para poder incorporar las redes sociales en el &aacute;mbito laboral, las compa&ntilde;&iacute;as suelen optar por crear foros de debate o redes sociales a medida, e incluso eligen explotar de una manera m&aacute;s abierta a las redes sociales ya existentes. En algunos casos, por ejemplo, deciden crear un foro en Linkedin, una p&aacute;gina o grupo en Facebook o un hastag dentro de Twitter, para que los clientes y el p&uacute;blico en general puedan mantenerse al tanto sobre las &uacute;ltimas novedades de la marca. Si bien hay m&aacute;s de mil redes sociales, es incuestionable que Twitter y Facebook gozan de mayor popularidad entre los usuarios con perfiles activos.</p>\r\n<p style="text-align: justify;"><br />En la actualidad, el empleo de las redes sociales por parte de las empresas es condici&oacute;n b&aacute;sica e indispensable para poder interactuar con los clientes. Los usuarios de este tipo de comunidades virtuales se encuentran constantemente influenciados, siendo &eacute;ste un factor determinante que incide en las decisiones de compra del usuario.<br />Por medio de su presencia en los Social Media, las compa&ntilde;&iacute;as tienen la posibilidad de recomendar su p&aacute;gina a sus contactos, quienes a su vez pueden recomendarla a sus amigos.<br />Sin embargo, algunas empresas dan cuenta de la existencia de ciertos inconvenientes en el uso de estos medios, como las complicaciones para medir el efecto y alcance logrado o la necesidad de tener que actualizar permanentemente los perfiles. Incluso, hay compa&ntilde;&iacute;as que desconocen cu&aacute;l es la manera correcta&nbsp; de estar en las redes sociales.</p>', 'Cada vez más empresas de todos los sectores usan las redes sociales pues las consideran canales de comunicación valiosos ya que a través de ellas pueden promocionarse de manera sencilla y efectiva en la nube, obteniendo de ese modo importantes beneficios en términos de negocio. En efecto, según datos estadísticos, alrededor de 6 cada 10 empresas españolas utilizan actualmente los medios de comunicación social con el propósito de promover sus marcas, optimizar la comunicación y fomentar la participación de los consumidores para conocerlos mejor. Así, por ejemplo, podemos hacer Re-Tuits en el hastag Securitas Direct Twitter y acceder al contenido que provee esta empresa líder en sistemas de alarmas', 'img.jpeg'),
(23, 1, 'Tipos de contrato de trabajo en El Salvador', '2018-10-01', 'Documento', '', 'guia_doc.docx', '<p>As&iacute;, el tener claro el tipo de contrataci&oacute;n que una empresa te ofrece te permitir&aacute; conocer detalles como el reconocimiento de prestaciones de ley, como seguro social y AFP, el porcentaje de renta que deber&aacute;n descontarte, las horas m&aacute;ximas de trabajo que pueden exigir a la semana, etc.<br /><br />Contrato de trabajo por tiempo indefinido <br />Esta contrataci&oacute;n se da cuando el empleado forma parte de un equipo fijo de trabajo, para realizar actividades de manera permanente dentro de la empresa. Una de las caracter&iacute;sticas de este tipo de contrato consiste en que no delimita una fecha de caducidad del acuerdo entre la empresa y el trabajador. Sin embargo, al igual que la mayor&iacute;a de contratos, suele establecer que tanto el contratista como el empleado pueden romper el acuerdo en cualquier momento, siempre y cuando se respete el marco legal. Los contratos por tiempo indefinido suelen otorgarse a:<br /><br />&bull; Puestos gerenciales y de alto nivel.<br />&bull; Representantes de empresas internacionales.<br />&bull; Plazas de coordinaci&oacute;n.<br />&bull; Plazas dedicadas a la prestaci&oacute;n de servicios espec&iacute;ficos.<br /><br />Contrato de trabajo por per&iacute;odo determinado <br />Esta es una contrataci&oacute;n t&iacute;picamente utilizada para la elaboraci&oacute;n de proyectos a corto y mediano plazo, puede firmarse por unos cuantos d&iacute;as hasta varios meses o incluso a&ntilde;os. Sin embargo, establece desde el acuerdo una fecha de caducidad del mismo, usualmente porque se requerir&aacute; del empleado un servicio meramente temporal. Este tipo de contratos suele utilizarse para empleos como:<br /><br />&bull; Construcci&oacute;n.<br />&bull; Consultor&iacute;as.<br />&bull; Para suplir permisos de empleados fijos (como licencias de maternidad).<br />&bull; Proyectos ejecutados para un per&iacute;odo determinado de tiempo.<br /><br />Contrato de trabajo por servicios profesionales <br />Como su nombre lo indica, estos contratos suceden cuando la empresa solicita servicios espec&iacute;ficos a un profesional, quien suele trabajar como consultor. Normalmente, el contrato por servicios profesionales se acuerda en base a productos espec&iacute;ficos que el empleado debe entregar y la empresa recibir de manera conforme. Al mismo tiempo, este tipo de contrataciones no reconocen las prestaciones de ley ni otorgan al empleado un lugar fijo dentro de las instalaciones de la instituci&oacute;n.<br /><br />Este tipo de contratos suele indicar elementos previamente acordados por ambas partes como tiempos de entrega, pago total por servicios, retenci&oacute;n de renta o pago de IVA, seg&uacute;n sea el caso, as&iacute; como productos espec&iacute;ficos que el consultor deber&aacute; entregar. Las empresas recurren a estos contratos para solicitar:<br /><br />&bull; Consultor&iacute;as sobre temas espec&iacute;ficos.<br />&bull; Servicios externos por un per&iacute;odo corto de tiempo.<br />&bull; Productos que pueden ser elaborados de manera &ldquo;freelance&rdquo; por un profesional en el &aacute;rea.<br /><br />Respecto a este tipo de contratos, es necesario destacar que es de suma importancia que tanto el profesional como la empresa respeten lo acordado al momento de firmar, pues esto evitar&aacute; inconvenientes que puedan requerir intervenci&oacute;n legal para ser solucionados. Por otro lado, el profesional que acepta este tipo de contratos debe esforzarse para entregar un servicio de calidad, que le permita hacerse de nuevos clientes para mantener buenas relaciones personales y profesionales como consultor independiente.<br /><br />Contrato de trabajo para un per&iacute;odo de prueba <br />Es com&uacute;n que las empresas, al momento de contratar un nuevo empleado para una plaza fija, se determine entregar a este un primer contrato para que se realice el per&iacute;odo de prueba, durante el cual ambas partes pueden dar por terminada la relaci&oacute;n profesional, a partir de los motivos que estimen convenientes. Estos contratos suelen tener una duraci&oacute;n de tres meses, pues se considera que es el tiempo suficiente para que el empleado conozca a la empresa, as&iacute; como la empresa al empleado, permitiendo iniciar una relaci&oacute;n profesional entre ambas partes.<br /><br />El c&oacute;digo de trabajo de El Salvador indica que al celebrar este tipo de contratos, y transcurre el per&iacute;odo definido del mismo y ninguna de las partes decide terminar, el contrato pasar&aacute; a ser por tiempo indefinido a menos que se cree un nuevo contrato con un tiempo determinado. Sin importar cu&aacute;l sea el caso, el contrato por per&iacute;odo de prueba no puede celebrarse m&aacute;s de una vez entre las partes.<br /><br />Contrato de trabajo para interinatos <br />Suelen darse cuando una plaza se ha desocupado y la empresa necesita llenarla de manera temporal, mientras encuentran un nuevo empleado fijo para la misma. Una de sus principales caracter&iacute;sticas es que permite al empleado que cubrir&aacute; la plaza gozar de los mismos derechos que los empleados fijos, exceptuando la inmovilidad laboral, si es que estuviese contemplada en la plaza permanente.<br /><br />Sin embargo, a menos que el empleado interino sea incorporado como permanente dentro de la empresa, al momento de contar con un nuevo empleado para cubrir la plaza fija, la empresa puede terminar el contrato de interinato en el momento que lo desee.<br /><br />Consejos adicionales <br />Si bien el C&oacute;digo de Trabajo estipula otros tipos de contrato adem&aacute;s de los descritos anteriormente, estos son los m&aacute;s comunes para las empresas salvadore&ntilde;as. No obstante, es necesario que al recibir alguno de estos, tomes en cuenta las siguientes consideraciones:<br /><br />&bull; Lee el contrato detenidamente, no lo firmes antes de estar completamente seguro de todas las condiciones expuestas en el mismo.<br /><br />&bull; Consulta tus dudas, antes de firmar, consulta con la empresa cualquier duda que tengas y, si no est&aacute;s de acuerdo con alg&uacute;n apartado, expr&eacute;salo de forma oportuna, para evaluar una alternativa posible.<br /><br />&bull; Conoce tus derechos y responsabilidades como empleado, investiga el marco legal que respalda el tipo de contrato que la empresa te ofrece, as&iacute; como las obligaciones que debes cumplir como empleado al firmar un contrato en particular.<br /><br />&bull; Cumple cada uno de los acuerdos, pues ello te evitar&aacute; la terminaci&oacute;n del contrato por parte de la empresa as&iacute; como posibles sanciones por faltas a lo estipulado en el contrato firmado.<br /><br />&bull; Solicita el contrato antes de iniciar, sobre todo si se trata de una consultor&iacute;a, pues tener el contrato te permitir&aacute; saber con claridad detalles como las fechas de entrega, productos solicitados, fechas de pago, etc.<br /><br />Sin importar cu&aacute;l sea el tipo de contrato de trabajo que te ofrezcan, recuerda que debes demostrar a la empresa la calidad de profesional que eres, para que tengan una buena imagen de ti y tu trabajo y, as&iacute;, puedan considerarte para ocasiones futuras, ya sea para servicios concretos o para formar parte de su equipo permanente de trabajo.<br /><br />Si reci&eacute;n inicias tu vida profesional, no tengas miedo de aceptar empleos bajo las modalidades descritas anteriormente, recuerda que el pa&iacute;s cuenta con regulaciones claras que te permitir&aacute;n saber si la empresa est&aacute; actuando correctamente, as&iacute; como tus derechos y obligaciones como empleado</p>\r\n<div><br />Leer m&aacute;s: <a href="https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx#ixzz5UCxIqCvf" target="_blank" rel="nofollow noopener">https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx#ixzz5UCxIqCvf</a></div>\r\n<p>&nbsp;</p>', 'En El Salvador, al igual que en el resto del mundo, existe un marco legal que regulariza los tipos de contrato de trabajo, con el fin de establecer parámetros claros que tanto las empresas como los trabajadores deben respetar. Estas normas se encuentran estipuladas dentro del Código de Trabajo, regulado por el Ministerio de Trabajo de El Salvador.Leer más: https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx#ixzz5UD11E0VM', '2_LILY.jpg'),
(26, 1, 'Ideas de negocio para importar', '2018-10-23', 'Video', '24v24y_gctk', '', '<p>Marca de pintores de calidad<br />Gqdecorators. Hay sectores en los que hay una oferta microfragmentada que nadie se ha preocupado en reunir bajo una &uacute;nica marca.<br />En Gran Breta&ntilde;a GQ Decorators lo ha hecho con pintores de brocha gorda con buena reputaci&oacute;n.<br />&ldquo;&iquest;S&oacute;lo ofrecen pintores? En Espa&ntilde;a no lo veo, al menos en el momento que estamos. Hay menos obra, menos reforma... la alta gama es demasiado reducida. Adem&aacute;s, en nuestro pa&iacute;s, quien busca pintores de nivel y tiene dinero acude a interioristas o recurre a alguien que le prescribe a esos profesionales. No se dirige a ellos directamente. Para que pudiera funcionar un modelo de marca de calidad en Espa&ntilde;a, habr&iacute;a que empezar por ampliar esta ense&ntilde;a a m&aacute;s profesionales: pintores, interioristas, fontaneros, arquitectos para peque&ntilde;a obra...&rdquo;, se&ntilde;ala Eduardo Sicilia, experto en creaci&oacute;n de empresas y an&aacute;lisis de modelos de negocio de la EOI. &ldquo;Si se quisiera sacar adelante esta idea, adem&aacute;s, habr&iacute;a que bajarla de nivel; no s&oacute;lo dirigirse a un cliente de alta gama, sino ofrecer distintos precios para distintos consumidores: ir a gama alta, pero tambi&eacute;n a una gama media&rdquo;, a&ntilde;ade.<br />&ldquo;Creo que siempre es negocio hacer asequible para unos muchos algo que estaba antes al alcance de unos pocos&rdquo;, contin&uacute;a este experto. &ldquo;Y tiene que tener una capa de tecnolog&iacute;a. Los procesos de compra son largos y hay que reducirlos&rdquo;, concluye Sicilia.<br />PROS: La tecnolog&iacute;a juega un papel importante. Ahora puedes visualizar por ejemplo, en 3D o 4D, lo que antes no se pod&iacute;a. Eso es una ayuda emocional a la compra.<br />CONTRA: Hay un largo proceso de decisi&oacute;n. Tienes que introducir elementos que ayuden a reducir los tiempos. Eso requiere inversi&oacute;n en tecnolog&iacute;a (a pesar de la naturaleza del negocio) e invertir (mucho) en marketing.<br />Alquiler de espacios y exposiciones en locales de post&iacute;n<br />A space for art. Conectar espacios emblem&aacute;ticos con galer&iacute;as de arte y con artistas que quieren exponer m&aacute;s all&aacute; de los locales habituales y que quieren dirigirse a un p&uacute;blico de alto poder adquisitivo.<br />Esa es la propuesta brit&aacute;nica Space for Art: intermediaci&oacute;n para el alquiler de espacios y exposiciones en locales de post&iacute;n en ciudades como Londres o Berl&iacute;n.<br />&ldquo;Para que una propuesta de este tipo funcione, hay que bajarla de estatus. El nivel alto es muy limitado en nuestro pa&iacute;s. &iquest;Cu&aacute;ntos consumidores hay de gran pintura y que sean consumidores de esos espacios de post&iacute;n? Hay m&aacute;s gente que tiene muchas cosas para ense&ntilde;ar y que no se puede permitir ir a una galer&iacute;a&rdquo;, plantea, de partida, Eduardo Sicilia.<br />&ldquo;A su favor tiene que hay mucho espacio infrautilizado. Al final se trata de hacer venta cruzada. Tiene usted este patio infrautilizado y puede sacarle dinero exponiendo estas obras de arte&rdquo;, propone Ar&iacute;stides Senra, que matiza que &ldquo;no obstante, creo que el mercado espa&ntilde;ol es muy peque&ntilde;o; tiene que plantearse como una oferta m&aacute;s amplia&rdquo;.<br />&ldquo;Tambi&eacute;n hay que tener en cuenta que existe mucho intrusismo p&uacute;blico. Se est&aacute;n potenciando los espacios de exposiciones p&uacute;blicos, que ser&iacute;an competencia directa&rdquo;, contin&uacute;a este experto.<br />PROS: Es un negocio de intermediaci&oacute;n que no requiere una gran inversi&oacute;n, m&aacute;s all&aacute; del mantenimiento de la p&aacute;gina web. Requiere un trabajo comercial de suela de goma para encontrar los espacios. Se puede ampliar a eventos.<br />CONTRA: Por un lado, la limitaci&oacute;n del mercado espa&ntilde;ol del arte. Por otro, la facilidad de la empresa brit&aacute;nica de entrar con su propuesta (ya demostrada en dos pa&iacute;ses) en Espa&ntilde;a. Pero bueno, siempre te pueden contratar...<br />Droguer&iacute;a online con marca blanca y modelo de suscripci&oacute;n<br />Korodroguerie.de. Descuentos de hasta un 25% en el suministro de productos de limpieza para el hogar y productos de droguer&iacute;a a trav&eacute;s de una marca blanca que se distribuye online con un modelo de suscripci&oacute;n. &iquest;Podr&iacute;a calar en nuestro mercado?<br />&ldquo;El mercado est&aacute; ya saturado de parafarmacias que se dirigen a un cliente online sin ofertas de paquetes de productos. Ahora mismo hay ocho competidores fuertes. Posicionarte en este mercado es complicado, puedes tener tus acuerdos con las empresas, pero para ese modelo ya llegas tarde. Pero si vas a paquetes, no est&aacute; desarrollado&rdquo;, plantea Ignacio Grim&aacute;, experto en evaluaci&oacute;n de empresas del Instituto de Empresa. &ldquo;Para particulares tiene sentido un modelo de paquetizaci&oacute;n. Que traslade esos rappeles al consumidor final. En parafarmacia no existe; en droguer&iacute;a, tampoco. Para el cliente-empresa, ya existe oferta offline. Y online no le vas a aportar nada. Un hotel ya sabe a quien tiene que contratarle esos productos.<br />Van al mejor precio y al mejor servicio. Ah&iacute; no tiene mucho sentido&rdquo;, contin&uacute;a este experto.<br />&ldquo;Puede funcionar, pero no tiene ninguna barrera de entrada. Al dirigirte al consumidor final, necesitas una inversi&oacute;n fuerte en marketing&rdquo;, se&ntilde;ala Senra.<br />&ldquo;En este mercado (la droguer&iacute;a), la competencia f&iacute;sica ya se ha dado de bruces con la realidad del mercado. El &uacute;nico al que le ha funcionado la marca blanca es a Mercadona. Se ha cargado a los competidores f&iacute;sicos y si el competidor online no ofrece nada nuevo, no va a funcionar.<br />PROS: Si eres capaz de generar confianza, hay un hueco en el mercado. En una cadena hotelera, el director de compras sabe si el producto de marca blanca es bueno o no.<br />CONTRA: &iquest;D&oacute;nde est&aacute; el enganche para la confianza? En las marcas blancas, la palanca est&aacute; en la confianza. En un establecimiento lo f&iacute;sico lo tienes ganado, pero &iquest;y online?</p>', 'Hemos buscado modelos de negocio interesantes en otros países para que te inspires.', 'anuncioP1.jpg'),
(27, 1, ' 5 cosas que hacen los emprendedores productivos ', '2018-10-25', 'Documento', '', 'NOTICIAS.docx', '<p>zxcvbnm,mnbvcdx de fefr gr t df &lt;h1&gt; hola &lt;/h1&gt;</p>', 'Los verdaderos líderes de negocios aprovechan al máximo su día cultivando hábitos efectivos que les dan la ventaja.', '2_LILY.jpg'),
(28, 2, ' Mejorar tu negocio en 30 días: consejos básicos', '2019-01-09', 'Documento', '', 'invitacion navidad.docx', '<p>&nbsp;</p>\r\n<h3>1. Causa una buena primera impresi&oacute;n</h3>\r\n<p>Los seres humanos utilizamos un mecanismo de autodefensa que consiste en evaluar r&aacute;pidamente a las personas (y a sus negocios). Hazte estas preguntas: &iquest;Qu&eacute; impresi&oacute;n ofrece la web de tu negocio? &iquest;Y tu sala de espera frente a la recepci&oacute;n? &iquest;Qu&eacute; aspecto tiene tu parking de clientes? &iquest;A qu&eacute; huele tu tienda cuando entras?</p>\r\n<h3>2.&nbsp;Haz que el precio sea un detalle menor</h3>\r\n<p>Haz que el precio sea un detalle menor. <strong>Cu&aacute;nto cuesta o cu&aacute;nto cobras debe ser lo menos importante en una negociaci&oacute;n</strong>. Lo importante es la tremenda cantidad de beneficios que se consigue por ser tu cliente. Haz que ESO sea lo importante.</p>\r\n<h3>3. Cuida tu marca</h3>\r\n<p>Tu marca no es lo que tu decides que sea. <strong>Tu marca es lo que ocurre cuando entras en Google y la escribes</strong>. O en Bing. O lo que dicen dos personas en la cafeter&iacute;a sobre ti hablando de tus productos o tus servicios. O lo que dicen en Facebook. Eres tan bueno como lo &uacute;ltimo que hayas hecho.</p>\r\n<h3>4. El &eacute;xito puede destruirte</h3>\r\n<p>Cuando has logrado ese gran cliente que pretend&iacute;as o cuando has hecho los mejores n&uacute;meros del a&ntilde;o. Cuando has tenido el mejor verano en ventas. Entonces&hellip;Entonces es cuando te relajas. Cuando dejas de estar hambriento. Cuando te conf&iacute;as. <strong>No pierdas el foco</strong>.</p>\r\n<h3>5.&nbsp;Cumple lo que prometes</h3>\r\n<p><strong>Las 9 y 25 no son las 9 y 32.</strong> Si tienes una tienda y la hora de que indicas de apertura es las 9 y 30 debes estar preparado a esa hora. Es muy irritante para un cliente esperar a que abran un negocio. &iquest;Por qu&eacute; te crees que en Ikea salen a ofrecerte caf&eacute; mientras es la hora de apertura? Llega antes a tu negocio. Llega arreglado. Y cuando abras, que est&eacute; limpio, la calle barrida, el caf&eacute; preparado y listo para vender desde el minuto 1.</p>\r\n<div class="code-block code-block-4" style="margin: 8px auto; text-align: center; clear: both;">\r\n<div id="div-gpt-ad-1533728481127-3">&nbsp;</div>\r\n</div>\r\n<h3>6. No te obsesiones con las &ldquo;t&eacute;cnicas de cierre&rdquo;</h3>\r\n<p>Haz como har&iacute;a cualquier profesional, pregunta: <em>bien, &iquest;qu&eacute; es lo siguiente?</em> Si lo que toca es hablar de precio y llegar a un acuerdo, hazlo. Nada m&aacute;s.</p>\r\n<h3>7. Tu negocio no es especial</h3>\r\n<p>Tu negocio es como el de los dem&aacute;s. Necesita dinero entrando. Gente motivada. Costes controlados. Innovaci&oacute;n cont&iacute;nua. &iquest;Quien est&aacute; haciendo todo eso?</p>\r\n<h3>8. La rentabilidad es importante</h3>\r\n<p>&iquest;Quieres ser grande? NO. <strong>Lo que realmente necesitas es ser rentable</strong>.</p>\r\n<h3>9. El servicio que ofreces&nbsp;deja huella</h3>\r\n<p>No necesitas la oficina m&aacute;s bonita, ni el &uacute;ltimo m&oacute;vil o coche para impresionar a tus clientes. <strong>Tus clientes se impresionan con el mejor servicio</strong>.</p>\r\n<h3>10. &iquest;Te gusta lo que haces?</h3>\r\n<p><strong>&iquest;Est&aacute;s motivado con tu negocio?</strong> &iquest;Te levantas todas las ma&ntilde;anas ilusionado? &iquest;No? Busca otra cosa.&nbsp; </p>', 'Seguro que alguna vez te has planteado cómo mejorar tu negocio. Te mostramos aquí 30 ideas básicas para que tu negocio mejore en un período corto de tiempo: en 30 días.  ', 'opinion-clientes.jpg'),
(33, 1, 'ESTO ES UNA PRUEBA', '2019-01-28', 'Documento', '', '', '<p>ZXSCDVFBGNHMJ, K</p>', 'SFDGHJKL', '3_ROXY.jpg'),
(34, 1, 'A VER DOI KS KS', '2019-01-29', 'Video', 'J_ub7Etch2U', '', '<p>SADFGHJK, NBVCCVBFNG MJ,VCVXBGNMH,JK.,JMNHBGFVDCVBF NM,NBV HTGFHBGHBDDDD</p>', 'ESTO ES PRUEBA', '3_ROXY.jpg'),
(35, 1, 'sdfghjkl', '2019-01-30', 'Documento', '', 'soliciitud.docx', 'sadsfghjkllkhgfddsfghyjklhbvcxcvbfngmh,j<br>', 'xcvbgnhjmk,.', '1_TECNO.jpg'),
(36, 2, 'Titulo', '2019-01-29', 'Documento', '', 'invitacion navidad.docx', 'Descripcion<br>', 'Descripcion', 'vendedor.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingresos`
--

CREATE TABLE IF NOT EXISTS `tbl_ingresos` (
  `PK_Id_Ingreso` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuario` int(11) DEFAULT NULL,
  `Nombre_Ingreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Ingreso` float NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  PRIMARY KEY (`PK_Id_Ingreso`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=114 ;

--
-- Volcado de datos para la tabla `tbl_ingresos`
--

INSERT INTO `tbl_ingresos` (`PK_Id_Ingreso`, `FK_Id_Usuario`, `Nombre_Ingreso`, `Cantidad_Ingreso`, `Fecha_Ingreso`) VALUES
(2, 1, 'Dinero disponible al principio del mes', 1000, '2018-10-01'),
(3, 1, 'Ventas en efectivo', 490, '2018-10-01'),
(4, 1, 'Efectivo por ventas al credito', 50, '2018-10-01'),
(5, 1, 'Otros ingresos', 100, '2018-10-01'),
(6, 1, 'Remesas', 300, '2018-10-01'),
(7, 1, 'Dinero disponible al principio del mes', 1000, '2018-11-01'),
(8, 1, 'Ventas en efectivo', 500, '2018-11-01'),
(9, 1, 'Efectivo por ventas al credito', 100, '2018-11-01'),
(10, 1, 'Otros ingresos', 50, '2018-11-01'),
(11, 1, 'Remesas', 50, '2018-11-01'),
(12, 1, 'Regalias', 400, '2018-11-01'),
(13, 15, 'Dinero disponible al principio del mes', 100, '2018-10-16'),
(14, 15, 'Ventas en efectivo', 100, '2018-10-16'),
(15, 15, 'Efectivo por ventas al credito', 25, '2018-10-16'),
(16, 15, 'Otros ingresos', 75, '2018-10-16'),
(17, 1, 'Dinero disponible al principio del mes', 100, '2018-10-18'),
(18, 1, 'Ventas en efectivo', 10, '2018-10-18'),
(19, 1, 'Efectivo por ventas al credito', 10, '2018-10-18'),
(20, 1, 'Otros ingresos', 10, '2018-10-18'),
(21, 1, 'Remesas', 11, '2018-10-18'),
(22, 1, 'Regalias', 11, '2018-10-18'),
(23, 1, 'Dinero disponible al principio del mes', 10, '2018-10-24'),
(24, 1, 'Ventas en efectivo', 10, '2018-10-24'),
(25, 1, 'Efectivo por ventas al credito', 100, '2018-10-24'),
(26, 1, 'Otros ingresos', 10, '2018-10-24'),
(27, 1, 'Remesas', 100, '2018-10-24'),
(28, 1, 'Regalias', 100, '2018-10-24'),
(29, 15, 'Dinero disponible al principio del mes', 300, '2018-10-23'),
(30, 15, 'Ventas en efectivo', 100, '2018-10-23'),
(31, 15, 'Efectivo por ventas al credito', 400, '2018-10-23'),
(32, 15, 'Otros ingresos', 100, '2018-10-23'),
(33, 15, 'remesas', 100, '2018-10-23'),
(34, 15, 'regalias', 100, '2018-10-23'),
(35, 24, 'Dinero disponible al principio del mes', 500, '2018-12-04'),
(36, 24, 'Ventas en efectivo', 123, '2018-12-04'),
(37, 24, 'Efectivo por ventas al credito', 12, '2018-12-04'),
(38, 24, 'Otros ingresos', 34, '2018-12-04'),
(39, 34, 'Dinero disponible al principio del mes', 500, '2018-12-04'),
(40, 34, 'Ventas en efectivo', 300, '2018-12-04'),
(41, 34, 'Efectivo por ventas al credito', 10, '2018-12-04'),
(42, 34, 'Otros ingresos', 100, '2018-12-04'),
(43, 24, 'Dinero disponible al principio del mes', 300, '2018-12-01'),
(44, 24, 'Ventas en efectivo', 200, '2018-12-01'),
(45, 24, 'Efectivo por ventas al credito', 35, '2018-12-01'),
(46, 24, 'Otros ingresos', 200, '2018-12-01'),
(47, 1, 'Dinero disponible al principio del mes', 100, '2018-12-05'),
(48, 1, 'Ventas en efectivo', 23, '2018-12-05'),
(49, 1, 'Efectivo por ventas al credito', 2, '2018-12-05'),
(50, 1, 'Otros ingresos', 22, '2018-12-05'),
(51, 1, 'Remesas', 22, '2018-12-05'),
(52, 1, 'Regalias', 1, '2018-12-05'),
(53, 24, 'Dinero disponible al principio del mes', 300, '2019-01-04'),
(54, 24, 'Ventas en efectivo', 250, '2019-01-04'),
(55, 24, 'Efectivo por ventas al credito', 25, '2019-01-04'),
(56, 24, 'Otros ingresos', 300, '2019-01-04'),
(57, 24, 'Dinero disponible al principio del mes', 300, '2018-12-05'),
(58, 24, 'Ventas en efectivo', 200, '2018-12-05'),
(59, 24, 'Efectivo por ventas al credito', 125, '2018-12-05'),
(60, 24, 'Otros ingresos', 500, '2018-12-05'),
(61, 24, 'Dinero disponible al principio del mes', 500, '2019-01-14'),
(62, 24, 'Ventas en efectivo', 1500, '2019-01-14'),
(63, 24, 'Efectivo por ventas al credito', 250, '2019-01-14'),
(64, 24, 'Otros ingresos', 1200, '2019-01-14'),
(65, 24, 'remesas', 250, '2019-01-14'),
(66, 24, 'Dinero disponible al principio del mes', 500, '2019-01-22'),
(67, 24, 'Ventas en efectivo', 600, '2019-01-22'),
(68, 24, 'Efectivo por ventas al credito', 200, '2019-01-22'),
(69, 24, 'Otros ingresos', 100, '2019-01-22'),
(70, 24, 'remesas', 125, '2019-01-22'),
(71, 24, 'venta de revistas', 100, '2019-01-22'),
(72, 24, 'Dinero disponible al principio del mes', 600, '2019-01-10'),
(73, 24, 'Ventas en efectivo', 300, '2019-01-10'),
(74, 24, 'Efectivo por ventas al credito', 200, '2019-01-10'),
(75, 24, 'Otros ingresos', 500, '2019-01-10'),
(76, 24, 'remesas', 800, '2019-01-10'),
(77, 24, 'venta de revistas', 250, '2019-01-10'),
(78, 24, 'venta de Herba life', 150, '2019-01-10'),
(79, 24, 'Dinero disponible al principio del mes', 100, '2019-01-01'),
(80, 24, 'Ventas en efectivo', 1000, '2019-01-01'),
(81, 24, 'Efectivo por ventas al credito', 500, '2019-01-01'),
(82, 24, 'Otros ingresos', 600, '2019-01-01'),
(83, 24, 'remesas', 150, '2019-01-01'),
(84, 24, 'venta de revistas', 100, '2019-01-01'),
(85, 24, 'venta de Herba life', 125, '2019-01-01'),
(86, 24, 'Dinero disponible al principio del mes', 1234, '2019-01-22'),
(87, 24, 'Ventas en efectivo', 123, '2019-01-22'),
(88, 24, 'Efectivo por ventas al credito', 1234, '2019-01-22'),
(89, 24, 'Otros ingresos', 1234, '2019-01-22'),
(90, 24, 'remesas', 1234, '2019-01-22'),
(91, 24, 'venta de revistas', 234, '2019-01-22'),
(92, 24, 'venta de Herba life', 234, '2019-01-22'),
(93, 24, 'Dinero disponible al principio del mes', 1700, '2018-11-11'),
(94, 24, 'Ventas en efectivo', 678, '2018-11-11'),
(95, 24, 'Efectivo por ventas al credito', 590, '2018-11-11'),
(96, 24, 'Otros ingresos', 459, '2018-11-11'),
(97, 24, 'remesas', 345, '2018-11-11'),
(98, 24, 'venta de revistas', 1233, '2018-11-11'),
(99, 24, 'venta de Herba life', 453, '2018-11-11'),
(100, 24, 'Dinero disponible al principio del mes', 2300, '2018-10-01'),
(101, 24, 'Ventas en efectivo', 1500, '2018-10-01'),
(102, 24, 'Efectivo por ventas al credito', 3000, '2018-10-01'),
(103, 24, 'Otros ingresos', 2000, '2018-10-01'),
(104, 24, 'remesas', 1000, '2018-10-01'),
(105, 24, 'venta de revistas', 150, '2018-10-01'),
(106, 24, 'venta de Herba life', 158, '2018-10-01'),
(107, 24, 'Dinero disponible al principio del mes', 1000, '2019-01-01'),
(108, 24, 'Ventas en efectivo', 325, '2019-01-01'),
(109, 24, 'Efectivo por ventas al credito', 560, '2019-01-01'),
(110, 24, 'Otros ingresos', 980, '2019-01-01'),
(111, 24, 'remesas', 800, '2019-01-01'),
(112, 24, 'venta de revistas', 875, '2019-01-01'),
(113, 24, 'venta de Herba life', 1200, '2019-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingresos_egresos_balance`
--

CREATE TABLE IF NOT EXISTS `tbl_ingresos_egresos_balance` (
  `FK_Id_Balance` int(11) NOT NULL,
  `FK_Id_Egreso` int(11) NOT NULL,
  `Nombre_Operacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Total_Ingreso` float NOT NULL,
  KEY `id_egreso` (`FK_Id_Egreso`),
  KEY `FK_Id_Balance` (`FK_Id_Balance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_ingresos_egresos_balance`
--

INSERT INTO `tbl_ingresos_egresos_balance` (`FK_Id_Balance`, `FK_Id_Egreso`, `Nombre_Operacion`, `Total_Ingreso`) VALUES
(35, 112, 'Gasto', 1940),
(35, 113, 'Gasto', 1940),
(35, 114, 'Gasto', 1940),
(35, 115, 'Gasto', 1940),
(35, 116, 'Gasto', 1940),
(35, 117, 'Gasto', 1940),
(35, 118, 'Gasto', 1940),
(36, 119, 'Gasto', 2100),
(36, 120, 'Gasto', 2100),
(36, 121, 'Gasto', 2100),
(36, 122, 'Gasto', 2100),
(36, 123, 'Gasto', 2100),
(36, 124, 'Gasto', 2100),
(36, 125, 'Gasto', 2100),
(37, 126, 'Gasto', 300),
(37, 127, 'Gasto', 300),
(37, 128, 'Gasto', 300),
(37, 129, 'Gasto', 300),
(37, 130, 'Gasto', 300),
(37, 131, 'Gasto', 300),
(38, 132, 'Gasto', 152),
(38, 133, 'Gasto', 152),
(38, 134, 'Gasto', 152),
(38, 135, 'Gasto', 152),
(38, 136, 'Gasto', 152),
(38, 137, 'Gasto', 152),
(38, 138, 'Gasto', 152),
(39, 139, 'Gasto', 330),
(39, 140, 'Gasto', 330),
(39, 141, 'Gasto', 330),
(39, 142, 'Gasto', 330),
(39, 143, 'Gasto', 330),
(39, 144, 'Gasto', 330),
(39, 145, 'Gasto', 330),
(40, 146, 'Gasto', 1100),
(40, 147, 'Gasto', 1100),
(40, 148, 'Gasto', 1100),
(40, 149, 'Gasto', 1100),
(40, 150, 'Gasto', 1100),
(40, 151, 'Gasto', 1100),
(40, 152, 'Gasto', 1100),
(41, 153, 'Gasto', 669),
(41, 154, 'Gasto', 669),
(41, 155, 'Gasto', 669),
(41, 156, 'Gasto', 669),
(41, 157, 'Gasto', 669),
(41, 158, 'Gasto', 669),
(42, 159, 'Gasto', 910),
(42, 160, 'Gasto', 910),
(42, 161, 'Gasto', 910),
(42, 162, 'Gasto', 910),
(42, 163, 'Gasto', 910),
(42, 164, 'Gasto', 910),
(43, 165, 'Gasto', 735),
(43, 166, 'Gasto', 735),
(43, 167, 'Gasto', 735),
(43, 168, 'Gasto', 735),
(43, 169, 'Gasto', 735),
(43, 170, 'Gasto', 735),
(44, 171, 'Gasto', 170),
(44, 172, 'Gasto', 170),
(44, 173, 'Gasto', 170),
(44, 174, 'Gasto', 170),
(44, 175, 'Gasto', 170),
(44, 176, 'Gasto', 170),
(44, 177, 'Gasto', 170),
(35, 178, 'Gasto', 875),
(35, 179, 'Gasto', 875),
(35, 180, 'Gasto', 875),
(35, 181, 'Gasto', 875),
(35, 182, 'Gasto', 875),
(35, 183, 'Gasto', 875),
(36, 184, 'Gasto', 1125),
(36, 185, 'Gasto', 1125),
(36, 186, 'Gasto', 1125),
(36, 187, 'Gasto', 1125),
(36, 188, 'Gasto', 1125),
(36, 189, 'Gasto', 1125),
(37, 190, 'Gasto', 3700),
(37, 191, 'Gasto', 3700),
(37, 192, 'Gasto', 3700),
(37, 193, 'Gasto', 3700),
(37, 194, 'Gasto', 3700),
(37, 195, 'Gasto', 3700),
(37, 196, 'Gasto', 3700),
(38, 197, 'Gasto', 1625),
(38, 198, 'Gasto', 1625),
(38, 199, 'Gasto', 1625),
(38, 200, 'Gasto', 1625),
(38, 201, 'Gasto', 1625),
(38, 202, 'Gasto', 1625),
(38, 203, 'Gasto', 1625),
(39, 204, 'Gasto', 2800),
(39, 205, 'Gasto', 2800),
(39, 206, 'Gasto', 2800),
(39, 207, 'Gasto', 2800),
(39, 208, 'Gasto', 2800),
(39, 209, 'Gasto', 2800),
(39, 210, 'Gasto', 2800),
(39, 211, 'Gasto', 2800),
(40, 212, 'Gasto', 2575),
(40, 213, 'Gasto', 2575),
(40, 214, 'Gasto', 2575),
(40, 215, 'Gasto', 2575),
(40, 216, 'Gasto', 2575),
(40, 217, 'Gasto', 2575),
(40, 218, 'Gasto', 2575),
(41, 219, 'Gasto', 5527),
(41, 220, 'Gasto', 5527),
(41, 221, 'Gasto', 5527),
(41, 222, 'Gasto', 5527),
(41, 223, 'Gasto', 5527),
(41, 224, 'Gasto', 5527),
(41, 225, 'Gasto', 5527),
(42, 226, 'Gasto', 5458),
(42, 227, 'Gasto', 5458),
(42, 228, 'Gasto', 5458),
(42, 229, 'Gasto', 5458),
(42, 230, 'Gasto', 5458),
(42, 231, 'Gasto', 5458),
(42, 232, 'Gasto', 5458),
(43, 233, 'Gasto', 10108),
(43, 234, 'Gasto', 10108),
(43, 235, 'Gasto', 10108),
(43, 236, 'Gasto', 10108),
(43, 237, 'Gasto', 10108),
(43, 238, 'Gasto', 10108),
(43, 239, 'Gasto', 10108),
(44, 240, 'Gasto', 5740),
(44, 241, 'Gasto', 5740),
(44, 242, 'Gasto', 5740),
(44, 243, 'Gasto', 5740),
(44, 244, 'Gasto', 5740),
(44, 245, 'Gasto', 5740),
(44, 246, 'Gasto', 5740);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingresos_egresos_bases`
--

CREATE TABLE IF NOT EXISTS `tbl_ingresos_egresos_bases` (
  `PK_Id_Bases` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`PK_Id_Bases`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tbl_ingresos_egresos_bases`
--

INSERT INTO `tbl_ingresos_egresos_bases` (`PK_Id_Bases`, `Nombre`, `Tipo`) VALUES
(1, 'Dinero disponible al principio del mes', 'Ingreso'),
(2, 'Ventas en efectivo', 'Ingreso'),
(3, 'Efectivo por ventas al credito', 'Ingreso'),
(4, 'Otros ingresos', 'Ingreso'),
(5, 'Compras en efectivo', 'Egreso'),
(6, 'Efectivo pagado por compras al credito', 'Egreso'),
(7, 'Salarios', 'Egreso'),
(8, 'Renta', 'Egreso'),
(9, 'Pago de préstamos', 'Egreso'),
(10, 'Otros', 'Egreso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_instituciones`
--

CREATE TABLE IF NOT EXISTS `tbl_instituciones` (
  `Pk_Id_Institucion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Institucion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Pk_Id_Institucion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `tbl_instituciones`
--

INSERT INTO `tbl_instituciones` (`Pk_Id_Institucion`, `Nombre_Institucion`) VALUES
(2, 'Comisión Nacional de la Micro y Pequeña Empresa (CONAMYPE)'),
(3, 'Instituto Salvadoreño de Formación Profesional (INSAFORP).'),
(4, 'Fondo Solidario para la Familia Microempresaria (FOSOFAMILIA)'),
(5, 'Banco de Fomento Agropecuario (BFA)'),
(6, 'Ministerio de Trabajo y Previsión Social (MTPS)'),
(7, 'Registro Nacional de las Personas Naturales (RNPN)'),
(8, 'Defensoría del Consumidor'),
(9, 'Ministerio de Educación (MINED)'),
(10, 'Ministerio de Agricultura y Ganadería (MAG)'),
(22, 'Secretaria de Inclusión Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_insumos`
--

CREATE TABLE IF NOT EXISTS `tbl_insumos` (
  `PK_Id_Insumo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Insumo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Existencia_Insumo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Insumo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Medida_Insumo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Minima` int(11) NOT NULL,
  `FK_Id_Tipo_Insumo` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`PK_Id_Insumo`),
  KEY `FK_Id_Tipo_Insumo` (`FK_Id_Tipo_Insumo`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=98 ;

--
-- Volcado de datos para la tabla `tbl_insumos`
--

INSERT INTO `tbl_insumos` (`PK_Id_Insumo`, `Nombre_Insumo`, `Existencia_Insumo`, `Precio_Insumo`, `Medida_Insumo`, `Cantidad_Minima`, `FK_Id_Tipo_Insumo`, `FK_Id_Usuario`) VALUES
(35, 'Agua', '25', '0.90', 'Litros', 2, 1, 1),
(36, 'Papel periodico', '13', '0.25', 'Libras', 5, 2, 1),
(37, 'sal', '25', '0.25', 'Libras', 2, 1, 1),
(39, 'dfgh', '1', '1', 'Libras', 10, 1, 15),
(42, 'asdfghj', '12', '1', 'Gramos', 1, 1, 15),
(44, 'qwedf', '100', '1.50', 'Kilogramos', 15, 1, 15),
(47, 'tomates', '10', '10', 'Gramos', 25, 1, 1),
(49, 'tomates', '100', '10', 'Kilogramos', 10, 1, 1),
(50, 'chicharron', '20', '2.50', 'Libras', 2, 1, 1),
(51, 'harina', '0', '2.50', 'Libras', 2, 1, 19),
(52, 'agua', '-3', '1.50', 'Litros', 1, 1, 19),
(53, 'huevos', '10', '2.50', 'Gramos', 1, 1, 19),
(59, 'chile', '222', '22', 'Libras', 22, 1, 1),
(61, 'agua', '-2337', '1.12', 'Mililitro', 5, 1, 24),
(62, 'limon', '-2300', '1.25', 'Kilogramos', 10, 1, 24),
(66, 'aguacate', '-2375', '1', 'Unidad', 5, 1, 24),
(68, 'cebolla', '-124', '1.25', 'Unidad', 3, 1, 24),
(69, 'sal', '25', '1', 'Libras', 5, 1, 24),
(70, 'hilo', '8', '0.25', 'Unidad', 3, 2, 34),
(71, 'ziper', '3', '0.35', 'Unidad', 2, 2, 34),
(72, 'tela', '1', '4', 'Yardas', 2, 2, 34),
(73, 'agujas', '21', '0.25', 'Unidad', 5, 2, 34),
(75, 'ketchup', '10', '1.50', 'Unidad', 4, 1, 24),
(76, 'agua', '2', '3', 'Litros', 1, 1, 23),
(77, '', '', '', 'Seleccione una ', 0, 0, 23),
(78, 'toamtes', '100', '1.87', 'Unidad', 10, 1, 25),
(79, 'chile', '25', '1', 'Unidad', 10, 1, 25),
(80, 'cebolla', '50', '1.22', 'Unidad', 10, 1, 25),
(81, 'Carne de Cerdo', '25', '5', 'Libras', 5, 1, 24),
(82, 'carne de res', '-185', '8', 'Libras', 5, 1, 24),
(83, 'pollo', '-125', '1.50', 'Unidad', 5, 1, 24),
(84, 'arroz precocido', '44', '0.50', 'Libras', 5, 1, 24),
(85, 'consome de pollo', '-150', '0.10', 'Unidad', 5, 1, 24),
(86, 'consome de res', '-177', '0.10', 'Unidad', 5, 1, 24),
(87, 'camarones', '10', '5', 'Libras', 5, 1, 24),
(88, 'brocoli', '14', '0.75', 'Unidad', 5, 1, 24),
(89, 'Papas', '-350', '0.45', 'Libras', 5, 1, 24),
(90, 'guisquil', '-181', '0.30', 'Unidad', 5, 1, 24),
(91, 'tomate', '19', '0.10', 'Unidad', 5, 1, 24),
(92, 'chile', '64', '0.10', 'Unidad', 5, 1, 24),
(93, 'salsa de soya', '25', '0.85', 'Unidad', 5, 1, 24),
(94, 'cilantro', '17', '0.10', 'Unidad', 5, 1, 24),
(95, 'elotitos', '14', '0.50', 'Unidad', 5, 1, 24),
(96, 'frijoles', '100', '0.60', 'Libras', 5, 1, 24),
(97, 'pepino', '43', '0.25', 'Unidad', 5, 1, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

CREATE TABLE IF NOT EXISTS `tbl_inventario` (
  `PK_Id_Inventario` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Producto` int(11) NOT NULL,
  `Existencia_Producto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Creacion` date NOT NULL,
  `Lugar_Existencia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_Id_Inventario`),
  KEY `id_producto` (`FK_Id_Producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=63 ;

--
-- Volcado de datos para la tabla `tbl_inventario`
--

INSERT INTO `tbl_inventario` (`PK_Id_Inventario`, `FK_Id_Producto`, `Existencia_Producto`, `Fecha_Creacion`, `Lugar_Existencia`, `Estado`) VALUES
(2, 21, '87', '2018-08-30', 'San Miguel', 'Terminado'),
(5, 21, '100', '2018-08-31', 'San Miguel', 'Terminado'),
(8, 23, '90', '2018-08-15', 'San Miguel', 'Terminado'),
(9, 28, '71', '2018-08-30', '', 'Terminado'),
(10, 29, '99', '2018-08-22', '', 'Terminado'),
(12, 36, '38', '2018-10-17', '', 'Terminado'),
(13, 35, '1', '2018-10-09', '', 'En Proceso'),
(15, 38, '3', '2018-10-23', '', 'Terminado'),
(16, 37, '4', '2018-10-23', '', 'En Proceso'),
(17, 37, '2', '2018-10-30', '', 'En Proceso'),
(21, 37, '1', '2018-10-09', '', 'En Proceso'),
(33, 37, '3', '2018-09-30', '', 'En Proceso'),
(39, 45, '1', '2018-12-04', '', 'Terminado'),
(41, 47, '1', '2018-12-02', '', 'Terminado'),
(42, 44, '3', '2018-12-10', '', 'Terminado'),
(43, 48, '5', '2019-01-02', '', 'Terminado'),
(44, 49, '4', '2019-01-02', '', 'Terminado'),
(45, 50, '0', '2019-01-02', '', 'Terminado'),
(47, 48, '50', '2019-01-08', '', 'En Proceso'),
(48, 52, '5', '2019-01-10', '', 'En Proceso'),
(49, 53, '12', '2019-01-02', '', 'En Proceso'),
(50, 53, '8', '2019-01-15', '', 'En Proceso'),
(51, 55, '50', '2019-01-02', '', 'En Proceso'),
(52, 55, '100', '2019-01-04', '', 'Terminado'),
(53, 47, '25', '2019-01-09', '', 'En Proceso'),
(56, 52, '100', '2019-01-23', '', 'En Proceso'),
(57, 44, '2', '0000-00-00', '', 'Terminado'),
(58, 54, '4', '2019-01-17', '', 'En Proceso'),
(59, 58, '5', '2019-01-22', '', 'Terminado'),
(60, 59, '2', '2019-01-23', '', 'En Proceso'),
(61, 49, '100', '2019-01-24', '', 'Terminado'),
(62, 50, '100', '2019-01-23', '', 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mensajes`
--

CREATE TABLE IF NOT EXISTS `tbl_mensajes` (
  `PK_Id_Mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `Contacto_Mensaje` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Emisor_Mensaje` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Estado_Mensaje` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Contenido_Mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`PK_Id_Mensaje`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tbl_mensajes`
--

INSERT INTO `tbl_mensajes` (`PK_Id_Mensaje`, `Contacto_Mensaje`, `Emisor_Mensaje`, `FK_Id_Usuaria`, `Estado_Mensaje`, `Contenido_Mensaje`) VALUES
(1, '7227-7821', 'Juan Perez', 24, 'Leido', '  Hola me interesa  tus productos para un banquete de un evento para el dia 21 de febrero, llamame lo más pronto posible                              '),
(2, '7227-7818', 'Rosa de Maria Contreras', 23, 'Nuevo', 'hola me gusta tu negocio, quieres asociarte a mi UDP                         '),
(3, '71223.-2622', 'roxana blanco', 34, 'Nuevo', 'hola me gustan tus pulseras vendes por mayor llamame                                '),
(4, '503-9876-1726', 'Manuel Osorio', 24, 'Nuevo', '  hola me gustaria tener en mi cumpleaños pra regalas a los invitados pupusas, me puedes llamar                              '),
(5, '7654-7672', 'Maria Ramos', 23, 'Nuevo', 'hola me gusta tu concepto de negocio contactame para asociarnos               '),
(6, '2664-1234', 'Karina Cruz', 24, 'Nuevo', 'tengo un cumpleaños el siguiente mes mandame presupuesto pra 150 personas, quisiera pupusas y fresco natural'),
(7, '7654-9876', 'sofia Guevara', 23, 'Nuevo', 'hola llamame tengo una sociedad de emprendedoras como tu, con un fuerte capital disponible para invertir                    '),
(8, '503-1234-5667', 'josefina cubias', 28, 'Nuevo', ' hola mandame cotizacion para liberar un telefonno                               '),
(9, '123456787', 'Juanita', 23, 'Nuevo', '                           Hola quiero comprar tus pupusas     ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mensajes_contactos`
--

CREATE TABLE IF NOT EXISTS `tbl_mensajes_contactos` (
  `PK_Id_Mensaje_Contacto` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Emisor` int(11) NOT NULL,
  `Id_receptor` int(11) NOT NULL,
  `Mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Id_Contacto` int(11) NOT NULL,
  `Estado_Mensaje` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`PK_Id_Mensaje_Contacto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tbl_mensajes_contactos`
--

INSERT INTO `tbl_mensajes_contactos` (`PK_Id_Mensaje_Contacto`, `Id_Emisor`, `Id_receptor`, `Mensaje`, `FK_Id_Contacto`, `Estado_Mensaje`) VALUES
(1, 1, 23, 'hola mandame un presupuesto de tus servicios para un banquete de 100 personas', 20, NULL),
(2, 23, 24, 'hola Roxana ', 32, NULL),
(3, 1, 23, 'hola', 20, NULL),
(4, 23, 24, 'hola quiero hablar de negocios contigo', 32, NULL),
(5, 24, 23, 'hola liliam ', 32, NULL),
(6, 24, 25, 'hola fernanda me gustan tus frescos, vendes por paquetes ', 27, NULL),
(7, 24, 23, 'hola me puedes llamar al 7125-9876 ', 32, NULL),
(8, 24, 28, 'hola ', 34, NULL),
(9, 24, 23, 'hola', 32, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_perfiles_empresariales`
--

CREATE TABLE IF NOT EXISTS `tbl_perfiles_empresariales` (
  `pk_Id_Perfil` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Usuaria` int(11) NOT NULL,
  `Nombre_Negocio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion_Negocio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion_Negocio` text COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Rubro` int(11) NOT NULL,
  `Foto_Perfil` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto1` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto2` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto3` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Correo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Num_Visitas` int(11) DEFAULT NULL,
  `Des_Larga` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Servicio1` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Servicio2` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Servicio3` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Servicio4` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Servicio5` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Servicio6` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Pie1` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Pie2` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Pie3` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`pk_Id_Perfil`),
  KEY `FK_Usuaria` (`FK_Usuaria`),
  KEY `FK_Rubro` (`FK_Rubro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `tbl_perfiles_empresariales`
--

INSERT INTO `tbl_perfiles_empresariales` (`pk_Id_Perfil`, `FK_Usuaria`, `Nombre_Negocio`, `Direccion_Negocio`, `Descripcion_Negocio`, `FK_Rubro`, `Foto_Perfil`, `Foto1`, `Foto2`, `Foto3`, `Telefono`, `Correo`, `Num_Visitas`, `Des_Larga`, `Servicio1`, `Servicio2`, `Servicio3`, `Servicio4`, `Servicio5`, `Servicio6`, `Pie1`, `Pie2`, `Pie3`) VALUES
(24, 23, 'Pupuseria Lily', 'https://goo.gl/maps/eou6vRjHtn52', 'La mejor Pupusa al alcance de todos nnnn', 1, 'Liliam Mendoza23/1_LILY.jpg', 'Liliam Mendoza23/2_LILY.jpg', 'Liliam Mendoza23/3_LILY.jpg', 'Liliam Mendoza23/4_LILY.jpg', '503-9876-5456', 'lilianadiaz@hotmail.', 34, 'Nuestra pupuseria es un negocio familiar, que nació con el fin de dar a conocer la receta de la abuela.', 'Pupusas Revueltas', 'Atención al cliente especial', 'Pupusas Locas', 'Lugar para eventos', 'Refrescos Naturales', 'servicio a domicilio', 'Menú especial de la casa', 'Tipicos salvadoreños', 'pupusas de Maiz y arroz'),
(25, 24, 'Comedor Roxy', 'https://goo.gl/maps/yhjEgaZoEur', 'un negocio importante para la ciudad son las mejores pupusas', 1, 'Roxana Mendiola24/1_ROXY.jpg', 'Roxana Mendiola24/2_ROXY.jpg', 'Roxana Mendiola24/3_ROXY.jpg', 'Roxana Mendiola24/4_ROXY.jpg', '503-7665-3432', 'comedorRoxy@gmail.co', 10, 'Un comedor con u  concepto diferente, a los mejores precios de la competencia', 'Desayunos', 'pupusas', 'Almuerzos', 'servicio a domicilio', 'Cenas', 'Paquetes alimneticios', 'los mejores platos de la casa', 'el tradicional Pan con pollo', 'Tamales de gallinas'),
(26, 25, 'Fresquitos orientales', 'https://goo.gl/maps/qn19R2v9EF72', 'Frescos Naturales para la buena salud', 3, 'Fernanda  Ulloa25/1_FRESH.jpg', 'Fernanda  Ulloa25/2_fresh.jpg', 'Fernanda  Ulloa25/3_fresh.jpg', 'Fernanda  Ulloa25/4_fresh.jpg', '503-1123-4655', 'fernanda@hotmail.com', 27, 'Fresquitos para todos los gustos, para grandes y pequeños, todo lo que quieras lo encuentras acá', 'Fresco de horchata', 'servicios a domicilio', 'fresco de ensalada', 'servicios de banquetes', 'jugos detox', 'atencion especial', 'frescos naturales', 'jugos detox', 'la receta de la abuela'),
(27, 26, 'Caro Confecciones', 'https://goo.gl/maps/qn19R2v9EF72', 'todo hecho a la medida', 2, 'Carolina Herrera26/1_CARO.jpg', 'Carolina Herrera26/2_CARO.jpg', 'Carolina Herrera26/3_caro.jpg', 'Carolina Herrera26/4_caro.jpg', '503-1234-5765', 'carolina@gmail.com', 7, 'todos nuestros diseños son exclusivos, y hechos a la medida del cliente, todo nacio ecomo idea de negocio en un curso de ciudad mujer ', 'Vestidos de fiestas', 'paquetes de quinceañeras', 'vestidos de promoción', 'Bautismos', 'vestidos de novia', 'Bodas', 'todo a la medida', 'a la vanguardia de la moda', 'estilos unicos'),
(28, 27, 'Mujer bonita', 'https://goo.gl/maps/qn19R2v9EF72', 'lo mejor para ti', 3, 'Vanessa Rodriguez27/1_BONITA.jpg', 'Vanessa Rodriguez27/2_bonita.jpg', 'Vanessa Rodriguez27/3_bonita.jpeg', 'Vanessa Rodriguez27/4_bonita.jpg', '503-7654-3976', 'vane@yahoo.com', 8, 'un negocio especial para ti', 'maquillaje', 'Peinados a domicilio', 'accesorios', 'maquillajes importados', 'productos para el cabello', 'servicio al cliente de calidad', 'maquilla importado para ti', 'desde Europa para ti', 'accesorios de calidad'),
(29, 28, 'TecnoMaria', 'https://goo.gl/maps/EqCroCeWzNJ2', 'Tecnologia de punta y al mejor precio', 4, 'Rubi Parada28/1_TECNO.jpg', 'Rubi Parada28/2_tecno.jpg', 'Rubi Parada28/3_tecno.jpg', 'Rubi Parada28/4_TECNO.jpg', '503-2345-6534', 'amyta@hotmail.com', 8, 'nuestro negocio consta de un grupo de amigas que viendo la necesidad del pueblo por invertir en calidad de tecnologia nace a favorecer a todos', 'Computadoras', 'Mantenimiento de computadoras', 'Tablets', 'redes informaticas', 'Celulares', 'servicio a domicilio', 'lo que imaginas te lo hacemos realidad con nuestro grupo de trabajo', 'las mejores herramientas para ti', 'todo lo nuevo del mercado esta aqui'),
(30, 34, 'el arte de camila', 'https://goo.gl/maps/4bEn96srw2P2', 'los mejores collares y accesorios al mejor precio', 6, 'Camila  Ramirez34/1_bisuteria.jpg', 'Camila  Ramirez34/2_bisuteria.jpg', 'Camila  Ramirez34/3_bisuteria.jpg', 'Camila  Ramirez34/4_BISUTERIA.jpg', '503-7654-9665', 'camila@hotmail.com', 13, 'Somos una empresa dedicada a la creación de accesorios para damas a la moda y a un precio accesible.', 'Collares', 'Aretes', 'Pulseras', 'Cinchos decorativos', 'Bufandas artesanales', 'Otros accesorios', 'Curso de bisutería.', 'Variedad de piedras decorativas.', 'Ven y conoce nuestra gran variedad de diseños.'),
(31, 53, 'prueba de negocio', 'https://goo.gl/maps/SkgdGF5dHn92', 'es ahora o nunca', 3, 'rosa margarita53/1_BOMBAY.jpg', 'rosa margarita53/2_bombay.jpg', 'rosa margarita53/3_bombay.jpg', 'rosa margarita53/4_bombay.jpg', '503-1234-5678', 'prueba@gmail.com', NULL, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `PK_Id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Producto` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`PK_Id_Producto`),
  KEY `id_usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`PK_Id_Producto`, `Nombre_Producto`, `Precio_Producto`, `FK_Id_Usuario`) VALUES
(34, 'agua mineral', '1.50', 1),
(36, 'tacos', '3.50', 1),
(38, 'pastel', '20', 19),
(39, 'ketchup', '1', 1),
(40, 'ayote', '3', 1),
(41, 'PUPUSAS', '12', 1),
(44, 'limonada', '3', 24),
(45, 'pantalon', '10', 34),
(47, 'pupusa', '2.50', 24),
(48, 'pollo encebollado', '1.25', 24),
(49, 'pollo guisado', '1.10', 24),
(50, 'carne en bistec', '1.50', 24),
(51, 'carne azada', '1.50', 24),
(52, 'carne de cerdo guisada', '1.75', 24),
(53, 'carne de cerdo azada', '1.75', 24),
(54, 'arroz a la jardinera', '0.85', 24),
(55, 'arroz negrito', '0.80', 24),
(56, 'arroz blanco', '0.65', 24),
(57, 'chicharron entomatado', '1.50', 1),
(58, 'tartaleta', '1.50', 24),
(59, 'papas a la francesa', '1.50', 24),
(60, 'guacamole', '2', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos_insumos`
--

CREATE TABLE IF NOT EXISTS `tbl_productos_insumos` (
  `FK_Id_Producto` int(11) NOT NULL,
  `FK_Id_Insumo` int(11) NOT NULL,
  `Cantidad_Insumo` float NOT NULL,
  `Medida_Insumo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  KEY `id_producto` (`FK_Id_Producto`),
  KEY `id_insumo` (`FK_Id_Insumo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_productos_insumos`
--

INSERT INTO `tbl_productos_insumos` (`FK_Id_Producto`, `FK_Id_Insumo`, `Cantidad_Insumo`, `Medida_Insumo`) VALUES
(33, 35, 1, 'Libras'),
(33, 37, 1, 'Litros'),
(34, 35, 21, 'Litros'),
(35, 36, 1, 'Libras'),
(36, 37, 1, 'Gramos'),
(36, 47, 2, 'Gramos'),
(36, 48, 1, 'Libras'),
(43, 35, 2, 'Gramos'),
(43, 37, 1, 'Gramos'),
(43, 47, 3, 'Libras'),
(43, 48, 4, 'Litros'),
(44, 61, 2, 'Kilogramos'),
(44, 62, 14, 'Miligramos'),
(44, 63, 1, 'Mililitro'),
(45, 70, 1, 'Unidad'),
(45, 71, 1, 'Unidad'),
(45, 72, 2, 'Unidad'),
(45, 73, 2, 'Yardas'),
(46, 62, 1, 'Kilogramos'),
(46, 66, 2, 'Libras'),
(46, 67, 3, 'Unidad'),
(46, 68, 1, 'Unidad'),
(46, 69, 1, 'Unidad'),
(47, 61, 1, 'Kilogramos'),
(47, 62, 2, 'Mililitro'),
(47, 66, 3, 'Unidad'),
(47, 67, 5, 'Unidad'),
(49, 12, 12, 'Kilogramos'),
(49, 11, 11, 'Mililitro'),
(49, 11, 11, 'Unidad'),
(49, 21, 21, 'Unidad'),
(50, 61, 12, 'Kilogramos'),
(50, 62, 12, 'Libras'),
(50, 66, 12, 'Mililitro'),
(50, 67, 11, 'Unidad'),
(50, 68, 0, ''),
(50, 69, 0, ''),
(50, 75, 0, ''),
(48, 68, 1, 'Unidad'),
(48, 83, 1, 'Unidad'),
(48, 85, 1, 'Unidad'),
(49, 68, 1, 'Libras'),
(49, 83, 1, 'Unidad'),
(49, 85, 1, 'Unidad'),
(49, 89, 1, 'Unidad'),
(49, 90, 1, 'Unidad'),
(50, 68, 1, 'Libras'),
(50, 82, 1, 'Libras'),
(50, 86, 1, 'Unidad'),
(50, 89, 1, 'Unidad'),
(51, 68, 1, 'Libras'),
(51, 82, 1, 'Unidad'),
(51, 86, 1, 'Unidad'),
(52, 68, 1, 'Libras'),
(52, 81, 1, 'Libras'),
(52, 86, 1, 'Unidad'),
(52, 89, 1, 'Unidad'),
(53, 68, 1, 'Libras'),
(53, 81, 1, 'Unidad'),
(53, 86, 1, 'Unidad'),
(54, 61, 2, 'Libras'),
(54, 68, 1, 'Libras'),
(54, 69, 1, 'Mililitro'),
(54, 84, 1, 'Unidad'),
(54, 91, 1, 'Unidad'),
(54, 92, 1, 'Unidad'),
(54, 94, 1, 'Unidad'),
(54, 95, 1, 'Unidad'),
(55, 61, 2, 'Libras'),
(55, 68, 1, 'Libras'),
(55, 84, 1, 'Mililitro'),
(55, 85, 1, 'Unidad'),
(55, 92, 1, 'Unidad'),
(55, 96, 1, 'Unidad'),
(56, 61, 2, 'Libras'),
(56, 68, 1, 'Mililitro'),
(56, 84, 1, 'Unidad'),
(56, 85, 1, 'Unidad'),
(56, 92, 1, 'Unidad'),
(57, 37, 1, 'Gramos'),
(57, 47, 2, 'Libras'),
(57, 50, 3, 'Libras'),
(58, 87, 1, 'Libras'),
(58, 88, 1, 'Unidad'),
(58, 92, 1, 'Unidad'),
(58, 95, 1, 'Unidad'),
(58, 97, 1, 'Unidad'),
(59, 75, 1, 'Unidad'),
(59, 94, 1, 'Unidad'),
(59, 97, 1, 'Unidad'),
(60, 62, 1, 'Kilogramos'),
(60, 66, 2, 'Libras'),
(60, 69, 1, 'Unidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rubros`
--

CREATE TABLE IF NOT EXISTS `tbl_rubros` (
  `PK_Id_Rubro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Rubro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_Id_Rubro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `tbl_rubros`
--

INSERT INTO `tbl_rubros` (`PK_Id_Rubro`, `Nombre_Rubro`) VALUES
(1, 'Alimentos y Bebidas '),
(2, 'Textiles Confección'),
(3, 'Comercio'),
(4, 'Técnologia e innovación'),
(5, 'Quimica'),
(6, 'Artesanias'),
(7, 'Construcción'),
(8, 'Servicios'),
(20, 'Agronomía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sedes`
--

CREATE TABLE IF NOT EXISTS `tbl_sedes` (
  `Pk_Id_Sede` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Sede` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Pk_Id_Sede`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tbl_sedes`
--

INSERT INTO `tbl_sedes` (`Pk_Id_Sede`, `Nombre_Sede`) VALUES
(1, 'Ciudad Mujer Colón'),
(2, 'Ciudad Mujer San Martín'),
(3, 'Ciudad Mujer Usulután'),
(4, 'Ciudad Mujer Santa Ana'),
(5, 'Ciudad Mujer San Miguel'),
(7, 'Ciudad Mujer Morazán'),
(9, 'Ciudad Mujer La Unión ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_subrubros`
--

CREATE TABLE IF NOT EXISTS `tbl_subrubros` (
  `PK_Id_Subrubro` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Rubro` int(11) NOT NULL,
  `Nombre_Rubro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Produccion_Mensual` float NOT NULL,
  PRIMARY KEY (`PK_Id_Subrubro`),
  KEY `id_rubro` (`FK_Id_Rubro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `tbl_subrubros`
--

INSERT INTO `tbl_subrubros` (`PK_Id_Subrubro`, `FK_Id_Rubro`, `Nombre_Rubro`, `Produccion_Mensual`) VALUES
(18, 1, 'Panaderia y Pasteleria', 2000),
(21, 1, 'Taqueria', 100),
(22, 2, 'confetiria', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_insumos`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_insumos` (
  `Pk_Id_Tipo_Insumo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Pk_Id_Tipo_Insumo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_tipos_insumos`
--

INSERT INTO `tbl_tipos_insumos` (`Pk_Id_Tipo_Insumo`, `Nombre_Tipo`) VALUES
(1, 'Comestible'),
(2, 'No comestible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_usuarias`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_usuarias` (
  `pk_Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`pk_Id_Tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_tipos_usuarias`
--

INSERT INTO `tbl_tipos_usuarias` (`pk_Id_Tipo`, `Descripcion`) VALUES
(1, 'Super Usuario'),
(2, 'Administradora'),
(3, 'Emprendedora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_usuarios` (
  `PK_Id_Tipo_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_Id_Tipo_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_tipos_usuarios`
--

INSERT INTO `tbl_tipos_usuarios` (`PK_Id_Tipo_Usuario`, `Nombre_Tipo`) VALUES
(1, 'Administrador'),
(2, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarias`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarias` (
  `pk_Id_Usuaria` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Sede` int(11) NOT NULL,
  `Nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Nom_User` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fk_Tipo_Usuaria` int(11) NOT NULL,
  `Telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Dui` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Año_Ingreso` int(11) DEFAULT NULL,
  `Fecha_Actividad` date DEFAULT NULL,
  `Fecha_Registro` date DEFAULT NULL,
  PRIMARY KEY (`pk_Id_Usuaria`),
  KEY `fk_Tipo_Usuaria` (`fk_Tipo_Usuaria`),
  KEY `fk_Tipo_Usuaria_2` (`fk_Tipo_Usuaria`),
  KEY `FK_Sede` (`FK_Sede`),
  KEY `FK_Sede_2` (`FK_Sede`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `tbl_usuarias`
--

INSERT INTO `tbl_usuarias` (`pk_Id_Usuaria`, `FK_Sede`, `Nombre`, `Apellido`, `Nom_User`, `Pass`, `Direccion`, `fk_Tipo_Usuaria`, `Telefono`, `Dui`, `Año_Ingreso`, `Fecha_Actividad`, `Fecha_Registro`) VALUES
(1, 5, 'Roxana', 'Blanco', 'roxwite', 'fMZWE90u6epZGkg9CViem+5q6EOIFknwks2uF0WedaBio9dqezg2ForLnNoCt51QDUX/fDR9oiOIbEnaEqCz9A==', 'colonia Unidas', 1, '7865-7533', '1111455-0', NULL, '2019-01-21', NULL),
(2, 3, 'Leticia', 'Dias', 'lily', 'kdMXSKR/pBE2SMQlDg9XbjjMzNciyov3AfMcM0Cf/YBIMCjw137b46kCce3kXS5sGutY8IL9TjLYVm3L9x4Wng==', 'Santiago', 2, '76787574', '2221554-0', NULL, '2018-10-18', NULL),
(23, 3, 'Liliam', 'Mendoza', 'limendoza', 'mP0LsJGKwHN7sei4+9H5WeAnvFRo4Pk/CF8fPr0ZtrsRP3jC4xicfLffUDtAIWo1v3f1A3oRG5SaBSyLbflbLg==', 'Alegria', 3, '503-8765-1111', '23456789-0', 2016, '2019-01-23', '2018-11-12'),
(24, 5, 'Roxana', 'Mendiola', 'roxmendiola', 'loA3ZHqJgTRzUxbRZ7x6sbyFQWlyiMrIX+0HDNsd4fkLdW1g8oF5zh60WwzqqVxnGHqt+xADerDTuigobdMVrg==', 'colonia Unidas', 3, '503-76541298', '12345678-9', 2017, '2019-01-23', '2018-11-12'),
(25, 3, 'Fernanda ', 'Ulloa', 'ferulloa', 'MImaF0XmUQioeJ9pWC7FVFuNlhCXgMNS9qKe+QnOBw27PZ9Ecc/ZbqYpNpPQd/bpwL4zptVelA4ukqgNnOXSuw==', 'Santiago de Maria', 3, '503-7654-3444', '23456543-5', 2017, '2018-12-14', '2018-11-12'),
(26, 7, 'Carolina', 'Herrera', 'carherrera', 'b64cFfxcebvH9r9XXdbE9Epwks5BRhKu2cSCP3o1mrBQZkcq5N0kKGJ8XFXZ2QxJC8O+8GOb8X9A6TYInp3QWQ==', 'Gotera', 3, '503-9876-5434', '12345678-9', 2017, '2018-11-12', '2018-11-12'),
(27, 7, 'Vanessa', 'Rodriguez', 'varodriguez', 'vinOEI47W4PjkwMsGB/RK59W8+Ddp5aUZHSNEWU2ZzdhWFhr8Pfr4B+jnRiAbX7xXQB4Y8Co68meSFD/fMZEqA==', 'Perquin', 3, '503-1234-5678', '98765432-3', 2016, '2018-12-06', '2018-11-12'),
(28, 4, 'Rubi', 'Parada', 'ruparada', 'zIWBBV7KUzvYTOE1bCILYS3aBGipvAx3b6Zrgfw5tIRVFnh4RSsmAUHnihyI4xGsoNnTjkm4vc6bdYMe0QR4lg==', 'Santa anita', 3, '503-4322-2234', '09876543-0', 2017, '2018-11-12', '2018-11-12'),
(29, 2, 'karina', 'Guzman', 'kaguzman', '2dHoJn/sb1t9Dm+KEmcqLh14UtDdUcjX9ft5SH5jgdsW48prtiQXW2pqQ+zPSBJc7QYTSxh/tMK7yLsIPrhDzg==', 'Santa Marta', 3, '503-8765-4323', '23456507-6', 2017, '2018-12-06', '2018-11-12'),
(30, 2, 'Fatima', 'Lopez', 'falopez', '/kpnFPYWDMaJB1S1oA9mrDPuvOSRIXPFXLufBdcoCW3QwVRufoUvuCJtypIvcCzVSq8GGXghxga65quoGRxq+Q==', 'Martin City', 3, '503-8765-4333', '02134535-6', 2016, '2018-11-23', '2018-11-12'),
(31, 3, 'Camila', 'Martinez', 'camartinez', 'dZNXFUnLYeQcLcPhorsa2UUmFygyt39e9PvVDEpQHcN/PqCg8U5X3w/7IUiuLpTU6wnv9YCDkwPa6QbnZ0Uvrw==', 'Colonia las Marias', 3, '503-9876-5433', '04566234-5', 2018, NULL, '2018-11-12'),
(32, 3, 'Monica', 'Viera', 'moviera', 'gWjsMAmvsC0fdBx8vhT81amvFhd1Pd78QPeBOka+AkVQ3kLjQQQRzE9ioZfds3BuEZB81JIaokAs9hfyT34dAQ==', 'colonia Urbeza', 3, '503-4322-2114', '65765430-9', 2016, NULL, '2018-11-12'),
(33, 7, 'Merlen', 'Lopez', 'merlopez', 'KWNwCLflU0iuHsOzjcIa6WxuSj3avyCotbZghH09tTbXSF9BXsJnLaaG3O4i/oux2tPfqvjkqPMBXdwaci8HKg==', 'Mercedez Umaña', 3, '503-7654-4444', '09876543-5', 2018, NULL, '2018-11-12'),
(34, 3, 'Camila ', 'Ramirez', 'caramirez', 'sQFGWD0+cJcDZ7jWzlJXqqQEsKea4lNTq5IYbc4AdMYPnY0HKL7B9NiL9Q3KIHRSpfBBzUAiVuP/BLbitXPboA==', 'santiago de maria', 3, '503-7232-4556', '01133363-6', 2014, '2018-12-03', '2018-11-12'),
(35, 2, 'Katherine ', 'Rodriguez', 'karodriguez', '8gVBkzNZ1kgWclskC5HQNMIXyUxGVeIbMIyHzDd6THBI+jVw9z4bf2d93lnUA5ogbMWS6VYFperyGwMe2nPScA==', 'Militancia por venir', 3, '503-6543-5667', '09876543-4', 2013, '2018-11-21', '2018-11-21'),
(40, 5, 'carmen ', 'lizama', 'carliz', 'mVVa6Z7rT5j3PE0jVwrxWwWXlK0YBWhO7jjDDd7cyVf4eTtyycFI5lyokQn5ZiOUqJ8TLb+kQ0LeCllVwtYC9A==', 'santa julia', 3, '503-2345-6777', '98765433-4', 2021, NULL, '2018-12-03'),
(42, 5, 'Krisia', 'Diaz', 'kridiaz', 'yfQtY+DwwDFAoTy/RRmUKC+R3TBMK3h3e/6pXzd2rrsm9ypcnZb7KOs+5kcL5sDm6AfsP3MF2TdGXUuG0eizcg==', 'colonia esmeralda', 3, '2661-1234', '09865323-9', 2019, '2019-01-22', '2019-01-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_venta`
--

CREATE TABLE IF NOT EXISTS `tbl_venta` (
  `Pk_Id_Venta` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_Id_Inventario` int(11) NOT NULL,
  `Cantidad_Venta` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  PRIMARY KEY (`Pk_Id_Venta`),
  KEY `Fk_Id_Inventario` (`Fk_Id_Inventario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `tbl_venta`
--

INSERT INTO `tbl_venta` (`Pk_Id_Venta`, `Fk_Id_Inventario`, `Cantidad_Venta`, `Fecha_Venta`) VALUES
(16, 10, 1, '2018-09-01'),
(17, 9, 25, '2018-09-08'),
(18, 8, 10, '2018-09-29'),
(19, 3, 10, '2018-10-17'),
(20, 2, 12, '2018-10-16'),
(21, 12, 10, '2018-10-24'),
(22, 14, 2, '2018-10-23'),
(23, 15, 2, '2018-10-24'),
(24, 14, 2, '2018-10-25'),
(25, 35, 1, '2018-11-26'),
(26, 39, 1, '2018-12-04'),
(27, 12, 40, '2018-10-24'),
(28, 41, 1, '2018-12-04'),
(29, 40, 2, '2018-12-10'),
(30, 42, 2, '2018-12-10'),
(31, 42, 1, '2019-01-02'),
(32, 40, 3, '2019-01-02'),
(33, 42, 1, '2019-01-02'),
(34, 42, 10, '2019-01-08'),
(35, 42, 2, '2019-01-10'),
(36, 43, 5, '2019-01-07'),
(37, 41, 1, '2019-01-08'),
(38, 57, 3, '2019-01-19'),
(39, 44, 2, '2018-12-02'),
(40, 52, 100, '2019-01-22'),
(41, 45, 10, '2019-01-23'),
(42, 61, 100, '2019-01-24'),
(43, 62, 100, '2019-01-24');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_perfiles`
--
CREATE TABLE IF NOT EXISTS `vw_perfiles` (
`pk_Id_Perfil` int(11)
,`FK_Usuaria` int(11)
,`Nombre_Negocio` varchar(200)
,`Direccion_Negocio` varchar(200)
,`Descripcion_Negocio` text
,`FK_Rubro` int(11)
,`Foto_Perfil` varchar(100)
,`Foto1` varchar(100)
,`Foto2` varchar(100)
,`Foto3` varchar(100)
,`Telefono` varchar(15)
,`Correo` varchar(20)
,`Num_Visitas` int(11)
,`PK_Id_Rubro` int(11)
,`Nombre_Rubro` varchar(100)
,`Nombre` varchar(200)
,`Apellido` varchar(200)
,`pk_Id_Sede` int(11)
,`Nombre_Sede` varchar(200)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `vw_perfiles`
--
DROP TABLE IF EXISTS `vw_perfiles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_perfiles` AS select `p`.`pk_Id_Perfil` AS `pk_Id_Perfil`,`p`.`FK_Usuaria` AS `FK_Usuaria`,`p`.`Nombre_Negocio` AS `Nombre_Negocio`,`p`.`Direccion_Negocio` AS `Direccion_Negocio`,`p`.`Descripcion_Negocio` AS `Descripcion_Negocio`,`p`.`FK_Rubro` AS `FK_Rubro`,`p`.`Foto_Perfil` AS `Foto_Perfil`,`p`.`Foto1` AS `Foto1`,`p`.`Foto2` AS `Foto2`,`p`.`Foto3` AS `Foto3`,`p`.`Telefono` AS `Telefono`,`p`.`Correo` AS `Correo`,`p`.`Num_Visitas` AS `Num_Visitas`,`r`.`PK_Id_Rubro` AS `PK_Id_Rubro`,`r`.`Nombre_Rubro` AS `Nombre_Rubro`,`u`.`Nombre` AS `Nombre`,`u`.`Apellido` AS `Apellido`,`s`.`Pk_Id_Sede` AS `pk_Id_Sede`,`s`.`Nombre_Sede` AS `Nombre_Sede` from (((`tbl_perfiles_empresariales` `p` join `tbl_rubros` `r` on((`p`.`FK_Rubro` = `r`.`PK_Id_Rubro`))) join `tbl_usuarias` `u` on((`p`.`FK_Usuaria` = `u`.`pk_Id_Usuaria`))) join `tbl_sedes` `s` on((`u`.`FK_Sede` = `s`.`Pk_Id_Sede`)));

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_balance`
--
ALTER TABLE `tbl_balance`
  ADD CONSTRAINT `tbl_Balance_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
