SELECT * FROM categoria;
insert into categoria (nombre_categoria) values ("Tecnologia"); 
insert into categoria (nombre_categoria) values ("Mantenimiento");
insert into categoria (nombre_categoria) values ("Contable");
insert into categoria (nombre_categoria) values ("Asistencia");

use trabajosdb;
select * from contratador;
insert into contratador (usuario, contraseña_usuario, nombrec_usuario, correo_usuario) values ("anddiamo", "ADSasd464", "Jorge Lopez", "jlopez@gmail.com");
insert into contratador (usuario, contraseña_usuario, nombrec_usuario, correo_usuario) values ("rafato", "TERsdf546", "Rafael Torres", "rafa@gmail.com");
insert into contratador (usuario, contraseña_usuario, nombrec_usuario, correo_usuario) values ("fergo", "ETRogh489", "Fernando Gomez", "fgomez@gmail.com");

select * from valoracion;
insert into valoracion (puntaje, opinion) values (3, "trabajo cumplido");
insert into valoracion (puntaje, opinion) values (5, "buen trabajo");

select * from profesional;
insert into profesional (usuario, contraseña_usuario, nombrec_usuario, correo_usuario, telefono, edad, id_categoria, id_puntuacion, descripcion_profesional) values ("urzzard", "UEYasd456", "Manuel Cruz", "mcruz@gmail.com", 954622077, 22, 1, 2, "Realizo trabajos de programacion");