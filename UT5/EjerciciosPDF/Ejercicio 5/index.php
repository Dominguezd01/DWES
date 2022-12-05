<?php
function opcion($opcion)
{
    switch ($opcion) {
        case "ASIR":
            header("location: ./asir.php");
            break;
        case "DAW":
            header("location: ./daw.php");
            break;
        case "DAM":
            header("location: ./dam.php");
            break;
        default:
            header("location: index.php");
            break;
    }
}
if (!isset($_POST["submit"])) {
    echo "Introduce una opcion";
} else {
    if (isset($_POST["grado"])) {
        var_dump($_POST["grado"]);
        setcookie("grado", $_POST["grado"], time() + 25);
        opcion($_COOKIE["grado"]);
    }

}

if (isset($_COOKIE["grado"])) {
    opcion($_COOKIE["grado"]);
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
    <form action="" method="POST">
        <input type="radio" name="grado" value="ASIR">ASIR<br>
        <input type="radio" name="grado" value="DAW">DAW<br>
        <input type="radio" name="grado" value="DAM">DAM<br>
        <input type="submit" name="submit">
    </form>

    
</body>
</html>
