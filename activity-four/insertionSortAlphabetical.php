<?php
function insertionSort($arr) {
    for ($i = 1; $i < count($arr); $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        // Mover los elementos de $arr[0..i-1] que son mayores que $key
        while ($j >= 0 && strtolower($arr[$j]) > strtolower($key)) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Ejemplo de lista
$names = ["Carlos", "Ana", "Juan", "Maria"];
echo "Lista antes de ordenar: ";
print_r($names);
echo "\n";

$names = insertionSort($names);
echo "Lista después de ordenar: ";
print_r($names);
?>
