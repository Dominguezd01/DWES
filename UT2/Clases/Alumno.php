<?php
    class Alumno {
        const CICLO="DAW";
        private $nom;
        private $edad;
        private $numMatricula;
        //Modificaciones Ejer 3


        const TASA = 2;

        function __construct ($nombre, $e,$nMatricula){
            $this ->nom=$nombre;
            $this ->edad=$e;
            $this -> numMatricula = $nMatricula;
 
        }



        /*
        function __destruct(){
           echo "$this->nom ha sido destruido";
        }
        */
        function __get($atrib){
            return $this->$atrib;
        }

        function __set($atrib,$valor){
            $this-> $atrib =$valor;
        }

        function __toString(){
            return "ALUMNO: ".$this->nom."<br>"."EDAD: ".$this->edad."<br>";
        }
        function compEdad (){
            if($this -> edad <=18){
                return true;
            }else{
                return false;
            }
        }
        //Si el alumno es <18 importe == 0 si no 
        //importe == TASA
        function importeMatricula (){
            if($this -> compEdad()){
                return 0;
            }else{
               return self::TASA;
            }
            
        }

        function visualizar (){
            echo "NOMBRE: ",$this -> nom, "<br>";
            echo "EDAD: ",$this -> edad, "<br>";
            echo "NUM MATRICULA: ",$this -> numMatricula, "<br>";
        }
    }
?>