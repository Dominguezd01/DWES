<?php
    session_start();
    $num = rand(1, 5);
    $_SESSION ["num"] = $num;
    
?>

<a href="./segundaPag.php">Siguiente pagina</a>