create database itec;

create table alumnos (
	alumnos_ID INT AUTO_INCREMENT PRIMARY KEY,
    DNI CHAR(9) NOT NULL UNIQUE
    Nombre varchar(20),
    Apellido1 varchar(20),
    Apellido2 varchar(20)
);

create table profesor (
	profesor_ID INT AUTO_INCREMENT PRIMARY KEY,
    DNI CHAR(9) NOT NULL UNIQUE
    Nombre varchar(20),
    Apellido1 varchar(20),
    Apellido2 varchar(20)
);

create table asignatura (
	asignatura_ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre varchar(20)
);
