<?php
function diffDay(string $datestr1, string $datestr2){

    $d1 = new DateTime("$datestr1");
    $d2 = new DateTime("$datestr2");
    $diff= $d1->diff($d2);
    $dias = $diff->format('d');
    echo $d1->diff($d2)->format('%y,%m,%d dias');;
}

echo diffDay("2018/12/22","2017/12/24");
?>