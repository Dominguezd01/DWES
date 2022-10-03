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

    $a = 453;
    $b = 456;
    $c = 12;

    if ($a > $b && $a > $c) {
        echo $a;
    } else if ($b > $a && $b > $c) {
        echo $b;
    } else if ($c > $a && $c > $b) {
        echo $c;
    }
    ?>
</body>

</html>