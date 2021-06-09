<?php
function sumItemArray($arr)
{
    $sum = 0;
    $count=0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i][$i];

    }
    for ($j = count($arr) - 1; $j >= 0; $j--) {
        $sum += $arr[$j][$count];
        $count++;
    }
    return $sum;
}

$arr1 = [
    [1, 2, 3, 4, 5],
    [1, 55, 3, 46, 5],
    [1, 2, 100, 4, 5],
    [1, 32, 3, 4, 5],
    [1, 2, 3, 4, 10]
];
echo sumItemArray($arr1);
?>