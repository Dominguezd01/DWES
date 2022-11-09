<?php
    
    if(isset($_POST["num"]) && filter_var($_POST["num"],FILTER_VALIDATE_INT)){
        for($i = 0; $i<=10; $i++){
            echo $_POST["num"]." X ". $i. " = ".$_POST["num"]* $i."<br>";
        }
    }else{
        echo "Introduce un numero valido";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="num">
        <input type="submit" name="enviado">
    </form>
</body>
</html>