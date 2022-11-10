<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title> Formularios </title>
</Head><body>
<h3> Ejercicio 9. Con validación y orientación a objetos<br>
Los errores se almacenan en un array </h3>
<h3><br>
<?php
require_once("./valores.inc");
require_once ("./validacion.php"); //incluye la validación
require_once ("./clase_Operacion.php"); //incluye el tratamiento
//RECOGIDA DE  DATOS Y VALIDACIÓN
if (isset($_POST['enviar']))
	{
	valida_operando1($ope1,$errores['errorope1']);
	valida_operando2($ope2,$errores['errorope2']);
	valida_operador($operador,$errores['erroroperador']);
	if ((!empty($ope1))&&(!empty($ope2))&&(!empty($operador)))
	{
		$ob_operacion= new Operacion($ope1,$ope2,$operador);
		echo $ob_operacion->calculo();	
		exit;
	}
	}
?>
<!--FORMULARIO -->
<form action="" target="_nblank" method="post">
	Teclee un operando: <input type="text" name="ope1" value="<?php echo "$ope1";?>">
		<span><font color="red"> * obligatorio. <?php echo $errores['errorope1'];?></font></span><br><br>
	Teclee un segundo operando:	<input type="text" name="ope2" value="<?php echo "$ope2";?>">
		<span><font color="red"> * obligatorio. <?php echo $errores['errorope2'];?></font></span><br><br>
	Teclee el operador: <input type="text" name="operador" value="<?php echo "$operador";?>">
		<span><font color="red"> * obligatorio. <?php echo $errores['erroroperador'];?></font></span><br><br>
	<input type="submit" name="enviar">
</form>
</body></html>