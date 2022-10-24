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
        $ganadores= ["Tenis" => "María Alonso", 
                    "Ajedrez" => "Antonio López",
                    "Ping Pong" => "Ana Benito", 
                    "Mus"=> "Luis Martin"];

        foreach($ganadores as $valor){
            echo "$valor<br>";
        }

         foreach($ganadores as $clave => $valor){
            echo "El gandor de $clave es $valor<br>";
         }
    ?>
</body>
</html>