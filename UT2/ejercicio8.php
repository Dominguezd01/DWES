<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>
    <?php
        $colillasTotales=23;
        $cigarrillos=(int) ($colillasTotales/7);
        $colillasR=$colillasTotales-($cigarrillos*7);
        echo "colillas iniciales: $colillasTotales<br>";
        echo "cigarrillos: $cigarrillos<br>";
        echo "colillas restantes: $colillasR<br>";           
    ?>
</body>
</html>