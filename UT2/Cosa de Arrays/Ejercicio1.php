<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "----- Ejercicio 1 ----- <br>";
        $numeros = [2,-5,78,-56,3];
        
        function numerosNegativos($numeros){
            $cont = 0;
            for($i = 0;$i<sizeof($numeros);$i++){

                if($numeros[$i] < 0 ){
                    $cont ++;
                }
            }
            echo "Hay $cont valores negativos<br> ";
        }
        
        function media($numeros){
            $suma = 0;
            $media = 0;
            foreach($numeros as $valor){
                $suma += $valor;
                $media = $suma/sizeof($numeros);

            }
            echo "La media es: $media<br>";
        }

        function cuadradoDePosicion($numeros){
            $cuadrados = false;
            for($i=0; $i<sizeof($numeros);$i++){
                if($i**2 == $numeros[$i]){
                    echo "La poscion $i almacena un valor igual al cuadrado de si misma<br>";
                    $cuadrados = true;
                }
            }
            if(!$cuadrados){
                echo "Ningun valor tiene el cuadrado de su indice almacenado<br>";
            }
        }

        function arrayInverso($numeros){
            for($i = sizeof($numeros)-1;$i>=0;$i--){
                echo "$numeros[$i] ";
            } 
            echo "<br>";
        }
        
        function newArray($numeros){
            $newArray = [];


            for($i=0;$i<sizeof($numeros);$i++){
                
                $newArray[$i] = $numeros[$i]*2;
            }
            echo "El nuevo Array es: ";
            foreach($newArray as $key){
                echo "$key ";
            }
            echo "<br>";
        }


        function dobleMedia($numeros){
            $newArray = [];
            for($i = 0; $i<sizeof($numeros); $i++){
                $newArray[$i] = $numeros[$i]+2; 
            }
            $sum = 0;
            foreach($newArray as $key){
                $sum += $key;
            }
            echo "La media del nuevo array es: ", $sum/sizeof($newArray),"<br> ";
        }


        numerosNegativos($numeros);
        media($numeros);
        cuadradoDePosicion($numeros);
        arrayInverso($numeros);
        newArray($numeros);
        dobleMedia($numeros);

        echo "----- Ejercicio 2 ----- <br>";

        $horasLectivas = [
            "Desarrollo Entorno Servidor" => 9,
            "Desarrollo Entorno Cliente" => 8,
            "Despliegue de Aplicaciones Web" => 4,
            "Empresa e Iniciativa emprendedora" => 3,
            "Interfaces Web" => 6,
        ];
        
        function mostrarHoras($horasLectivas){
            foreach($horasLectivas as $key => $horas ){
                echo "<p>El numero de horas en  $key es: $horasLectivas[$key]";
            }
            echo "<br>";
        }
        mostrarHoras($horasLectivas);

        echo "----- Ejercicio 3 ----- <br>";

        $estacionesDelAño = [
            "Primavera" => 1,
            "Verano" => 123213,
            "Otoño" => 200,
            "Invierno" => 5,
        ];
        $estacionMenor = "";
        function menorDias($estacionesDelAño){
            $min =10000;
            foreach($estacionesDelAño as $estacion => $dias){
                if($min>$dias){
                    $min = $dias;
                    $estacionMenor = $estacion;
                }
            }   
            echo "<p>La estacion con menos dias es ",$estacionMenor, " con  $min</p>";
        }

        menorDias($estacionesDelAño);

        echo "----- Ejercicio 4 ----- <br>";

        $matriz = [[1,0,0,8],
                   [0,2,4,7],
                   [0,0,3,4]];
        
        function matrizIndetidad($matriz){
            
            for($i = 0; $i<sizeof($matriz);$i++){
                for($j = 0;$j<4;$j++){
                    echo $matriz[$i][$j];
                }
                echo "<br>";
            }
        }
        matrizIndetidad($matriz);

        function matrizSimetrica($matriz){
            $dimensiones = sizeof($matriz) ;
            $matrizSimetrica = true;
            for ($i=0; $i < $dimensiones ; $i++) {
                for ( $j=0 ; $j < $dimensiones ; $j ++ ) {
                    if ($matriz [ $i ] [ $j ] != $matriz [ $j ] [ $i ] ) {
                        $matrizSimetrica = false ;
                    }
                }
            }
            if ($matrizSimetrica == true ) {
                echo " Ser Simetrica " ;
            } else {
                echo " No ser Simetrica " ;
            }
        }

        matrizSimetrica($matriz)
        
            
                
    ?>
</body>
</html>