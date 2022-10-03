<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    $pieda=1;
    $papel=2;
    $tijeras=3;
    $jugador1=random_int(1,3);
    $jugador2=random_int(1,3);
    switch($jugador1){
        case 1;
        echo "Jugador 1: piedra<br>";
        break;
        case 2;
        echo "Jugador 1: papel<br>";
        break;
        case 3;
        echo "Jugador 1: tijeras<br>";
        break;
    }
    switch($jugador2){
        case 1;
        echo "Jugador 2: piedra<br>";
        break;
        case 2;
        echo "Jugador 2: papel<br>";
        break;
        case 3;
        echo "Jugador 2: tijeras<br>";
        break;
    }

    if($jugador1==$jugador2){
        echo "Empate";
    }
    if($jugador1==1 && $jugador2==2){
        echo "Gana jugador 2";
    }
    if($jugador1==1 && $jugador2==3){
        echo "Gana jugador 1";
    }
    if($jugador1==2 && $jugador2==1){
        echo "Gana jugador 1";
    }
    if($jugador1==2 && $jugador2==3){
        echo "Gana jugador 2";
    }
    if($jugador1==3 && $jugador2==1){
        echo "Gana jugador 2";
    }
    if($jugador1==3 && $jugador2==2){
        echo "Gana jugador 1";
    }
    ?>
</body>
</html>