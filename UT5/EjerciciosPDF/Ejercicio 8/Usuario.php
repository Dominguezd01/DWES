<?php
    class Usuario{
        private $userName;
        private $password;

        function __construct($userName,$password)
        {
            $this-> userName = $userName;
            $this-> password = $password;
        }

        function __get($atributo)
        {
            return $this -> $atributo;
        }
    }

?>