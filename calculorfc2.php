<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php

$nom=$_POST['txtnom'];
$pat=$_POST['txtpat'];
$mat=$_POST['txtmat'];
$fec=$_POST['txtnac'];
$hom=$_POST['txtclave'];

$rfc=substr($pat,0,1);//substraer de la var pat, desde la posicion 0 1 catracter PASO1
$tam=strlen($pat); //variable tamaño para la var pat(strlen lo calcula)

for($i=1;$i<=$tam;$i++)  //sacar primera vocal paterno PASO2	
{
if(substr($pat,$i,1)=="A" or substr($pat,$i,1)=="E" or substr($pat,$i,1)=="I" or substr($pat,$i,1)=="O" or substr($pat,$i,1)=="U")
{
  $rfc=$rfc.substr($pat,$i,1);
  break; //para romper el ciclo
}
}

$rfc=$rfc.substr($mat,0,1);//primer letra del apell materno,desde la posicion 0 1 caracter PASO3
$rfc=$rfc.substr($nom,0,1);//primer letra del nombre PASO4	

$rfc=$rfc.substr($fec,8,2);//PASO5 2 ULTIMOS NUMEROS DEL AÑO
$rfc=$rfc.substr($fec,3,2);//2 NUMEROS DEL MES
$rfc=$rfc.substr($fec,0,2);//2 NUMEROS DEL DIA

$rfc=$rfc.$hom;//se agrega homoclave al final homoclave PASO6
//rfc=rcf+homoclave;
echo "Su rfc es= ".$rfc;
?>

</body>
</html>
