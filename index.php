<?php
function sumItemArray($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i][$i];
    }
    for ($j=count($arr)-1;$j>=0;$j--){
        $sum+=$arr[$j][$j];
    }
    return $sum;
}

$arr1 = [
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5]
];
echo sumItemArray($arr1);
?>