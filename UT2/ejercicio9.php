<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    $n1=345;
    $n2=234;
    $n3=23;
    $cant=1;
    $max=$n1;
    echo "Valores: $n1, $n2 y $n3<br>"; 
    if($max<$n2){
        $max=$n2;
    }else if($max=$n2){
        $cant+=1;
    }
    if($max<$n3){
        $max=$n3;
    }else if($max=$n3){
        $cant+=1;
    }
    echo "El número más alto es $max y está $cant veces";
    ?>
</body>
</html>