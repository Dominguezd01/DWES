<?php
    function calcular_iva($importe, $iva = 21){
        $precio_con_iva = $importe +($importe * ($iva/100));

        echo "El precio <b>SIN IVA</b> es: $importe","<br>";
        echo "El precio <b>CON IVA</b> es: $precio_con_iva <br>";
    }

    calcular_iva(25,10);
?>