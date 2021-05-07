create database trabajosdb;
use trabajosdb;

drop database trabajosdb;

create table contratador(
id_usuario int not null primary key auto_increment,
usuario varchar(40) not null,
contraseña_usuario varchar(20) not null,
nombrec_usuario varchar(80) not null,
correo_usuario varchar(80) not null
);

create table profesional(
id_profesional int not null primary key auto_increment,
usuario varchar(40) not null,
contraseña_usuario varchar(20) not null,
nombrec_usuario varchar(80) not null,
correo_usuario varchar(80) not null,
telefono int not null,
edad int not null,
id_categoria int not null,
descripcion_profesional varchar(200) not null
);

create table categoria(
id_categoria int not null primary key auto_increment,
nombre_categoria varchar(60)
);

create table val_pro(
id_valoracion int not null primary key auto_increment,
puntaje int not null,
opinion varchar(200) not null,
id_pro int not null,
id_cont int not null
);

create table publicacion(
id_publi int not null primary key auto_increment,
titulo_publi varchar(120) not null,
des_publi varchar(200) not null,
id_profe int not null
);

create table val_publi(
id_val_publi int not null primary key auto_increment,
puntaje int not null,
id_publi int not null,
id_contra int not null
);