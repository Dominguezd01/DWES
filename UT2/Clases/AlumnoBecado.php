<?php
    require_once("./Alumno.php");
    class AlumnoBecado extends Alumno{
        private $importeBeca;
        function __construct($nombre, $e, $importe, $nMat)
        {
            parent::__construct($nombre, $e, $nMat);
            $this -> importeBeca = $importe;
        }

        function visualizarBecado()
        {
            parent::visualizar();
            echo "EL IMPORTE DE LA BECA ES: ",$this->importeBeca, "<br>";
        }
    }

?>