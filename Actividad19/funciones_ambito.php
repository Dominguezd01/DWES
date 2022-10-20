<?php

    function ambito1(){
        $var2 = $var1;
        echo "Pasando por el ambito1(): ", var_dump($var2);"<br>";
    }

    function ambito2(){
        global $var1;

        $var2 = $var1;
        echo "Pasando por ambito2(): ", var_dump($var2), "<br>";
    }

    function ambito3(){
        global $var1;
        $var1++;
        echo "Pasado por ambito3(): $var1 <br>";
    }

    function ambito4(){
        global $var1;

        static $var3 = 1;

        $var2 = $var1 + $var3;
        $var3+=10;
        echo "Pasando por el ambito4(): $var2 ", $var3,"<br>";
    }


    function ambito5($p){
        $p++;

        return $p;
    }

    function ambito6(){
        global $var1;
        $GLOBALS["var2"] = $var1+10;
    }
    function ambito7(&$p){
        $p++;
    }
    
    function ambito8(){
        $var1=VALOR*2;
        define('OTRO_VALOR', -50);
        return $var1;
    }

?>