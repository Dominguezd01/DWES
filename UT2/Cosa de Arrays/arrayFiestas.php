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
        $ganadores = [
                    "2021" => ["Tenis" => "María Alonso", 
                                            "Ajedrez" => "Antonio López",
                                            "Ping Pong" => "Ana Benito", 
                                            "Mus"=> "Luis Martin"],
                    
                    "2022" =>[ "Tenis" => "Mario Alonso", 
                                        "Ajedrez" => "Antonia López",
                                        "Ping Pong" => "Andres Benito", 
                                        "Mus"=> "Luisa Martin"]
                    ];

        foreach($ganadores as $año => $competiciones){ //$competiciones es el array del array
            echo "En $año estos fueron los ganadores:<br>";
            echo"<br>";

            foreach($competiciones as $valor){
                echo "$valor <br>";
            }
            echo"<br>";
        }

        //opcionB 
        echo "OPCION B<br/>";
        foreach($ganadores as $año => $competiciones){
            echo "<p>EN $año los ganadores fueron:</p>";
            foreach($competiciones as $competicion => $ganador){
                echo "En el $competicion Ganó {$ganadores[$año][$competicion]}<br>" ;
            }
        }
        
    ?>
</body>
</html>