<?php
function linearSearch($array, $n) {
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        if ($n == $array[$i]) {
            return $i;
        }
    }
    return -1;
}

$arr = array(6, 2, 1, 5, 7, 9);
echo linearSearch($arr, 5);
?>