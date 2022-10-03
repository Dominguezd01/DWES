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
        $suma= 0;
        $num = 3;
        for($i = 0;$i<=100; $i++ ){
            if($i != $num){
                $suma = $suma + $i;
                 
            }else{
                $num += 10;
            }
            
        }
        echo $suma;
    ?>
</body>
</html>