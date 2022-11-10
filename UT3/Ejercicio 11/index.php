<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <input type="text" name="op1" placeholder="Operando 1">
        <input type="text" name="op2" placeholder="Operando 2">
        <input type="text" name="operador" placeholder="Operador">
        <input type="submit" name="enviar">
    </form>
</body>
</html>
<?php
    require_once("./Operacion.php");
    if(isset($_POST["enviar"])){
        $operacion1 = new Operacion($_POST["op1"], $_POST["op2"], $_POST["operador"]);
        echo $_POST["op1"]." ". $_POST["operador"]." ".$_POST["op2"]. " = ".$operacion1 -> calculo();
    }else{

    }

?>