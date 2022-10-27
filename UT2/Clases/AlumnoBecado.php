<?php
    require_once("./Alumno.php");
    class AlumnoBecado extends Alumno{
        private $importeBeca;
        function __construct($nombre, $e,$nMat, $importe)
        {
            parent::__construct($nombre, $e, $nMat,$importe);
            $this -> importeBeca = $importe;
        }

        function visualizarBecado()
        {
            parent::visualizar();
            echo "EL IMPORTE DE LA BECA ES: ",(float)$this->importeBeca, "<br>";
        }
    }

?>