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
        $num = 445;
        if($num > 100 && $num<= 999){
            $cociente = (int) ($num/100);
            $resto=$num%10;
            if($cociente == $resto){
                echo "$num es capicua";
            }else{
                echo "$num no es capicua";
            }
        }else{
            echo "$num no es un numero de tres cifras";
        }
    ?>
</body>
</html>