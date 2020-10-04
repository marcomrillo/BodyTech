<?php
$operacion = $_POST["proced"];
echo " Su indice de masa corporal es : ";
echo $_POST["altura"] * $_POST["altura"] / $_POST["peso"] = $imc;
echo "usted pertenes al grupo";
switch ($operacion);
{
case"pesoinsuficiente";
if $imc = <18,5;
echo "Peso insificiente";
break;

case"normopeso";
if $imc = >18,5 <24,9;
echo "normopeso"
break; 

case"sobrepesoG1";
if $imc = >25 <26,9;
echo"sobrepeso grado 1";
break;

case"sobrepesoG2";
if $imc = >27 <29,9;
echo "sobrepeso grado 2 (PreObesidad)";
break;

case"obesidadtipo1";
if $imc = >30 <34,9;
echo "obesidad tipo 1";
break;

case "obesidadtipo2";
if $imc = >35 <39,9;
echo "obesidad tipo 2";
break;

case "obesidad morbida";
if $imc = >40 <49,9;
echo "obesidad morbida";
break;

case "obesidadextrema";
if $imc = >50;
echo "obesidad extrema";
break;
} 

?>