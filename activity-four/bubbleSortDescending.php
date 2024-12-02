<?php
function bubbleSortDescending($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-$i-1; $j++) {
            if ($arr[$j] < $arr[$j+1]) {
                // Intercambiar elementos
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

// Ejemplo de lista
$list = [5, 2, 9, -1, 7, 2, 5];
echo "Lista antes de ordenar: ";
print_r($list);
echo "\n";

$list = bubbleSortDescending($list);
echo "Lista después de ordenar: ";
print_r($list);
?>
