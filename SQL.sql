DROP DATABASE IF EXISTS cuenta;
CREATE database cuenta;
use cuenta;
create table CUENTA( 
ID_Cuenta INT AUTO_INCREMENT,
Nombre VARCHAR (15),
Gmail TEXT (25),
Contraseña VARCHAR(30),
PRIMARY KEY (ID_Cuenta)
);

INSERT INTO CUENTA(ID_Cuenta, Nombre, Gmail, Contraseña)
VALUES (1, "ZOE", "zcarvajaldiaz@gmail.com", 2068798), 
(2, "TRON", "tronsoftware@gmail.com", 2068),
(3, "RAFA", "trafasspelle@gmail.com", 123456);

DROP database IF EXISTS TROFEOS;
CREATE database trofeos;
use trofeos;
create table TROFEOS(
    ID_brawler INT AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (800),
    img_top VARCHAR (100),
    img_down VARCHAR (100),
    primary key (ID_brawler)
);

DROP database IF EXISTS superraro;
CREATE database superraro;
use superraro;
create table superraro(
    ID_brawler INT AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (800),
    img_top VARCHAR (100),
    img_down VARCHAR (100),
    primary key (ID_brawler)
);

DROP database IF EXISTS raro;
CREATE database raro;
use raro;
create table raro(
    ID_brawler INT AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (800),
    img_top VARCHAR (100),
    img_down VARCHAR (100),
    primary key (ID_brawler)
);

DROP database IF EXISTS mitico;
CREATE database mitico;
use mitico;
create table mitico(
    ID_brawler INT AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (800),
    img_top VARCHAR (100),
    img_down VARCHAR (100),
    primary key (ID_brawler)
);

DROP database IF EXISTS epico;
CREATE database epico;
use epico;
create table epico(
    ID_brawler INT AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (800),
    img_top VARCHAR (100),
    img_down VARCHAR (100),
    primary key (ID_brawler)
);
DROP database IF EXISTS legendario;
CREATE database legendario;
use legendario;
create table legendario(
    ID_brawler INT AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (800),
    img_top VARCHAR (100),
    img_down VARCHAR (100),
    primary key (ID_brawler)
);

DROP database IF EXISTS cromatico;
CREATE database cromatico;
use cromatico;
create table cromatico(
    ID_brawler INT AUTO_INCREMENT,
    nombre VARCHAR (50),
    descripcion VARCHAR (800),
    img_top VARCHAR (100),
    img_down VARCHAR (100),
    primary key (ID_brawler)
);