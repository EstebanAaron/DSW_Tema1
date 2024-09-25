<?php
$start ="Hola";
$end ="adiós.";
$heredoc =<<<ULTIMA
"$start" podemos emplear la sintaxis "heredocs" 
para añadir 'comillas simple' y "comilla doble" en una cadena 
'$end'
ULTIMA;
print "<pre>" . $heredoc . "</pre>";
?>