<?php
    abstract class Abstracta{
        protected $nombre;
        protected $edad;
        abstract function competencia_digital($atrib1);
        abstract function calculo_trienios($atrib2);
        function __construct($nom, $e){
            $this -> nombre = $nom;
            $this -> edad = $e;
        }
    }
?>