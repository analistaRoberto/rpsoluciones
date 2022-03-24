create database BDD_robertopena;
use BDD_robertopena;

create table Usuarios(
idUsuario int auto_increment primary key,
 rut varchar(15),
 clave varchar(20),
 idOrigen int,
 nivelUsu int
);

create table Origenes(
idOrigen int auto_increment primary key,
origen varchar(40)
);

create table DatosPersonales(
rut varchar(15) primary key,
nombre varchar(50),
apellidoPaterno varchar(50), 
apellidoMaterno varchar(50),
domicilio varchar(70),
sexo varchar(50),
fechaNacimiento varchar(10)
);

create table Transacciones(
idTransaccion int auto_increment primary key,
rut varchar(15),
idOrigen int
);

/**/
insert into Usuarios(rut,clave,idOrigen,nivelUsu)
select '12345678','123',1,2 union
select '87654321','123',1,1 union


/*select nivelUsu from Usuarios where rut=12345 and clave=123*/
select nivelUsu from Usuarios where rut='$usua' and clave='$clave';
