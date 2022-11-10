
 <?php
/*
$_POST["num1"]) && isset($_POST["num2"]) &&
filter_var($_POST["num1"], FILTER_VALIDATE_INT)
&& filter_var($_POST["num2"], FILTER_VALIDATE_INT).
 */
function valida()
{
    if(isset($_POST["op1"]) && isset($_POST["op2"]) && filter_var($_POST["op1"], FILTER_VALIDATE_INT) && filter_var($_POST["op2"], FILTER_VALIDATE_INT)){
        return true;
    }
}
?>