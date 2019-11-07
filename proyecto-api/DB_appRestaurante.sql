create database appRestaurante;

use appRestaurante ;

create table USUARIO(
id_usuario int auto_increment not null PRIMARY KEY,
usuario varchar(45) not null,
contrasena varchar(20) not null,
nombre varchar(45) not null,
apellido varchar(45),
estatus int not null
);

create table MESA(
id_mesa int auto_increment not null PRIMARY KEY,
numero int not null,
estatus int not null
);

create table COMANDA(
id_comanda int auto_increment not null PRIMARY KEY,
id_usuario int not null,
id_mesa int not null,
estatus int not null
);

create table TICKET(
id_ticket int auto_increment not null PRIMARY KEY,
subtotal float not null,
total float not null,
fecha timestamp not null,
id_comanda int not null 
);

create table PRODUCTO(
id_platillo int not null auto_increment PRIMARY KEY,
nombre varchar(45) not null,
descripcion varchar(45),
precio float,
estatus int,
tipo int 
);

create table COMANDA_PRODUCTO(
id_comanda_producto int not null auto_increment PRIMARY KEY,
producto_id_platillo int not null,
comanda_id_comanda int not null,
cantidad varchar(45)
);

