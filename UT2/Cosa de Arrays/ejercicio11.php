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
        $original = "dabale arroz a la zorra el abad";

        $array = str_split($original);
        
        $nuevoString = array_reverse($array).implode(" ", $array);

        if($nuevoString == $original){
            echo "Son iguales <br>";
            echo $original;
            echo $nuevoString;
        }else{
            echo "No son iguales <br>";
            echo $original;
            echo $nuevoString;
        }
    ?>
</body>
</html>