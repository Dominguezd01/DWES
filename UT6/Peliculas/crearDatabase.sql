CREATE DATABASE peliculas;

use peliculas;

CREATE TABLE ACTOR (id_actor INT, nacionalidad VARCHAR(55), nombre_apellidos VARCHAR(100), sexo VARCHAR(1),
CONSTRAINT pk_actor PRIMARY KEY (id_actor)) ENGINE=”InnoDB”;

CREATE TABLE PELICULAS (titulo VARCHAR(45), genero VARCHAR(50), ano_prod INT(4),
CONSTRAINT pk_pelicula PRIMARY KEY (titulo)) ENGINE=”InnoDB”;  


CREATE TABLE INTERVENCIONES(id_actor INT, titulo VARCHAR(45),
CONSTRAINT pk_intervenciones PRIMARY KEY(id_actor, titulo),
CONSTRAINT fk_id_actor FOREIGN KEY (id_actor) REFERENCES ACTOR (id_actor),
CONSTRAINT fk_titulo FOREIGN KEY (titulo) REFERENCES PELICULAS (titulo)) ENGINE=”InnoDB”;

CREATE TABLE cine(id_cine VARCHAR(15),nombre_c varchar(30),ciudad_c varchar(30),CONSTRAINT pk_cine PRIMARY KEY (id_cine)) ENGINE=”InnoDB”;

 INSERT INTO cine
 VALUES
 ('CINE1','Odeon','Burgos'),
 ('CINE2','Van Golem','Burgos'),
 ('CINE3','CineSur','Sevilla'),
 ('CINE4','Capitol','Madrid'),
 ('CINE5','Conde Duque','Madrid');

INSERT INTO actor (id_actor, nacionalidad, nombre_apellidos, sexo) VALUES(00001, "Frances", "Jacqueline Bisset", "f")
INSERT INTO actor (id_actor, nacionalidad, nombre_apellidos, sexo) VALUES(00002, "Espanol", "Antonio Banderas", "m");
INSERT INTO actor (id_actor, nacionalidad, nombre_apellidos, sexo) VALUES(00003, "Espanol", "Belen Rueda", "f");
INSERT INTO actor (id_actor, nacionalidad, nombre_apellidos, sexo) VALUES(00004, "Estadounidense", "Brad Pitt", "m");
INSERT INTO actor (id_actor, nacionalidad, nombre_apellidos, sexo) VALUES(00005, "Estadounidense", "Laura Dern", "f");

INSERT INTO PELICULAS
VALUES
("Dolor y gloria", "drama", 2019),
("Erase una vez... Hollywood", "comedia", 2019),
("Historia de un matrimonio", "drama", 2019),
("La piel que habito", "drama", 2019);


INSERT INTO INTERVENCIONES
VALUES
(00002, "Dolor y gloria"),
(00004, "Erase una vez... Hollywood"),
(00005, "Historia de un matrimonio"),
(00002, "La piel que habito");



SELECT * FROM INTERVENCIONES WHERE genero="drama"




CREATE TABLE proyectar(
    titulo varchar(30),
    id_cine varchar(30),
    fecha_proy date
) ENGINE="InnoDb";



INSERT INTO proyectar VALUES
('Dolor y gloria', 'CINE1', '2019-11-15'),
('Dolor y gloria', 'CINE2', '2019-11-15'),
('Dolor y gloria', 'CINE3', '2019-11-15'),
('Dolor y gloria', 'CINE4', '2019-11-15'),
('Dolor y gloria', 'CINE5', '2019-11-15'),
('Erase una vez...Hollywood', 'CINE1', '2019-11-01'),
('Erase una vez...Hollywood', 'CINE3', '2019-11-01'),
('Erase una vez...Hollywood', 'CINE4', '2019-11-01'),
('Historia de un matrimonio', 'CINE3', '2019-10-15'),
('Historia de un matrimonio', 'CINE4', '2019-10-15'),
('La piel que habito', 'CINE1', '2010-10-01'),
('La piel que habito', 'CINE2', '2010-10-01'),
('La piel que habito', 'CINE3', '2010-10-01'),
('La piel que habito', 'CINE4', '2010-10-01'),
('La piel que habito', 'CINE5', '2010-10-01');