<?php
    require_once("./Alumno.php");

    class Segundo extends Alumno{
        private $notaMediaSegundo;
        private $califFct;
        private $califProy;

        function __construct($nombre, $e,$nMatricula, $notaMediaSegundo, $califFct,$califProy)
        {
            parent::__construct($nombre, $e,$nMatricula);
            $this ->notaMediaSegundo = $notaMediaSegundo;
            $this -> califFct = $califFct;
            $this -> califProy = $califProy;
        } 

        function pasaCursoSegundo($superaPrimero){
            if($this ->notaMediaSegundo >=5 && $this -> califFct == true 
            && $this ->califProy == true && $superaPrimero == true){
                return true;
            }else{
                return false; 
            }
        }
    }
?>