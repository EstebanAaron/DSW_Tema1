<?php
function modify(array $arraynums ,int $num) : array {
    $result = array_search( $num, $arraynums);
if($result === false){
   $arraynums[]=$num;
   return $arraynums;
}else{
    //esto elimina el dato array
    unset($arraynums[array_search($num, $arraynums)]);
    //y esto reindexa el array para que esten bien los indices
    $arraynums = array_values($arraynums);
    return $arraynums;
}
}
$result=modify([1, 2, 3, 4, 5],3);
$result2=modify([1, 2, 4, 5], 3);



print_r($result);
print_r($result2);