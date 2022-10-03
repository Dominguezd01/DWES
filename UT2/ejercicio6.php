<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
           $dinero=1234;
           echo "Dinero inicial: $dinero <br><br>";
   
           $cien=(int) ($dinero/100);
           $dinero=$dinero-($cien*100);
   
           $cincuenta=(int) ($dinero/50);
           $dinero=$dinero-($cincuenta*50);
   
           $veinte=(int) ($dinero/20);
           $dinero=$dinero-($veinte*20);
   
           $diez=(int) ($dinero/10);
           $dinero=$dinero-($diez*10);
   
           $cinco=(int) ($dinero/5);
           $dinero=$dinero-($cinco*5);
   
           $dos=(int) ($dinero/2);
           $dinero=$dinero-($dos*2);
   
           
           echo "Billetes de 100: $cien <br>";
           echo "Billetes de 50: $cincuenta <br>";
           echo "Billetes de 20: $veinte <br>";
           echo "Billetes de 10: $diez <br>";
           echo "Billetes de 5: $cinco <br>";
           echo "Monedas de 2: $dos <br>";
           echo "Monedas de 1: $dinero <br>";
    ?>
</body>
</html>