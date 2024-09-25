<?php
printf ("El numero PI con dos decimales : %.2f", M_PI);
$edad =18;
$nombre= "Manuel";
$frase= sprintf("$nombre tiene $edad años.");
print "<p> $frase</p>";
$javascript ="Javascript";
$php ="PHP";
$java = "Java";
printf("<pre>[%20s] <p>[%20s]</p>[%20s]</pre>",$javascript , $php, $java);

$dia=1;
$mes=8;
$año=2024;
$fecha= sprintf("%d/%d/%d", $dia, $mes, $año);
print "<p> $fecha</p>";
$num=3.3;
$decimal= $num -intval($num);
$num2 = $decimal*10;
print $num2;
printf("<p>%b,%b</p>",$num, $num2);
?>