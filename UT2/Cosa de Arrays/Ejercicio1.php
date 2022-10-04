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
        }

        numerosNegativos($numeros);
        media($numeros);
        cuadradoDePosicion($numeros);
        arrayInverso($numeros);

    ?>
</body>
</html>