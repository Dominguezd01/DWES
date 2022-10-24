<?php
    $f_tope_soli = "13-10-2022";
    $a_fecha = explode("-",$f_tope_soli);
    $f_unix = mktime(0,0,0, $a_fecha[1],
                            $a_fecha[0],
                            $a_fecha[2]);
    $dif = time()-$f_unix;

    if($dif <0){
        echo "Expiro el plazo";
    }else{
        echo "estas en plazo";
    }
?> 