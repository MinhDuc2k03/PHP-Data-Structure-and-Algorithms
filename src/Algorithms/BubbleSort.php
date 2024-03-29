<?php
namespace Dell\PhpDataStructureAndAlgorithms\Algorithms;

function bubbleSort($array) {
    $length = count($array);

    for ($i = $length; $i > 0; $i--) {
        $swapped = true;

        for ($j = 0; $j < $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
                $swapped = false;
            }
        }

        if ($swapped) {
            break;
        }
    }

    return $array;
}

$sortedArr = bubbleSort(array(6, 2, 1, 5, 7, 9));
print_r($sortedArr);
?>