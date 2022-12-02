<?php

session_start();


echo $_SESSION["array"][$_SESSION["num"]]." ".$_SESSION["num"];
session_destroy();


?>