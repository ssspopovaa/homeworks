<?php

// previous version
//function bubbleSort(array &$array)
//{
//    $maxIndex = count($array) - 1;
//    $needToRepeat = false;
//
//    $i = 0;
//    while ($i < $maxIndex) {
//        if ($array[$i] > $array[$i + 1]) {
//            $higherValue = $array[$i + 1];
//            $array[$i + 1] = $array[$i];
//            $array[$i] = $higherValue;
//            $needToRepeat = true;
//        }
//
//        $i++;
//    }
//
//    if ($needToRepeat) {
//        bubbleSort($array);
//    } else {
//        return $array;
//    }
//}

function bubbleSort(array $array, $n = null)
{
    if ($n === null) {
        $n = count($array);
    }

    if ($n == 1) {
        return $array;
    }

    for ($i = 0; $i < $n - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $temp;
        }
    }

    return bubbleSort($array, $n - 1);
}

$array = [
    9, 3, 6, 5, 7, 1, 4, 8, 0, 2, 2, 2, 3, 86, 35, 44, 1, 1, 1
];

print_r($array);
echo PHP_EOL;
print_r(bubbleSort($array));
