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
        $dinero = 1234;
        $billetes = [
            100 => 0,
            50 => 0,
            20 => 0,
            10  => 0,
            5 => 0,
            2 => 0,
            1 => 0
        ];

           
        echo "$dinero<br/>";
        
        foreach($billetes as $tamaño =>$cant_billete){

            $billetes[$tamaño] = (int) ($dinero/$tamaño);

            echo "BILLETES DE ",$tamaño, " HAY: ", $billetes[$tamaño];
            echo "<br>";

            $dinero=$dinero-($billetes[$tamaño]*$tamaño);

        }                       




    ?>
</body>
</html>