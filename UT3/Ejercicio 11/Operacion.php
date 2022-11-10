<?php 
require_once("./validaciones.php");
    class Operacion{
        function __construct($op1, $op2, $signo){
            $this -> op1 = $op1;
            $this -> op2 = $op2;
            $this -> signo = $signo;
        }
        function calculo(){
            if(valida())
            switch ($this ->signo) {
                case "+":
                   
                    return $this ->op1 + $this ->op2;
                    break;
                case "-":
                  
                    return $this ->op1-$this ->op2;
                    break;
                case "*":
                    return $this ->op1 * $this ->op2;
                    break;
                case "/":
                    return $this ->op1 / $this ->op2;
                    break;
            }
        }
    }


?>