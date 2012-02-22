/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.0.51b-community-nt-log : Database - ht
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ht` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ht`;

/*Table structure for table `cargo` */

DROP TABLE IF EXISTS `cargo`;

CREATE TABLE `cargo` (
  `id_cargo` int(4) NOT NULL auto_increment,
  `name_cargo` varchar(30) default NULL,
  PRIMARY KEY  (`id_cargo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `cargo` */

insert  into `cargo`(`id_cargo`,`name_cargo`) values (1,'admin'),(2,'socio');

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id_cat` int(4) NOT NULL auto_increment,
  `name_c` varchar(40) default NULL,
  `imgC` varchar(70) default NULL,
  PRIMARY KEY  (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `categoria` */

insert  into `categoria`(`id_cat`,`name_c`,`imgC`) values (8,'Bondaje','thum/bondaje1.jpg'),(7,'Big Tits','thum/Big Tits1.jpg'),(6,'Otras','thum/otras.jpg'),(9,'Extreme','thum/extreme1.jpg'),(10,'Lolicon','thum/lolicon1.jpg'),(11,'Straight Shota','thum/Straight Shota1.jpg'),(12,'Yuri','thum/yuri1.jpg');

/*Table structure for table `comentarios` */

DROP TABLE IF EXISTS `comentarios`;

CREATE TABLE `comentarios` (
  `idc` bigint(8) NOT NULL auto_increment,
  `comentario` varchar(300) default NULL,
  `fecha` char(14) default NULL,
  PRIMARY KEY  (`idc`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `comentarios` */

insert  into `comentarios`(`idc`,`comentario`,`fecha`) values (1,'buena pag',NULL),(2,'grate',NULL),(3,'fsdfsf',NULL),(4,'dasdad',NULL),(5,'gdfgd',NULL),(6,'vgdsgd',NULL),(7,'bcvbc',''),(8,'fgdgdfg','11-03-31');

/*Table structure for table `cont` */

DROP TABLE IF EXISTS `cont`;

CREATE TABLE `cont` (
  `id_ht` int(20) NOT NULL auto_increment,
  `titulo` varchar(60) default NULL,
  `des` varchar(600) default NULL,
  `id_servidor` int(4) default NULL,
  `img` varchar(100) default NULL,
  `thum` varchar(100) default NULL,
  `id_cat` int(4) default NULL,
  `iduser` int(4) default NULL,
  `id_idioma` int(4) default NULL,
  `links` varchar(700) default NULL,
  `online` varchar(700) default NULL,
  `pass` varchar(50) default NULL,
  `tags` varchar(100) default NULL,
  PRIMARY KEY  (`id_ht`),
  FULLTEXT KEY `consultaFull` (`titulo`,`des`,`tags`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `cont` */

insert  into `cont`(`id_ht`,`titulo`,`des`,`id_servidor`,`img`,`thum`,`id_cat`,`iduser`,`id_idioma`,`links`,`online`,`pass`,`tags`) values (12,'After Class Lesson','Shibui Ryuji es profesor un tanto extraÃ±o en un colegio femenino. Todas lo odian por su fama de pervertido. Pero Ryuji conoce el punto dÃ©bil de Ayumi, lider del equipo de porristas y la viola. Probado el placer, empieza a violar a sus alumnas, una tras otra, aprovechÃ¡ndose de sus debilidades.Â¿Hasta dÃ³nde llegarÃ¡ para satisfacer sus deseos? ',1,'http://pic.aebn.net/Stream/Movie/Boxcovers/a71262_xlf.jpg','thum/dsda.jpg',6,1,3,'http://www.mediafire.com/?zmtcudmsexl <br>\r\nhttp://www.mediafire.com/?0t2bjzdbw1b <br>\r\nhttp://www.mediafire.com/?bsmmsmgyge9 <br>','Sub espaÃ±ol 1: http://www.megaporn.com/video/?v=IH7V98TD <br>\r\nSub espaÃ±ol 2: http://www.megaporn.com/video/?v=WNG1N0MP <br>','ecm85','no'),(13,'Angel Blade','Una estudiante de instituto llamada Moena puede transformarse con la ayuda de su colgante en Angel Blade, una guerrera desnuda que lucha contra las fuerzas malÃ©ficas de Lady Phantom.\r\n\r\n3 OVAS',1,'http://www.mystore.com/images/2033_images/prod_id_2143.jpg','thum/dddd3.jpg',6,1,3,'Ova1: http://www.mediafire.com/?nz03isypytm <br>\r\nOva2: http://www.mediafire.com/?ewdlubllxqm <br>\r\nOva3: http://www.mediafire.com/?xbd0eemt4gy <br>',NULL,'No tiene','no'),(14,'Angel BladePunish!','Moena es una colegiala mÃ¡s, hasta que descubre que posee una serie de poderes ocultos. Cuando la Reina de la Oscuridad y su ejÃ©rcito de lujuriosas criaturas amenaza a las vÃ­rgenes de la Tierra, Moena se transforma en una heroÃ­na enmascarada, Angel Blade. Cuando la madrastra de Moena, la especialmente dotada Kyoka, es raptada por la Reina de la Oscuridad, Angel Blade saldrÃ¡ a su encuentro con la ayuda de un variopinto grupo de exÃ³ticas heroÃ­nas. Con la ayuda del sÃºcubo Nail, se adentrarÃ¡n hasta el corazÃ³n de la malvada Reina, para decidir el destino en una confrontaciÃ³n definitiva.',1,'http://www.solosubtitulos.com/uploads/imagenes/angel_blade_punish.jpg','thum/dddd4.jpg',6,1,3,'Ova1: http://www.mediafire.com/?eude2tl0x0x <br>\r\nOva2: http://www.mediafire.com/?zd4gzxi0zhm <br>\r\nOva3: http://www.mediafire.com/?t20bsbm5yt9 <br>','<b>Sub EspaÃ±ol</b><br>\r\nOva 1: http://www.megaporn.com/video/?v=01PJZA12 <br>\r\nOva 2: http://www.megaporn.com/video/?v=0RWF4F63 <br>\r\nOva 3: http://www.megaporn.com/video/?v=TGB754DX','ecm85','no'),(15,'Angel Core','Ambientado en un escenario que nos recuerda a la Europa de la segunda guerra mundial,\r\neste es un anime con cierto carÃ cter trÃ¡gico y melancÃ³lico; es asÃ¬ que en esa sociedad utilizan a las mujeres como herramientas para poder utilizar sus armas de guerra. Con respecto a la trama no lo entendÃ­ muy bien, pero es buena y serÃ¡ mejor que la descubran ustedes mismos.',1,'http://www.animeecchi.com/cover2/AngelCore.jpg','thum/dddd5.jpg',6,1,3,'Ova1: http://www.mediafire.com/?kt0ztn0tsmx <br>\r\nOva2: http://www.mediafire.com/?z2xmxzme2a7 <br>','<b>Sub EspaÃ±ol</b><br>\r\nOva 1: http://www.megaporn.com/e/42TUQBGY0c219ebd4cbe4c518067752a55a2385b\r\n\r\nOva 2: http://www.megaporn.com/e/822OZZZR2a3b00b28bf4b9a8329af919ab9116e0','ecm85','no'),(16,'Anime Yagami Yuu','Basado en el eroge de M no Violet , Nuevo OVA de este universo de Enfermeras que las traumaron con decirles que son una â€œdame omankoâ€. Ahora descubre el mundo que rodea a Yagami Yuu, la cual tiene buena historia, si es que puedes ver mÃ¡s allÃ¡ de las escenas explicitas que contiene hallarÃ¡s 1 historia que sorprende',1,'http://www.animerate.net/fotos/anime/item3196.jpg','thum/dddd6.jpg',12,1,3,'Ova 1: http://www.mediafire.com/?yjwrdhznrxz','<b>Sub EspaÃ±ol</b><br>\r\nOva 1: http://www.megaporn.com/e/295QCWXKb4cd26546e092a69913a2db4fb20b9b5','ecm85','no'),(17,'Aniyome wa Ijippari','Los padres de Tsutomu fallecieron hace varios aÃ±os, ellos tenÃ­an una floristerÃ­a. Ahora la lleva la esposa de su hermano mayor, Mai y Ã©l vive con ellos. El hermano de Tsutomu es trasladado en el tra bajo, entonces Mai se queda sola y su Ãºnico apoyo es Tsutomu, que la ayuda en la floristerÃ­a. Como el hermano de Tsutomu estÃ¡ muy ocupado y no puede acercarse a casa , Mai se siente muy sola, lo que nota Tsutomu y decide apoyar y satisfacer a Mai mientras su hermano estÃ¡ lejos. Ahora tambiÃ©n esta Kozue, la amiga de Mai y que recientemente trabaja a tiempo parcial con ellos. Kozue ha notado',1,'http://www.dataimagenes.com.ar/img/852528portada.jpg','thum/dddd7.jpg',6,1,3,'Ova1: http://www.mediafire.com/?zz0zywytztg <br>\r\nOva2: http://www.mediafire.com/?dzzmozq4yzj','<b>Sub EspaÃ±ol</b><br>\r\nOva 1: http://www.megaporn.com/e/8CWA5GNW8a8e564b93f9127b681563ee655485ad','ecm85','incesto'),(18,'Another lady innocent','La historia estÃ¡ ambientada en una suerte de Inglaterra victoriana en tiempos de guerra. El terrateniente Carson vive con su hija Faye, una joven hermosa que mantiene apasionadas relaciones sexuales con su amigo John y con su servil criada Sophia. Pero esta situaciÃ³n esta cerca de acabar, porque el malÃ©volo Lord Mark se ha encaprichado de Faye y no pararÃ¡ hasta convertirla en su esposa o, al menos, hacerla suya.',1,'http://2.bp.blogspot.com/_Bm7OUzM79S8/SfYVeqdPMoI/AAAAAAAAAK0/vsTxiOJbgIM/s400/showpic.jpg','thum/dddd8.jpg',12,1,3,'Ova: http://www.mediafire.com/?ujyzdzmzcjz','<b>Sub EspaÃ±ol</b><br>\r\nOva 1: http://www.megaporn.com/e/9DY5X49X242507c63ffc4087902afb92bb00acc5','ecm85','no'),(20,'Arisa','Una arma secreta cae del cielo sobre un restaurant de jovenes. Ahora bien...\r\nla grandiosa arma es una niÃ±a y se llama Arisa... De arma secreta tiene muy poco al principio ya que es muy torpe e ingenua. Pero cuando valla avanzando la historia empieza a desenvolver su verdadero Rol.\r\nMas alla de las cosillas que hace con su Amo. ',1,'http://www.freewebs.com/katsura-sama/Arisa.jpg','thum/ari.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?3yo9m2ifst9 <br>\r\nOva 2: http://www.mediafire.com/?1mnzr521yj5','<b>Sub EspaÃ±ol</b><br>\r\nOva 1: http://www.megaporn.com/e/YE9DR3LQ8a9d40f62de79449a4cb3b02f03e941a <br>\r\nOva 2: http://www.megaporn.com/e/ZH6GKWS65ebb2ce216d1a96c49d9533d7452edee','ecm85',''),(21,'Baku Hatsu','La historia se centra en un chico que ya no quiere seguir viviendo, ya que siempre es lo mismo el quiere estudiar, pero su hermana y sus amigas siempre andan haciendo cosas raras en su cuarto, y no lo dejan estudiar...',1,'http://img529.imageshack.us/img529/6831/bakuhatsu01bt2.jpg','thum/dadasss.jpg',12,1,3,'Ova 1: http://www.mediafire.com/?ydjoozreylw','<b>Sub EspaÃ±ol</b><br>\r\nOva 1: http://www.megaporn.com/e/8M4VFB1N1b6f79031a23ebc8c57baad8dc417170','ecm85',''),(22,'Beat Angel Escalayer','Ova basada en el popular juego del mismo nombre. Sayuka es una sexy y tÃ­mida colegiala que posee otra personalidad... es Escalayer... una super androide que con ayuda de Madoka y su amigo de infancia Kyohey deben proteger la Tierra antes de que los malos se diviertan con ella. Buena animaciÃ³n; muy recomendada.',1,'http://img391.imageshack.us/img391/3884/beatangele.jpg','thum/dadasss2.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?mi3gfmy43y5 <br>\r\nOva 2: http://www.mediafire.com/?ve41200dc1m <br>\r\nOva 3: http://www.mediafire.com/?2wmimqgmuui','Ova 1: http://www.megaporn.com/e/YFPWVO8Ga4caa014ab9f2fc408845d41a716ce8d <br>\r\nOva 2: http://www.megaporn.com/e/PC64SFLC9dd897c5789915ead9650d6c0f0da6c4 <br>\r\nOva 3: http://www.megaporn.com/e/PK9J5VJYb7e30f8f1f0f06a824624f74b0c65d39','ecm85',''),(23,'Bible Black Origins ','12 aÃ±os antes de que Minase encontrara la Biblia negra, la utilizase para lograr sexo fÃ¡cil con las chicas y se tuviese que enfrentar a la demonÃ­aca Kitami el Club de Magia lo dirigÃ­a una joven y guapa Takashiro. Con el poder de la Biblia Negra, Takashiro y las demÃ¡s chicas del club hacÃ­an conjuros a cambio de dinero con lo que cualquier compaÃ±ero de clase lograba mantener relaciones sexuales con las chicas mÃ¡s apetecibles del instituto, a la vez que cualquier compaÃ±era \r\npodÃ­a vengarse de aquellas personas a las que odiaba.Pero poco a poco Takashiro ve como esa magia sÃ³lo sirve par',1,'http://f7.mb-content.com/pictures/658/97/4/497658_OUJEBOSILKGTSIJ.jpg','thum/dadasss3.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?pz2dyzyuitm <br>\r\nOva 2: http://www.mediafire.com/?1yixlnxmrgg','Ova 1: http://www.megavideo.com/?v=XGMS3X81 <br>\r\nOva 2: http://www.megavideo.com/?v=GJDK55CR','esm85',''),(24,'Bible Black: La Noche de Walpurgis','Hace aÃ±os, un grupo de chicas decidieron jugar con oscuros poderes mas alla de su compresian realizando un sacrificio para poder obtener los poderes del Demonio... Anos despues, un estudiante, Minase, se da cuenta de que posee un extrano poder que le permite controlar los deseos sexuales de la gente, convirtiendolos en pervertidos y haciendo que las chicas le deesen de forma apasionada. Â¿De que extrano poder se trata? Â¿Tendra algo que ver con aquel rito satanico de tiempo atras?',1,'http://www.planetacomic.net/imagenes/dvd/I00000000000333501g.jpg','thum/dadasss4.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?9zqgw02gydt <br>\r\nOva 2: http://www.mediafire.com/?xtgjkgmo2y4 <br>\r\nOva 3: http://www.mediafire.com/?xxa7mzgzrmi <br>\r\nOva 4: http://www.mediafire.com/?ubnjfw4swlg <br>\r\nOva 5: http://www.mediafire.com/?ljmddznv7wf <br>\r\nOva 6: http://www.mediafire.com/?gd2rhmtijyx','','ecm85',''),(25,'Bible Black: La Lanza de Longinus','Sigue el argumento de la serie original. En los Estados Unidos es conocido como Bible Black: New Testament. y en Japon Shin Bible Black La Lanza de Longinus. La Historia se da 12 anos despues de La Noche de Walpurgis. Imari, el personaje principal de La noche de Walpurgis, se ha unido a una Unidad Especial de Investigacian de la Policia; Shiraki y Saeki ahora son profesoras del Colegio, y Takashiro se ha ordenado monja. Nuevamente, se desencadenaran sucesos extranos, cuando Reika Kitami tome nuevamente el control del cuerpo de Imari, Ya que este Fue sellado al Final de La Noche de walpurgis. C',1,'http://tienda.dreamers.com/imagenes/206281.jpg','thum/dadasss5.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?9cynzimgqcj <br>\r\nOva 2: http://www.mediafire.com/?0dmt0mmn10y <br>\r\nOva 3: http://www.mediafire.com/?l9m5tjmunt9 <br>\r\nOva 4: http://www.mediafire.com/?ysohmjmy7bj','','ecm85',''),(26,'Bible Black: Only','En esta ocasion se trata de Bible Black Only version, OVAs cuya trama es alterna a la linea de La Lanza de Longinus, pero sin perder relacion (ya se daran cuenta por que, cuando la vean).',1,'http://lh5.ggpht.com/_n9W8XBuB-p4/TDdDRtnTMfI/AAAAAAAAAVM/BsvaW03LH5g/Bible%20Black%20Only.jpg','thum/dadasss6.jpg',6,1,1,'Ova 1: http://www.mediafire.com/?bhtdzygjqzo <br>\r\nOva 2: http://www.mediafire.com/?btcbmuebyly','','ecm85',''),(27,'Black Gate','Como un estudiante medio, Kosaka siempre se preguntaba lo que serÃ­a para muchachas para luchar sobre Ã©l. Pero ahora su Novia Shizuka y su amigo Kasumi luchan sobre Ã©l .. con espadas. Su escuela tiene un secreto, una puerta negra que sÃ³lo puede ser abierta por Shizuka y Kasumi, quiÃ©n cada uno tiene un tatuaje mÃ¡s de uno de sus pechos. Cuando Shizuka abre la puerta y hace un trato(reparto) con su cuerpo y las criaturas del otro lado, Kosaka y todas las otras muchachas en su escuela son lanzadas en una lucha mortal contra el mal.',1,'http://www.gratishentai.net/aconfig/img_t/10.11.10-black-gate-hentai.jpg','thum/dadasss7.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?u2g9zz7izwj <br>\r\nOva 2: http://www.mediafire.com/?i9mwyetesn9','','ecm85',''),(28,'Body Transfer','Durante las vacaciones de verano del instituo, una misteriosa vasija utilizada para hacer rituales fue enviada al club de arqueologia. Todos los miembros y yo perdimos la consciencia cuando la luz que emanaba de la vasija nos alcanza. Entonces, cuando recobramos la consciencia, me di cuenta de que mi mente habia sido transferida al cuerpo de Kurahashi Yoshimi, a quien yo adoraba como si fuese una hermana mayor. Su cuerpo de mujer era muy suave, olia bien y era tan sensitivo al placer. No era justo que una mujer fuese totalmente distinta de un hombre... Los otros miembros expuestos a la luz de ',1,'http://www.animegroup.ru/cover/body%20transfer.jpg','thum/dadasss8.jpg',8,1,3,'Ova 1: http://www.mediafire.com/?esr9b9mezfv <br>\r\nOva 2: http://www.mediafire.com/?3emntgq2x4n','','ecm85',''),(29,'Boin Lecture','Daisuke es un nuevo profesor que ha ingresado en esta escuela. El dirige una clase en la que sus estudiantes practican su profesiÃ³n que van a seguir cuando ellos se gradÃºen, pero estas clases son un poco mÃ¡s que sÃ³lo lecciones.',1,'http://hentaienlinea.com/files/imagenes/boin-lecture.jpg','thum/xa1.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?6x2yjgxbzzo <br>\r\nOva 2: http://www.mediafire.com/?mymlpsm725s','','ecm85',''),(30,'Bondage 101','La historia trata de un profesor llamado Shimazu al cual le han encomendado la tarea de entrenar a tres chicas en el arte del buen sexo, creo que no hay mas que decir veanla y aver que les parce. Asi trancurrira esta historia con muchas escenas mas que candentes',1,'http://img200.imageshack.us/img200/9047/6414b4bb547fbe85thumb.jpg','thum/xa2.jpg',9,1,3,'Ova 1: http://www.mediafire.com/?mdzmddzyumy <br>\r\nOva 2: hhttp://www.mediafire.com/?wttmwvtin03','','ecm85',''),(31,'Bondage Game','Una pelicula de esclavas, en la que un rico millonario, les hace lo que quiere a sus esclavas desde cosas inimaginables hasta simplemente matarlas...',1,'http://1.bp.blogspot.com/_oSzJQ5QqsnA/S9GyilbT5_I/AAAAAAAAAIc/wZkuSRawHQA/s1600/2prvghz.jpg','thum/xa3.jpg',9,1,3,'Ova 1: http://www.mediafire.com/?mytoojdtuzy <br>\r\nOva 2: http://www.mediafire.com/?mwtea31wfot','','ecm85',''),(32,'Cambrian','El Dr.Yamagishi fue expulsado de una sociedad academica porque intento hacer un clon humano. Su siguiente experimento fue una nueva especie de humanos llamados Cambrian. El mismo se uso como chivo expiatorio. Sin embargo, el evoluciono en un tipo de especie humana diferente y empezo a esparcir sus genes atraves de la populacion cientifica, probando los efectos de cambrian en los ADN de las diferentes personas.',1,'http://cdn-www.mania.com/content_pics/000003/85/37/38f7b99346b1c1f7_thumb.jpg','thum/xa4.jpg',8,1,3,'Ova 1: http://www.mediafire.com/?mnyzmz0zzim <br>\r\nOva 2: http://www.mediafire.com/?wwz2xlh3zjo','','ecm85',''),(33,'Chikan Monogatari','Algunos dÃ­as es difÃ­cil llegar a trabajar temprano, especialmente para Hakushiki. Su estricto jefe masturba mujeres calientes y pesadas todas las maÃ±anas cuando ella piensa que la oficina todavÃ­a estÃ¡ vacÃ­a. Afortunadamente, Hakushiki tiene algunos planes para hacer de oficina mÃ¡s productiva. Akao es un poco afeminado, y todas las mujeres de selecciÃ³n en Ã©l. Normalmente esto quiere decir poner Ã©l a travÃ©s del escurridor y obligÃ¡ndolo a participar en cada acto sexual imaginable. Historias como Ã©stas ocurrir todos los dÃ­as, y estos son sÃ³lo el comienzo.',1,'http://www.absoluteanime.com/vanilla_series/chikan_monogatari.jpg','thum/xa5.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?m2tjmy04qi5 <br>\r\nOva 2: http://www.mediafire.com/?a3nntmmnn4k','','ecm85',''),(34,'City of Sin','Un rey bÃ¡rbaro secuestra a la bella reina Beatrice, mientras sus soldados causan estragos en el reino de Beatrice, dando a conocer una gran variedad de exÃ³ticos actos sexuales a las mujeres de la ciudad. Pronto, la arrogante reina y sus sirvientas rogaran por mas, y la ciudad se convertirÃ¡ en la capital carnal de la lujuria y la depravaciÃ³n',1,'http://img208.imageshack.us/img208/5753/719987225527.jpg','thum/xa6.jpg',6,1,3,'Ova 1: http://www.mediafire.com/?inyngouqhte','','ecm85','');

/*Table structure for table `doujin` */

DROP TABLE IF EXISTS `doujin`;

CREATE TABLE `doujin` (
  `id_dou` int(8) NOT NULL auto_increment,
  `titulo_d` varchar(50) default NULL,
  `des_d` varchar(400) default NULL,
  `contenido_d` varchar(600) default NULL,
  `img_d` varchar(90) default NULL,
  PRIMARY KEY  (`id_dou`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `doujin` */

insert  into `doujin`(`id_dou`,`titulo_d`,`des_d`,`contenido_d`,`img_d`) values (1,'shakira 23','hola como tas','dfsdfsdfsd','thum/'),(2,'trdtgd','gdfgdfgd','gdfgdfgdf','thum/'),(3,'trdtgd','gdfgdfgd','gdfgdfgdf','thum/'),(4,'fsdfsfs','fsdfsdfs','fsdfsdfdsfs','thum/'),(5,'dasda','sdasdsa','dasdasd','1194378487_f.jpg'),(6,'dasdas','dasdasd','sdasdsa','thum/'),(7,'fsdfsfsd','fsdfsdf','sdfsdfsdfs','thum/1194378487_f.jpg'),(8,'fsdgdfg','dfgdfgdfg','dfgdfgdfg','C:WINDOWSTempphp1276.tmp'),(9,'fdsfsd','fsdfsdfs','fsdfsdfsdf','thum/1194378487_f.jpg'),(10,'naruto','fsdfs','dfsdfsdfsd','thum/');

/*Table structure for table `idiomas` */

DROP TABLE IF EXISTS `idiomas`;

CREATE TABLE `idiomas` (
  `id_idioma` int(4) NOT NULL auto_increment,
  `idioma` varchar(30) character set utf8 default NULL,
  PRIMARY KEY  (`id_idioma`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `idiomas` */

insert  into `idiomas`(`id_idioma`,`idioma`) values (1,'Espa&ntilde;ol '),(2,'Espa&ntilde;ol Latino'),(3,'Sub Espa&ntilde;ol'),(4,'Sub Ingles'),(5,'Japon&eacute;s'),(6,'Otros');

/*Table structure for table `servidor` */

DROP TABLE IF EXISTS `servidor`;

CREATE TABLE `servidor` (
  `id_servidor` int(4) NOT NULL auto_increment,
  `name_s` varchar(40) default NULL,
  PRIMARY KEY  (`id_servidor`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `servidor` */

insert  into `servidor`(`id_servidor`,`name_s`) values (1,'Mediafire'),(2,'Megaupload'),(3,'Rapidshare'),(4,'Otro');

/*Table structure for table `suscritos` */

DROP TABLE IF EXISTS `suscritos`;

CREATE TABLE `suscritos` (
  `id_sus` int(8) NOT NULL auto_increment,
  `email` varchar(60) default NULL,
  PRIMARY KEY  (`id_sus`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `suscritos` */

insert  into `suscritos`(`id_sus`,`email`) values (1,'walter-.1@gmail.com'),(2,'walter-.1@gmail.com'),(3,'walter'),(4,'gbfdgd'),(5,'gbfdgd'),(6,'gdfgd'),(7,'hfghf'),(8,'walter-.1hotmail.com');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `idUser` int(4) NOT NULL auto_increment,
  `userPass` varchar(35) default NULL,
  PRIMARY KEY  (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`idUser`,`userPass`) values (1,'whalther12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
