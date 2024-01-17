<?php
// LƯU Ý: BINARY SEARCH CHỈ DÙNG CHO ARRAY ĐÃ ĐƯỢC SẮP SẾP
function binarySearch($array, $n) {
    $length = count($array);

    if ($length === 0) return false; 
    $low = 0; 
    $high = count($array) - 1; 
      
    while ($low <= $high) { 
        $mid = floor(($low + $high) / 2); 
   
        if($array[$mid] == $n) { 
            return $mid; 
        } 
  
        if ($n < $array[$mid]) { 
            $high = $mid -1; 
        } 
        else { 
            $low = $mid + 1; 
        } 
    } 
      
    return -1; 
}

$arr = array(1, 2, 4, 5, 7, 9);
echo binarySearch($arr, 5);
?>