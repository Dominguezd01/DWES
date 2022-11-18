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
    //no catcheable
    $b = 0;
        try{
            if($b == 0){
                throw new Exception("Constante redefinida");
                echo 4/$b;
            }
 
            
        }catch(Exception $e){
            echo $e->getMessage();
        }
    ?>
</body>
</html>