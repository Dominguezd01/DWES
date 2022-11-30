<?php
    session_start();

    $array = [
        1 =>"Miguel",
        2 => "Daniel", 
        3=> "Jose Francisco",
        4 => "Pepe", 
        5 =>"Manolo"];

    $_SESSION["array"] = $array;



?>

<a href="./terceraPag.php">Siguiente pagina</a>