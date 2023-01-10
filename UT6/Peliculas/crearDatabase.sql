CREATE DATABASE peliculas;

use peliculas;

CREATE TABLE ACTOR (id_actor INT, nacionalidad VARCHAR(55), nombre_apellidos VARCHAR(100), sexo VARCHAR(1),
CONSTRAINT pk_actor PRIMARY KEY (id_actor)) ENGINE=”InnoDB”;

CREATE TABLE PELICULAS (titulo VARCHAR(45), genero VARCHAR(50), ano_prod INT(4),
CONSTRAINT pk_pelicula PRIMARY KEY (titulo)) ENGINE=”InnoDB”;  


CREATE TABLE INTERVENCIONES(
    id_actor INT, 
titulo VARCHAR(45),
CONSTRAINT fk_id_actor FOREIGN KEY (id_actor) REFERENCES ACTOR (id_actor),
CONSTRAINT fk_titulo FOREIGN KEY (titulo) REFERENCES PELICULAS (titulo)) ENGINE=”InnoDB”;