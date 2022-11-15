<?php
require_once("./datos_Miguel.inc");
function validaAula($aula)
{
    if(is_numeric($aula)){
        if($aula == 11 ||$aula == 12 || $aula == 13 ||$aula == 14 ||$aula == 25 ||$aula == 34){
            return 1;
        }else{
            return 0;
        }
    }else{
        return 2;
    }

}

function numLenguajes($arrayLenguajes){
    $suma= 0;
    $php= 0;
    $java= 0;
    $html= 0;
    foreach($arrayLenguajes as $modulo => $curso){
        foreach($curso as $numCurso => $lenguaje){
            if($lenguaje == "JAVA" && $java == 0){
                $java++;
                $suma++;
            }else if($lenguaje == "PHP" && $php == 0){
                $php++;
                $suma++;
            }else if($lenguaje == "HTML" && $html == 0){
                $html++;
                $suma++;
            }

        }
    }
    return $suma;
}

function tecnologiasModulo($arraylenguajes, $modulo, $curso){
    if($arraylenguajes[$modulo][$curso] == ""){
        return "No hay tecnología asociada";
    }else{
        return $arraylenguajes[$modulo][$curso];
    }
 }
?>
