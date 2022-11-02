<?php
require_once("./Abstracta.php");
class Alumno extends Abstracta
{

    public function __construct($nom, $e){
        parent::__construct($nom, $e);
    }

    public function competencia_digital($atrib1){
        if ($atrib1 == 2) {
            return "Alta";
        }else{
            return "Baja";
        }
    }

    public function calculo_trienios($atrib2){
        return "No corresponde para el alumno";
    }
}
