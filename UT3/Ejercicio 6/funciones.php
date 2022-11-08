<?php
function valida_dato()
{
    return preg_match("/^[a-z]{3,}/i", $_POST['color']);
}

function tratamiento(){
    $ErrorDato = "";

    if (!empty($_POST['color'])){
        if (valida_dato()){
            if($_POST['color'] == "blanco"){
                echo "Acertaste";
                exit("<br>Fin de la app");
            }else{
                echo "Fallaste";
            }
        }else {
            $ErrorDato = "Error. El dato no es un string";
            echo $ErrorDato;
        } 
    }
}
?>