<?php
    abstract class Abstracta2 {
        const VALOR1 = "FIJO";
        static private $valor2 = 1;
        abstract protected function ayudas();
        abstract protected function mensaje();
        static function modificar_static(){
            self::$valor2++;
            return self::$valor2;
        }

        function otros(){
            return "Sois todos muy buena gente";
        }
    }

    /*
        FIN CLASE ABSTRACTA
    */

    class Joven extends Abstracta2{
        private $id_joven;
        private $edad;

        function __construct($id, $e){
            $this -> id_joven = $id;
            $this -> edad = $e;
        }

        function ayudas(){
            if($this -> edad ==18){
                return "400 €";
            }
        }

        function mensaje(){
            return "Disfruta la fruta, Juver sin azúcar";
        }
    }

    class Adulto extends Abstracta2{
        private $nombre;
        private $profesion;
        private $empresa;

        function __construct($n,$prof,$emp){
            $this -> nombre = $n;
            $this -> profesion = $prof;
            $this -> empresa = $emp;
        }

        function ayudas()
        {
            return "No te corresponden ayudas, crack";
        }

        function mensaje()
        {
            if($this -> profesion == "profesor" && $this ->empresa = "CIFP"){
                return "Disfruta la vida, peor el Juver sin azuacar que estas mayor";
            }
        }
    }
?>