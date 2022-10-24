<?php
/*
    Diseña  una función  para que  genere  un  número  aleatorio  entre  1  y  6  
    simulando  el funcionamiento  de  un  dado. La  función  deberá  incluir  las  
    sentencias  echo  adecuada  para informar   del   resultado   obtenido;  
    por   ejemplo,   si   se   obtiene   6   mostrar   el   mensaje “¡Enhorabuena!” y 
    si no “Inténtelo de nuevo junto al valor generado”. 
        a)Diseña una función de usuario convencional.
        b)Utiliza una variable de función.
*/

    function randomNumConvencional(){ 
        $num = rand(1, 6);

        if($num == 6){
            echo "Enhorabuena ✔✔<br>El valor obtenido es $num";
        }else{
            echo "Inténtelo de nuevo ❌❌<br>El numero era $num";
        }

    }

    //Funcion variable
    $juego = 'randomNumConvencional';

    //Funcion anonima
    $funcion_aleatoria = function(){
        $num = rand(1, 6);

        if($num == 6){
            echo "Enhorabuena ✔✔<br>El valor obtenido es $num";
        }else{
            echo "Inténtelo de nuevo ❌❌<br>El numero era $num";
        }
        $num = rand(1, 6);
    };
    function jugar($funcion_aleatoria){
        $funcion_aleatoria();
    }

?>