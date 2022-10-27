<?php
    require_once("./Alumno.php");
    class AlumnoBecado extends Alumno{
        private $importeBeca;
        function __construct($nombre, $e,$nMat, $importe,$notaPrimero, $notaSegundo)
        {
            parent::__construct($nombre, $e, $nMat,$notaPrimero, $notaSegundo);
            $this -> importeBeca = $importe;
        }

        function visualizarBecado()
        {
            parent::visualizar();
            echo "EL IMPORTE DE LA BECA ES: ",(float)$this->importeBeca, "<br>";
        }
    }

?>