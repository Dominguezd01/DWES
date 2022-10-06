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
        
        require_once("./datos.inc");

        for($i = 0;$i< DIMENSIONES["FILAS"];$i++){
            for($j = 0; $j< DIMENSIONES["COLUMNAS"];$j++){
                if($i == $j){
                    $matriz[$i][$j] = 1;
                }else{
                    $matriz[$i][$j] = 0;
                }
            }
        }
        
        for($i = 0;$i< DIMENSIONES["FILAS"];$i++){
            for($j = 0; $j< DIMENSIONES["COLUMNAS"];$j++){

                echo "{$matriz[$i][$j]} ";                 
            }
            echo "<br>";
        }
    ?> 
</body>
</html>