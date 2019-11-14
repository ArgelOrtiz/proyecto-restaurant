create database appRestaurante;

use appRestaurante ;

create table USUARIO(
id_usuario int auto_increment not null PRIMARY KEY,
usuario varchar(45) not null,
contrasena varchar(20) not null,
nombre varchar(45) not null,
apellido varchar(45),
estatus int not null,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
deleted_at DATETIME NULL
);

create table MESA(
id_mesa int auto_increment not null PRIMARY KEY,
numero int not null,
estatus int not null,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
deleted_at DATETIME NULL
);

create table COMANDA(
id_comanda int auto_increment not null PRIMARY KEY,
id_usuario int not null,
id_mesa int not null,
estatus int not null,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
deleted_at DATETIME NULL
);

create table TICKET(
id_ticket int auto_increment not null PRIMARY KEY,
subtotal float not null,
total float not null,
fecha timestamp not null,
id_comanda int not null,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
deleted_at DATETIME NULL
);

create table PRODUCTO(
id_platillo int not null auto_increment PRIMARY KEY,
nombre varchar(45) not null,
descripcion varchar(45),
precio float,
estatus int,
tipo int,
img_url varchar(200) NULL,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
deleted_at DATETIME NULL
);

create table COMANDA_PRODUCTO(
id_comanda_producto int not null auto_increment PRIMARY KEY,
producto_id_platillo int not null,
comanda_id_comanda int not null,
cantidad varchar(45),
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
deleted_at DATETIME NULL
);

-- tabla para las sesiones de usuarios

CREATE TABLE `usuario_session` ( 
`id_session` INT(11) NOT NULL , `id_usuario` INT(11) NOT NULL , 
`expired_date` DATETIME NOT NULL ,
`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
`updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
`deleted_at` DATETIME NULL 
PRIMARY KEY (`id_session`)) ENGINE = InnoDB;
