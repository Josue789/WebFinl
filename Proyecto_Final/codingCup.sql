-- drop database codingCup;
CREATE DATABASE codingCup;
USE codingCup;
CREATE TABLE Usuario (
    id_Usuario INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    contrasenia VARCHAR(16) NOT NULL
);

CREATE TABLE Coach (
    id_Coach INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    contrasenia VARCHAR(16) NOT NULL,
    institucion VARCHAR(100) NOT NULL
);

CREATE TABLE Equipo (
    id_Equipo INT PRIMARY KEY AUTO_INCREMENT,
    nombreEquipo VARCHAR(50) NOT NULL UNIQUE,
    estudiante1 VARCHAR(100) NOT NULL,
    estudiante2 VARCHAR(100) NOT NULL,
    estudiante3 VARCHAR(100) NOT NULL,
    foto BLOB NOT NULL
);

CREATE TABLE Concurso (
    id_Concurso INT PRIMARY KEY AUTO_INCREMENT,
    fechaInicio DATE NOT NULL,
    fechaFin DATE NOT NULL,
    nombreConcurso VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    estatus boolean NOT NULL
);