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
        date_default_timezone_set("Europe/Madrid"); 
        echo "Fecha actual: ", date("D-M-Y H:i:s"),"<br>";
        echo "Fecha actual: ", date("D-M-Y H:i:s",time()),"<br>";
        $segundos = mktime(0,0,0,1,2,1970);
        echo $segundos;
        var_dump(checkdate(20,13,2030)) ;
        
        $fecha = getdate(time());
        foreach($fecha as $clave  => $valor){
            echo "$clave => $valor <br>";
        }
    ?>
</body>
</html>