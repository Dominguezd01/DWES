<?php
function comprobar()
{
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && filter_var($_POST["num1"], FILTER_VALIDATE_INT) && filter_var($_POST["num2"], FILTER_VALIDATE_INT)) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operador = (string) $_POST["operador"];
        switch ($operador) {
            
            case "+":
                $resultado = $num1+$num2;
                return $resultado;
                break;
            case "-":
                echo "$num1", " - ", $num2, " = ", $num1 - $num2, "<br>";
                break;
            case "*":
                echo "$num1", " * ", $num2, " = ", $num1 * $num2, "<br>";
                break;
            case "/":
                echo "$num1", " / ", $num2, " = ", $num1 / $num2, "<br>";
                break;
        }
    } else {
        echo "Introduce un numero valido";
    }
}
