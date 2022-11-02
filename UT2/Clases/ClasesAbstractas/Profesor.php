<?php
    require_once("./Abstracta.php");
    class Profesor extends Abstracta{
        private $tipo;

        function __construct($nom, $e, $t)
        {
            parent::__construct($nom, $e);
            $this -> tipo = $t;
        }

        function competencia_digital($atrib1)
        {
            if($atrib1 == "informatica"){
                return "Alta";
            }else{
                return "Baja";
            }
        }

        function calculo_trienios($atrib2)
        {
            return (int) $atrib2/3;
        }
    }


?>