<?php 
if(isset($_POST["submit"])){
    setcookie("grado", "", time() + 25);
    header("location: ./index.php");
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
    <img src="./ASIR.png" alt="">
    <form action="" method="POST">

        <button onclick=" " name="submit">
        Volver a inicio
        </button>
    </form>
</body>
</html>