<?php
function mergeSort($arr) {
    if (count($arr) < 2) {
        return $arr;
    }

    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    return merge(mergeSort($left), mergeSort($right));
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if (strtolower($left[0]) < strtolower($right[0])) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

// Ejemplo de lista
$words = ["banana", "apple", "cherry", "date"];
echo "Lista antes de ordenar: ";
print_r($words);
echo "\n";

$words = mergeSort($words);
echo "Lista después de ordenar: ";
print_r($words);
?>
