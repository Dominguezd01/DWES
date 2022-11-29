<?php
    class miExcepcion extends Exception{
        function mensaje(){
            return "Email no valido". parent::getMessage();
        }
    }

?>