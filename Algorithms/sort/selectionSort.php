<?php
function selectionSort($array) {
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        $min_i = $i;

        //lặp sao cho tới cuối array và có min_i với index của giá trị lớn nhất
        for ($j = $i + 1; $j < $length; $j++) {
          if ($array[$j] < $array[$min_i]) {
            $min_i = $j;
          }
        }

        //đổi chỗ
        if ($i != $min_i) {
          $temp = $array[$i];
          $array[$i] = $array[$min_i];
          $array[$min_i] = $temp;
        }
      }
      return $array;
}

$sortedArr = selectionSort(array(6, 2, 1, 5, 7, 9));
print_r($sortedArr);
?>