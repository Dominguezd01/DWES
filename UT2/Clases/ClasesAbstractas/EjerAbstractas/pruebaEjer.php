<?php
    require_once("./abstractaJovenyAdulto.php");


    echo "----------", "JOVEN","----------<br>";

    $joven1 = new Joven("45", 18);

    var_dump($joven1);

    echo $joven1 -> ayudas()."<br>";

    echo Abstracta2::modificar_static(), "<br>";
    

?>