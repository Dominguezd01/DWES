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
        $num_filas = 4;
        $cf = 1;
        $num = 1;
        while($cf <=$num_filas){
            $cc =1;
            while($cc<=$cf){
                echo "$num ";
                $cc++;
                $num++;
            }
            echo "<br/>";
            $cf++;
        }
    ?> 
</body>
</html>