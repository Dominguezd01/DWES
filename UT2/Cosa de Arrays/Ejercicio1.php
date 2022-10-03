<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeros = [0,-5,4,-56,3];
        $cont = 0;
        for($i = 0;$i<=sizeof($numeros);$i++){

            if($numeros[$i] < 0 ){
                $cont ++;
            }
        }
        echo $cont;
    ?>
</body>
</html>