/**/
INSERT INTO `Carrera` (`idCarrera`,`Carrera`) VALUES (NULL,'Informática');
INSERT INTO `Carrera` (`idCarrera`,`Carrera`) VALUES (NULL,'Agronomíia');
INSERT INTO `Carrera` (`idCarrera`,`Carrera`) VALUES (NULL,'Administración');

/**/
INSERT INTO `Tipo_proyecto` (`idTipo_proyecto`,`Nombre`) VALUES (NULL,'Servicio social');

/**/
INSERT INTO `Control` (`idControl`,`Avance`) VALUES (1,0);

/**/
INSERT INTO `Proyectos` (`idProyectos`,`Titulo`,`Descripcion`,`Ruta`,`idCarrera`,`idTipo_proyecto`,`Status`,`idControl`) VALUES (NULL,'Proyecto1','Servira para prueba','Desconocida',1,1,'Pendiente',1);

/**/
INSERT INTO `Status_profesor` (`idStatus_profesor`,`idProyectos`,`Status_profesor`) VALUES (NULL,1,'Disponible');

/**/
INSERT INTO `Usuarios` (`idUsuarios`,`Nombre`,`Apellidos`,`email`,`Rol`,`Password`) VALUES (NULL,'Moises','Vega','Moi@hot',1,'1234');
INSERT INTO `Usuarios` (`idUsuarios`,`Nombre`,`Apellidos`,`email`,`Rol`,`Password`) VALUES (NULL,'Lor','Hernandez','Lor@hot',2,'1234');
INSERT INTO `Usuarios` (`idUsuarios`,`Nombre`,`Apellidos`,`email`,`Rol`,`Password`) VALUES (NULL,'Isabel','Gomez','Golosa69@hot',3,'1234');
INSERT INTO `Usuarios` (`idUsuarios`,`Nombre`,`Apellidos`,`email`,`Rol`,`Password`) VALUES (NULL,'Alberto','Angels','Pro1@hot',3,'1234');

/**/
INSERT INTO `Proyecto-usuarios` (`idProyecto-usuarios`,`idProyectos`,`idUsuarios`) VALUES (NULL,1,1);
INSERT INTO `Proyecto-usuarios` (`idProyecto-usuarios`,`idProyectos`,`idUsuarios`) VALUES (NULL,1,2);
INSERT INTO `Proyecto-usuarios` (`idProyecto-usuarios`,`idProyectos`,`idUsuarios`) VALUES (NULL,1,3);
