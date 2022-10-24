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
        $cursos = [
            "DAW" => [18,19,20,22,13,20],
            "DAM" => [19,25,19,22,16,21],
            "ASIR" => [18,22,20,19,22,20],
        ];

        $menores18 = 0;
        $alums1822 = 0;
        $alumnsMayores22 = 0;

        foreach($cursos as $curso => $alumnos){
            foreach($alumnos as $edad){
                if($edad<18){
                    $menores18++;
                }else if($edad >= 18 && $edad <=22){
                    $alums1822++;
                }else if($edad > 22){
                    $alumnsMayores22++;
                }
            }
        }

        echo "Hay $menores18 alumnos menores de 18 años <br>";
        echo "Hay $alums1822 alumnos de entre 18 y 22 años <br>";
        echo "Hay $alumnsMayores22 alumnos mayores de 22 años <br>";

    ?>
</body>
</html>