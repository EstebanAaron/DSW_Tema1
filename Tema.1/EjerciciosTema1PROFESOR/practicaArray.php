<?php
$fruits = ['manzana', 'plátano', 'kiwi'];
print_r($fruits);
echo "Número de elementos " .count($fruits);
$fruits[] = "naranja";
//array_push($fruits, "naranja", "uva");
print_r($fruits);
$fruitsCopy = $fruits;
array_unshift($fruitsCopy, "sandía");
print_r($fruitsCopy);
print_r($fruits);
// No se modifica porque es una copia.

echo in_array("papaya", $fruits) ? "Está la fruta" : "No está la fruta";

$fruits[] = "papaya";

echo in_array("papaya", $fruits) ? "Está la fruta" : "No está la fruta";

$pos = array_search("manzana", $fruits);

echo "La posición de la manzana es $pos";

//unset($fruits[$pos]);
//$fruits=array_values($fruits);

$apple = array_splice($fruits, $pos, 1)[0] ;
print_r($fruits);
echo $apple;

//1 creas array
$fruits = ['manzana','platano','kiwi'];
//2 muestras array
print("1 y 2");
print("<p>");
print_r($fruits);
print("</p>");
//3 muestras longitud del array
print("3");
$cantidad = count($fruits);
print("<p>Cantidad de elementos: $cantidad</p>");
//4 añades al final del array
print("4");
array_push($fruits, 'naranja');
print("<p>");
print_r($fruits);
print("</p>");
//5 creas copia de Array
print("5 y 6");
$fruitsCopy = $fruits;
//6 muestras copia de Array
array_unshift($fruitsCopy, 'sandia');
print("<p>");
print_r($fruitsCopy);
print("</p>");
//7 mostramos q no se modifica el array de frutas original
print("7");
print("<p>");
print_r($fruits);
print("</p>");
//8 busca la fruta papaya
print("8");
print("<p>");
$result = array_search('papaya', $fruits);
if($result == false){
    print("No esta en el array de frutas");
}else{
    print("Esta en el array de frutas");
}
print("</p>");
//9 añadimos la fruta papaya
print("9");
array_push($fruits, 'papaya');
print("<p>");
$result = array_search('papaya', $fruits);
if($result == false){
    print("No esta en el array de frutas");
}else{
    print("Esta en el array de frutas");
}
print("</p>");
//10 buscamos la posicion de manzana
print("10");
print("<p>");
$result = array_search('manzana', $fruits);
if($result === false){
    print("No esta en el array de frutas");
}else{
    print("Su posicion es: ". array_search('manzana', $fruits));
}
print("</p>");
//11 Extrae manzana del array
print("11");
print("<p>");
$result = array_search('manzana', $fruits);
if($result === false){
    print("No esta en el array de frutas");
}else{
    //esto elimina el dato array
    unset($fruits[array_search('manzana', $fruits)]);
    //y esto reindexa el array para que esten bien los indices
    $fruits = array_values($fruits);
    print_r($fruits);  
}


//12 .Inserta manzana en la posición 2.
array_splice($fruits, 1, 0, $apple);
print_r($fruits);

//13 . Ordena en orden alfabético frutas y muestra en pantalla.
sort($fruits);
print_r($fruits);

//14. Invierte el orden del array.
$fruits = array_reverse($fruits);
print_r($fruits);

// 15. Obtén una fruta de forma aleatoria.
//$randomId = rand(0, count($fruits)-1);
//echo $fruits[$randomId];

echo $fruits[array_rand($fruits)];

// 16. Ordena de forma aleatoria todas las frutas
shuffle($fruits);
print_r($fruits);

// 17. Crea un array de verduras
$vegetables = ["berenjena", "zanahoría", "tomate", "pimiento"];
print_r($vegetables);

// 18. Une el array de frutas y verduras en un único array llamado vegetales.
$total = array_merge($fruits, $vegetables);
sort($total);
print_r($total);