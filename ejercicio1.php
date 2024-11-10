<?php

// Ejercicio 1: Serie de Fibonacci
// Función para generar los primeros n términos de la serie Fibonacci
function generarFibonacci($n)
{
    // Inicializamos un arreglo con los dos primeros números de la serie: 0 y 1
    $fibonacci = [0, 1];

    // Si el número de términos solicitado es menor que 2, devolvemos solo los primeros elementos necesarios
    // Aquí usamos `array_slice` para tomar solo una parte del arreglo.
    // `array_slice($fibonacci, 0, $n)` toma:
    // - $fibonacci como el arreglo original
    // - 0 como el índice desde donde empezamos a tomar (el inicio del arreglo)
    // - $n como la cantidad de elementos que queremos
    if ($n < 2) {
        return array_slice($fibonacci, 0, $n);
    }

    // Usamos un bucle `for` para calcular los siguientes términos de la serie
    // Empezamos en 2 porque ya tenemos los dos primeros elementos en el arreglo
    for ($i = 2; $i < $n; $i++) {
        // Cada nuevo término es la suma de los dos términos anteriores
        // Lo añadimos al final del arreglo con `$fibonacci[] =`
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Devolvemos el arreglo completo de la serie de Fibonacci con los primeros $n términos
    return $fibonacci;
}

// Prueba de la función generarFibonacci
$n = 10; // Cambiar este valor para obtener más o menos términos
// `implode` convierte un arreglo en una cadena de texto
// - ', ' es lo que ponemos entre cada elemento (una coma y un espacio)
// - `implode(', ', $array)` combina todos los elementos del arreglo en una cadena separada por la coma
echo "Serie de Fibonacci de $n términos: " . implode(', ', generarFibonacci($n)) . "\n";

?>