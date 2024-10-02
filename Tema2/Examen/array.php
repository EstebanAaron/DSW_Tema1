<?php

$array = [1, 2, 2, 3, 3, 3];
$unique = array_unique($array);
// $unique es [1, 2, 3]


$array = ['a' => 1, 'b' => 2, 'c' => 3];
$values = array_values($array);
// $values es [1, 2, 3]



$array = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($array);
// $keys es ['a', 'b', 'c']


$array = [1, 2, 3];
$reversed = array_reverse($array);
// $reversed es [3, 2, 1]


$array = ['a', 'b', 'c'];
$key = array_search('b', $array);
// $key es 1


$array = [1, 2, 3, 4, 5];
array_splice($array, 2, 2, [6, 7]);
// $array ahora es [1, 2, 6, 7, 5]


$array = [1, 2, 3, 4, 5];
$slice = array_slice($array, 1, 3);
// $slice es [2, 3, 4]


$array1 = [1, 2];
$array2 = [3, 4];
$result = array_merge($array1, $array2);
// $result es [1, 2, 3, 4]


$array = [1, 2, 3];
$last = array_pop($array);
// $last es 3, $array ahora es [1, 2]


$array = [1, 2, 3];
array_push($array, 4, 5);
// $array ahora es [1, 2, 3, 4, 5]
