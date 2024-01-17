<?php
function insertionSort($array) {
    $length = count($array);
    
    for ($i = 1; $i < $length; $i++) {
        $value = $array[$i];
        $j = $i-1;

		while($j >= 0 && $array[$j] > $value) {
			$array[$j + 1] = $array[$j];
			$j--;
		}
		$array[$j + 1] = $value;
    }

    return $array;
}

$sortedArr = insertionSort(array(6, 2, 1, 5, 7, 9));
print_r($sortedArr);
?>