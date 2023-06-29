DROP DATABASE IF EXISTS cuenta;
CREATE database cuenta;
use cuenta;
create table CUENTA( 
ID_Cuenta VARCHAR(100), 
Nombre VARCHAR (15),
Gmail TEXT (25),
Contraseña VARCHAR(30),
PRIMARY KEY (ID_Cuenta)
);

INSERT INTO CUENTA(ID_Cuenta, Nombre, Gmail, Contraseña)
VALUES (1, "ZOE", "zcarvajaldiaz@gmail.com", 2068798), 
(2, "TRON", "tronsoftware@gmail.com", 2068),
(3, "RAFA", "trafasspelle@gmail.com", 123456);