<?php
    require_once("./Alumno.php");

    class Primero extends Alumno{
        private $notaMediaPrimero;


        function __construct($nombre, $e,$nMatricula, $notaMediaPrimero)
        {
            parent::__construct($nombre, $e,$nMatricula);
            $this ->notaMediaPrimero = $notaMediaPrimero;
        } 

        function pasaCursoPrimero(){
            if($this ->notaMediaPrimero >=5){
                return true;
            }else{
                return false; 
            }
        }
    }
?>