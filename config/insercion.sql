CREATE TABLE asignaturas(
    idAsignatura tinyint PRIMARY KEY AUTO_INCREMENT,
    nombre char(5),
    codhex char(7)
);

INSERT INTO asignaturas(nombre, codhex) VALUES
    ('IPP2', '#d1e7dd'),
    ('DWESV', '#f8d7da'),
    ('PIMOD', '#e2d9f3'),
    ('DWENC', '#dbf3d9'),
    ('SASP', '#f3d9e6'),
    ('DASP', '#d9f3e0'),
    ('TUTO', '#cbcccd'),
    ('DEAPW', '#ffe69c'),
    ('OPT', '#94ffbf');

CREATE TABLE profesores(
    idProfesor tinyint PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(20);
);

INSERT INTO profesores(nombre) VALUES
    ('Isa'), ('Alberto'), ('Ernesto'), ('Luis'), ('Santiago');

CREATE TABLE clases(
    idClase tinyint PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(10)
);

INSERT INTO clases(nombre) VALUES ('2DAW');

CREATE TABLE asignaturaClases (
    idAsignatura TINYINT,
    idClase TINYINT,
    PRIMARY KEY (idAsignatura, idClase),
    FOREIGN KEY (idAsignatura) REFERENCES asignaturas(idAsignatura),
    FOREIGN KEY (idClase) REFERENCES clases(idClase)
);

INSERT INTO asignaturaClases VALUES
    (1, 1), (2, 1), (3, 1), (4, 1), (5, 1), (6, 1), (7, 1), (8, 1);

CREATE TABLE asignaturaProfesores (
    idAsignatura TINYINT,
    idProfesor TINYINT,
    PRIMARY KEY (idAsignatura, idProfesor),
    FOREIGN KEY (idAsignatura) REFERENCES asignaturas(idAsignatura),
    FOREIGN KEY (idProfesor) REFERENCES profesores(idProfesor)
);

INSERT INTO asignaturaProfesores VALUES
    (1, 4), (2, 1), (3, 1), (3, 3), (4, 2), (5, 5), (6, 2), (7, 2), (8, 3), (9, 1), (9, 2), (9, 4);


CREATE TABLE horario (
    dia TINYINT CHECK (dia BETWEEN 1 AND 5),
    hora TINYINT CHECK (hora BETWEEN 1 AND 7),
    idClase TINYINT,
    idAsignatura TINYINT,
    idProfesor TINYINT,
    PRIMARY KEY (dia, hora, idClase),
    FOREIGN KEY (idClase) REFERENCES clases(idClase),
    FOREIGN KEY (idAsignatura) REFERENCES asignaturas(idAsignatura),
    FOREIGN KEY (idProfesor) REFERENCES profesores(idProfesor)
);

CREATE TABLE roles(
    idRol tinyint primary key AUTO_INCREMENT,
    nombre varchar(10)
);

INSERT INTO roles (nombre) VALUES
    ('admin'), ('usuario');

CREATE TABLE usuarios (
    idUsuario tinyint primary key AUTO_INCREMENT,
    correo varchar(50) UNIQUE,
    pw char(10),
    idRol tinyint,
    FOREIGN KEY (idRol) REFERENCES roles(idRol)
);

INSERT INTO usuarios (correo, pw, idRol) VALUES
    ("admin@mail.com", "admin", 1), ("usuario@mail.com", "usuario", 2);