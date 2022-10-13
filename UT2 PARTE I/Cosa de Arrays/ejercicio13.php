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

$covid19 = ["Burgos" => [5010, 433],

    "Soria" => [3473, 31],

    "Leon" => [4898, 344],

    "Valladolid" => [11564, 89],

    "Salamanca" => [6533, 443],

    "Palencia" => [3898, 213],

    "Ávila" => [4516, 198],

    "Zamora" => [4325, 321],

    "Segovia" => [5867, 501],

];

foreach($covid19 as $provincia => $enfermos){
  
        echo "$enfermos";
    
}
?>
</body>
</html>