<?php
    ini_set("session.use_cookies",0);
    ini_set("session.use_only_cookies", 0);
    ini_set("session.use_trans_sid",0);
    require_once("./codigo_pag_580.php");
    //session_start();
        //require_once("./codigo_pag_580.php");
    //$_SESSION["nombre"] = "Miguel";

?>

<a href="<?=url("pagina2.php")?>">ENLACE</a>