<?php 

function quickSort(array $arr) {
    if (count($arr) < 2) {
        return $arr;
    }

    // Elegir el pivote
    $pivot = $arr[0];
    $left = $right = [];

    // Partición
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    // Recursión
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

// Ejemplo de uso
$numbers = [3, 6, 8, 10, 1, 2, 1];
$sortedNumbers = quickSort($numbers);
print_r($sortedNumbers);
