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



    $numeros = [2,4,5,1,3];
/*
    if(in_array("3",$numeros, TRUE )){ //TRUE --> Tiene que coincidir valor y tipo
        echo "Valor encontrado";
    }else{
        echo "Valor no encontrado";
    }
*/
/*
    sort($numeros);
    for($i = 0; $i<count($numeros); $i++){
        echo "$numeros[$i] ";
    }
    echo "<br>";
    rsort($numeros);
    for($i = 0; $i<count($numeros); $i++){
        echo "$numeros[$i] ";
    }
    echo "<br>";
    $modulosSegundo = [
        "DWES" => 9,
        "DWEC" => 8,
        "DI" => 5,
        "DA" => 4,
        "EIE" => 3,
        "FCT" => 6 
    ];

    foreach($modulosSegundo as $clave => $valor){
        echo "$clave tiene $valor horas<br>";
    }
    echo "<br>";
    krsort($modulosSegundo);

    foreach($modulosSegundo as $clave => $valor){
       echo "$clave tiene $valor horas<br>";
    }
*/
/*
    $numeros2 = [[2,3,1],[1,4,5],[7,10,20]];
    foreach($numeros2 as list($n1,$n2,$n3)){
        echo "$n1 ", "$n2 ", "$n3 ","<br>";
    }

    $colores = "Rojo-verde-azul-amarillo";

    $array = explode("-",$colores );

    foreach($array as $color){
        echo "$color -->";
    }
    */
    $persona = ["Pedro", "Gonzalez", "Lopez"];

    $personaString = implode(" ", $persona);
    echo $personaString;
?>
</body>
</html>