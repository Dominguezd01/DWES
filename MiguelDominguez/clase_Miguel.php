<?php
    class Tecnologia{
        private $aula;
        private $modulo;
        private $curso;
        function __construct($aula, $modulo, $curso)
        {
            $this -> aula = $aula;
            $this -> modulo = $modulo;
            $this -> curso = $curso;
        }

        function __toString()
        {
            return "La selección realizada es: <br>"."Aula: ".$this -> aula."<br>Módulo: ".$this -> modulo."<br>Curso: ". $this -> curso;
        }
    }

?>