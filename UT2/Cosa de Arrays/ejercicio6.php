<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP 
        $animales = [
            "Domesticos" => ["Perro", "Gato"],
            "Salvajes" => ["Tigre", "León", "Ballena"]
        ];    

        var_dump($animales);

        echo "<br>";

        foreach($animales as $tipo => $animal){
            foreach($animales[$tipo] as $animal){
                echo "$animal ";
            }
            
        }
    ?>
</body>
</html>