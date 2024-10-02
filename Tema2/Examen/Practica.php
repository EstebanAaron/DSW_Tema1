

<?php
//Devuelve la posicion en la que se encuentra la palabra.
echo strpos("Hello world!", "world");


//Cuenta el numero de palabras separadas con espacio
echo str_word_count("Hello world!");

//Cuenta el numero de caracteres
echo strlen("Hello world!");


//Convertir a mayusculas
$x = "Hello World!";
echo strtoupper($x);

//Convertir a minusculas
$x = "Hello World!";
echo strtolower($x);

//REPLACE
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);


//REVERSE
$x = "Hello World!";
echo strrev($x);


//SPLIT
$x = "Hello World!";
$y = explode(" ", $x);


//SUB STRING
$x = "Hello World!";
echo substr($x, 6, 5);


//MENOR Y MAYOR DE UN ARRAY
echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));


//REDONDEA
echo(round(0.60));

//RANDOM
echo(rand(10, 100));


/* Ejemplo 4 de foreach: arrays multidimensionales */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

//volver a ordenar
array_values($a);
?> 


