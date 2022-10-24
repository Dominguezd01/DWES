<?php

    class Alumno {
        const CICLO = "DAW";

        private $nom;

        private $edad;

        function constructAlumno($nombre, $edad){   
            $this ->nom=$nombre;

            $this -> edad=$edad; 
        }


        function __destruct(){
            echo $this -> nom, " ha sido destruido";
        }
    }


?>