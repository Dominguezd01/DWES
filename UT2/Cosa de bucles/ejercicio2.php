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
        $num_filas = 10;
        $hastags = " ";
        for($i = 0; $i<=$num_filas;$i++){
            echo "<p>$hastags</p>";
            $hastags .= " # ";
        }
    ?>
</body>
</html>