<?php 

function binarySearch(array $arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($arr[$mid] == $target) {
            return $mid; // Elemento encontrado
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1; // Elemento no encontrado
}

// Ejemplo de uso
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$target = 5;
$result = binarySearch($numbers, $target);
echo $result === -1 ? "Elemento no encontrado" : "Elemento encontrado en el índice $result";
