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

(00002, "Dolor y gloria");

INSERT INTO INTERVENCIONES
VALUES
(00004, "Erase una vez... Hollywood"),
(00005, "Historia de un matrimonio"),
(00002, "La piel que habito");

